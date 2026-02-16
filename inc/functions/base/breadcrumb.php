<?php
if ( ! defined('ABSPATH') ) exit;

// ==============================
// Breadcrumb (パンくずリスト）
// ==============================
if ( ! function_exists('theme_breadcrumb') ) {
    function theme_breadcrumb($args = []) {

        if (is_front_page()) return;

        $defaults = [
        'home_label' => 'トップページ',
        'home_url'   => home_url('/'),
        'sep'        => '',
        'wrap_tag'   => 'nav',
        'wrap_class' => 'breadcrumb',
        'list_class' => 'breadcrumb__list',
        'item_class' => 'breadcrumb__item',
        'link_class' => 'breadcrumb__link',
        'current_class' => 'is-current',
        // タクソノミーの優先順（CPTに対して「どのタクソノミーをパンくずに使うか」）
        'tax_priority' => [
            'news'   => ['news_cat', 'category'],
            'works'  => ['works_cat', 'category'],
            'column' => ['column_cat', 'category'],
            'post'   => ['category'],
        ],
        ];
        $a = array_merge($defaults, (array)$args);

        $items = [];

        // HOME
        $items[] = [
        'label' => $a['home_label'],
        'url'   => $a['home_url'],
        'current' => false,
        ];

        // よく使う: CPTアーカイブリンク
        $push_post_type_archive = function($post_type) use (&$items) {
        $obj = get_post_type_object($post_type);
        if (!$obj) return;
        $url = get_post_type_archive_link($post_type);
        if ($url) {
            $items[] = [
            'label' => $obj->labels->name,
            'url' => $url,
            'current' => false,
            ];
        }
        };

        // よく使う: 親ページ階層
        $push_page_parents = function($post_id) use (&$items) {
        $parents = [];
        $p = wp_get_post_parent_id($post_id);
        while ($p) {
            $parents[] = $p;
            $p = wp_get_post_parent_id($p);
        }
        $parents = array_reverse($parents);
        foreach ($parents as $pid) {
            $items[] = [
            'label' => get_the_title($pid),
            'url' => get_permalink($pid),
            'current' => false,
            ];
        }
        };

        // よく使う: ターム階層（親→子）
        $push_term_ancestors = function($term) use (&$items) {
        if (!$term || is_wp_error($term)) return;

        // 祖先（親→子）
        $ancestors = array_reverse(get_ancestors($term->term_id, $term->taxonomy));
        foreach ($ancestors as $aid) {
            $t = get_term($aid, $term->taxonomy);
            if ($t && !is_wp_error($t)) {
            $items[] = [
                'label' => $t->name,
                'url'   => get_term_link($t),
                'current' => false,
            ];
            }
        }

        // 自分（ターム）
        $items[] = [
            'label' => $term->name,
            'url'   => get_term_link($term),
            'current' => false,
        ];
        };

        // ここから条件分岐
        if (is_home()) {
        // 投稿一覧（設定 > 表示設定で「投稿ページ」指定してる場合）
        $items[] = [
            'label' => get_the_title(get_option('page_for_posts')),
            'url' => '',
            'current' => true,
        ];
        }
        elseif (is_singular('page')) {
        $post_id = get_queried_object_id();
        $push_page_parents($post_id);
        $items[] = [
            'label' => get_the_title($post_id),
            'url' => '',
            'current' => true,
        ];
        }
        elseif (is_singular()) {
        $post_id = get_queried_object_id();
        $pt = get_post_type($post_id);

        // CPTならアーカイブを挟む（postは入れないことが多いので除外）
        if ($pt && $pt !== 'post') {
            $push_post_type_archive($pt);
        } elseif ($pt === 'post') {
            // 投稿は「投稿ページ」があればそれを挟む
            $posts_page = (int)get_option('page_for_posts');
            if ($posts_page) {
            $items[] = [
                'label' => get_the_title($posts_page),
                'url' => get_permalink($posts_page),
                'current' => false,
            ];
            }
        }

        // タクソノミー（優先順で最初に見つかったターム1つを使う）
        $taxes = $a['tax_priority'][$pt] ?? [];
        $picked_term = null;
        foreach ($taxes as $tax) {
            $terms = get_the_terms($post_id, $tax);
            if ($terms && !is_wp_error($terms)) {
            // 子がある/階層が深いものを優先したい場合はここでソートも可能
            $picked_term = $terms[0];
            break;
            }
        }
        if ($picked_term) {
            $push_term_ancestors($picked_term);
        }

        // 現在ページ（記事タイトル）
        $items[] = [
            'label' => get_the_title($post_id),
            'url' => '',
            'current' => true,
        ];
        }
        elseif (is_post_type_archive()) {
        $pt = get_query_var('post_type');
        if (is_array($pt)) $pt = $pt[0];
        $obj = get_post_type_object($pt);
        $items[] = [
            'label' => $obj ? $obj->labels->name : post_type_archive_title('', false),
            'url' => '',
            'current' => true,
        ];
        }
        elseif (is_tax() || is_category() || is_tag()) {
        $term = get_queried_object();

        // タクソノミーが CPT に紐づく場合、アーカイブを挟みたいならここで判定
        // 例: news_cat => news のアーカイブを挟む
        $map = [
            'news_cat'   => 'news',
            'works_cat'  => 'works',
            'column_cat' => 'column',
        ];
        if (!empty($term->taxonomy) && isset($map[$term->taxonomy])) {
            $push_post_type_archive($map[$term->taxonomy]);
        }

        // ターム階層 → 現在
        $push_term_ancestors($term);
        // 最後の要素を current にする（push_term_ancestors は term 自体も追加してるため）
        $items[count($items)-1]['url'] = '';
        $items[count($items)-1]['current'] = true;
        }
        elseif (is_date()) {
        $items[] = [
            'label' => get_the_archive_title(),
            'url' => '',
            'current' => true,
        ];
        }
        elseif (is_author()) {
        $items[] = [
            'label' => get_the_archive_title(),
            'url' => '',
            'current' => true,
        ];
        }
        elseif (is_search()) {
        $items[] = [
            'label' => '検索結果',
            'url' => '',
            'current' => true,
        ];
        }
        elseif (is_404()) {
        $items[] = [
            'label' => '404 Not Found',
            'url' => '',
            'current' => true,
        ];
        }
        else {
        $items[] = [
            'label' => get_the_archive_title(),
            'url' => '',
            'current' => true,
        ];
        }

        // レンダリング
        $wrap_tag = tag_escape($a['wrap_tag']);
        $wrap_class = esc_attr($a['wrap_class']);
        $list_class = esc_attr($a['list_class']);
        $item_class = esc_attr($a['item_class']);
        $link_class = esc_attr($a['link_class']);
        $current_class = esc_attr($a['current_class']);

        echo '<' . $wrap_tag . ' class="' . $wrap_class . '" aria-label="breadcrumb">';
        echo '<ul class="' . $list_class . '">';

        $last_index = count($items) - 1;
        foreach ($items as $i => $it) {
        $is_current = !empty($it['current']) || ($i === $last_index && empty($it['url']));
        $label = esc_html($it['label']);
        $url = $it['url'];

        echo '<li class="' . $item_class . ($is_current ? ' ' . $current_class : '') . '">';
        if (!$is_current && !empty($url)) {
            echo '<a class="' . $link_class . '" href="' . esc_url($url) . '">' . $label . '</a>';
        } else {
            echo '<span class="' . $link_class . '">' . $label . '</span>';
        }
        echo '</li>';
        }

        echo '</ul>';
        echo '</' . $wrap_tag . '>';
    }
}

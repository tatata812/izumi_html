<?php
if ( ! defined('ABSPATH') ) exit;

// ==============================
// すべての自動更新を無効化（コア・プラグイン・テーマ）
// ==============================
add_filter('automatic_updater_disabled', '__return_true');

// ==============================
// セキュリティ対策
// ==============================

// WordPressバージョン非表示
remove_action('wp_head', 'wp_generator');

// XML-RPC 無効
add_filter('xmlrpc_enabled', '__return_false');

// ==============================
// 初期設定
// ==============================
// アイキャッチの有効化
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
});

// CPTの投稿名（スラッグ名）をランダム数値に変換
add_filter('wp_insert_post_data', function ($data, $postarr) {
    // 対象のカスタム投稿タイプ一覧
    $target_post_types = ['works', 'news', 'column'];
    // 対象外の投稿タイプはそのまま返す
    if (!in_array($data['post_type'], $target_post_types, true)) {
        return $data;
    }
    // 新規作成時 or スラッグ未指定時のみ実行
    if (empty($postarr['post_name'])) {
        do {
            // 10000〜99999 のランダム数値
            $random_slug = (string) rand(10000, 99999);
            // 同一CPT内での重複チェック
            $exists = get_page_by_path(
                $random_slug,
                OBJECT,
                $data['post_type']
            );
        } while ($exists);
        $data['post_name'] = $random_slug;
    }
    return $data;
}, 10, 2);

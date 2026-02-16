<?php
if ( ! defined('ABSPATH') ) exit;

// ==============================
// ダッシュボードの不要ウィジェットを非表示（安全度高）
// ==============================
add_action('wp_dashboard_setup', function () { 
    // WordPressニュース
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    // クイックドラフト
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    // 最近の下書き
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    // コメント
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
});

// ==============================
// デフォルト投稿（post）を管理画面から非表示にする
// ==============================
add_action('admin_menu', function () {
    remove_menu_page('edit.php');
}, 999);

// 上部管理バーの「新規 > 投稿」を消す
add_action('admin_bar_menu', function ($wp_admin_bar) {
    $wp_admin_bar->remove_node('new-post');
}, 999);

// ==============================
// コメントを管理画面から非表示にする
// ==============================
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
}, 999);
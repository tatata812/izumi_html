<?php

// 直接アクセス防止
if (!defined('ABSPATH')) {
    exit;
}

// ==============================
// 管理画面
// ============================== 
require_once get_template_directory() . '/inc/functions/admin/admin.php';
require_once get_template_directory() . '/inc/functions/admin/login.php';

// ==============================
// 基本設定
// ============================== 
require_once get_template_directory() . '/inc/functions/base/base.php';
require_once get_template_directory() . '/inc/functions/base/breadcrumb.php';
require_once get_template_directory() . '/inc/functions/base/news.php';
require_once get_template_directory() . '/inc/functions/base/column.php';

// ==============================
// プラグイン
// ==============================
require_once get_template_directory() . '/inc/functions/plugins/mw-wp-form.php';

// ==============================
// プロジェクト（独自設定）
// ============================== 
// require_once get_template_directory() . '/inc/projects/xxx.php';
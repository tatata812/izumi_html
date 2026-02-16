<?php

add_action('wp_enqueue_scripts', function () {

// ==============================
// yubinbango（住所自動入力）
// ============================== 
wp_enqueue_script(
    'yubinbango',
    'https://yubinbango.github.io/yubinbango/yubinbango.js',
    [],
    null,
    true
);

// MW WP Form のformに h-adr を付ける（jQuery不要の素直な書き方）
$inline = <<<JS
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.mw_wp_form form').forEach(function (form) {
    form.classList.add('h-adr');
    });
});
JS;

// yubinbango より後に実行したいので、このハンドルに紐付け
wp_add_inline_script('yubinbango', $inline, 'after');
});

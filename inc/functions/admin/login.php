<?php

// ==============================
// ログイン画面にオリジナルロゴを挿入する
// ==============================
add_action('login_enqueue_scripts', function () {
    ?>
    <style>
        #login h1 a {
            width: 320px;
            height: 80px;
            background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/base/logo-login.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }
    </style>
    <?php
});

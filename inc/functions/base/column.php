<?php

add_action('pre_get_posts', function ($q) {
    if (is_admin() || !$q->is_main_query()) return;
    if ($q->is_post_type_archive('column')) {
        $q->set('posts_per_page', 12);
    }
});
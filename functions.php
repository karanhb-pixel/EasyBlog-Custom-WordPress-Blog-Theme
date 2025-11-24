<?php

register_nav_menus(locations: array('primary-menu' => 'Top Menu'));

add_theme_support(feature: 'post-thumbnails');

add_theme_support(feature: 'custom-header');

add_theme_support(feature: 'custom-background');

register_sidebar(
    args: array(
        'name' => 'Sidebar Location',
        'id' => 'Sidebar',

    )
);

add_post_type_support(post_type: 'page', feature: 'excerpt');
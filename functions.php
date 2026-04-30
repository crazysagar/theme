<?php
register_nav_menus(array('primary'=> 'Top Menu')
);

add_theme_support('post-thumbnails');
add_theme_support('custom-header');

function my_theme_enqueue() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue');

function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

?>
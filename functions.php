<?php

function myCustomBlockTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'inter-font', 'https://rsms.me/inter/inter.css' );
}
add_action( 'wp_enqueue_scripts', 'myCustomBlockTheme_stylesheets' );

add_theme_support( 'disable-layout-styles' );
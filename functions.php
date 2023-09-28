<?php

function myCustomBlockTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'myCustomBlockTheme_stylesheets' );
<?php
function solomon_temple_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'solomon_temple_setup' );

function solomon_temple_scripts() {
    wp_enqueue_style(
        'solomon-temple-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Source+Sans+3:wght@300;400;600;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style( 'solomon-temple-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'solomon_temple_scripts' );
<?php
// registering menues
register_nav_menus( array(
	'header-menu' => 'Header Menu',
	'footer-menu' => 'Footer Menu',
	'mobile-menu' => 'Mobile Menu'
) );
// adding page thumbnails supoprt
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1060, 370, true );
// removing emoji script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
?>
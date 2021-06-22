<?php

add_theme_support('post-thumbnails');


function reg_menu_nav(){
	register_nav_menu('header-menu' , 'main_menu');
}
add_action('init','reg_menu_nav');


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

?>
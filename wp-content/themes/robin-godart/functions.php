<?php

/*//////////////////////////// Robin Godart //////////////////////////////*/

// Include
require_once('functions/wp-bootstrap.php');

// Menu
register_nav_menu('menu_header', 'Menu principal');

// Body Classes
function twentyeleven_body_classes( $classes ) {
	if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';
	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';
	return $classes;
}
add_filter( 'body_class', 'twentyeleven_body_classes' );

// ACF
if(function_exists("register_options_page")){
	register_options_page('Global');
}

// Image à la une
if(function_exists('add_theme_support')) {
   add_theme_support( 'post-thumbnails' );
}

//Menu
add_theme_support('menu');
register_nav_menu('menu_header','menu_header');
register_nav_menu('menu_footer','menu_footer');


// Login CSS
function custom_login_css(){
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/library/styles/login.css" />';
}
add_action('login_head', 'custom_login_css');

// Tiny Url
function getTinyUrl($url) {
	$tinyurl = file_get_contents("http://tinyurl.com/api-create.php?url=".$url);
	return $tinyurl;
}
// Hide AdminBar
add_filter('show_admin_bar', '__return_false');

/*////////////////////////// FIN Robin Godart ////////////////////////////*/



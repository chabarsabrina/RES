<?php

/*//////////////////////////// Robin Godart //////////////////////////////*/

// Include
require_once('functions/wp-bootstrap.php');

$path_to_js 	= get_stylesheet_directory_uri() . '/library/js/';
$path_to_styles = get_stylesheet_directory_uri() . '/library/styles/';
if ( ! is_admin() ) {
	function load_LESS() {
		global $path_to_js, $path_to_styles;
		print "<link rel='stylesheet/less' id='style-less-css'  href='" . $path_to_styles . "style.less' type='text/css' media='screen' />\n";
		print "<script type='text/javascript' src='" . $path_to_js . "less-1.1.3.min.js'></script>\n\n";
	}
	add_action( 'wp_head', 'load_LESS' );
}

// Menu
register_nav_menu('principal', 'Menu principal');

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



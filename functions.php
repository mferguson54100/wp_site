<?php 

add_theme_support('title-tag');

function myTheme_theme_assets() {
	// Theme stylesheet.
    
    wp_enqueue_style( 'myTheme-style-reset', get_template_directory_uri() .'/reset.css' );
    wp_enqueue_style( 'myTheme-styles', get_stylesheet_uri(), array('myTheme-style-reset') );
    wp_enqueue_style( 'myTheme-fonts', '//fonts.googleapis.com/css?family=Merriweather' );
}
add_action( 'wp_enqueue_scripts', 'myTheme_theme_assets' );
//testing a line commit 

?>


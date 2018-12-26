<?php 

add_theme_support('title-tag');

register_nav_menus( array(
    'header-menu'=>'My-theme header menu'
));

function myTheme_theme_assets() {
	// Theme stylesheet.
    
    wp_enqueue_style( 'myTheme-style-reset', get_template_directory_uri() .'/reset.css' );
    wp_enqueue_style( 'myTheme-styles', get_stylesheet_uri(), array('myTheme-style-reset') );
    wp_enqueue_style( 'myTheme-fonts', '//fonts.googleapis.com/css?family=Merriweather' );
}
add_action( 'wp_enqueue_scripts', 'myTheme_theme_assets' );
//testing a line commit 

//side bar


add_action( 'widgets_init', 'myTheme_widgets_areas' );
function myTheme_widgets_areas(){
    register_sidebar( array(
        'name' =>'Theme Sidebar',
        'id' =>'sidebar-1',
        'description' =>'The main side bar shown in my theme',
        'before_widget' =>'<li id="%1$s" class="widget %2$s">',
        'after_widget' =>'</li>',
        'before_title' =>'<h3 class="widgettitle">',
        'after_title' =>'</h3>',
    ));
}

?>


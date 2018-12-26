<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id='site-header'>
	<h1><?php bloginfo('title')?></h1>
	<div id = 'nav-bar'>
	<?php wp_nav_menu( array("theme_location"=>"header-menu")) ?>
	</div>
</header>   


<div id ='site-container'></div>
        
		<?php get_sidebar() ?>

        <div id ='site-content'>

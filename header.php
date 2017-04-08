<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geekhub6-exam-ivan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		<header class="header-main bg-header">
			<div class="container d-flex justify-content-between p-4">
				<?php the_custom_logo(); ?>
				<h1 class="sr-only">company tagline</h1>
				<button class="header-menu-btn"></button>
				<nav class=" align-self-center">
					<?php wp_nav_menu(array (
						'theme_location' => 'header-menu',
						'menu_class' 	 => 'header-nav d-flex flex-column flex-lg-row',
						'menu_id'    	 => 'header-nav',
						'container'  	 => false
					)); ?>
				</nav>
			</div>
		</header>

		<div id="content" class="site-content">

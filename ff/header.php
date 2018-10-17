<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>	

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/wp-content/themes/ff/img/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/wp-content/themes/ff/img/favicon-16x16.png" sizes="16x16"> 

	<!-- Flexo -->
	<link rel="stylesheet" href="/wp-content/themes/ff/css/flexo.css" type="text/css" media="screen">
	
	<!-- Custom Styles -->
	<link rel="stylesheet" href="/wp-content/themes/ff/css/styles.css" type="text/css" media="screen">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="preload">
		<span></span>
	</div>
	<div class="intro">
		<div class="video">
			<video autoplay loop>
				<source src="/wp-content/themes/ff/img/home-video.mp4" type="video/mp4">
			</video> 
		</div>
		<header>
			<div class="center">
				<div class="row">
					<div class="col-md-3">
						<a href="/" class="logo">
							<img src="/wp-content/themes/ff/img/logo.svg" alt="F&F HTOTEL Punta Del Este">
						</a>
					</div>
					<div class="col-md-9">
						<a href="#" class="toggle-menu"></a>
						<?php wp_nav_menu( array('menu' => 'header-menu', 'menu_class' => 'site-navigation' )); ?>
					</div>
				</div>
			</div>
		</header>
		<div class="center">
			<div class="intro-logo">
				<h1>
					<span>The Place</span>
					<img src="/wp-content/themes/ff/img/logo-intro.svg" alt="">
					<span>to Relax</span>
					<a href="#concept" class="next"></a>
				</h1>
			</div>
		</div>
		<a href="#contact" class="book-home"><span></span> book now</a>
	</div>
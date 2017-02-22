<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Header
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<section id="site-wrapper">
	
	<header id="site-header">
		
		<section class="container">

			<section id="site-branding">
	
				<?php if ( is_front_page() ) { ?>
	
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h1>
	
				<?php } else { ?>
				
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</p>
					
				<?php } ?>
				
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	
			</section><!-- /#site-branding -->

			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'secondary' ) ) { ?>
				<button class="menu-toggle open" aria-controls="site-navigation" aria-expanded="false">&#9776;</button><!-- // HTML entity for 'hamburger' icon -->
				<button class="menu-toggle close" aria-controls="site-navigation" aria-expanded="false">&times;</button><!-- // HTML entity for 'close' icon - NOT an X -->
			<?php } // both navigation menus ?>

			<?php if ( has_nav_menu( 'primary' ) ) { ?>
			<nav class="site-navigation primary" role="navigation">
				<?php wp_nav_menu( [ 'theme_location' => 'primary' ] ); ?>
			</nav><!-- /.site-navigation /. primary-->
			<?php } // primary navigation menu ?>

			<?php if ( has_nav_menu( 'secondary' ) ) { ?>
				<nav class="site-navigation secondary" role="navigation">
					<?php wp_nav_menu( [ 'theme_location' => 'secondary' ] ); ?>
				</nav><!-- /.site-navigation /.secondary -->
			<?php } // secondary navigation menu ?>
			
		</section><!-- /.site-container -->

	</header><!-- /#site-header -->

	<section id="site-content">
	
		<section class="container">

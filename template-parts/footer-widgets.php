<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Footer Widgets
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

// Check at least 1 widget area is active
if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) { ?>

<section class="site-footer-widgets">

	<section class="container">		

		<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
			<section class="widget-column footer-1">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</section><!-- /.widget-column -->
		<?php } ?>
		
		<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
			<section class="widget-column footer-2">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</section><!-- /.widget-column -->
		<?php } ?>
		
		<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
			<section class="widget-column footer-3">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</section><!-- /.widget-column -->
		<?php } ?>
		
		<?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
			<section class="widget-column footer-4">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</section><!-- /.widget-column -->
		<?php } ?>

	</section><!-- /.container -->

</section><!-- /.footer-widgets -->

<?php } // is_active_sidebar
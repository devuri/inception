<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Widgets
 *
 */

/**
 * Security Check
 *
 * @since 1.0.0
 **/

defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );


/**
 * Widgets
 *
 * @since 1.0.0
 **/

add_action( 'widgets_init', function() {

	foreach( [
		// EXAMPLE: 'SIDEBAR NAME' => 'SIDEBAR DESCRIPTION'
		'Sidebar'   => 'This is the main sidebar widget area, which appears next to the main page content.',
		'Footer 1'  => 'This is the Footer 1 widget area, which appears in the left side of the footer widget area.',
		'Footer 2'  => 'This is the Footer 2 widget area, which appears in the center of the footer widget area.',
		'Footer 3'  => 'This is the Footer 3 widget area, which appears in the right side of the footer widget area.',
		'Error 404' => 'This is the Error 404 widget area, which appears on pages that don\'t exist. It would be useful to include a meaningful message and perhaps a search form.',
	 	] as $sidebar => $sidebar_description ) {

		register_sidebar( [
			'name'          => esc_html__( $sidebar, INCEPTION_TEXT_DOMAIN ),
			'id'            => sanitize_title( $sidebar ),
			'description'   => esc_html( $sidebar_description ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		] );

	}

}, 10 );

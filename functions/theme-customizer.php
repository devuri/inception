<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Theme Customizer
 *
 */


/**
 * Security Check
 *
 * @since 1.0.0
 **/

defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );


/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
 
add_action( 'customize_register', function ( $wp_customize ) {

	$wp_customize->remove_section( 'custom_css' );

}, 15, 1 );

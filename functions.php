<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Functions
 *
 */


/**
 * Security Check
 *
 * @since 1.0.0
 **/

defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );


/**
 * Theme Defines
 *
 * @since 1.0.0
 **/

define( 'INCEPTION_TEXT_DOMAIN', 'inception' );


/**
 * Includes
 *
 * @since 1.0.0
 **/

$_files = [
	'theme-setup',
	'widgets',
	'filters',
	'theme-customizer'
];

foreach ( $_files as $_file ) {
	require_once ( dirname( __FILE__ ) . '/functions/' . $_file . '.php' );
}

unset( $_files, $_file );
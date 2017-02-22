<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Theme Setup
 *
 */


/**
 * Security Check
 *
 * @since 1.0.0
 **/

defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );


/**
 * Theme Setup Functions
 *
 * @since 1.0.0
 **/

add_action( 'after_setup_theme', function() {

	// Content Width
	$GLOBALS['content_width'] = 640;

	// Register Translation support
	load_theme_textdomain( INCEPTION_TEXT_DOMAIN, get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Register Title Tag support
	add_theme_support( 'title-tag' );

	// Register Post Thumbnail support
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// Register Navigation menus
	register_nav_menus( [
		'primary'   => esc_html__( 'Primary', INCEPTION_TEXT_DOMAIN ),
		'secondary' => esc_html__( 'Secondary', INCEPTION_TEXT_DOMAIN ),
		'footer'    => esc_html__( 'Footer', INCEPTION_TEXT_DOMAIN ),
	] );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	] );

	// Enable support for Post Formats
	add_theme_support( 'post-formats', [
		'aside',
		'image',
		'video',
		'quote',
		'link',
	] );

	// Cleanup - remove feed links, RSD link, Windows Live Writer manifest, Shortlink, WP version
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'wp_generator'  );

}, 10 );


/**
 * Styles and Scripts
 *
 * @since 1.0.0
 **/

 add_action( 'wp_enqueue_scripts', function() {

	// Get Theme Version
	$theme_version = wp_get_theme()->Version;

	// Local Dev - use a "new" version every page load
	if ( defined( 'LOCAL_DEV' ) && LOCAL_DEV ) {
		$theme_version = time();
	}

	// Make links protocol relative
	$template_directory_uri = str_replace( 'http:',  '', get_template_directory_uri() );
	$template_directory_uri = str_replace( 'https:', '', $template_directory_uri );

	// Theme Style
	wp_enqueue_style( 'theme-style', $template_directory_uri . '/dist/css/style.css', null, $theme_version );

	// Theme Scripts
	wp_enqueue_script( 'theme-scripts', $template_directory_uri . '/dist/js/scripts.js', array( 'jquery' ), $theme_version, true );

	// Threaded Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}, 10 );

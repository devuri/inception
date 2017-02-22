<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Filters
 *
 */


/**
 * Security Check
 *
 * @since 1.0.0
 **/

defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );


/**
 * Filter the content:
 * - remove <p> tag from <img> (with / without a link)
 * - remove <p> tage from <iframe> and replace with <div class="iframe-container">
 *
 * Note: Images with captions already use <figure> and don't have <p> tags
 *
 * @since 1.0.0
 **/

add_filter( 'the_content', function ( $content ) {

	$content = preg_replace( '/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content) ;
	$content = preg_replace( '/<p>\s*(<iframe .*>.*<\/iframe>)\s*<\/p>/iU', '<div class="iframe-container">\1</div>', $content );

	return $content;

}, 10, 1 );


/**
 * Disable requests to wp.org repository for this theme.
 *
 * @since 1.0.0
 **/

add_filter( 'http_request_args', function( $request, $url ) {

	// If it's not a theme update request, bail.
	if ( 0 !== strpos( $url, 'https://api.wordpress.org/themes/' ) ) {
		return $request;
	}

	// Decode the JSON response
	$themes = json_decode( $request[ 'body' ][ 'themes' ] );

	// Remove the active parent and child themes from the check
	$parent = get_option( 'template' );
	$child  = get_option( 'stylesheet' );
	unset( $themes->themes->$parent );
	unset( $themes->themes->$child );

	// Encode the updated JSON response
	$request['body']['themes'] = json_encode( $themes );

	return $request;

}, 5, 2 );

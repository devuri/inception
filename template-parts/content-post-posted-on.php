<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Posted On - prints the date and byline for the current post
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

// Human readable timings
// The theme will show "yesterday", "3 days ago" etc. for the published date as far back as you specify here.

$_human_readable_days = '7'; // Change this to the number of days (gone by) that you want to show the "human readable version". Use 0 to disable.

$_human_readable_cutoff_timestamp = time() - ( $_human_readable_days * DAY_IN_SECONDS );

// Time format
$time_format = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

// Published date
$_published_date = ( get_the_time( 'U' ) > (int) $_human_readable_cutoff_timestamp ) ? human_time_diff( get_the_time( 'U' ) ) . esc_html_x( ' ago', 'post date',  INCEPTION_TEXT_DOMAIN ) : esc_html_x( 'on ', 'post date',  INCEPTION_TEXT_DOMAIN ) . get_the_date();

$published = sprintf( $time_format, esc_attr( get_the_date( 'U' ) ), $_published_date );
$posted_on = sprintf( esc_html_x( 'Published %s', 'post date', INCEPTION_TEXT_DOMAIN ), $published );

// Last modified date
if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
	$_last_modified_date = ( esc_html( get_the_modified_time( 'U' ) ) > $_human_readable_cutoff_timestamp ) ? human_time_diff( get_the_modified_time( 'U' ) ) . esc_html_x( ' ago', 'post date',  INCEPTION_TEXT_DOMAIN ) : esc_html_x( 'on ', 'post date',  INCEPTION_TEXT_DOMAIN ) . get_the_modified_date();
	$last_updated = sprintf( $time_format, esc_attr( get_the_modified_date( 'U' ) ), $_last_modified_date );
	$posted_on .= sprintf( esc_html_x( ' and last updated %s', 'post date',  INCEPTION_TEXT_DOMAIN ), $last_updated );
}

// Author
$author_format = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), esc_html( get_the_author() ) );
$author = sprintf( esc_html_x( 'by %s', 'post author', INCEPTION_TEXT_DOMAIN ),  $author_format  );

// Put it all together
echo '<span class="posted-on">' . $posted_on . '</span><span class="author"> ' . $author . '</span>';

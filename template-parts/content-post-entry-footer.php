<?php
/**
 *
 * @package Inception
 * @since Inception 1.0
 *
 * The content for the Entry Footer
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

// Only show category and tag text for posts.
if ( 'post' === get_post_type() ) {

	if ( $categories_list  = get_the_category_list( esc_html__( ', ', INCEPTION_TEXT_DOMAIN ) ) ) {
		printf( '<p class="category-links">' . esc_html__( 'Posted in %1$s', INCEPTION_TEXT_DOMAIN ) . '</p>', $categories_list );
	}

	if ( $tags_list = get_the_tag_list( '', esc_html__( ', ', INCEPTION_TEXT_DOMAIN ) ) ) {
		printf( '<p class="tags-links">' . esc_html__( 'Tagged %1$s', INCEPTION_TEXT_DOMAIN ) . '</p>', $tags_list );
	}

}

if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {

	echo '<p class="comments-link">';
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', INCEPTION_TEXT_DOMAIN ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
	echo '</p>';

}

edit_post_link(

	sprintf(
		esc_html__( 'Edit %s', INCEPTION_TEXT_DOMAIN ),
		the_title( '<span class="screen-reader-text">"', '"</span>', false )
	),
	'<p class="edit-link">',
	'</p>'

);

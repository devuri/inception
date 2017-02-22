<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Template name: Left Sidebar
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

get_header();

get_sidebar();

?>

<section class="site-content">

<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		
		the_post();

		if ( 'post' === get_post_type() ) {

			get_template_part( 'template-parts/content-post', get_post_format() );
			
			if ( is_single() && comments_open() || get_comments_number() ) {
				comments_template();
			}

		} else {

			get_template_part( 'template-parts/content', get_post_type() );

		}

	}

	the_posts_pagination( [
		'prev_text'          => __( 'Previous page', 'twentysixteen' ),
		'next_text'          => __( 'Next page', 'twentysixteen' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
	] );

} else {

	get_template_part( 'template-parts/content', '404' );

}

?>

</section><!-- /.site-content -->

<?php

get_footer();
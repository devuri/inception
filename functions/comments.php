<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Comments
 *
 */


/**
 * Security Check
 *
 * @since 1.0.0
 **/

defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );


/**
 * Comment pagination
 *
 * @since 1.0.0
 **/

function inception_comments_pagination( $position ) {

	// The $position sets the ID; if this is set, sanitize and set up $id
	if ( '' !== $position ) {
		$position = 'comment-nav-' . esc_attr( sanitize_title( $position ) );
		$id = 'id="' . esc_attr( $position ) . '"';
	}

	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {
	?>
		<nav <?php if ( isset( $id ) ) { echo esc_attr( $id ); } ?> class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', INCEPTION_TEXT_DOMAIN ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', INCEPTION_TEXT_DOMAIN ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', INCEPTION_TEXT_DOMAIN ) ); ?></div>

			</div><!-- /.nav-links -->
		</nav><!-- /#comment-nav-below -->
	<?php
	} // Check for comment navigation.

}

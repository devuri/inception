<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Comments Template
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );


// Stop is a password is required to view this post

if ( post_password_required() ) {
	return;
}

?>

<section id="comments" class="comments">

	<?php if ( have_comments() ) { ?>

		<h2 class="comments-title">
			<?php
				printf( esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', INCEPTION_TEXT_DOMAIN ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php inception_comments_pagination( 'above' ); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( [
					'style'      => 'ol',
					'short_ping' => true,
				] );
			?>
		</ol><!-- /.comment-list -->

		<?php inception_comments_pagination( 'below' ); ?>


	<?php } // have_comments() ?>

	<?php comment_form(); ?>

</section><!-- /#comments /.comments -->
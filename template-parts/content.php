<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * The default content for any post type without a specific template
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_preview() ) { ?>

		<div class="is-preview"><?php printf( esc_html__( 'Psst.. This is a preview, this %s is not published.', INCEPTION_TEXT_DOMAIN ), get_post_type() ); ?></div><!-- /.is-preview -->

	<?php } ?>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- /.entry-header -->

	<?php if ( has_post_thumbnail() ) { ?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->

	<?php } ?>

	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', INCEPTION_TEXT_DOMAIN ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					esc_html__( 'Edit %s', INCEPTION_TEXT_DOMAIN ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- /.entry-footer -->

</article><!-- /#post-<?php the_ID(); ?> -->

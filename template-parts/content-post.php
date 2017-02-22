<?php
/**
 *
 * @package Inception
 * @since Inception 1.0
 *
 * The content for a single Post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>

		<div class="entry-meta">
			<?php get_template_part( 'template-parts/content-post-posted-on' ); ?>
		</div><!-- /.entry-meta -->

	</header><!-- /.entry-header -->

	<?php if ( has_post_thumbnail() ) { ?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->

	<?php } ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s', INCEPTION_TEXT_DOMAIN ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', INCEPTION_TEXT_DOMAIN ),
				'after'  => '</div><!-- /.page-links -->',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php get_template_part( 'template-parts/content-post-entry-footer' ); ?>
	</footer><!-- /.entry-footer -->

</article><!-- /#post-<?php the_ID(); ?> -->

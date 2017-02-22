<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * The content for a 404 page (not found)
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

?>

<article id="post-0" class="no-results not-found">

	<header class="entry-header">
		<h1 class="entry-title"><?php esc_html_e( 'Page not found', INCEPTION_TEXT_DOMAIN ); ?></h1>
	</header><!-- /.entry-header -->

	<div class="page-content">

		<?php dynamic_sidebar( 'error-404' ); ?>

	</div><!-- /.page-content -->

</article><!-- /.no-results /.not-found -->

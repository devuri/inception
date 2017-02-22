<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * The Sidebar containing the main widget areas.
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

?>

<aside id="site-sidebar">

	<?php dynamic_sidebar( 'sidebar' ); ?>

</aside><!-- /#site-sidebar -->

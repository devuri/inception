<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Footer
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

?>		</section><!-- /.container -->

	</section><!-- /#site-content -->

	<?php get_template_part( 'template-parts/footer-widgets' ); ?>

	<footer id="site-footer">

		<section class="container">

			<p class="copyright">&copy; <?php echo esc_html__( 'Copyright', INCEPTION_TEXT_DOMAIN ) . ' ' . date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			
			<?php if ( has_nav_menu( 'footer' ) ) { ?>
			<nav class="site-navigation footer">
				<?php wp_nav_menu( [ 'theme_location' => 'footer', 'depth' => '1' ] ); ?>
			</nav><!-- /.site-navigation -->
			<?php } // has_nav_menu ?>

		</section><!-- /.container -->

	</footer><!-- /#site-footer -->

</section><!-- /#site-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
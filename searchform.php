<?php
/**
 * @package Inception
 * @since Inception 1.0
 *
 * Search Form
 *
 */

// Security Check
defined( 'ABSPATH') || die( 'Direct file access is forbidden.' );

?><form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <label>
    <span class="screen-reader-text"><?php esc_html__( 'Search:', INCEPTION_TEXT_DOMAIN ); ?></span>
    <input type="search" class="search-field" placeholder="<?php esc_html__( 'Looking for something?', INCEPTION_TEXT_DOMAIN ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>

  <button type="submit" class="search-submit"><span class="screen-reader-text"><?php esc_html__( 'Search', INCEPTION_TEXT_DOMAIN ); ?></span></button>

</form>

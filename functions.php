<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Angerlo-s-Nieuws
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Twenty Twenty-Two 1.0
 *
 * @return void
 */
function twentytwentytwo_support() {

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( '../styles/index.css' );
}

endif;
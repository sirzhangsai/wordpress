<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname( __FILE__ ) . '/wp-load.php' );
	// Set up the WordPress query.
	wp();
	// Load the theme template.
    //ABSPATH.WPINC  -> wp-includes
    // ABSPATH . WPINC = wordpress/wp-includes
    //引入模板文件，如果注释掉将不会显示页面
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}

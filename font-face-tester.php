<?php
/**
 * Plugin Name: Font Face Tester
 * Plugin URI: https://github.com/wordpress/gutenberg
 * Description: Tests passing an array of fonts to Font Face.
 * Requires at least: trunk
 * Requires PHP: 7.0
 * Version: 1.0.0
 */

if ( ! function_exists( 'wp_print_font_faces' ) ) {
	return;
}

add_action( 'wp_head', 'fontfacetester_print_fonts', 50 );
add_action( 'admin_print_styles', 'fontfacetester_print_fonts', 50 );
function fontfacetester_print_fonts() {
	$url   = plugin_dir_url( __FILE__ );
	$fonts = array(
		'Playfair Display' => array(
			array(
				'font-family' => 'Playfair Display',
				'font-style'   => 'normal',
				'font-weight'  => '200 900',
				'src'          => array(
					$url . 'assets/fonts/PlayfairDisplay-VariableFont_wght.ttf',
				),
			),
			array(
				'font-family' => 'Playfair Display',
				'font-style'   => 'italic',
				'font-weight'  => '200 900',
				'src'          => array(
					$url . 'assets/fonts/PlayfairDisplay-Italic-VariableFont_wght.ttf',
				),
			),
		),
	);
	wp_print_font_faces( $fonts );
}

<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Modern Minimal
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function modern_minimal_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'modern_minimal_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function modern_minimal_jetpack_setup
add_action( 'after_setup_theme', 'modern_minimal_jetpack_setup' );

function modern_minimal_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function modern_minimal_infinite_scroll_render
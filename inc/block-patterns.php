<?php
/**
 * Twenty Twenty-Two: Block Patterns
 *
 * @since Twenty Twenty-Two 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Twenty Twenty-Two 1.0
 */
function twentytwentytwo_register_block_patterns() {
	$block_pattern_categories = array(
		'twentytwentytwo-general' => array( 'label' => __( 'Twenty Twenty-Two General', 'twentytwentytwo' ) ),
		'twentytwentytwo-footers' => array( 'label' => __( 'Twenty Twenty-Two Footers', 'twentytwentytwo' ) ),
		'twentytwentytwo-headers' => array( 'label' => __( 'Twenty Twenty-Two Headers', 'twentytwentytwo' ) ),
		'twentytwentytwo-query'   => array( 'label' => __( 'Twenty Twenty-Two Posts', 'twentytwentytwo' ) ),
		'twentytwentytwo-pages'   => array( 'label' => __( 'Twenty Twenty-Two Pages', 'twentytwentytwo' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'twentytwentytwo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'footer-default',
		'footer-dark',
		'footer-logo',
		'footer-navigation',
		'footer-title-tagline-social',
		'footer-title-tagline-social-dark',
		'footer-social-copyright',
		'footer-navigation-copyright',
		'footer-about-title-logo',
		'footer-query-title-citation',
		'footer-query-images-title-citation',
		'footer-blog',
		'general-subscribe',
		'general-featured-posts',
		'general-layered-images-with-duotone',
		'general-wide-image-intro-buttons',
		'general-large-list-names',
		'general-video-header-details',
		'general-list-events',
		'general-two-images-text',
		'general-image-with-caption',
		'general-video-trailer',
		'general-pricing-table',
		'general-divider-light',
		'general-divider-dark',
		'header-default',
		'header-large-dark',
		'header-small-dark',
		'header-image-background',
		'header-image-background-overlay',
		'header-with-tagline',
		'header-text-only-green-background',
		'header-text-only-salmon-background',
		'header-title-and-button',
		'header-text-only-with-tagline-black-background',
		'header-logo-navigation-gray-background',
		'header-logo-navigation-social-black-background',
		'header-title-navigation-social',
		'header-logo-navigation-offset-tagline',
		'header-stacked',
		'header-centered-logo',
		'header-centered-logo-black-background',
		'header-centered-title-navigation-social',
		'header-title-and-button',
		'hidden-404',
		'hidden-bird',
		'hidden-heading-and-bird',
		'page-about-big-image-and-buttons',
		'page-about-media-left',
		'page-about-simple-dark',
		'page-about-media-right',
		'page-about-links',
		'page-about-links-dark',
		'page-layout-image-and-text',
		'page-layout-image-text-and-video',
		'page-layout-two-columns',
		'page-sidebar-poster',
		'page-sidebar-grid-posts',
		'page-sidebar-blog-posts',
		'page-sidebar-blog-posts-right',
		'query-default',
		'query-simple-blog',
		'query-grid',
		'query-text-grid',
		'query-image-grid',
		'query-large-titles',
		'query-irregular-grid',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'twentytwentytwo_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'twentytwentytwo/' . $block_pattern,
			require __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}
add_action( 'init', 'twentytwentytwo_register_block_patterns', 9 );

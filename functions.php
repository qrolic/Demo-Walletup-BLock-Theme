<?php
if (!function_exists('myfirsttheme_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook.
	 */
	function myfirsttheme_setup()
	{
		// Add support for block styles.
		add_theme_support('wp-block-styles');
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('editor-style.css');
	}
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'myfirsttheme_setup');
add_theme_support('block-templates');
add_theme_support('block-template-parts');

function prefix_theme_setup()
{
	// Add support for menus.
	add_theme_support('menus');
	// Enable support for wide and full-aligned blocks.
	add_theme_support('align-wide');
	// Enable support for responsive embedded content.
	add_theme_support('responsive-embeds');
	// Enable support for custom line-height controls.
	add_theme_support('custom-line-height');
	// Enable support for custom block styles.
	add_theme_support('wp-block-styles');
	// Enable support for custom editor styles.
	add_theme_support('editor-styles');
	// Enable support for wide images in the editor.
	add_theme_support('align-wide');
	// Enable support for post-thumbnails (featured images).
	add_theme_support('post-thumbnails');
	// Enable support for HTML5 features.
	add_theme_support(
		'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
		)
	);
	// Enable support for post formats (example: aside, gallery, video, audio, etc.
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'gallery',
			'video',
			'audio',
		)
	);
	// Enable support for title tag (automatically generates the title tag in the document head.
	add_theme_support('title-tag');
	// editor styles add.
	add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'prefix_theme_setup');


function mytheme_custom_excerpt_length($length)
{
	return 80;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

/**
 * Import all pattern register category.
 */
require_once 'pattern/banner-description.php';
require_once 'pattern/event.php';
require_once 'pattern/secret.php';
require_once 'pattern/contact-forn.php';


/**
 * Import all block register.
 */

require_once 'inc/blocks/testimonials-dynamic/testimonials-dynamic.php';
require_once 'inc/blocks/home-hero-section/home-hero-section.php';
require_once 'inc/blocks/banner_description_section/banner_description_section.php';
require_once 'inc/blocks/zigzag-section/zigzag-section.php';
require_once 'inc/blocks/user-guides/user-guides.php';
require_once 'inc/blocks/walletup-post-section/walletup-post-section.php';
require_once 'inc/blocks/service-section/service-section.php';
require_once 'inc/blocks/skill-boost/skill-boost.php';

/**
 * This import file in enqueue file for include inside this file add enqueue function for site.
 */
require_once 'inc/enqueue.php';

/**
 * Import all block pattern register category.
 */
require_once 'inc/patterns.php';

/**
 * This import file in enqueue file for include inside this file add block function for site.
 */
require_once 'inc/block.php';

/**
 * This file imports all the custom post type.
 */
require_once 'inc/cpt/testimonial.php';
?>
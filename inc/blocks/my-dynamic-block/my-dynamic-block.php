<?php
/**
 * Plugin Name:       My Dynamic Block
 * Description:       this is get post in My Dynamic Block..
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-dynamic-block
 *
 * @package           create-block
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function my_dynamic_block($attr)
{
	$args = array(
		'numberposts' => $attr['numberOfItems']
	);
	$my_posts = get_posts($args);

	if (!empty($my_posts)) {
		$output = '<div ' . get_block_wrapper_attributes() . '>';

		if ($attr['displayAuthorInfo']) {
			$output .= '<div class="wp-block-author-box-author-plugin__author">';

			if ($attr['showAvatar']) {
				$output .= '<div class="wp-block-author-box-author-plugin__avatar">'
					. get_avatar(get_the_author_meta('ID'), $attr['avatarSize'])
					. '</div>';
			}

			$output .= '<div class="wp-block-author-box-author-plugin__author-content">';

			$output .= '<div class="wp-block-author-box-author-plugin__name">'
				. get_the_author_meta('display_name')
				. '</div>';

			if ($attr['showBio']) {
				$output .= '<div class="wp-block-author-box-author-plugin__description">'
					. get_the_author_meta('description')
					. '</div>';
			}

			$output .= '</div>';
			$output .= '</div>';
		}

		$num_cols = $attr['columns'] > 1 ? strval($attr['columns']) : '1';

		$output .= '<ul class="wp-block-author-box-author-plugin__post-items columns-' . $num_cols . ' row">';
		foreach ($my_posts as $p) {

			$title = $p->post_title ? $p->post_title : 'Default title';
			$url = esc_url(get_permalink($p->ID));
			$thumbnail = has_post_thumbnail($p->ID) ? get_the_post_thumbnail($p->ID, 'large', array('class' => 'wp-block-author-box-author-plugin__post-thumbnail')) : '';

			$output .= '<li class="col-lg-4 col-md-6 col-12">';
			if (!empty($thumbnail) && $attr['displayThumbnail']) {
				$output .= $thumbnail;
			}
			$output .= '<h4 class="wp-block-author-box-author-plugin__post-title"><a href="' . $url . '">' . $title . '</a></h4>';
			if ($attr['displayDate']) {
				$output .= '<time datetime="' . esc_attr(get_the_date('c', $p)) . '" class="wp-block-author-box-author-plugin__post-date">' . esc_html(get_the_date('', $p)) . '</time>';
			}
			if (get_the_excerpt($p) && $attr['displayExcerpt']) {
				$output .= '<div class="wp-block-author-box-author-plugin__post-excerpt"><p>' . get_the_excerpt($p) . '</p></div>';
			}

			$output .= '</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
	}
	return $output ?? '<strong>Sorry. No posts matching your criteria!</strong>';
}
function my_dynamic_block_my_dynamic_block_block_init()
{
	register_block_type(__DIR__ . '/build', array(
		'render_callback' => 'my_dynamic_block'
	));
}
add_action('init', 'my_dynamic_block_my_dynamic_block_block_init');

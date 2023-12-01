<?php
/**
 * This file is display admine site show Custom Post Type.
 * description : Testimonials block contains reviews given by clients in slider
 *  walletup block theme
 */

function testimonial_custom_post_type()
{

	// Set UI labels for Custom Post Type
	$labels = array(
		'name' => _x('Testimonial', 'Post Type General Name', 'twentytwentyone'),
		'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'twentytwentyone'),
		'menu_name' => __('Testimonial', 'twentytwentyone'),
		'parent_item_colon' => __('Parent Movie', 'twentytwentyone'),
		'all_items' => __('All Testimonial', 'twentytwentyone'),
		'view_item' => __('View Testimonial', 'twentytwentyone'),
		'add_new_item' => __('Add New Testimonial', 'twentytwentyone'),
		'add_new' => __('Add New', 'twentytwentyone'),
		'edit_item' => __('Edit Testimonial', 'twentytwentyone'),
		'update_item' => __('Update Testimonial', 'twentytwentyone'),
		'search_items' => __('Search Testimonial', 'twentytwentyone'),
		'not_found' => __('Not Found', 'twentytwentyone'),
		'not_found_in_trash' => __('Not found in Trash', 'twentytwentyone'),
	);

	// Set other options for Custom Post Type

	$args = array(
		'label' => __('Testimonial', 'twentytwentyone'),
		'description' => __('Template news and reviews', 'twentytwentyone'),
		'labels' => $labels,
		// Features this CPT supports in Post Editor
		'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies' => array('genres'),
		/* A hierarchical CPT is like Pages and can have
		 * Parent and child items. A non-hierarchical CPT
		 * is like Posts.
		 */
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'testimonials'),
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'show_in_rest' => true,

	);

	// Registering your Custom Post Type
	register_post_type('Testimonial', $args);

}

add_action('init', 'testimonial_custom_post_type', 0); 
?>
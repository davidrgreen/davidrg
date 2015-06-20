<?php
/**
 * Handle the creation of Custom Post Types
 */

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function davidrg_projects() {

	$labels = array(
		'name'                => 'Projects',
		'singular_name'       =>  'Project',
		'add_new'             => 'Add New Project',
		'add_new_item'        =>  'Add New Project',
		'edit_item'           =>  'Edit Project',
		'new_item'            =>  'New Project',
		'view_item'           =>  'View Project',
		'search_items'        =>  'Search Projects',
		'not_found'           =>  'No Projects found',
		'not_found_in_trash'  =>  'No Projects found in Trash',
		'parent_item_colon'   =>  'Parent Project:',
		'menu_name'           =>  'Projects',
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => 'projects' ),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'thumbnail',
			'excerpt','custom-fields',
			'revisions', 'page-attributes',
			)
	);

	register_post_type( 'davidrg-project', $args );
}

add_action( 'init', 'davidrg_projects' );

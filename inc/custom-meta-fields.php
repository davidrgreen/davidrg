<?php
/**
 * Handle the creation of custom meta fields using CMB2
 */

require_once  __DIR__ . '/../cmb2/init.php';

add_action( 'cmb2_init', 'davidrg_register_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function davidrg_register_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_davidrg_';

	/**
	* Initiate the metabox
	*/
	$project_cmb = new_cmb2_box( array(
		'id'            => 'davidrg_project_metabox',
		'title'         => 'Project Details',
		'object_types'  => array( 'davidrg-project', ), // Post type
		'context'       => 'advanced',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	// Regular text field
	$project_cmb->add_field( array(
		'name'       => 'Project Summary',
		'desc'       => 'A short blurb about the project',
		'id'         => $prefix . 'project_summary',
		'type'       => 'text'
	) );

	$project_cmb->add_field( array(
		'name'       => 'Project Skills',
		'desc'       => 'A comma separated list of skills used on the project',
		'id'         => $prefix . 'project_skills',
		'type'       => 'text'
	) );

	$project_cmb->add_field( array(
		'name'       => 'Project URL',
		'desc'       => 'The URL of the website if it exists online',
		'id'         => $prefix . 'project_url',
		'type'       => 'text_url'
	) );



}
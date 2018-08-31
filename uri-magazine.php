<?php
/*
Plugin Name: URI Magazine
Plugin URI: http://www.uri.edu
Description: Customizations for the magazine
Version: 1.0
Author: John Pennypacker
Author URI: 
*/

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

//define( 'URI_MAGAZINE_PATH', plugin_dir_path( __FILE__ ) );


/**
 * Define the architecture taxonomy for magazine content types
 */
function uri_magazine_architecture_taxonomy() {

	register_taxonomy('architecture', array (
		0 => 'post'
		), array(
			'hierarchical' => true,
			'label' => 'Architecture',
			'show_ui' => true,
			'show_admin_column' => TRUE,
			'query_var' => true,
			'rewrite' => false,
			'singular_label' => 'Architecture',
			'labels' => array(
				'add_new_item' => __( 'Add New Architecture' ),
				'update_item' =>  __( 'Update Architecture' ),
				'view_item' =>  __( 'View Architecture' ),	
				'edit_item' =>  __( 'Edit Architecture' ),		
				'all_item' =>  __( 'All Architecture' )
			)
		)
	);

}
add_action('init', 'uri_magazine_architecture_taxonomy');
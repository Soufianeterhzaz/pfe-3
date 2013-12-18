<?php
/**
 * All my function of my template here
 *
 * @package WordPress
 * @subpackage EHTIC
 */

//Create my navigation menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Navigation menu' ));
}

add_action( 'init', 'register_my_menu' );

//Create gallery menu
function create_post_type_gallery() {
	register_post_type( 'Gallerie',
		array(
			'labels' => array(
				'name' => __( 'Gallerie' ),
				'singular_name' => __( 'Gallerie' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' )
			)
		);
};

add_action( 'init', 'create_post_type_gallery' );
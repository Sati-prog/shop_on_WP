<?php

add_action( 'init', function() {

    register_post_type( 'slider', array(

		'labels' => array(
			'name'          => __( 'Slider', 'eshop' ),
			'singular_name' => __( 'Slider', 'eshop' ),
			'add_new'       => __( 'Add new slide', 'eshop' ),
			'add_new_item'  => __( 'New slide', 'eshop' ),
			'edit_item'     => __( 'Edit', 'eshop' ),
			'new_item'      => __( 'New slide', 'eshop' ),
			'view_item'     => __( 'View', 'eshop' ),
			'menu_name'     => __( 'Slider', 'eshop' ),
			'all_items'     => __( 'All slides', 'eshop' ),
		),
		'public'       => true,
		'supports'     => array( 'title', 'editor', 'thumbnail', ),
		'menu_icon'    => 'dashicons-format-gallery',
		'show_in_rest' => true,

	) );
} );
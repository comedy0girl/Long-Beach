<?php
		
		add_action( 'after_setup_theme', 'setup' );

		add_action( 'init', 'register_my_menus' );

		add_filter( 'use_default_gallery_style', '__return_false' );
		add_shortcode('gallery', 'gallery_shortcode');


		// widgets and sidebars 
		if ( function_exists('register_sidebar') ) {
		    register_sidebar(array(
		   'name' => 'reminder_sidebar',
		   'before_widget' => '<div id="%1$s" class="widget %2$s">',
		   'after_widget' => '</div>',
		   'before_title' => '<h2>',
		   'after_title' => '</h2>'
		   ));  
		}

		function setup() {

			add_theme_support( 'post-thumbnails' );
			add_image_size( 'homepage-posts', 260, 400, true );
			add_image_size( 'gallery', 175, 175, true );

			add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );

			function custom_image_sizes_choose( $sizes ) {
			    $custom_sizes = array(
			        'homepage-posts' => 'Home Page Posts',
			        'gallery' => 'Gallery'
			    );
			    return array_merge( $sizes, $custom_sizes );
			}
		}	

	 	function register_my_menus() {
		  register_nav_menus(
			    array(
			    	'header-menu' => __( 'Header Menu' ),
			      	'footer-menu' => __( 'Footer Menu' ),
			      	'header-left-menu' => __( 'Header Left Menu' ),
	      			'header-right-menu' => __( 'Header Right Menu' ),
	      			'social-media-menu' => __( 'Social Media Menu' ),
			    )
		  );
		}
?>
<?php
	/*
	Theme setup
	*/

	function avedon_resources() {
		wp_enqueue_style( 'style', get_stylesheet_uri());
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jquery' ), '',  true );
		wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array( 'jquery' ), '',  true );
		wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.min.js', array('jquery') );
		// wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky.js', array( 'jquery' ), '',  true );
	}
	add_action('wp_enqueue_scripts', 'avedon_resources');

	add_filter('show_admin_bar', '__return_false');

	function posts_on_homepage( $query ) {
		if ( $query->is_home() && $query->is_main_query() ) {
			$query->set( 'posts_per_page', 50 );
		}
	}
	add_action( 'pre_get_posts', 'posts_on_homepage' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 120, 120 );

	add_action( 'after_setup_theme', 'wpt_setup' );
	if ( ! function_exists( 'wpt_setup' ) ):
		function wpt_setup() {  
		  register_nav_menus(
			array(
			  'header-menu' => __( 'Header Menu' ),
			)
		  );
		} endif;

	add_action('init', 'project_custom_init');

 ?>
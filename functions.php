<?php
	/*
	Theme setup
	*/

	function avedon_resources() {
		wp_enqueue_style( 'style', get_stylesheet_uri());
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
			  'primario' => __( 'Primario Menu' ),
			  'servicos' => __( 'Servicos Menu' ),
			  'cases' => __( 'Cases Menu' ),
			)
		  );
		} endif;

	add_action('init', 'project_custom_init');

 ?>
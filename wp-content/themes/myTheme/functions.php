<?php
    function my_scripts_method() {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
        wp_enqueue_script( 'jquery' );
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }    
    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


    add_theme_support('post-thumbnails');
    remove_action('wp_head', 'rsd_link' );
    remove_action('wp_head', 'wlwmanifest_link' );
    remove_action('wp_head', 'wp_generator' );
    // show_admin_bar(false);


    add_action('pre_get_posts', 'wpse_change_post_order');

	function wpse_change_post_order($query){
	    $query->set('order','ASC');
	    $query->set('orderby','date');

	}

?>
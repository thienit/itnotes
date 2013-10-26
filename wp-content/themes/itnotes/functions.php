<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   //wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"), false);
       wp_register_script('jquery', get_bloginfo('template_directory').'/js/jquery-1.10.1.js');
	   wp_enqueue_script('jquery');
       wp_register_script('tab_nav', get_bloginfo('template_directory').'/js/tab-nav.js');
       wp_enqueue_script('tab_nav');
       wp_register_script('tooltip', get_bloginfo('template_directory').'/js/tooltip.js');
       wp_enqueue_script('tooltip');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    // Create menu support for theme
    if (function_exists('register_nav_menus')) {
        register_nav_menus(array(
            'main_nav' => 'Main Navigation Menu'
        ));
    }

    // Create post thumbnail
    if(function_exists('add_theme_support')){
        add_theme_support('post-thumbnails');
    }

    // Excerpt to show link
    function new_excerpt_more($more) {
        global $post;
        return "<a class='more-link' href='".get_permalink($post->ID)."'>Continue Reading</a>'";
    }

    add_filter('excerpt_more', 'new_excerpt_more');
?>
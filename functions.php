<?php 

    function calling_style_resources(){
        //stylesheet calling
        wp_enqueue_style('main-css', get_stylesheet_uri(),[],filemtime(get_template_directory( ).'/style.css'),'all' );
    }
     
    add_action( 'wp_enqueue_scripts','calling_style_resources' );


    function our_theme_setup(){
        
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footermenu' => __('Footer Menu'),
        ));

        add_theme_support( 'post-thumbnails');
    }
    add_action( 'after_setup_theme','our_theme_setup' );

    function our_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar'),
            'id'            => 'sidebar-1',
            'before_widget' => '<div class="sidebarwrap">',
            'after_widget'  => ' </div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ) );
    }
    add_action( 'widgets_init', 'our_widgets_init' );

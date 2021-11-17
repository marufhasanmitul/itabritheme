<?php 

    function calling_style_resources(){
        //stylesheet calling
        wp_enqueue_style('main-css', get_stylesheet_uri(),[],filemtime(get_template_directory( ).'/style.css'),'all' );
    }
     
    add_action( 'wp_enqueue_scripts','calling_style_resources' );





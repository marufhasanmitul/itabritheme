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
        register_sidebar( array(
            'name'          => __( 'Footer Top Left'),
            'id'            => 'sidebar-2',
            'before_widget' => '<div class="widthwrip clearfix"> ',
            'after_widget'  => ' </div>',
            'before_title'  => '<h2 class="red">',
            'after_title'   => '</h2>'
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Top Middle '),
            'id'            => 'sidebar-3',
            'before_widget' => '<div class="widthwrip clearfix"> ',
            'after_widget'  => ' </div>',
            'before_title'  => '<h2 class="green">',
            'after_title'   => '</h2>'
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Top Right'),
            'id'            => 'sidebar-4',
            'before_widget' => '<div class="widthwrip clearfix">',
            'after_widget'  => ' </div>',
            'before_title'  => '<h2 class="yellow">',
            'after_title'   => '</h2>'
        ) );
    }
    add_action( 'widgets_init', 'our_widgets_init' );





/* Custom Pagination */
function pagination($pages = '', $range = 4){ 
    $showitems = ($range * 2)+1;        
	global $paged;     
	if(empty($paged)) $paged = 1;      
	if($pages == ''){         
		global $wp_query;         
		$pages = $wp_query->max_num_pages;         
		if(!$pages){$pages = 1;}
	}
	if(1 != $pages){
		echo "<div class=\"pagination\"><span>Page No- ".$paged." of ".$pages."</span>";
		
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";             
				}
		} 
		if ($paged < $pages && $showitems < $pages) 
			echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";
		echo "</div>\n";
	}}


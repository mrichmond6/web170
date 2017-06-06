<?php
/*
This function creates the navigation by looping an associative array*/
//Register the sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
// Register My Menus
register_nav_menus(array(
	'main' => __( 'Main' ),
));
//Create post thumbnails	
add_theme_support( 'post-thumbnails' );
//Create the page excerpts
add_post_type_support( 'page', 'excerpt' );

function get_my_title_tag(){
	global $post; //must be a global variable
	if (is_front_page()){
		
		bloginfo('description'); //retrieves your site tagline
	}
	elseif ( is_page() || is_single()){
		the_title();
	}
	else{
		bloginfo('description'); //tagline
	}
	
	if($post->post_parent){//parent pages
		
		echo ' | ';
		echo get_the_title($post->post_parent);
	}
	echo ' | ';
	bloginfo('name');//site name
	echo ' | ';
	echo 'Seattle, WA'; //location
}

?>
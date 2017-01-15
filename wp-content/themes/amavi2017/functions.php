<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary nav' ),
      'secondary-nav' => __( 'Secondary nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' ); 
}



register_sidebar(array( 'before_title' => '<h3>', 'after_title' => '</h3>' ));



function custom_post_portfolio() {
    $args = array(
    	'public' 		=> true,
    	'label'  		=> 'Portfolio Items',
    	'supports'		=> array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
		'has_archive'	=> false,
		'rewrite'		=> array( 
			'slug' 			=> 'portfolio',
			'with_front' 	=> '1',
			'capability_type'     => 'page'
		),
    );
    register_post_type( 'portfolio_items', $args );
}

add_action( 'init', 'custom_post_portfolio' );
?>
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


function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages 

    if(is_home()){
      $query->set('posts_per_page', 3);
    }

    if(is_category()){
      $query->set('posts_per_page', 2);
    }

    if(is_search()){
      $query->set('posts_per_page', 3);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );

?>
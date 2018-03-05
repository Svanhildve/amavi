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
      $query->set('posts_per_page', 2);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );

function exclude_pages_from_search($query) {
    if ( $query->is_main_query() && is_search() ) {
        $query->set( 'post_type', 'post' );
    }
    return $query;
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );



// Get our featured home page post
function amavi_get_featured_home_hero() {

  return get_field( 'amavi_home_hero', get_option( 'page_on_front' ) );

}



// Get our featured home page post
function amavi_get_featured_home_post() {

  return get_field( 'amavi_home_post', get_option( 'page_on_front' ) );

}



// Check to see if the post is the featured home page one!
function amavi_is_featured_home_post( $id = null ) {

  if ( empty( $id ) ) $id = get_the_ID();
  if ( amavi_get_featured_home_post() == $id ) return true;
  return false;

}



function amavi_set_home_hero_data() {

    $featured_hero = amavi_get_featured_home_hero();
    set_query_var( 'amavi_data', $featured_hero );

}



// Get the latest posts for the home page
function amavi_get_home_posts_array( $featured_position = 4 ) {

    // Setup the query for our posts
    $args = array(

      'post__not_in' => array( amavi_get_featured_home_hero(), amavi_get_featured_home_post() ),
      'posts_per_page' => 7,
      'post_status' => 'publish'

    );


    // Set up the query and array for getting IDs
    $q = new WP_Query( $args );
    $latest_posts = array();

    if ( $q->have_posts() ) {

      while( $q->have_posts() ) {

        $q->the_post();
        $latest_posts[] = get_the_ID();

      }

    }


    // Reset to the main query
    wp_reset_postdata();


    // Splice our featured post into the array
    $home_posts = $latest_posts;
    array_splice( $home_posts, ( $featured_position - 1 ), 0, amavi_get_featured_home_post() );


    // Return our final array
    return $home_posts;

}





/*
* Get posts related to a specific one
 */
function amavi_get_related_posts( $args = array(), $id = null ) {

  if ( empty( $args['post_type'] ) ) $args['post_type'] = 'post';
  if ( empty( $args['taxonomy'] ) ) $args['taxonomy'] = 'category';
  if ( !isset( $args['count'] ) || empty( $args['count'] ) ) $args['count'] = 3;
  if ( !isset( $args['randomise'] ) ) $args['randomise'] = true;
  if ( empty( $id ) ) $id = get_the_ID();

  $categories = get_the_terms( $id, $args['taxonomy'] );
  $category_ids = array();

  // Loop through taxonomy 'categories' and make an array of IDs
  foreach ( $categories as $category ) {

    $category_ids[] = $category->term_id;

  }

  $qargs = array(

    'post_type' => $args['post_type'],
    'post__not_in' => array( $id ),
    'tax_query' => array(
      array(
        'taxonomy' => $args['taxonomy'],
        'field'    => 'term_id',
        'terms'    => $category_ids,
      ),
    ),
    'posts_per_page' => ( $args['count'] * 5 ),

  );

  $q = new WP_Query( $qargs );

  // Set up an array of posts
  $posts = array();

  // The Loop
  if ( $q->have_posts() ) {

    while ( $q->have_posts() ) {

      $q->the_post();
      $posts[] = get_the_ID();

    }

    wp_reset_postdata();

  }

  // Check to see if we need more posts, cos there aren't enough related within this category
  if ( count( $posts ) < $args['count'] ) {

    $exclude_posts = $posts;
    $exclude_posts[] = $id;

    $qargs = array(

      'post_type' => $args['post_type'],
      'post__not_in' => $exclude_posts,
      'posts_per_page' => ( ( $args['count'] * 5 ) - count( $posts ) ),

    );

    $q = new WP_Query( $qargs );

    // The Loop
    if ( $q->have_posts() ) {

      while ( $q->have_posts() ) {

        $q->the_post();
        $posts[] = get_the_ID();

      }

      wp_reset_postdata();

    }

  }

  // Do we want these randomised?
  if ( $args['randomise'] ) {

    // Shuffle all we have to give some variety
    shuffle( $posts );

  }

  return array_slice( $posts, 0, $args['count'] );

}
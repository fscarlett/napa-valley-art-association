<?php 

add_action( 'init', 'aanv_artmedium_taxonomy', 0 );
 
function aanv_artmedium_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Medium', 'taxonomy general name' ),
    'singular_name' => _x( 'Medium', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Mediums' ),
    // 'popular_items' => __( 'Popular Mediums' ),
    'all_items' => __( 'All Mediums' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Medium' ), 
    'update_item' => __( 'Update Medium' ),
    'add_new_item' => __( 'Add New Medium' ),
    'new_item_name' => __( 'New Medium Name' ),
    'separate_items_with_commas' => __( 'Separate Mediums with commas' ),
    'add_or_remove_items' => __( 'Add or remove Mediums' ),
    // 'choose_from_most_used' => __( 'Choose from the most used Mediums' ),
    'menu_name' => __( 'Mediums' ),
  ); 

  $object_type = array( 
    'aanv_profile','aanv_event'
  );
 
  register_taxonomy('artmediums', $object_type, array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'artmedium' ),
  ));

  register_taxonomy_for_object_type( 'artmediums', $object_type );
}

/* Participation taxonomy for profile searches */
add_action( 'init', 'aanv_participation_taxonomy', 0 );
 
function aanv_participation_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Participation', 'taxonomy general name' ),
    'singular_name' => _x( 'Participation', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Participation' ),
    'all_items' => __( 'All Participation' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Participation' ), 
    'update_item' => __( 'Update Participation' ),
    'add_new_item' => __( 'Add New Participation' ),
    'new_item_name' => __( 'New Participation Name' ),
    'separate_items_with_commas' => __( 'Separate Participation with commas' ),
    'add_or_remove_items' => __( 'Add or remove Participation' ),
    'menu_name' => __( 'Participation' ),
  ); 

  $object_type = array( 
    'aanv_profile'
  );
 
  register_taxonomy('participations', $object_type, array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'participation' ),
  ));

  register_taxonomy_for_object_type( 'participation', $object_type );
}
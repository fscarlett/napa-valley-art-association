<?php 

function aanv_post_types() {

//register Profile post type
  $profile_labels = array(
    'name'                => 'Artist Profiles',
    'singular_name'       => 'Artist Profile',
    'menu_name'           => 'Artist Public Profile',
    'name_admin_bar'      => 'Artist Profile',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Artist Profile',
    'new_item'            => 'New Artist Profile',
    'edit_item'           => 'Edit Artist Profile',
    'view_item'           => 'View Artist Profile',
    'all_items'           => 'All Artist Profiles',
    'search_items'        => 'Search For Artist Profiles',
    'parent_item_colon'   => 'Parent Profiles:',
    'not_found'           => 'No Artist Profile found.',
    'not_found_in_trash'  => 'No Artist Profile found in trash.',
    );
  $profile_args = array(
    'labels'              => $profile_labels,
    'description'         => 'Artist Profiles',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'profile' ),
    'capability_type'     => 'profile',
    'map_meta_cap'        => true,
    'exclude_from_search' => false,
    'has_archive'         => true,
    'hierarchical'        => false,
    'menu_position'       => null,
    'supports'            => array( 'title', 'author' ),
    'menu_icon'           => 'dashicons-admin-users',
    );

  register_post_type( 'aanv_profile', $profile_args );


//register Event post type
  $event_labels = array(
    'name'                => 'Events',
    'singular_name'       => 'Event',
    'menu_name'           => 'Events',
    'name_admin_bar'      => 'Event',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Event',
    'new_item'            => 'New Event',
    'edit_item'           => 'Edit Event',
    'view_item'           => 'View Event',
    'all_items'           => 'All Events',
    'search_items'        => 'Search For Events',
    'parent_item_colon'   => 'Parent Events:',
    'not_found'           => 'No Event found.',
    'not_found_in_trash'  => 'No Event found in trash.',
    );
  $event_args = array(
    'labels'              => $event_labels,
    'description'         => 'Events',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'event' ),
    'capability_type'     => 'page',
    'exclude_from_search' => false,
    'has_archive'         => true,
    'hierarchical'        => false,
    'menu_position'       => null,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-calendar',
    );

  register_post_type( 'aanv_event', $event_args );

}

add_action( 'init', 'aanv_post_types', 10 );

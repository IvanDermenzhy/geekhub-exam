<?php
    function register_my_post_types() {
        $labels = array(
            'name'               => _x( 'Slides', 'post type general name', 'geekhub-exam' ),
            'singular_name'      => _x( 'Slide', 'post type singular name', 'geekhub-exam' ),
            'menu_name'          => _x( 'Slides', 'admin menu', 'geekhub-exam' ),
            'name_admin_bar'     => _x( 'Slide', 'add new on admin bar', 'geekhub-exam' ),
            'add_new'            => _x( 'Add New', 'slide', 'geekhub-exam' ),
            'add_new_item'       => __( 'Add New Slide', 'geekhub-exam' ),
            'new_item'           => __( 'New Slide', 'geekhub-exam' ),
            'edit_item'          => __( 'Edit Slide', 'geekhub-exam' ),
            'view_item'          => __( 'View Slide', 'geekhub-exam' ),
            'all_items'          => __( 'All Slides', 'geekhub-exam' ),
            'search_items'       => __( 'Search Slides', 'geekhub-exam' ),
            'parent_item_colon'  => __( 'Parent Slides:', 'geekhub-exam' ),
            'not_found'          => __( 'No slides found.', 'geekhub-exam' ),
            'not_found_in_trash' => __( 'No slides found in Trash.', 'geekhub-exam' )
        );
        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'geekhub-exam' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'slide' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'taxonomies'         => array( 'category' ),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );
    register_post_type( 'slide', $args );
        $labels = array(
            'name'               => _x( 'Services', 'post type general name', 'geekhub-exam' ),
            'singular_name'      => _x( 'Service', 'post type singular name', 'geekhub-exam' ),
            'menu_name'          => _x( 'Services', 'admin menu', 'geekhub-exam' ),
            'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'geekhub-exam' ),
            'add_new'            => _x( 'Add New', 'service', 'geekhub-exam' ),
            'add_new_item'       => __( 'Add New Service', 'geekhub-exam' ),
            'new_item'           => __( 'New Service', 'geekhub-exam' ),
            'edit_item'          => __( 'Edit Service', 'geekhub-exam' ),
            'view_item'          => __( 'View Service', 'geekhub-exam' ),
            'all_items'          => __( 'All Services', 'geekhub-exam' ),
            'search_items'       => __( 'Search Services', 'geekhub-exam' ),
            'parent_item_colon'  => __( 'Parent Service:', 'geekhub-exam' ),
            'not_found'          => __( 'No service found.', 'geekhub-exam' ),
            'not_found_in_trash' => __( 'No services found in Trash.', 'geekhub-exam' )
        );
        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'geekhub-exam' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'service' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );
    register_post_type( 'service', $args );
        $labels = array(
            'name'               => _x( 'Clients', 'post type general name', 'geekhub-exam' ),
            'singular_name'      => _x( 'Client', 'post type singular name', 'geekhub-exam' ),
            'menu_name'          => _x( 'Clients', 'admin menu', 'geekhub-exam' ),
            'name_admin_bar'     => _x( 'Client', 'add new on admin bar', 'geekhub-exam' ),
            'add_new'            => _x( 'Add New', 'client', 'geekhub-exam' ),
            'add_new_item'       => __( 'Add New Client', 'geekhub-exam' ),
            'new_item'           => __( 'New Client', 'geekhub-exam' ),
            'edit_item'          => __( 'Edit Client', 'geekhub-exam' ),
            'view_item'          => __( 'View Client', 'geekhub-exam' ),
            'all_items'          => __( 'All Clients', 'geekhub-exam' ),
            'search_items'       => __( 'Search Clients', 'geekhub-exam' ),
            'parent_item_colon'  => __( 'Parent Client:', 'geekhub-exam' ),
            'not_found'          => __( 'No client found.', 'geekhub-exam' ),
            'not_found_in_trash' => __( 'No clients found in Trash.', 'geekhub-exam' )
        );
        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'geekhub-exam' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'client' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
        );
    register_post_type( 'client', $args );
    }
add_action( 'init', 'register_my_post_types' );
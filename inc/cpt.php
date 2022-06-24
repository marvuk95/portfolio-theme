<?php
function fwd_register_custom_post_types() {

    // Register Projects CPT
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name'),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'project' ),
        'add_new_item'       => __( 'Add New project' ),
        'new_item'           => __( 'New project' ),
        'edit_item'          => __( 'Edit project' ),
        'view_item'          => __( 'View project' ),
        'all_items'          => __( 'All projects' ),
        'search_items'       => __( 'Search projects' ),
        'parent_item_colon'  => __( 'Parent projects:' ),
        'not_found'          => __( 'No projects found.' ),
        'not_found_in_trash' => __( 'No projects found in Trash.' ),
        'archives'           => __( 'Project Archives'),
        'insert_into_item'   => __( 'Insert into project'),
        'uploaded_to_this_item' => __( 'Uploaded to this project'),
        'filter_item_list'   => __( 'Filter projects list'),
        'items_list_navigation' => __( 'Projects list navigation'),
        'items_list'         => __( 'Projects list'),
        'featured_image'     => __( 'Project featured image'),
        'set_featured_image' => __( 'Set project featured image'),
        'remove_featured_image' => __( 'Remove project featured image'),
        'use_featured_image' => __( 'Use as featured image'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
    );
    register_post_type( 'porftolio-projects', $args );
}
add_action( 'init', 'fwd_register_custom_post_types' );

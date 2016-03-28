<?php
add_action( 'init', 'register_cpt_cll_quote' );

function register_cpt_cll_quote() {

    $labels = array( 
        'name' => _x( 'quotes', 'cll-quote' ),
        'singular_name' => _x( 'quote', 'cll-quote' ),
        'add_new' => _x( 'Add New', 'cll-quote' ),
        'add_new_item' => _x( 'Add New quote', 'cll-quote' ),
        'edit_item' => _x( 'Edit quote', 'cll-quote' ),
        'new_item' => _x( 'New quote', 'cll-quote' ),
        'view_item' => _x( 'View quote', 'cll-quote' ),
        'search_items' => _x( 'Search quotes', 'cll-quote' ),
        'not_found' => _x( 'No quotes found', 'cll-quote' ),
        'not_found_in_trash' => _x( 'No quotes found in Trash', 'cll-quote' ),
        'parent_item_colon' => _x( 'Parent quote:', 'cll-quote' ),
        'menu_name' => _x( 'quotes', 'cll-quote' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Quote slider for homepage of cleverlittlelies.com',
        'supports' => array( 'editor', 'title' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => QUOTESDIRURL . 'img/cll-quote.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'cll-quote', $args );
}

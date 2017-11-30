<?php
function biography_custom_type_init() {
    $post_type = "biography";
    $labels = array(
        'name'               => 'Biographie',
        'singular_name'      => 'Biographie',
        'all_items'          => 'Toutes les biographie',
        'add_new'            => 'Ajouter une biographie',
        'add_new_item'       => 'Ajouter une nouvelle biographie',
        'edit_item'          => "Editer la biographie",
        'new_item'           => 'Nouvelle biographie',
        'view_item'          => "Voir la biographie",
        'search_items'       => 'Chercher une biographie',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Biographieparent :',
        'menu_name'          => 'Biographie',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','nom','thumbnail','editor', 'excerpt', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-id-alt',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type($post_type, $args );

}
add_action( 'init', 'biography_custom_type_init' );
<?php
function gallery_custom_type_init() {
    $post_type = "gallery";
    $labels = array(
        'name'               => 'Galerie',
        'singular_name'      => 'Galerie',
        'all_items'          => 'Toutes les galeries',
        'add_new'            => 'Ajouter une galerie',
        'add_new_item'       => 'Ajouter une nouvelle galerie',
        'edit_item'          => "Editer la galerie",
        'new_item'           => 'Nouvelle galerie',
        'view_item'          => "Voir la galerie",
        'search_items'       => 'Chercher une galerie',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'galerieparent :',
        'menu_name'          => 'Galerie',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','nom','thumbnail','editor', 'excerpt', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-images-alt2',
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
add_action( 'init', 'gallery_custom_type_init' );
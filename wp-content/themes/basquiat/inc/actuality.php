<?php
function actuality_custom_type_init() {
    $post_type = "actuality";
    $labels = array(
        'name'               => 'Actualités',
        'singular_name'      => 'Actualités',
        'all_items'          => 'Toutes les actualités',
        'add_new'            => 'Ajouter une actualité',
        'add_new_item'       => 'Ajouter une nouvelle actualité',
        'edit_item'          => "Editer l'actualité",
        'new_item'           => 'Nouvelle actualité',
        'view_item'          => "Voir l'actualité",
        'search_items'       => 'Chercher une actualité',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Actualitéparent :',
        'menu_name'          => 'Actualités',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','nom','thumbnail','editor', 'excerpt', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-calendar-alt',
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
add_action( 'init', 'actuality_custom_type_init' );
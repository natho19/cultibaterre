<?php

function cultibaterre_custom_post_types() {
    $array = [
        'label' => 'Service',
        'labels' => [
            'name'                  => 'Services',
            'singular_name'         => 'Service',
            'menu_name'             => 'Services',
            'name_admin_bar'        => 'Services',
            'archives'              => 'Archives services',
            'attributes'            => 'Attributs services',
            'parent_item_colon'     => 'Service parent',
            'all_items'             => 'Tous les services',
            'add_new_item'          => 'Ajouter un nouveau service',
            'add_new'               => 'Ajouter un nouveau service',
            'new_item'              => 'Nouveau service',
            'edit_item'             => 'Modifier le service',
            'update_item'           => 'Mettre à jour le service',
            'view_item'             => 'Voir le service',
            'view_items'            => 'Voir les services',
            'search_items'          => 'Rechercher un service',
            'not_found'             => 'Pas trouvé',
            'not_found_in_trash'    => 'Pas trouvé dans la corbeille',
            'featured_image'        => 'Image principale',
            'set_featured_image'    => 'Ajouter une image principale',
            'remove_featured_image' => 'Supprimer l\'image principale',
            'use_featured_image'    => 'Utiliser comme image principale',
            'insert_into_item'      => 'Ajouter dans services',
            'items_list'            => 'liste des services'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'services'],
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-screenoptions',
        'publicly_queryable' => true,
        'capability_type' => 'post', 
        'query_var' => true
    ];

    register_post_type('service', $array);
}
add_action('init', 'cultibaterre_custom_post_types');
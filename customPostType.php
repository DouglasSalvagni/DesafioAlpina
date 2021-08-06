<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'super',
    array(
      'labels' => array(
        'name' => __( 'Supers' ),
        'singular_name' => __( 'Super' )
      ),
      'public' => true,
    )
  );
}


add_action( 'init', 'create_post_type_carousels' );
function create_post_type_carousels() {
    $labels = array(
        'name' => _x('Carousels', 'post type general name'),
        'singular_name' => _x('Carousel', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Carousel'),
        'add_new_item' => ('Adicionar Novo Carousel'),
        'edit_item' => ('Editar Carousel'),
        'new_item' => ('Novo Carousels'),
        'all_items' => ('Todos os Carousels'),
        'view_item' => ('Ver Carousel'),
        'search_items' => ('Pesquisar Carousels'),
        'not_found' =>  ('Nenhum Carousel Encontrado'),
        'not_found_in_trash' => ('Nenhum Carousel na Lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Carousels'
    );
    register_post_type( 'carousel',
        array(
            'labels' => $labels,
            'exclude_from_search' => true,
            'public' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'has_archive' => 'Carousels',
            'menu_icon' => '',
            'rewrite' => array(
                'slug' => 'Carousels',
                'with_front' => false,
            ),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title')
        )
    );
}

?>
<?php

add_action( 'add_meta_boxes', 'vinil_meta_box_add' );

function vinil_meta_box_add() {

    add_meta_box( 'my-meta-box-id', 'Meu primeiro Meta Box', 'vinil_meta_box_vinil', 'super', 'normal', 'high' ); 
}

    

function vinil_meta_box_vinil() 
{
    ?>
        <p>
            <label for="texto_meta_box">Text Label</label>
            <input type="text" name="texto_meta_box" id="texto_meta_box" />
        </p>
    <?php
}

// add_action( 'add_meta_boxes', 'wp_register_meta_boxes' );
add_filter( 'rwmb_meta_boxes', 'wp_register_meta_boxes' );
function wp_register_meta_boxes( $meta_boxes ){


    $meta_boxes[] = array(
        'title'      => 'Informações',
        'post_types' => array('carousel'),
        'autosave'   => true,
        'fields'     => array(
            array(
                'name'             => __( 'Imagem:', 'wp' ),
                'id'               => 'carousel_img',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'name'  => __( 'Link da imagem:', 'wp' ),
                'id'    => "carousel_link",
                'type' => 'text_url',
            ),
        ),
    );

    return $meta_boxes;
}
    

?>
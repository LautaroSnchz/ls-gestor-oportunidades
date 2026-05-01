<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class LS_CPT_Oportunidades {

    public function register() {
        add_action( 'init', array( $this, 'create_cpt' ) );
    }

    public function create_cpt() {
        $labels = array(
            'name'                  => _x( 'Oportunidades', 'Post Type General Name', 'ls-gestor-oportunidades' ),
            'singular_name'         => _x( 'Oportunidad', 'Post Type Singular Name', 'ls-gestor-oportunidades' ),
            'menu_name'             => __( 'Oportunidades', 'ls-gestor-oportunidades' ),
            'all_items'             => __( 'Todas las Oportunidades', 'ls-gestor-oportunidades' ),
            'add_new_item'          => __( 'Añadir nueva Oportunidad', 'ls-gestor-oportunidades' ),
            'edit_item'             => __( 'Editar Oportunidad', 'ls-gestor-oportunidades' ),
        );

        $args = array(
            'label'                 => __( 'Oportunidad', 'ls-gestor-oportunidades' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'excerpt', 'custom-fields' ),
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-portfolio', // Ícono de maletín
            'has_archive'           => true,
            'show_in_rest'          => true, // CRÍTICO para la API y Gutenberg
        );

        register_post_type( 'oportunidad', $args );
    }
}
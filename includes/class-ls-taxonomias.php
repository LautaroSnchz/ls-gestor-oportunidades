<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class LS_Taxonomias {

    public function register() {
        add_action( 'init', array( $this, 'create_taxonomies' ) );
    }

    public function create_taxonomies() {
        $labels = array(
            'name'              => _x( 'Modalidades', 'taxonomy general name', 'ls-gestor-oportunidades' ),
            'singular_name'     => _x( 'Modalidad', 'taxonomy singular name', 'ls-gestor-oportunidades' ),
            'all_items'         => __( 'Todas las Modalidades', 'ls-gestor-oportunidades' ),
            'edit_item'         => __( 'Editar Modalidad', 'ls-gestor-oportunidades' ),
            'add_new_item'      => __( 'Añadir Nueva Modalidad', 'ls-gestor-oportunidades' ),
            'menu_name'         => __( 'Modalidad', 'ls-gestor-oportunidades' ),
        );

        $args = array(
            'hierarchical'      => true, // Funciona como categorías con checkbox
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true, // CRÍTICO para la API
        );

        // Vinculamos la taxonomía 'modalidad' al CPT 'oportunidad'
        register_taxonomy( 'modalidad', array( 'oportunidad' ), $args );
    }
}
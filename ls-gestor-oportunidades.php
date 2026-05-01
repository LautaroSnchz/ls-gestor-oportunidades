<?php
/**
 * Plugin Name: LS Gestor de Oportunidades
 * Description: Sistema avanzado de gestión mediante CPTs y WP REST API.
 * Version: 1.0.0
 * Author: Lautaro
 * Text Domain: ls-gestor-oportunidades
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Cargar dependencias
require_once plugin_dir_path( __FILE__ ) . 'includes/class-ls-cpt-oportunidades.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-ls-taxonomias.php';

// Inicializar las clases
function ls_gestor_init() {
    $cpt = new LS_CPT_Oportunidades();
    $cpt->register();

    $tax = new LS_Taxonomias();
    $tax->register();
}
add_action( 'plugins_loaded', 'ls_gestor_init' );
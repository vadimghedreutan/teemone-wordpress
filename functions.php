<?php

// Setup
define('TEM_DEV_MODE', true);

// includes
include( get_template_directory() . '/inc/front/enqueue.php' );
include( get_template_directory() . '/inc/setup.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'tem_enqueue' );
add_action( 'after_setup_theme', 'tem_setup_theme' );

//
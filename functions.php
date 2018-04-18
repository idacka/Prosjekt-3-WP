<?php
function my_theme_enqueue_styles() {

    $parent_style = 'kahuna-style'; 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

define ( "_CRYOUT_THEME_NAME", "kahuna" );
define ( "_CRYOUT_THEME_VERSION", "1.1.2" );

require_once( get_template_directory() . "/admin/main.php" ); 		    // Admin side

// Frontend side
require_once( get_template_directory() . "/includes/setup.php" );       // Setup and init theme
require_once( get_template_directory() . "/includes/styles.php" );      // Register and enqeue css styles and scripts
require_once( get_template_directory() . "/includes/loop.php" );        // Loop functions
require_once( get_template_directory() . "/includes/comments.php" );    // Comment functions
require_once( get_template_directory() . "/includes/core.php" );        // Core functions
require_once( get_template_directory() . "/includes/hooks.php" );       // Hooks
require_once( get_template_directory() . "/includes/meta.php" );        // Custom Post Metas
require_once( get_template_directory() . "/includes/landing-page.php" );// Landing Page outputs

?>
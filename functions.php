<?php

function wpbootstrap_scripts_with_jquery()
{

    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


add_theme_support( 'custom-header', $args );
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => __( 'My Custom Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );
the_social_links();
?>


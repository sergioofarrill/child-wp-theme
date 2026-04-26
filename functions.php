<?php

function blu_theme_assets() {
    // Include CSS
    wp_enqueue_style( 
        'style', 
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array(), 
        '1.0', 
        'all' );
    
    wp_enqueue_style( 
        'output', 
        get_stylesheet_directory_uri() . '/assets/css/output.css', 
        array(), 
        '1.0', 
        'all' );

    // Include JavaScript
    wp_enqueue_script( 
    'custom',
    get_stylesheet_directory_uri() . '/assets/js/custom.js', 
    array(), 
    '1.0', 
    false
    );
}
add_action( 'wp_enqueue_scripts', 'blu_theme_assets' );

?>


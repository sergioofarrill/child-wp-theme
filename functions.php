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

    function enqueue_cloudflare_fontawesome() {
    wp_enqueue_style( 
        'font-awesome-cloudflare', 
        'https://cloudflare.com' );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_cloudflare_fontawesome' );


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


<?php

// https://woocommerce.com/document/woocommerce-theme-developer-handbook/#section-5

add_action( 'after_setup_theme', function() {

    add_theme_support( 'woocommerce' );

    add_theme_support( 'title-tag' );
});

add_action('wp_enqueue_scripts', function() {

    // header
    wp_enqueue_style( 
        'eshop-google-fonts', 
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700&display=swap' 
    );

    wp_enqueue_style( 
        'eshop-bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' 
    );

    wp_enqueue_style( 
        'eshop-font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' 
    );

    wp_enqueue_style( 
        'eshop-owl-carusel', 
        get_template_directory_uri() . '/assets/owlcarusel/owl.carousel.min.css' 
    );

    wp_enqueue_style( 
        'eshop-owl-carusel-theme', 
        get_template_directory_uri() . '/assets/owlcarusel/owl.theme.default.min.css' 
    );

    wp_enqueue_style( 
        'eshop-main', 
        get_template_directory_uri() . '/assets/css/main.css' 
    );


    // footer
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 
        'eshop-bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', 
        array(),
        false,
        true 
    );

    wp_enqueue_script( 
        'eshop-owl-carusel', 
        get_template_directory_uri() . '/assets/owlcarusel/owl.carousel.min.js',  
        array(),
        false,
        true  
    );

    wp_enqueue_script( 
        'eshop-main', 
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        false,
        true 
    );
});

require_once get_template_directory() . '/incs/woocommerce-hooks.php';
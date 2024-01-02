<?php

// https://woocommerce.com/document/woocommerce-theme-developer-handbook/#section-5
// https://codex.wordpress.org/Theme_Customization_API
// https://woocommerce.com/document/woocommerce-shortcodes/#products

add_action( 'after_setup_theme', function() {

    load_textdomain( 'eshop', get_template_directory() . '/languages' );

    add_theme_support( 'woocommerce' );

    add_theme_support( 'title-tag' );

    register_nav_menus(

        array(

            'header-menu' => __( 'Header menu', 'eshop' ),

        )
    );
});

add_action('widgets_init', function() {

    register_sidebar(

		array(
            
			'name'          => __( 'Sidebar', 'eshop' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'eshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
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

function eshop_dump( $data ) {

    echo "<pre>" . print_r( $data, 1 ) . "</pre>";
}

require_once get_template_directory() . '/incs/woocommerce-hooks.php';
require_once get_template_directory() . '/incs/class-eshop-header-menu.php';
require_once get_template_directory() . '/incs/customizer.php';
require_once get_template_directory() . '/incs/cpt.php';
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport"
	      content="
                   width=device-width, 
                   user-scalable=no, 
                   initial-scale=1.0, 
                   maximum-scale=1.0, 
                   minimum-scale=1.0"
    >
	<meta http-equiv="X-UA-Compatible" 
          content="ie=edge"
    >
    <!-- Google Font: Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Favicon -->
    <link 
        rel="apple-touch-icon" 
        sizes="180x180" 
        href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/apple-touch-icon.png"
    >
    <link 
        rel="icon" 
        type="image/png" 
        sizes="32x32" 
        href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/favicon-32x32.png"
    >
    <link 
        rel="icon" 
        type="image/png" 
        sizes="16x16" 
        href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/favicon-16x16.png"
    >
    <link 
        rel="manifest" 
        href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/site.webmanifest"
    >

    <!-- Primary Meta Tags -->
    <title>Legrand | Lighting equipment buy in Astana</title>
    <meta name="title" content="Legrand | Lighting equipment buy in Astana" />
    <meta name="description" content="In our online store, you can get acquainted and, in the future, purchase high-quality lighting equipment: SPOTS | MAGNETIC TRACKS | SOCKETS | SCONCES | TOUCH SWITCHES" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="Legrand | Lighting equipment buy in Astana" />
    <meta property="og:description" content="In our online store, you can get acquainted and, in the future, purchase high-quality lighting equipment: SPOTS | MAGNETIC TRACKS | SOCKETS | SCONCES | TOUCH SWITCHES" />
    <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="" />
    <meta property="twitter:title" content="Legrand | Lighting equipment buy in Astana" />
    <meta property="twitter:description" content="In our online store, you can get acquainted and, in the future, purchase high-quality lighting equipment: SPOTS | MAGNETIC TRACKS | SOCKETS | SCONCES | TOUCH SWITCHES" />
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>

    <?php 
        global $eshop_theme_options;
        $eshop_theme_options = eshop_theme_options(); 
    ?>

    <div class="wrapper">
        <header class="header">
            <div class="header-top py-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <div class="header-top-phone d-flex align-items-center h-100">
                                <?php if ( ! empty( $eshop_theme_options['phone'] ) ): ?>
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                    <a 
                                        href="tel:+<?php echo str_replace( 
                                            array( ' ', '-', '+' ), 
                                            array( '', '', '' ), 
                                            $eshop_theme_options['phone'] 
                                        ) ?>" 
                                        class="ms-2"
                                    >
                                        <?php echo $eshop_theme_options['phone'] ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-sm-4 d-none d-sm-block">
                            <ul class="social-icons d-flex justify-content-center">
                                <?php if ( ! empty( $eshop_theme_options['whatsapp'] ) ): ?>
                                    <li>
                                        <a href="<?php echo $eshop_theme_options['whatsapp'] ?>">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ( ! empty( $eshop_theme_options['telegram'] ) ): ?>
                                    <li>
                                        <a href="<?php echo $eshop_theme_options['telegram'] ?>">
                                            <i class="fa-brands fa-telegram"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ( ! empty( $eshop_theme_options['instagram'] ) ): ?>
                                    <li>
                                        <a href="<?php echo $eshop_theme_options['instagram'] ?>">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ( ! empty( $eshop_theme_options['tiktok'] ) ): ?>
                                    <li>
                                        <a href="<?php echo $eshop_theme_options['tiktok'] ?>">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        
                        <div class="col-6 col-sm-4">
                            <div class="header-top-account d-flex justify-content-end">
                                <div class="btn-group me-2">
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Account
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="login.html">Sign In</a></li>
                                        <li><a class="dropdown-item" href="register.html">Sign Up</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        En
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">En</a></li>
                                        <li><a class="dropdown-item" href="#">Ru</a></li>
                                        <li><a class="dropdown-item" href="#">Kz</a></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-middle bg-white py-4">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4">
                            <a href="<?php echo home_url( '/' ) ?>" class="header-logo h1"><?php bloginfo( 'name' ) ?></a>
                        </div>
                        
                        <div class="col-md-4 order-md-2 cart-buttons text-end d-none d-md-block">
                            <button 
                                class="btn p-1 cart-open" 
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasCart" 
                                aria-controls="offcanvasCart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">
                                        <?php //echo WC()->cart->get_cart_contents_count(); ?>
                                        <?php echo count( WC()->cart->get_cart() ); ?>
                                    </span>
                            </button>
                        </div>

                        <div class="col-6 col-md-4 order-md-1">
                            <?php aws_get_search_form( true ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="header-bottom sticky-top" id="header-nav">
            <nav class="navbar navbar-expand-md bg-dark" data-bs-theme="dark">
                <div class="container-fluid">
                    <button 
                        class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="offcanvas" 
                        data-bs-target="#offcanvasNavbar" 
                        aria-controls="offcanvasNavbar" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div 
                        class="offcanvas offcanvas-start" 
                        id="offcanvasNavbar" 
                        tabindex="-1" 
                        aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Catalog</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body">
                                <?php 

                                    wp_nav_menu( array(

                                        'theme_location' => 'header-menu',
                                        'container' => false,
                                        'menu_class' => 'navbar-nav',
                                        'walker' => new Eshop_Header_Menu(),
                                    ) );
                                ?>
                            </div>
                    </div>

                    <div class="d-block d-md-none">
                        <button 
                            class="btn p-1 cart-open"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasCart" 
                            aria-controls="offcanvasCart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">
                                    <?php //echo WC()->cart->get_cart_contents_count(); ?>
                                    <?php echo count( WC()->cart->get_cart() ); ?>
                                </span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasCartLabel">Your cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <?php woocommerce_mini_cart(); ?>
<!--
    https://woocommerce.github.io/code-reference/packages/WooCommerce.html
    https://woocommerce.com/document/show-cart-contents-total/
-->
            </div>
        </div>
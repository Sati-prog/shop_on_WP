<?php

add_action( 'customize_register', function($wp_customize) {

    $wp_customize->add_section('eshop_theme_options', array( 

        'title' => __( 'Theme options', 'eshop' ),
        'priority' => 10,
    ) );

    // phone
    $wp_customize->add_setting( 'eshop_phone' );
    $wp_customize->add_control( 'eshop_phone', array( 

        'label' => __( 'Phone in header', 'eshop' ),
        'section' => 'eshop_theme_options'
    ) );

    // WhatsApp
    $wp_customize->add_setting( 'eshop_whatsapp' );
    $wp_customize->add_control( 'eshop_whatsapp', array( 

        'label' => __( 'WhatsApp link', 'eshop' ),
        'section' => 'eshop_theme_options'
    ) );

    // Telegram
    $wp_customize->add_setting( 'eshop_telegram' );
    $wp_customize->add_control( 'eshop_telegram', array( 

        'label' => __( 'Telegram link', 'eshop' ),
        'section' => 'eshop_theme_options'
    ) );

    // Instagram
    $wp_customize->add_setting( 'eshop_instagram' );
    $wp_customize->add_control( 'eshop_instagram', array( 

        'label' => __( 'Instagram link', 'eshop' ),
        'section' => 'eshop_theme_options'
    ) );

    // TikTok
    $wp_customize->add_setting( 'eshop_tiktok' );
    $wp_customize->add_control( 'eshop_tiktok', array( 

        'label' => __( 'TikTok link', 'eshop' ),
        'section' => 'eshop_theme_options'
    ) );

} );

function eshop_theme_options() {

    return array(

        'phone' => get_theme_mod( 'eshop_phone' ),
        'whatsapp' => get_theme_mod( 'eshop_whatsapp' ),
        'telegram' => get_theme_mod( 'eshop_telegram' ),
        'instagram' => get_theme_mod( 'eshop_instagram' ),
        'tiktok' => get_theme_mod( 'eshop_tiktok' ),
    );
}
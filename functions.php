<?php

function hsj_theme(){
  wp_enqueue_style('style' , get_theme_file_uri('/css/style2.css'));
  wp_enqueue_style('slide', get_theme_file_uri('/css/slide.css'));
}

add_action('wp_enqueue_scripts', 'hsj_theme');

// setting Nomor kontak wa, email, telp

function hsj_customize($wp_customize) {
        //    kontak wa
    $wp_customize->add_section('kontak_hsj', array(
        'title' => 'Kontak Hsj'
    ));
    $wp_customize->add_setting('wa_setting', array(
        'default' => '+62 8570-9005-738'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wa_control', array(
        'label' => 'No whatsapp',
        'section' => 'kontak_hsj',
        'settings' => 'wa_setting',
        'type' => 'text'

    )));
          // kontak email

    $wp_customize->add_setting('email_setting', array(
        'default' => 'sales@email.com'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email_control', array(
        'label' => 'Email',
        'section' => 'kontak_hsj',
        'settings' => 'email_setting',
        'type' => 'text'

    )));

        // kontak telphone

        $wp_customize->add_setting('telp_setting', array(
            'default' => '+62 8576-5000-123'
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'telp_control', array(
            'label' => 'No telp',
            'section' => 'kontak_hsj',
            'settings' => 'telp_setting',
            'type' => 'text'
    
        )));

}

add_action('customize_register', 'hsj_customize');

//end setting

function hsj_post_type() {
    register_post_type('slider', array(
        'public' => true,
        'supports' => array(
            'title'),

        'labels' => array(
            'name' => 'Slider',
            'add_new_item' => 'add new slider',
            'edit_item' => 'edit slider',
            'all_items' => 'all sliders'
        ),
        'menu_icon' => 'dashicons-images-alt'

    ));


}


add_action('init', 'hsj_post_type');


// ini post produk

function hsj_produk_type() {
    register_post_type('produk', array(
        'public' => true,
        'supports' => array(
            'title', 'editor'),
            
        'labels' => array(
            'name' => 'Produk',
            'add_new_item' => 'add new Produk',
            'edit_item' => 'edit Produk',
            'all_items' => 'all Produk'
        ),
        'menu_icon' => 'dashicons-cart'

    ));


}

add_action('init', 'hsj_produk_type');



?>
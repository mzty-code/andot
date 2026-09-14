<?php
add_action('wp_enqueue_scripts', 'andot_enqueue_assets');

function andot_enqueue_assets() {

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    // リセットCSS
    wp_enqueue_style(
        'reset-style',
        'https://unpkg.com/ress/dist/ress.min.css',
        [],
        null
    );

    // slick-carousel のCSS
    wp_enqueue_style(
        'slick-style',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        [],
        '1.8.1'
    );
    wp_enqueue_style(
        'slick-theme-style',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
        ['slick-style'],
        '1.8.1'
    );

    // テーマの style.css（必須）
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        ['reset-style'],
        filemtime(get_template_directory() . '/style.css')
    );

    // あなたの main.css（andot_WP/css/ 内）
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/main.css',
        ['theme-style', 'slick-style', 'slick-theme-style', 'google-fonts'],
        filemtime(get_template_directory() . '/css/main.css')
    );

    // jQueryをCDNから読み込み
    wp_deregister_script('jquery');
    wp_register_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        [],
        '3.6.0',
        true
    );
    wp_enqueue_script('jquery');

    // slick.js
    wp_enqueue_script(
        'slick-js',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        ['jquery'],
        '1.8.1',
        true
    );

    // あなたの main.js
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        ['jquery', 'slick-js'],
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );
}

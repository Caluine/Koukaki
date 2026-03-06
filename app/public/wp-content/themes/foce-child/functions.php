<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

    // CSS du parent
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // CSS du thème enfant
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );
}


// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// Appel du fichier js modification
function js_enfant()
{
    wp_enqueue_script(
        'modification',
        get_stylesheet_directory_uri() . '/js/modification.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'js_enfant');

// On charge le coverflow JS 

function koukaki_enqueue_swiper() {

    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );

    wp_enqueue_script(
        'koukaki-carrousel',
        get_stylesheet_directory_uri() . '/js/carroussel.js',
        array('swiper-js'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'koukaki_enqueue_swiper');
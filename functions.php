<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');


function childhood_scripts(){
    wp_enqueue_style('childhood-style', get_stylesheet_uri() ); // add css styles    

    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true ); // add css scripts
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__nav-item';

        if($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }
    };

    return $atts;
}


add_filter('wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2);

function acf_add_allowed_iframe_tag($tags, $context) {
    if ($context === 'acf') {
        $tags['iframe'] = array(
            'src' => true,
            'height' => true,
            'width' => true,
            'frameborder' => true,
            'allowfullscreen' => true,
        );
    }
    return $tags;
}

?>
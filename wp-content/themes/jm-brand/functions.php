<?php
function jm_brand_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'jm-brand-theme'),
    ));
}
add_action('after_setup_theme', 'jm_brand_theme_setup');

function jm_brand_theme_scripts() {

    // Enqueue Default Theme CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );

    // Enqueue custom stylesheets
    wp_enqueue_style( 'brand-styles', get_template_directory_uri() . '/css/brand-styles.css' );
    
    // Enqueue FontAwesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/a1424b8a17.js', array(), null, true);

    // Enqueue jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), null, true);

    // Enqueue Popper.js
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js', array(), null, true);

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array('jquery', 'popper'), null, true);

    // Enqueue GSAP
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);

    // Enqueue ScrollToPlugin
    wp_enqueue_script('scroll-to-plugin', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js', array('gsap'), null, true);

    // Enqueue custom scripts
    wp_enqueue_script('nav-scripts', get_template_directory_uri() . '/js/nav_scripts.js', array('jquery', 'bootstrap-js', 'gsap'), null, true);
    
    // Enqueue page-specific scripts
    if (is_page('projects')) {
        wp_enqueue_script('projects-scripts', get_template_directory_uri() . '/js/projects_scripts.js', array('jquery', 'bootstrap-js', 'gsap'), null, true);
    }

}
add_action('wp_enqueue_scripts', 'jm_brand_theme_scripts');

require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/includes/class-jm-bootstrap-navwalker.php';
?>

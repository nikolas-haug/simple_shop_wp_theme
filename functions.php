<?php  

// Add theme support
function simple_shop_theme_setup() {
    add_theme_support( 'custom-logo' );

    // Nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action( 'after_setup_theme', 'simple_shop_theme_setup' );

// Enqueue theme stylesheets and scripts
function simple_shop_theme_scripts() {
    global $ver_num; // define global variable for the version number
    $ver_num = mt_rand(); // on each call/load of the style the $ver_num will get a different value

    // or: only get the version number associated with the main theme stylesheet (better for browser cacheing essential assets)
    $theme = wp_get_theme(  );
    define('THEME_VERSION', $theme->Version); // gets version written in your style.css

    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/css/foundation.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri(  ), array(), THEME_VERSION );

}
add_action( 'wp_enqueue_scripts', 'simple_shop_theme_scripts' );

// Widget locations
function simple_shop_init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="callout">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Showcase',
        'id' => 'showcase',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));
}
add_action( 'widgets_init', 'simple_shop_init_widgets' );
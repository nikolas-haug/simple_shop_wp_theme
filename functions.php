<?php  

require_once('widgets/class-wp-widget-categories.php');

// Add theme support
function simple_shop_theme_setup() {
    add_theme_support( 'custom-logo' );

    // Featured image support
    add_theme_support( 'post-thumbnails' );

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

// Register widgets
function simple_shop_register_widgets() {
    register_widget( 'WP_Widget_Categories_Custom' );
}
add_action( 'widgets_init', 'simple_shop_register_widgets' );

/**
 * Register meta boxes.
 */
// function hcf_register_meta_boxes()
// {
//     add_meta_box('hcf-1', __('Add Date and Link to Show *(date required)', 'hcf'), 'hcf_display_callback', 'page');
// }
// add_action('add_meta_boxes', 'hcf_register_meta_boxes');

// // add_filter( 'use_block_editor_for_post_type', function( $enabled, $post_type ) {
// //     return 'page' === $post_type ? false : $enabled;
// // }, 10, 2 );

// add_filter( 'use_block_editor_for_post', '__return_false' );

// function change_post_menu_label() {
//     global $menu;
//     global $submenu;
//     $menu[5][0] = 'Contacts';
//     $submenu['edit.php'][5][0] = 'Contacts';
//     $submenu['edit.php'][10][0] = 'Add Contacts';
//     $submenu['edit.php'][15][0] = 'Status'; // Change name for categories
//     $submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
//     echo '';
// }

// function change_post_object_label() {
//     global $wp_post_types;
//     $labels = &$wp_post_types['post']->labels;
//     $labels->name = 'Contacts';
//     $labels->singular_name = 'Contact';
//     $labels->add_new = 'Add Contact';
//     $labels->add_new_item = 'Add Contact';
//     $labels->edit_item = 'Edit Contacts';
//     $labels->new_item = 'Contact';
//     $labels->view_item = 'View Contact';
//     $labels->search_items = 'Search Contacts';
//     $labels->not_found = 'No Contacts found';
//     $labels->not_found_in_trash = 'No Contacts found in Trash';
// }
// add_action( 'init', 'change_post_object_label' );
// add_action( 'admin_menu', 'change_post_menu_label' );
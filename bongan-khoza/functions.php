<?php
// Enqueue Bootstrap CSS and JS
function bongan_khoza_enqueue_scripts() {


    //custom css
    wp_enqueue_style('bcustom-style', get_template_directory_uri() . '/assets/css/custom-style.css', array(), '1.0', 'all');
    // Bootstrap CSS
    //wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');

    
    
    // Bootstrap JS (Popper.js and Bootstrap)
    wp_enqueue_script('bootstrap-bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'bongan_khoza_enqueue_scripts');

//Menus
function mytheme_register_nav_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'your-text-domain' ),
        'footer' => __( 'Footer Menu', 'your-text-domain' )
    )); 
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menus' );

function mytheme_widgets_init() {
    register_sidebar( array (
        'name' => __( 'Main Sidebar', 'your-text-domain' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action( 'widgets_init', 'mytheme_widgets_init' );


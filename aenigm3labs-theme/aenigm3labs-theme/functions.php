<?php
function enqueue_custom_scripts() {
    // Enqueue common styles (Bootstrap and Font Awesome) for all pages
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    // Enqueue common scripts (Bootstrap) for all pages
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Get the current page template to determine which page is being loaded
    $template = get_page_template_slug();

    // Enqueue styles and scripts for CRO Page (using CRO.php template)
    if ($template === 'cro-page-template' || is_page_template('CRO.php')) {
        // Enqueue CSS for CRO Page
        wp_enqueue_style('theme-style-cro', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0.0');
        
        // Enqueue JS for CRO Page
        wp_enqueue_script('theme-script-cro', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    }

    // Enqueue styles and scripts for Home Page (using Home.php template)
    elseif ($template === 'home-page-template' || is_page_template('Home.php')) {
        // Enqueue CSS for Home Page
        wp_enqueue_style('theme-style-home', get_stylesheet_directory_uri() . '/css/H-styles.css', array(), '1.0.0');
        
        // Enqueue JS for Home Page
        wp_enqueue_script('theme-script-home', get_stylesheet_directory_uri() . '/js/H-script.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Register Menus
function register_custom_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
}
add_action('init', 'register_custom_menus');
?>




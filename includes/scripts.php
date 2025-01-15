<?php
// Exit if accessed directly, to prevent unauthorized access and follow better security practices.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register and load CSS styles
function theme_styles() {
    wp_register_style('main_stylesheet', THEMEROOT . '/assets/css/main.min.css', '', '1.0', 'all');
    wp_register_style('normalize', THEMEROOT . '/assets/css/normalize.css', '', '1.0', 'all');
    wp_enqueue_style('normalize');
    wp_enqueue_style('main_stylesheet');
}
add_action('wp_enqueue_scripts', 'theme_styles');


function enqueue_custom_section_scripts() {
    wp_enqueue_script('custom-scroll-section', get_template_directory_uri() . '/assets/js/scroll-section.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_section_scripts');




// Register and enqueue AJAX scripts
function enqueue_ajax_scripts() {
    // Enqueue primary AJAX script
    wp_enqueue_script('ajax-packages', get_template_directory_uri() . '/assets/js/ajax-packages.js', ['jquery'], null, true);

    // Enqueue modal-specific AJAX script
    wp_enqueue_script('modal-ajax-packages', get_template_directory_uri() . '/assets/js/modal-ajax-package.js', ['jquery'], null, true);

    // Localize ajax_params for both scripts
    wp_localize_script('ajax-packages', 'ajax_params', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
    wp_localize_script('modal-ajax-packages', 'ajax_params', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_scripts');





?>



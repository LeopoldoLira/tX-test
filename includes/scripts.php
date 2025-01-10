<?
// Exit if accessed directly, to prevent Unauthorized access and following better security practices.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Registering and loading style scripts from the CSS folder to load the scripts across the whole website.

function theme_styles(){
    wp_register_style('main_stylesheet', THEMEROOT . '/assets/css/main.min.css', '', '1.0', 'all');
    wp_register_style('normalize',THEMEROOT . '/assets/css/normalize.css', '', '1.0', 'all');
    wp_enqueue_style('normalize');
    wp_enqueue_style('main_stylesheet');

}

add_action('wp_enqueue_scripts','theme_styles');

?>
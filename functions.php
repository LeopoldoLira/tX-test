<?

// Exit if accessed directly, to prevent Unauthorized access and following better security practices.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define THEMEROOT constant to use it on mulitple php scripts across the whole theme.
define('THEMEROOT', get_stylesheet_directory_uri());

require_once('includes/scripts.php');

//Disabling Default emojis scripts from wordpress for better performance since scripts are not needed for this theme.
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );  
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis' );
?>
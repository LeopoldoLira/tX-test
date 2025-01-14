<?
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Internet Packages',
        'menu_title'    => 'Internet Packages',
        'menu_slug'     => 'internet-packages',
        'capability'    => 'manage_options', // Only admins can access by default
        'redirect'      => false, // Prevent redirection to subpages
    ));
}
?>

<?
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Postal Code',
        'menu_title'    => 'Postal Code',
        'menu_slug'     => 'postal-code',
        'capability'    => 'manage_options', // Only admins can access by default
        'redirect'      => false, // Prevent redirection to subpages
    ));
}
?>
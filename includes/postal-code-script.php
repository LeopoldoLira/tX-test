<?php
// Retrieve the postal codes from the ACF options page
$fiber_postal_codes = array_column(get_field('fibre_postal_codes', 'option'), 'postal_code'); // Extract 'postal_code' field
$non_fiber_postal_codes = array_column(get_field('non_fibre_postal_codes', 'option'), 'postal_code'); // Extract 'postal_code' field

function load_packages_by_zip() {
    global $fiber_postal_codes, $non_fiber_postal_codes; // Access global variables

    $postal_code = $_POST['postal_code']; // Get the postal code from AJAX request

    // Check the postal code and load the appropriate template part
    if (in_array($postal_code, $fiber_postal_codes)) {
        get_template_part('template-parts/fiber-packages');
    } elseif (in_array($postal_code, $non_fiber_postal_codes)) {
        get_template_part('template-parts/non-fiber-packages');
    } else {
        get_template_part('template-parts/non-serviceable-areas');
    }
    wp_die();
}

add_action('wp_ajax_load_packages', 'load_packages_by_zip');
add_action('wp_ajax_nopriv_load_packages', 'load_packages_by_zip');
?>

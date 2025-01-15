<?php
function initialize_acf_and_load_packages() {
    // Helper function to extract postal codes
    function extract_postal_codes($field_data) {
        $postal_codes = [];
        if (is_array($field_data)) {
            foreach ($field_data as $item) {
                if (isset($item['postal_code'])) {
                    $postal_codes[] = $item['postal_code'];
                }
            }
        }
        return $postal_codes;
    }

    // Store the postal codes in a persistent location (closure scope)
    $fiber_postal_codes = extract_postal_codes(get_field('fibre_postal_codes', 'option'));
    $non_fiber_postal_codes = extract_postal_codes(get_field('non_fibre_postal_codes', 'option'));

    // AJAX handler function
    function load_packages_by_zip() {
        // Retrieve postal codes dynamically in the AJAX context
        $fiber_postal_codes = extract_postal_codes(get_field('fibre_postal_codes', 'option'));
        $non_fiber_postal_codes = extract_postal_codes(get_field('non_fibre_postal_codes', 'option'));

        $postal_code = isset($_POST['postal_code']) ? sanitize_text_field($_POST['postal_code']) : '';

        // Validate postal code and load the appropriate template
        if (in_array($postal_code, $fiber_postal_codes)) {
            get_template_part('template-parts/fiber-packages');
        } elseif (in_array($postal_code, $non_fiber_postal_codes)) {
            get_template_part('template-parts/non-fiber-packages');
        } else {
            get_template_part('template-parts/non-serviceable-areas');
        }
        wp_die();
    }

    // Register the AJAX actions
    add_action('wp_ajax_load_packages', 'load_packages_by_zip');
    add_action('wp_ajax_nopriv_load_packages', 'load_packages_by_zip');
}

// Hook everything to ACF initialization
add_action('acf/init', 'initialize_acf_and_load_packages');
?>

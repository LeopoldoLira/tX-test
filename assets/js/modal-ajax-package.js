// Scroll back to the packages section when the modal is closed from either button
function scrollToPackagesSection() {
    const packageSection = document.querySelector('.packages-section');
    const packageSectionOffset = packageSection.getBoundingClientRect().top + window.scrollY;

    // Scroll back to the packages section
    window.scrollTo({
        top: packageSectionOffset,
        behavior: 'smooth',
    });
}

// Event Listener for the "Check Availability" Button in the Modal
document.getElementById('check-availability-modal').addEventListener('click', function () {
    const modal = document.getElementById('package-modal');
    const postalCodeInput = document.getElementById('postal-code-modal'); // Input field in the modal
    const packagesContainer = document.querySelector('.packages');

    // Close the modal
    modal.close();

    // Get and clean the postal code
    let postalCode = postalCodeInput.value.trim().toUpperCase(); // Trim spaces and convert to uppercase
    postalCodeInput.value = postalCode; // Update input value in case it was changed

    // Validate postal code length
    const postalCodeLength = postalCode.length;

    if (postalCodeLength === 6) {
        // Valid 6-character postal code
        sendPostalCodeRequest(postalCode);
    } else if (postalCodeLength === 7) {
        // Valid 7-character postal code with a space
        postalCode = postalCode.replace(/\s/g, ''); // Remove the space
        sendPostalCodeRequest(postalCode);
    } else {
        // Invalid postal code
        packagesContainer.innerHTML =
            '<p>Please enter a valid postal code in the format "XXX XXX" or "XXXXXX" (max 6 characters, including spaces).</p>';
    }

    // Scroll to the packages section
    scrollToPackagesSection();
});

// Event Listener for the "Close" Button in the Modal
document.getElementById('close-modal-button').addEventListener('click', function () {
    const modal = document.getElementById('package-modal');
    // Close the modal
    modal.close();

    // Scroll to the packages section
    scrollToPackagesSection();
});

// Function to send the AJAX request
function sendPostalCodeRequest(postalCode) {
    const packagesContainer = document.querySelector('.packages');

    // Send AJAX request to the server
    jQuery.ajax({
        url: ajax_params.ajax_url,
        type: 'POST',
        data: {
            action: 'load_packages',
            postal_code: postalCode,
        },
        beforeSend: function () {
            packagesContainer.innerHTML = '<p>Loading packages...</p>';
        },
        success: function (response) {
            packagesContainer.innerHTML = response;
        },
        error: function () {
            packagesContainer.innerHTML =
                '<p>Something went wrong. Please try again later.</p>';
        },
    });
}

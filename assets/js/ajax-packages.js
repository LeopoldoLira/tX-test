document.getElementById('check-availability').addEventListener('click', function () {
    let postalCode = document.getElementById('postal-code').value.trim(); // Trim any extra spaces
    const packagesContainer = document.querySelector('.packages');

    // Convert postal code to uppercase
    postalCode = postalCode.toUpperCase();

    // Count the characters in the postal code
    const postalCodeLength = postalCode.length;

    // If postal code length is 6, send it as is
    if (postalCodeLength === 6) {
        // Send AJAX request with the 6-character postal code
        sendPostalCodeRequest(postalCode);
    } 
    // If postal code length is 7, it has a space, so remove it and send only 6 characters
    else if (postalCodeLength === 7) {
        postalCode = postalCode.replace(/\s/g, ''); // Remove the space
        sendPostalCodeRequest(postalCode);
    } 
    // If postal code length is not 6 or 7, display an error message
    else {
        packagesContainer.innerHTML = '<p>Please enter a valid postal code in the format XXX XXX or XXXXXX (max 6 characters, including spaces).</p>';
    }
});

// Function to send AJAX request
function sendPostalCodeRequest(postalCode) {
    const packagesContainer = document.querySelector('.packages');

    // Send AJAX request to the server with the cleaned postal code (6 characters)
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
            packagesContainer.innerHTML = '<p>Something went wrong. Please try again later.</p>';
        },
    });
}

// Restrict the user from typing more than 7 characters (including space) and allow space only at the 4th position
document.getElementById('postal-code').addEventListener('input', function (e) {
    let postalCode = e.target.value.toUpperCase(); // Convert to uppercase on input

    // Prevent user from typing more than 7 characters (including space)
    if (postalCode.replace(/\s/g, '').length > 6) {
        e.preventDefault();
        document.querySelector('.packages').innerHTML = '<p>Please enter a valid postal code in the format "XXX XXX" or "XXXXXX" (max 6 characters, including spaces).</p>';
    }

    // Check if the space is typed only at the 4th position
    if (postalCode.length === 4 && e.data === ' ') {
        return; // Allow space at the 4th position (either before or after)
    }

    // If the space is typed before or after the 4th position, prevent input and show error message
    if ((postalCode.length > 4 || postalCode.length < 4) && e.data === ' ') {
        e.preventDefault();
        document.querySelector('.packages').innerHTML = '<p>Please enter the postal code in the format "XXX XXX" or "XXXXXX" (space should only be at the middle).</p>';
    }

    // Update the input field with the transformed postal code (uppercase)
    e.target.value = postalCode;
});

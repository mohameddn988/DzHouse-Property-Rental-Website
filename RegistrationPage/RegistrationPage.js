document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('subscription-form');
    const phoneSelect = form.querySelector('.phone-row select');
    const phoneInput = form.querySelector('.phone-row input[type="tel"]');
    
    // Initialize phone number with selected country code
    let countryCode = phoneSelect.value;
    phoneSelect.addEventListener('change', function() {
        countryCode = this.value;
    });

    // Handle file uploads and show filenames
    document.getElementById('profilePhoto').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || "No file chosen";
        document.getElementById('profilePhotoName').textContent = fileName;
    });
    
    document.getElementById('idPhoto').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || "No file chosen";
        document.getElementById('idPhotoName').textContent = fileName;
    });

    // Handle radio button selection
    const tenantRadio = document.getElementById('tenant');
    const ownerRadio = document.getElementById('owner');
    
    function updateFormTitle() {
        const title = document.querySelector('.form-title');
        title.textContent = tenantRadio.checked 
            ? 'Subscription - Tenant' 
            : 'Subscription - Owner';
    }
    
    tenantRadio.addEventListener('change', updateFormTitle);
    ownerRadio.addEventListener('change', updateFormTitle);

    // Form validation
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        resetErrors();

        // Validate all required fields
        const requiredInputs = form.querySelectorAll('input[required]');
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                showError(input, 'This field is required');
                isValid = false;
            }
        });

        // Validate phone number format
        if (phoneInput.value && !/^\d+$/.test(phoneInput.value)) {
            showError(phoneInput, 'Phone number must contain only digits');
            isValid = false;
        }

        // Validate RIB (should be numeric)
        const ribInput = document.getElementById('rib');
        if (ribInput.value && !/^\d+$/.test(ribInput.value)) {
            showError(ribInput, 'RIB must contain only numbers');
            isValid = false;
        }

        // Validate password strength
        const passwordInput = document.getElementById('password');
        if (passwordInput.value && passwordInput.value.length < 8) {
            alert('Password must be at least 8 characters');
            isValid = false;
        }

        if (isValid) {
            // Prepare form data
            const formData = {
                userType: tenantRadio.checked ? 'tenant' : 'owner',
                name: document.getElementById('name').value,
                familyName: document.getElementById('familyName').value,
                phone: countryCode + phoneInput.value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
                address: document.getElementById('address').value,
                postalCode: document.getElementById('postalCode').value,
                rib: document.getElementById('rib').value
            };
            
            console.log('Form data:', formData);
            alert('Subscription successful! Welcome to DZHouse.');
            // form.submit(); // Uncomment for real form submission
        }
    });

    // Helper functions
    function showError(input, message) {
        input.classList.add('error');
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        
        // Insert after the input
        input.parentNode.insertBefore(errorElement, input.nextSibling);
    }

});
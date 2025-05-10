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
    const profilePhotoInput = document.getElementById('profilePhoto');
    const idPhotoInput = document.getElementById('idPhoto');
    
    profilePhotoInput.addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || "No file chosen";
        document.getElementById('profilePhotoName').textContent = fileName;
    });
    
    idPhotoInput.addEventListener('change', function(e) {
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

    // Form validation and submission
    form.addEventListener('submit', async function(e) {
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
            showError(passwordInput, 'Password must be at least 8 characters');
            isValid = false;
        }

        // Owner-specific validation
        if (ownerRadio.checked && !idPhotoInput.files[0]) {
            showError(idPhotoInput, 'ID photo is required for owners');
            isValid = false;
        }

        if (!isValid) return;

        try {
            // Prepare FormData (supports file uploads)
            const formData = new FormData();
            
            // Add form data
            formData.append('user-type', tenantRadio.checked ? 'tenant' : 'owner');
            formData.append('name', document.getElementById('name').value);
            formData.append('familyName', document.getElementById('familyName').value);
            formData.append('countryCode', countryCode);
            formData.append('phone', phoneInput.value);
            formData.append('email', document.getElementById('email').value);
            formData.append('password', document.getElementById('password').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('postalCode', document.getElementById('postalCode').value);
            formData.append('rib', document.getElementById('rib').value);

            // Add files if they exist
            if (profilePhotoInput.files[0]) {
                formData.append('profilePhoto', profilePhotoInput.files[0]);
            }
            if (idPhotoInput.files[0]) {
                formData.append('idPhoto', idPhotoInput.files[0]);
            }

            // Send to PHP backend
            const response = await fetch('/DzHouse%20Property%20Rental%20Website/config/db.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                // Redirect based on user type
                if (result.userType === 'tenant') {
                    window.location.href = '/DzHouse%20Property%20Rental%20Website/TenantAccountPage/TenantAccountPage.php';
                } else {
                    window.location.href = '/DzHouse%20Property%20Rental%20Website/OwnerAccountPage/OwnerAccountPage.php';  
                }
                
                // Store user session (optional)
                localStorage.setItem('userId', result.userId);
            } else {
                // Show error messages
                if (result.message.includes('already exists')) {
                    alert('Email already registered! Please login instead.');
                } else {
                    alert('Error: ' + result.message);
                }
            }

        } catch (error) {
            alert('Error: ' + error.message);
            console.error('Registration error:', error);
        }
    });

    // Helper functions
    function showError(input, message) {
        input.classList.add('error');
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        input.parentNode.insertBefore(errorElement, input.nextSibling);
    }

    function resetErrors() {
        document.querySelectorAll('.error').forEach(el => {
            el.classList.remove('error');
        });
        document.querySelectorAll('.error-message').forEach(el => {
            el.remove();
        });
    }
});
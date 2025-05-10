document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.booking-form');
    const confirmButton = document.querySelector('.confirm-button');
    const tenantCheckbox = document.getElementById('tenant-not-subscriber');
    const tenantSection = document.querySelectorAll('.booking-form .form-section')[1];
    const tenantInputs = tenantSection.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"]');
    
    // Initialize tenant inputs
    if (!tenantCheckbox.checked) {
        tenantInputs.forEach(input => input.disabled = true);
    }

    // Toggle tenant inputs
    tenantCheckbox.addEventListener('change', function() {
        const isChecked = this.checked;
        tenantInputs.forEach(input => {
            input.disabled = !isChecked;
            if (!isChecked) input.value = '';
        });
    });
    
    // Form validation
    confirmButton.addEventListener('click', function(e) {
        e.preventDefault();
        let isValid = true;

        // Validate standard fields
        const requiredInputs = form.querySelectorAll(`
            input[type="text"], 
            input[type="email"], 
            input[type="tel"],
            input[type="number"][placeholder="Card Code"],
            input[type="month"]
        `);
        
        requiredInputs.forEach(input => {
            if (input.disabled) return;
            
            // Special validation for CCV (3 digits)
            if (input.placeholder === "Card Code") {
                if (!/^\d{3}$/.test(input.value.trim())) {
                    input.style.borderColor = 'red';
                    isValid = false;
                    return;
                }
            }
            // Special validation for MM/YY (not expired)
            else if (input.type === "month") {
                const selectedDate = new Date(input.value + "-01");
                const currentDate = new Date();
                currentDate.setHours(0, 0, 0, 0);
                
                if (!input.value || selectedDate < currentDate) {
                    input.style.borderColor = 'red';
                    isValid = false;
                    return;
                }
            }
            // Standard validation for other fields
            else if (!input.value.trim()) {
                input.style.borderColor = 'red';
                isValid = false;
                return;
            }
            
            input.style.borderColor = '#ccc';
        });

        if (isValid) {
            alert('Booking confirmed! Thank you.');
            window.location.href = '/DzHouse%20Property%20Rental%20Website/index.php';
        } else {
            alert('Please check all required fields');
        }
    });
});
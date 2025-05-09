// Simple JavaScript for heart button functionality
    document.addEventListener('DOMContentLoaded', function() {
      const heartButtons = document.querySelectorAll('.heart-button');
      
      heartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const icon = this.querySelector('i');
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                icon.style.color = '#e74c3c';
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                icon.style.color = '';
            }

            // Prevent parent anchor navigation
            e.preventDefault();
            e.stopPropagation();
        });
    });
    });


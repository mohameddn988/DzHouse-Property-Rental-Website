document.addEventListener('DOMContentLoaded', function() {
    // 1. Favorite Button Functionality
    const heartButtons = document.querySelectorAll('.heart-button');
    
    heartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const icon = this.querySelector('i');
            icon.classList.toggle('far');
            icon.classList.toggle('fas');
            
            // Optional: Change color when active
            if (icon.classList.contains('fas')) {
                icon.style.color = '#e74c3c'; // Red when favorited
            } else {
                icon.style.color = ''; // Default color
            }
        });
    });

    // 2. Image Navigation Functionality
    const propertyCards = document.querySelectorAll('.property-card');
    
    propertyCards.forEach(card => {
        const images = [
            '/assets/property1.jpg',
            '/assets/property2.jpg', // Add your actual image paths
            '/assets/property3.jpg',
            '/assets/property4.jpg'
        ];
        
        const mainImage = card.querySelector('.property-image img');
        const navButtons = card.querySelectorAll('.image-nav button');
        let currentIndex = 0;
        
        // Initialize with first image
        mainImage.src = images[currentIndex];
        
        // Navigation buttons
        navButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                
                if (this.querySelector('i').classList.contains('fa-chevron-left')) {
                    // Previous image
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                } else {
                    // Next image
                    currentIndex = (currentIndex + 1) % images.length;
                }
                
                mainImage.src = images[currentIndex];
                
                // Optional: Add fade effect
                mainImage.style.opacity = 0;
                setTimeout(() => {
                    mainImage.style.opacity = 1;
                }, 100);
            });
        });
    });

    // 3. Optional: Save state to localStorage
    const saveFavoriteState = (propertyId, isFavorite) => {
        localStorage.setItem(`property_${propertyId}_favorite`, isFavorite);
    };

    const loadFavoriteState = (propertyId) => {
        return localStorage.getItem(`property_${propertyId}_favorite`) === 'true';
    };
})
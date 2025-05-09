document.addEventListener('DOMContentLoaded', function() {
    // 1. Save Button Functionality
    const saveBtn = document.querySelector('.save-btn');
    saveBtn.addEventListener('click', function() {
        const icon = this.querySelector('i');
        
        // Toggle heart icon and color
        icon.classList.toggle('far');
        icon.classList.toggle('fas');
        this.style.color = icon.classList.contains('fas') ? '#e74c3c' : '#000';
        
    });

    // 2. Share Button Functionality
    const shareBtn = document.querySelector('.share-btn');
    shareBtn.addEventListener('click', function() {
        navigator.clipboard.writeText(window.location.href)
            .then(() => {
                alert('Lien copié dans le presse-papier !');
            })
            .catch(err => {
                console.error('Could not copy text: ', err);
                prompt('Copiez ce lien:', window.location.href);
            });
    });

    // Image Gallery Functionality
    const galleryImages = [
        '../assets/ListingDetailsPage assets/sallon.jpeg',
        '../assets/ListingDetailsPage assets/chambre.jpeg',
        '../assets/ListingDetailsPage assets/cuisine.jpeg',
        '../assets/ListingDetailsPage assets/bathroom.jpeg',
        '../assets/ListingDetailsPage assets/sallon copy.jpeg'
        // Add more images here if needed
    ];

    // Dynamic image count
    function updateImageCount() {
        const countElement = document.querySelector('.image-count');
        countElement.innerHTML = `<i class="fas fa-camera"></i> ${galleryImages.length-1}+`;
    }

    // Initialize
    updateImageCount();

    const mainImage = document.querySelector('.main-image img');
    const sideImages = document.querySelectorAll('.side-image img');
    const navButtons = document.querySelectorAll('.nav-btn');
    let currentIndex = 0;

    // Function to update the gallery view
    function updateGallery() {
        // Update main image
        mainImage.src = galleryImages[currentIndex];
        
        // Update side images (show next 3 images in sequence)
        for (let i = 0; i < sideImages.length; i++) {
            const nextIndex = (currentIndex + i + 1) % galleryImages.length;
            sideImages[i].src = galleryImages[nextIndex];
        }
    }

    // Navigation button click handlers
    navButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            
            if (this.classList.contains('left')) {
                // Move to previous image
                currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            } else {
                // Move to next image
                currentIndex = (currentIndex + 1) % galleryImages.length;
            }
            
            updateGallery();
        });
    });

    // Click on side images to make them main
    sideImages.forEach((img, index) => {
        img.addEventListener('click', function(e) {
            e.stopPropagation();
            // Calculate which image was clicked (currentIndex + index + 1)
            currentIndex = (currentIndex + index + 1) % galleryImages.length;
            updateGallery();
        });
    });

    // Initialize gallery
    updateGallery();
});
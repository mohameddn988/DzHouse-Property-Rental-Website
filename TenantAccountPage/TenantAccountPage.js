document.addEventListener('DOMContentLoaded', function() {
    // Chat functionality (existing)
    const chatInput = document.querySelector('.chat-input input');
    const sendButton = document.querySelector('.chat-input button');
    const chatMessages = document.querySelector('.chat-messages');
    
    sendButton.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') sendButton.click();
    });

    function sendMessage() {
        const message = chatInput.value.trim();
        if (message) {
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', 'sent');
            messageElement.textContent = message;
            chatMessages.appendChild(messageElement);

            // Simulate a response after a short delay
          setTimeout(() => {
            const responseElement = document.createElement('div');
            responseElement.classList.add('message', 'received');
            responseElement.textContent = "I'll get back to you shortly.";
            chatMessages.appendChild(responseElement);
            chatMessages.scrollTop = chatMessages.scrollHeight;
          }, 1000);

            chatInput.value = '';
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    }

    // Profile photo button
    const profilePhotoBtn = document.querySelector('.photo-button');
    
    profilePhotoBtn.addEventListener('click', function() {
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = 'image/*';
        
        input.onchange = async (e) => {
            const file = e.target.files[0];
            if (!file) return;
            
            try {
                const formData = new FormData();
                formData.append('profilePhoto', file);
                formData.append('userId', profilePhotoBtn.dataset.userId); // Get userId from data attribute
                
                const response = await fetch('/DzHouse%20Property%20Rental%20Website/config/update_profile.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Refresh the image without reloading the page
                    const profileImg = document.querySelector('.photo-buttons img');
                    profileImg.src = profileImg.src.split('?')[0] + '?t=' + Date.now();
                    alert('Profile photo updated successfully!');
                } else {
                    throw new Error(result.message || 'Failed to update photo');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Error updating profile photo: ' + error.message);
            }
        };
        
        input.click();
    });

    // Review functionality
    const reviewButtons = document.querySelectorAll('.add-review-btn');

    reviewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const propertyRow = this.closest('.property-row');
            const propertyName = propertyRow.querySelector('.property-cell:first-child').textContent;
            const propertyStatus = propertyRow.querySelector('.status-badge').textContent;
            
            // Only allow reviews for archived properties
            if (propertyStatus === 'Archived') {
                const reviewText = prompt(`Please write your review for ${propertyName}:`);
                if (reviewText && reviewText.trim()) {
                    // In a real app, you would send this to your backend
                    console.log(`Review for ${propertyName}:`, reviewText.trim());
                    
                    // Change button to show review was added
                    this.innerHTML = '<i class="fas fa-check"></i>';
                    this.style.backgroundColor = '#38a169';
                    this.style.color = 'white';
                    
                    // Optional: Add a rating system
                    const rating = prompt('Rate this property (1-5 stars):');
                    if (rating && rating >= 1 && rating <= 5) {
                        console.log(`Rating for ${propertyName}: ${rating} stars`);
                    }
                }
            } else {
                this.disabled = true;
                this.style.backgroundColor = 'gray';
                this.style.cursor = 'not-allowed';
                alert('You can only review properties that are archived.');
            }
        });
    });

    // Optional: Add hover effects for review buttons
    reviewButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
})
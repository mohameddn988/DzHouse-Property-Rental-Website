document.addEventListener('DOMContentLoaded', function() {
    const photosBtn = document.getElementById('photos-btn');

    // Create container for file names
    const fileNamesContainer = document.createElement('div');
    fileNamesContainer.className = 'file-names-container';
    photosBtn.insertAdjacentElement('afterend', fileNamesContainer);
    
    // Create hidden file input for photos
    const photosInput = document.createElement('input');
    photosInput.type = 'file';
    photosInput.multiple = true;
    photosInput.accept = 'image/*';
    photosInput.style.display = 'none';
    document.body.appendChild(photosInput);
    
    // Photo upload handling
    photosBtn.addEventListener('click', function() {
        photosInput.click();
    });
    
    photosInput.addEventListener('change', function(e) {
        const files = e.target.files;
        fileNamesContainer.innerHTML = ''; // Clear previous names
        
        if (files.length > 0) {
            // Create title element
            const title = document.createElement('div');
            title.className = 'file-names-title';
            title.textContent = `Selected photos (${files.length}):`;
            fileNamesContainer.appendChild(title);
            
            // Add each file name
            Array.from(files).forEach(file => {
                const fileNameElement = document.createElement('div');
                fileNameElement.className = 'file-name';
                
                // Truncate long file names
                const maxLength = 30;
                const displayName = file.name.length > maxLength 
                    ? file.name.substring(0, maxLength) + '...' 
                    : file.name;
                
                fileNameElement.textContent = displayName;
                fileNameElement.title = file.name; // Show full name on hover
                fileNamesContainer.appendChild(fileNameElement);
            });
        } else {
            fileNamesContainer.textContent = 'No photos selected';
        }
    });
    
});
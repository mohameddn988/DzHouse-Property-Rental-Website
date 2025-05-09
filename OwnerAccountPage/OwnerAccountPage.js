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
            chatInput.value = '';
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    }

    // Announcements functionality (enhanced)
    const announcementsPanel = document.querySelector('.right-column .panel:first-child .panel-body');
    const addAnnouncementBtn = document.querySelector('.panel-header .btn-success');
    
    // Sample data - in real app you'd fetch this from a server
    let announcements = [
        { id: 20301, title: "Le byon japonais de Lyon" },
        { id: 20302, title: "New Year Celebration Event" }
    ];

    // Render announcements
    function renderAnnouncements() {
        const rows = announcementsPanel.querySelectorAll('.table-row:not(:first-child)');
        rows.forEach(row => row.remove());
        
        announcements.forEach((announcement, index) => {
            const row = document.createElement('div');
            row.className = 'table-row';
            row.innerHTML = `
                <div class="table-cell id">${announcement.id}</div>
                <div class="table-cell title">${announcement.title}</div>
                <div class="table-cell actions">
                    <button class="action-btn delete"><i class="fas fa-times"></i></button>
                    <button class="action-btn edit"><i class="fas fa-pencil-alt"></i></button>
                </div>
            `;
            announcementsPanel.appendChild(row);
        });
        
        // Reattach event listeners
        setupActionButtons();
    }

    // Add new announcement
    addAnnouncementBtn.addEventListener('click', function() {
        const title = prompt('Enter announcement title:');
        if (title) {
            const newId = Math.max(...announcements.map(a => a.id), 0) + 1;
            announcements.push({
                id: newId,
                title: title.trim()
            });
            renderAnnouncements();
        }
    });

    // Edit/Delete announcements
    function setupActionButtons() {
        document.querySelectorAll('.action-btn').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('.table-row');
                const id = parseInt(row.querySelector('.id').textContent);
                const announcement = announcements.find(a => a.id === id);
                
                if (this.classList.contains('delete')) {
                    if (confirm(`Delete announcement "${announcement.title}"?`)) {
                        announcements = announcements.filter(a => a.id !== id);
                        renderAnnouncements();
                    }
                } 
                else if (this.classList.contains('edit')) {
                    const newTitle = prompt('Edit announcement title:', announcement.title);
                    if (newTitle && newTitle.trim() !== announcement.title) {
                        announcement.title = newTitle.trim();
                        renderAnnouncements();
                    }
                }
            });
        });
    }

    // Booking requests functionality (existing)
    document.querySelectorAll('.action-btn').forEach(button => {
        if (!button.closest('.right-column')) return;
        
        button.addEventListener('click', function() {
            const action = this.classList.contains('delete') ? 'delete' : 'approve';
            const row = this.closest('.table-row');
            const id = row.querySelector('.table-cell.id')?.textContent || 'unknown';
            
            if (action === 'delete') {
                if (confirm(`Delete booking request #${id}?`)) {
                    row.remove();
                }
            } else if (action === 'approve') {
                alert(`Booking #${id} approved`);
                this.style.color = '#38a169';
                this.disabled = true;
                row.querySelector('.action-btn.delete').style.display = 'none';
            }
        });
    });

    // Initial render
    renderAnnouncements();
});
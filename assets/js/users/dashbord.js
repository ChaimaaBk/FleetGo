// FleetGo Dashboard JavaScript

// Update time display
function updateTime() {
    const now = new Date();
    const options = { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'short', 
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    };
    const dateTimeString = now.toLocaleDateString('en-US', options);
    
    const timeElement = document.querySelector('.page-subtitle');
    if (timeElement) {
        timeElement.textContent = dateTimeString.replace(',', ' •');
    }
}

// Handle button clicks with visual feedback
function addButtonFeedback(button) {
    button.style.transform = 'scale(0.95)';
    setTimeout(() => {
        button.style.transform = 'scale(1)';
    }, 100);
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('FleetGo Dashboard loaded successfully');
    
    // Update time immediately and then every minute
    updateTime();
    setInterval(updateTime, 60000);
    
    // Add smooth scroll behavior
    document.documentElement.style.scrollBehavior = 'smooth';
    
    // Handle Start Duty button
    const startDutyBtn = document.querySelector('.btn-primary');
    if (startDutyBtn) {
        startDutyBtn.addEventListener('click', function() {
            addButtonFeedback(this);
            console.log('Start Duty clicked');
            alert('Starting duty... This would normally begin your shift tracking.');
        });
    }
    
    // Handle Trip History button
    const tripHistoryBtn = document.querySelector('.btn-secondary');
    if (tripHistoryBtn) {
        tripHistoryBtn.addEventListener('click', function() {
            addButtonFeedback(this);
            console.log('Trip History clicked');
            alert('Opening trip history...');
        });
    }
    
    // Handle notification button
    const notificationBtn = document.querySelector('.icon-button');
    if (notificationBtn) {
        notificationBtn.addEventListener('click', function() {
            console.log('Notifications clicked');
            alert('You have 3 new notifications');
        });
    }
    
    
    // Handle quick action buttons
    const quickActionBtns = document.querySelectorAll('.quick-action-btn');
    quickActionBtns.forEach((btn) => {
        btn.addEventListener('click', function() {
            addButtonFeedback(this);
            const action = this.querySelector('.action-label').textContent;
            console.log('Quick action clicked:', action);
            alert(`Action: ${action}`);
        });
    });
    
    // Handle vehicle action buttons
    const vehicleActionBtns = document.querySelectorAll('.action-button');
    vehicleActionBtns.forEach((btn) => {
        btn.addEventListener('click', function() {
            addButtonFeedback(this);
            const icon = this.querySelector('.material-symbols-outlined').textContent;
            console.log('Vehicle action clicked:', icon);
            
            if (icon === 'build') {
                alert('Opening issue report form...');
            } else if (icon === 'text_snippet') {
                alert('Opening vehicle documentation...');
            }
        });
    });
    
    
    
    // Handle "View Full Details" link
    const viewDetailsLink = document.querySelector('.link-button');
    if (viewDetailsLink) {
        viewDetailsLink.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('View Full Details clicked');
            alert('Opening detailed vehicle information...');
        });
    }
    
    // Handle "View All Notifications" link
    const viewAllNotifications = document.querySelector('.footer-link');
    if (viewAllNotifications) {
        viewAllNotifications.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('View All Notifications clicked');
            alert('Opening all notifications...');
        });
    }
    
    
    // Handle navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach((link) => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            
            // Add active class to clicked link
            this.classList.add('active');
            
            const section = this.textContent.trim();
            console.log('Navigation to:', section);
            alert(`Navigating to: ${section}`);
        });
    });
    
    // Add hover effects to cards
    const cards = document.querySelectorAll('.card');
    cards.forEach((card) => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.transition = 'transform 0.2s';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Simulate real-time fuel level update (demo)
    function updateFuelLevel() {
        const fuelFill = document.querySelector('.progress-fill');
        if (fuelFill) {
            const currentWidth = parseInt(fuelFill.style.width);
            // Simulate slight fuel consumption
            if (currentWidth > 0 && Math.random() > 0.9) {
                const newWidth = Math.max(0, currentWidth - 1);
                fuelFill.style.width = newWidth + '%';
                
                const fuelValue = document.querySelector('.fuel-info .stat-value');
                if (fuelValue) {
                    fuelValue.textContent = newWidth + '%';
                }
                
                console.log('Fuel level updated:', newWidth + '%');
            }
        }
    }
    
    // Update fuel level every 30 seconds (demo)
    setInterval(updateFuelLevel, 30000);
});

// Function to handle trip actions
function handleTripAction(tripId, action) {
    console.log(`Trip ${tripId}: ${action}`);
    alert(`Trip ${tripId}: ${action}`);
}

// Function to handle vehicle actions
function handleVehicleAction(action) {
    console.log(`Vehicle action: ${action}`);
    alert(`Vehicle action: ${action}`);
}

// Function to show notification
function showNotification(message, type = 'info') {
    console.log(`Notification (${type}):`, message);
    // In a real app, this would show a toast notification
    alert(message);
}

// Export functions for external use
window.FleetGo = {
    updateTime,
    handleTripAction,
    handleVehicleAction,
    showNotification
};

// Add global error handler
window.addEventListener('error', function(e) {
    console.error('An error occurred:', e.error);
});

// Log when page is fully loaded
window.addEventListener('load', function() {
    console.log('FleetGo Dashboard fully loaded and interactive');
});
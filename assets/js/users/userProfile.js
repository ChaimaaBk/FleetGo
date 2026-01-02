// Application State
const state = {
    formData: {
        firstName: 'John',
        lastName: 'Doe',
        email: 'john.doe@fleetgo.com',
        phone: '+1 (555) 123-4567',
        address: '1234 Maple Avenue, Springfield, IL 62704',
        emergencyName: 'Jane Doe',
        emergencyRelation: 'Spouse',
        emergencyPhone: '555-9876'
    },
    originalData: {},
    hasChanges: false
};

// Initialize app when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initializeApp();
});

// Initialize all app features
function initializeApp() {
    // Store original data
    state.originalData = { ...state.formData };
    
    // Setup event listeners
    setupMenuToggle();
    setupFormValidation();
    setupSaveButton();
    setupPhotoUpload();
    setupFileUpload();
    setupToggleSwitches();
    setupButtons();
    setupFormInputs();
    
    // Initialize tooltips and animations
    initializeAnimations();
}

// Menu Toggle for Mobile
function setupMenuToggle() {
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    
    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });
        
        // Close sidebar when clicking outside
        document.addEventListener('click', (e) => {
            if (sidebar.classList.contains('open') && 
                !sidebar.contains(e.target) && 
                !menuToggle.contains(e.target)) {
                sidebar.classList.remove('open');
            }
        });
    }
}

// Form Input Tracking
function setupFormInputs() {
    const inputs = {
        firstName: document.getElementById('firstName'),
        lastName: document.getElementById('lastName'),
        email: document.getElementById('email'),
        phone: document.getElementById('phone'),
        address: document.getElementById('address'),
        emergencyName: document.getElementById('emergencyName'),
        emergencyRelation: document.getElementById('emergencyRelation'),
        emergencyPhone: document.getElementById('emergencyPhone')
    };
    
    // Add input listeners
    Object.keys(inputs).forEach(key => {
        const input = inputs[key];
        if (input) {
            input.addEventListener('input', (e) => {
                state.formData[key] = e.target.value;
                checkForChanges();
            });
            
            input.addEventListener('change', (e) => {
                state.formData[key] = e.target.value;
                checkForChanges();
            });
        }
    });
}

// Check if form has changes
function checkForChanges() {
    state.hasChanges = Object.keys(state.formData).some(
        key => state.formData[key] !== state.originalData[key]
    );
    
    const saveBtn = document.getElementById('saveBtn');
    if (saveBtn) {
        if (state.hasChanges) {
            saveBtn.style.opacity = '1';
            saveBtn.style.transform = 'scale(1.05)';
            setTimeout(() => {
                saveBtn.style.transform = 'scale(1)';
            }, 200);
        } else {
            saveBtn.style.opacity = '0.8';
        }
    }
}

// Form Validation
function setupFormValidation() {
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    
    if (emailInput) {
        emailInput.addEventListener('blur', () => {
            validateEmail(emailInput);
        });
    }
    
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            formatPhoneNumber(e.target);
        });
    }
}

// Validate email
function validateEmail(input) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const isValid = emailRegex.test(input.value);
    
    if (!isValid && input.value.length > 0) {
        input.style.borderColor = '#ef4444';
        showToast('Please enter a valid email address', 'error');
    } else {
        input.style.borderColor = '';
    }
    
    return isValid;
}

// Format phone number
function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    
    if (value.length > 0) {
        if (value.length <= 3) {
            value = value;
        } else if (value.length <= 6) {
            value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
        } else {
            value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
        }
    }
    
    input.value = value;
}

// Save Button
function setupSaveButton() {
    const saveBtn = document.getElementById('saveBtn');
    
    if (saveBtn) {
        saveBtn.addEventListener('click', () => {
            if (!state.hasChanges) {
                showToast('No changes to save', 'warning');
                return;
            }
            
            // Validate all fields
            const emailInput = document.getElementById('email');
            if (emailInput && !validateEmail(emailInput)) {
                return;
            }
            
            // Simulate API call
            saveBtn.disabled = true;
            saveBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Saving...';
            
            setTimeout(() => {
                // Update original data
                state.originalData = { ...state.formData };
                state.hasChanges = false;
                
                // Reset button
                saveBtn.disabled = false;
                saveBtn.innerHTML = '<span class="material-symbols-outlined">save</span> Save Changes';
                
                // Show success message
                showToast('Changes saved successfully!', 'success');
                
                // Add animation
                animateSuccess(saveBtn);
            }, 1500);
        });
    }
}

// Photo Upload
function setupPhotoUpload() {
    const editPhotoBtn = document.getElementById('editPhotoBtn');
    const photoInput = document.getElementById('photoInput');
    const profileAvatar = document.querySelector('.profile-avatar');
    
    if (editPhotoBtn && photoInput && profileAvatar) {
        editPhotoBtn.addEventListener('click', () => {
            photoInput.click();
        });
        
        photoInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            
            if (file) {
                if (file.size > 5 * 1024 * 1024) {
                    showToast('File size must be less than 5MB', 'error');
                    return;
                }
                
                if (!file.type.startsWith('image/')) {
                    showToast('Please select an image file', 'error');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = (event) => {
                    profileAvatar.style.backgroundImage = `url(${event.target.result})`;
                    showToast('Photo updated successfully!', 'success');
                    
                    // Also update sidebar avatar
                    const sidebarAvatar = document.querySelector('.user-avatar');
                    if (sidebarAvatar) {
                        sidebarAvatar.style.backgroundImage = `url(${event.target.result})`;
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    }
}

// File Upload (Documents)
function setupFileUpload() {
    const uploadArea = document.getElementById('uploadArea');
    const fileInput = document.getElementById('fileInput');
    
    if (uploadArea && fileInput) {
        // Click to upload
        uploadArea.addEventListener('click', () => {
            fileInput.click();
        });
        
        // Drag and drop
        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.style.backgroundColor = '#f0f9ff';
            uploadArea.style.borderColor = '#3b82f6';
        });
        
        uploadArea.addEventListener('dragleave', () => {
            uploadArea.style.backgroundColor = '';
            uploadArea.style.borderColor = '';
        });
        
        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.style.backgroundColor = '';
            uploadArea.style.borderColor = '';
            
            const files = e.dataTransfer.files;
            handleFileUpload(files);
        });
        
        fileInput.addEventListener('change', (e) => {
            handleFileUpload(e.target.files);
        });
    }
}

// Handle file upload
function handleFileUpload(files) {
    if (files.length === 0) return;
    
    const validTypes = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'];
    const maxSize = 5 * 1024 * 1024; // 5MB
    
    Array.from(files).forEach(file => {
        if (!validTypes.includes(file.type)) {
            showToast(`${file.name}: Invalid file type. Please use PDF, JPG, or PNG.`, 'error');
            return;
        }
        
        if (file.size > maxSize) {
            showToast(`${file.name}: File size exceeds 5MB.`, 'error');
            return;
        }
        
        // Simulate upload
        uploadFile(file);
    });
}

// Simulate file upload
function uploadFile(file) {
    showToast(`Uploading ${file.name}...`, 'success');
    
    // Simulate upload progress
    setTimeout(() => {
        showToast(`${file.name} uploaded successfully!`, 'success');
    }, 2000);
}

// Toggle Switches
function setupToggleSwitches() {
    const twoFactorToggle = document.getElementById('twoFactorToggle');
    
    if (twoFactorToggle) {
        twoFactorToggle.addEventListener('change', (e) => {
            const status = e.target.checked ? 'enabled' : 'disabled';
            showToast(`Two-Factor Authentication ${status}`, 'success');
        });
    }
}

// Setup other buttons
function setupButtons() {
    // Logout button
    const logoutBtn = document.getElementById('logoutBtn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', () => {
            if (state.hasChanges) {
                const confirm = window.confirm('You have unsaved changes. Are you sure you want to log out?');
                if (!confirm) return;
            }
            
            showToast('Logging out...', 'success');
            setTimeout(() => {
                // Simulate logout
                console.log('User logged out');
            }, 1000);
        });
    }
    
    // Notification button
    const notificationBtn = document.getElementById('notificationBtn');
    if (notificationBtn) {
        notificationBtn.addEventListener('click', () => {
            showToast('You have 3 new notifications', 'success');
            
            // Remove notification badge
            const badge = document.querySelector('.notification-badge');
            if (badge) {
                badge.style.opacity = '0';
                setTimeout(() => {
                    badge.style.display = 'none';
                }, 300);
            }
        });
    }
    
    // Help button
    const helpBtn = document.getElementById('helpBtn');
    if (helpBtn) {
        helpBtn.addEventListener('click', () => {
            showToast('Help documentation coming soon!', 'success');
        });
    }
    
    // Add Contact button
    const addContactBtn = document.getElementById('addContactBtn');
    if (addContactBtn) {
        addContactBtn.addEventListener('click', () => {
            showToast('Add contact feature coming soon!', 'success');
        });
    }
    
    // Upload Renewal button
    const uploadRenewalBtn = document.getElementById('uploadRenewalBtn');
    if (uploadRenewalBtn) {
        uploadRenewalBtn.addEventListener('click', () => {
            const fileInput = document.getElementById('fileInput');
            if (fileInput) {
                fileInput.click();
            }
        });
    }
    
    // Change Password button
    const changePasswordBtn = document.getElementById('changePasswordBtn');
    if (changePasswordBtn) {
        changePasswordBtn.addEventListener('click', () => {
            showToast('Password change feature coming soon!', 'success');
        });
    }
}

// Toast Notification
function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    const toastIcon = document.getElementById('toastIcon');
    const toastMessage = document.getElementById('toastMessage');
    
    if (!toast || !toastIcon || !toastMessage) return;
    
    // Set icon based on type
    const icons = {
        success: 'check_circle',
        error: 'error',
        warning: 'warning'
    };
    
    toastIcon.textContent = icons[type] || icons.success;
    toastMessage.textContent = message;
    
    // Remove existing classes
    toast.classList.remove('success', 'error', 'warning');
    toast.classList.add(type);
    
    // Show toast
    toast.classList.add('show');
    
    // Hide after 3 seconds
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Initialize animations
function initializeAnimations() {
    // Animate cards on load
    const cards = document.querySelectorAll('.card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
    
    // Add hover effects to nav items
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });
}

// Animate success
function animateSuccess(element) {
    element.style.transition = 'transform 0.3s ease';
    element.style.transform = 'scale(1.1)';
    
    setTimeout(() => {
        element.style.transform = 'scale(1)';
    }, 300);
}

// Auto-save functionality (optional)
let autoSaveTimeout;
function enableAutoSave() {
    const inputs = document.querySelectorAll('.form-input');
    
    inputs.forEach(input => {
        input.addEventListener('input', () => {
            clearTimeout(autoSaveTimeout);
            
            autoSaveTimeout = setTimeout(() => {
                if (state.hasChanges) {
                    console.log('Auto-saving...');
                    // Uncomment to enable auto-save
                    // document.getElementById('saveBtn').click();
                }
            }, 5000); // Auto-save after 5 seconds of inactivity
        });
    });
}

// Keyboard shortcuts
document.addEventListener('keydown', (e) => {
    // Ctrl/Cmd + S to save
    if ((e.ctrlKey || e.metaKey) && e.key === 's') {
        e.preventDefault();
        const saveBtn = document.getElementById('saveBtn');
        if (saveBtn && state.hasChanges) {
            saveBtn.click();
        }
    }
    
    // Escape to close sidebar on mobile
    if (e.key === 'Escape') {
        const sidebar = document.getElementById('sidebar');
        if (sidebar && sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
        }
    }
});

// Handle form submission prevention
document.querySelectorAll('.form-input').forEach(input => {
    input.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
        }
    });
});

// Update document title with unsaved changes indicator
function updateDocumentTitle() {
    const baseTitle = 'View My Info (Driver) - FleetGo';
    document.title = state.hasChanges ? `• ${baseTitle}` : baseTitle;
}

// Watch for changes and update title
setInterval(() => {
    updateDocumentTitle();
}, 1000);

// Warn before leaving with unsaved changes
window.addEventListener('beforeunload', (e) => {
    if (state.hasChanges) {
        e.preventDefault();
        e.returnValue = '';
        return '';
    }
});

// Simulate expiring certificate countdown
function updateCertificateCountdown() {
    const warningText = document.querySelector('.warning-text');
    if (warningText) {
        let days = 14;
        
        setInterval(() => {
            if (days > 0) {
                days--;
                const daysText = days === 1 ? 'day' : 'days';
                warningText.innerHTML = `
                    <span class="material-symbols-outlined">warning</span>
                    Expires in ${days} ${daysText}
                `;
                
                // Update progress bar
                const progressFill = document.querySelector('.progress-fill');
                if (progressFill) {
                    const percentage = (days / 14) * 92; // Starting at 92%
                    progressFill.style.width = `${percentage}%`;
                }
            }
        }, 86400000); // Update daily (for demo: 86400000ms = 1 day)
    }
}

// Initialize countdown
updateCertificateCountdown();

// Console welcome message
console.log('%cFleetGo Driver Portal', 'color: #137fec; font-size: 24px; font-weight: bold;');
console.log('%cWelcome, John Doe!', 'color: #10b981; font-size: 16px;');
console.log('Version 1.0.0 | Developed with ❤️');

// Export functions for testing (optional)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        validateEmail,
        formatPhoneNumber,
        handleFileUpload,
        showToast
    };
}
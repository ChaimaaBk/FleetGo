// FleetGo Dashboard JavaScript

document.addEventListener('DOMContentLoaded', function () {

    // ============================================
    // Mobile Menu Toggle
    // ============================================
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');

    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('active');
        });
    }

    // ============================================
    // Dark Mode Toggle (Optional)
    // ============================================
    function initDarkMode() {
        const darkModeToggle = document.getElementById('darkModeToggle');
        const htmlElement = document.documentElement;

        if (darkModeToggle) {
            // Check for saved preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                htmlElement.classList.add('dark');
            }

            darkModeToggle.addEventListener('click', function () {
                htmlElement.classList.toggle('dark');
                const theme = htmlElement.classList.contains('dark') ? 'dark' : 'light';
                localStorage.setItem('theme', theme);
            });
        }
    }

    // ============================================
    // Smooth Scroll for Content
    // ============================================
    function initSmoothScroll() {
        const contentWrapper = document.querySelector('.content-wrapper');
        if (contentWrapper) {
            contentWrapper.style.scrollBehavior = 'smooth';
        }
    }

    // ============================================
    // Map Pin Animations
    // ============================================
    function initMapPins() {
        const mapPins = document.querySelectorAll('.map-pin');

        mapPins.forEach((pin, index) => {
            pin.style.animationDelay = `${index * 0.3}s`;

            // Add click event for pins
            pin.addEventListener('click', function () {
                const tooltip = this.getAttribute('data-tooltip');
                if (tooltip) {
                    showNotification(tooltip, 'info');
                }
            });
        });
    }

    // ============================================
    // Alert Interactions
    // ============================================
    function initAlerts() {
        const alertLinks = document.querySelectorAll('.alert-link');

        alertLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const alertTitle = this.closest('.alert-content').querySelector('.alert-title').textContent;
                showNotification(`Action for: ${alertTitle}`, 'success');
            });
        });
    }

    // ============================================
    // Notification System
    // ============================================
    function showNotification(message, type = 'info') {
        // Remove existing notification
        const existing = document.querySelector('.notification');
        if (existing) {
            existing.remove();
        }

        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.textContent = message;

        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 16px 24px;
            background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#137fec'};
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            animation: slideIn 0.3s ease;
            font-size: 14px;
            font-weight: 500;
        `;

        document.body.appendChild(notification);

        // Auto remove after 3 seconds
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    // Add notification animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // ============================================
    // Search Functionality
    // ============================================
    // ============================================
    // Search Functionality
    // ============================================
    function initSearch() {
        const searchInput = document.querySelector('.search-box input');

        if (searchInput) {
            let searchResults = null;

            searchInput.addEventListener('input', function (e) {
                const searchTerm = e.target.value.toLowerCase().trim();

                // Remove existing results if search is empty
                if (searchTerm.length === 0) {
                    removeSearchResults();
                    return;
                }

                if (searchTerm.length > 0) {
                    showSearchResults(searchTerm, searchInput);
                }
            });

            searchInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    const searchTerm = e.target.value.trim();
                    if (searchTerm) {
                        performSearch(searchTerm);
                        removeSearchResults();
                    }
                }
            });

            // Close search results when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.search-box')) {
                    removeSearchResults();
                }
            });
        }
    }

    function showSearchResults(searchTerm, inputElement) {
        removeSearchResults();

        // Sample data - replace with real data
        const sampleData = [
            { type: 'vehicle', id: '#104', name: 'Toyota Corolla', status: 'On Trip' },
            { type: 'vehicle', id: '#402', name: 'Ford Transit', status: 'Maintenance' },
            { type: 'vehicle', id: '#112', name: 'Mercedes Sprinter', status: 'Parked' },
            { type: 'driver', id: 'D001', name: 'Michael Scott', status: 'Active' },
            { type: 'driver', id: 'D002', name: 'Jim Halpert', status: 'Active' },
            { type: 'driver', id: 'D003', name: 'Dwight Schrute', status: 'On Break' },
        ];

        // Filter results
        const filtered = sampleData.filter(item =>
            item.name.toLowerCase().includes(searchTerm) ||
            item.id.toLowerCase().includes(searchTerm)
        );

        if (filtered.length === 0) {
            filtered.push({ type: 'no-results', name: 'No results found' });
        }

        // Create results dropdown
        const resultsDiv = document.createElement('div');
        resultsDiv.className = 'search-results';

        filtered.forEach(item => {
            const resultItem = document.createElement('div');
            resultItem.className = item.type === 'no-results' ? 'search-result-item no-results' : 'search-result-item';

            if (item.type === 'no-results') {
                resultItem.innerHTML = `
                <span class="material-symbols-outlined">search_off</span>
                <div class="result-info">
                    <div class="result-name">${item.name}</div>
                </div>
            `;
            } else {
                const icon = item.type === 'vehicle' ? 'local_shipping' : 'person';
                const statusClass = item.status === 'Active' || item.status === 'On Trip' ? 'status-active' :
                    item.status === 'Maintenance' ? 'status-warning' : 'status-inactive';

                resultItem.innerHTML = `
                <span class="material-symbols-outlined">${icon}</span>
                <div class="result-info">
                    <div class="result-name">${item.name} <span class="result-id">${item.id}</span></div>
                    <div class="result-status ${statusClass}">${item.status}</div>
                </div>
            `;

                resultItem.addEventListener('click', () => {
                    performSearch(item.name);
                    removeSearchResults();
                });
            }

            resultsDiv.appendChild(resultItem);
        });

        // Position and append results
        const searchBox = inputElement.closest('.search-box');
        searchBox.style.position = 'relative';
        searchBox.appendChild(resultsDiv);
    }

    function removeSearchResults() {
        const existingResults = document.querySelector('.search-results');
        if (existingResults) {
            existingResults.remove();
        }
    }

    function performSearch(searchTerm) {
        showNotification(`Searching for: ${searchTerm}`, 'info');
        // Here you would implement actual search logic
        console.log('Performing search for:', searchTerm);
    }

    // ============================================
    // Button Click Handlers
    // ============================================
    function initButtons() {
        const addVehicleBtn = document.querySelector('.btn-primary');
        const notificationBtn = document.querySelector('.btn-notification');

        if (addVehicleBtn) {
            addVehicleBtn.addEventListener('click', function () {
                createAddVehicleModal();
            });
        }

        if (notificationBtn) {
            notificationBtn.addEventListener('click', function () {
                showNotification('You have 3 new notifications', 'info');
            });
        }
    }

    // ============================================
    // Progress Bar Animations
    // ============================================
    function animateProgressBars() {
        const progressBars = document.querySelectorAll('.progress-fill');

        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';

            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        });
    }

    // ============================================
    // KPI Counter Animation
    // ============================================
    function animateCounters() {
        const counters = document.querySelectorAll('.kpi-value');

        counters.forEach(counter => {
            const target = counter.textContent.replace(/[^0-9.]/g, '');
            if (target && !isNaN(target)) {
                const targetNum = parseFloat(target);
                const duration = 1000;
                const increment = targetNum / (duration / 16);
                let current = 0;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= targetNum) {
                        counter.textContent = counter.textContent.replace(target, targetNum.toLocaleString());
                        clearInterval(timer);
                    } else {
                        counter.textContent = counter.textContent.replace(target, Math.floor(current).toLocaleString());
                    }
                }, 16);
            }
        });
    }

    // ============================================
    // Responsive Sidebar for Mobile
    // ============================================
    function handleResize() {
        const sidebar = document.querySelector('.sidebar');

        if (window.innerWidth > 768) {
            if (sidebar) {
                sidebar.style.display = 'flex';
            }
        } else {
            if (sidebar && !sidebar.classList.contains('active')) {
                sidebar.style.display = 'none';
            }
        }
    }

    // ============================================
    // Live Data Simulation (Optional)
    // ============================================
    function simulateLiveData() {
        // Simulate updating KPI values
        setInterval(() => {
            const randomKPI = document.querySelector('.kpi-value');
            if (randomKPI && Math.random() > 0.7) {
                const currentValue = parseInt(randomKPI.textContent.replace(/[^0-9]/g, ''));
                const change = Math.random() > 0.5 ? 1 : -1;
                randomKPI.textContent = (currentValue + change).toString();
            }
        }, 5000);
    }

    // ============================================
    // Initialize All Functions
    // ============================================
    function init() {
        initDarkMode();
        initSmoothScroll();
        initMapPins();
        initAlerts();
        initSearch();
        initButtons();

        // Animate on load
        setTimeout(() => {
            animateProgressBars();
            // animateCounters(); // Uncomment if you want counter animation
        }, 300);

        // Optionally enable live data simulation
        // simulateLiveData();

        // Handle window resize
        window.addEventListener('resize', handleResize);
        handleResize();

        console.log('FleetGo Dashboard initialized successfully!');
    }

    // Run initialization
    init();

    // ============================================
    // Export functions for external use (optional)
    // ============================================
    window.FleetGo = {
        showNotification,
        animateProgressBars,
        animateCounters
    };

});

// ============================================
// Service Worker Registration (Optional for PWA)
// ============================================
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        // navigator.serviceWorker.register('/sw.js')
        //     .then(reg => console.log('Service Worker registered'))
        //     .catch(err => console.log('Service Worker registration failed'));
    });
}

// ============================================
// Modal Add Vehicle
// ============================================
function createAddVehicleModal() {
    // Créer le modal
    const modal = document.createElement('div');
    modal.className = 'modal-overlay';
    modal.innerHTML = `
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add New Vehicle</h3>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Vehicle ID</label>
                    <input type="text" placeholder="Enter vehicle ID" class="form-input">
                </div>
                <div class="form-group">
                    <label>Model</label>
                    <input type="text" placeholder="Enter model" class="form-input">
                </div>
                <div class="form-group">
                    <label>License Plate</label>
                    <input type="text" placeholder="Enter license plate" class="form-input">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-input">
                        <option>Truck</option>
                        <option>Van</option>
                        <option>Car</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-cancel">Cancel</button>
                <button class="btn-submit">Add Vehicle</button>
            </div>
        </div>
    `;

    document.body.appendChild(modal);

    // Close modal handlers
    const closeBtn = modal.querySelector('.modal-close');
    const cancelBtn = modal.querySelector('.btn-cancel');
    const submitBtn = modal.querySelector('.btn-submit');

    closeBtn.addEventListener('click', () => modal.remove());
    cancelBtn.addEventListener('click', () => modal.remove());
    modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.remove();
    });

    submitBtn.addEventListener('click', () => {
        showNotification('Vehicle added successfully!', 'success');
        modal.remove();
    });
}
// ==================== MODELS ====================

class Vehicle {
    constructor(data) {
        this.make = data.make;
        this.model = data.model;
        this.plate = data.plate;
        this.vin = data.vin;
        this.condition = data.condition;
        this.odometer = data.odometer;
        this.avgMpg = data.avgMpg;
        this.assignmentDate = data.assignmentDate;
        this.image = data.image;
    }

    updateOdometer(miles) {
        this.odometer += miles;
        return this.odometer;
    }

    getFormattedOdometer() {
        return `${this.odometer.toLocaleString()} mi`;
    }
}

class ServiceRecord {
    constructor(data) {
        this.id = data.id;
        this.date = data.date;
        this.serviceType = data.serviceType;
        this.icon = data.icon;
        this.mileage = data.mileage;
        this.provider = data.provider;
        this.status = data.status;
    }

    matches(searchTerm) {
        const term = searchTerm.toLowerCase();
        return (
            this.date.toLowerCase().includes(term) ||
            this.serviceType.toLowerCase().includes(term) ||
            this.provider.toLowerCase().includes(term) ||
            this.mileage.toLowerCase().includes(term)
        );
    }
}

class ScheduledService {
    constructor(data) {
        this.id = data.id;
        this.month = data.month;
        this.day = data.day;
        this.title = data.title;
        this.description = data.description;
        this.badge = data.badge;
        this.badgeType = data.badgeType;
    }

    getDetails() {
        return {
            title: this.title,
            date: `${this.month} ${this.day}`,
            description: this.description,
            badge: this.badge
        };
    }
}

class MaintenanceAlert {
    constructor(data) {
        this.name = data.name;
        this.percentage = data.percentage;
        this.status = data.status;
        this.warning = data.warning;
        this.color = data.color;
    }
}

class User {
    constructor(data) {
        this.name = data.name;
        this.id = data.id;
        this.role = data.role;
        this.avatar = data.avatar;
    }
}

// ==================== DATA STORE ====================

class DataStore {
    constructor() {
        this.vehicle = new Vehicle({
            make: 'Ford',
            model: 'Transit Connect',
            plate: 'ABC-1234',
            vin: '1FM5K8...',
            condition: 'Good Condition',
            odometer: 45230,
            avgMpg: 24.5,
            assignmentDate: "Since Jan '23",
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC2n8GpT4C7f5Q3y40sIZkXICibn_F69QHy92Zkqg5PPqZen3is_843tVI6B8lQQHP3MqdYywzDdD92oShBfaxSr3qaK_nEhWeV36sZrwe6PhpE7Sy7rSlTGoibcpp7zMjW4YXcnV7dJu_bJT25XJUc_pGw5VtVSpUXV1y5gHTMkxLCz8H4Yj3KE0zsndT0u3Gy54ckDyoeONZINtXttwDiTIKei8shXsfOzIFTx6_BlcDhIRdgd068ano3523H2d37qrDQs7ikdg'
        });

        this.user = new User({
            name: 'John Doe',
            id: '8842',
            role: 'Driver',
            avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBZ03n02lBUxHvSOArSfW_hjDRSZ9izGb22L1oOHOmHsR_OM6cGVgfCSAgT8us7Xw_FaAHFtV6ShlBtXITDQiL5y3_jcijhDGViUQ51KiGKcbUDRxrrxe7n4F0Wq9ndxTj67vfSNy2lnPFNJAoHcylHjd9gBrBIZhvjh1KOsU5XPXf2iHVQQLrYVp6XvUh-NfU6ewCoE9kaQ2bt4Ho_V1cBjgs_yz5aUFzN_VmX678GOM5uXczr-U_6SFFqjVJbpamIQRI24fmfXw'
        });

        this.serviceRecords = [
            new ServiceRecord({
                id: 1,
                date: 'Oct 01, 2023',
                serviceType: 'Tire Rotation',
                icon: 'tire_repair',
                mileage: '42,000 mi',
                provider: 'QuickLane Services',
                status: 'Completed'
            }),
            new ServiceRecord({
                id: 2,
                date: 'Aug 15, 2023',
                serviceType: 'Routine Inspection',
                icon: 'build',
                mileage: '38,500 mi',
                provider: 'Fleet HQ Garage',
                status: 'Completed'
            }),
            new ServiceRecord({
                id: 3,
                date: 'Jun 02, 2023',
                serviceType: 'Oil Change',
                icon: 'oil_barrel',
                mileage: '35,120 mi',
                provider: 'Jiffy Lube',
                status: 'Completed'
            }),
            new ServiceRecord({
                id: 4,
                date: 'Mar 22, 2023',
                serviceType: 'Battery Replacement',
                icon: 'battery_alert',
                mileage: '32,450 mi',
                provider: 'Fleet HQ Garage',
                status: 'Completed'
            }),
            new ServiceRecord({
                id: 5,
                date: 'Jan 10, 2023',
                serviceType: 'Bumper Repair',
                icon: 'minor_crash',
                mileage: '30,100 mi',
                provider: 'AutoBody Experts',
                status: 'Completed'
            })
        ];

        this.scheduledServices = [
            new ScheduledService({
                id: 1,
                month: 'Nov',
                day: '15',
                title: 'Oil Change & Filter',
                description: 'Scheduled at Fleet Service Center A',
                badge: 'Due soon',
                badgeType: 'orange'
            }),
            new ScheduledService({
                id: 2,
                month: 'Dec',
                day: '01',
                title: 'Brake Inspection',
                description: 'Routine yearly check',
                badge: 'Scheduled',
                badgeType: 'gray'
            }),
            new ScheduledService({
                id: 3,
                month: 'Jan',
                day: '10',
                title: 'Registration Renewal',
                description: 'Document submission required',
                badge: 'Admin',
                badgeType: 'gray'
            })
        ];

        this.alerts = [
            new MaintenanceAlert({
                name: 'Oil Life',
                percentage: 15,
                status: '15% remaining',
                warning: 'Service due in 500 miles',
                color: 'orange'
            }),
            new MaintenanceAlert({
                name: 'Tire Wear',
                percentage: 80,
                status: 'Good',
                warning: null,
                color: 'green'
            })
        ];
    }

    getServiceRecords() {
        return this.serviceRecords;
    }

    searchServiceRecords(searchTerm) {
        if (!searchTerm) return this.serviceRecords;
        return this.serviceRecords.filter(record => record.matches(searchTerm));
    }

    getScheduledServices() {
        return this.scheduledServices;
    }

    getVehicle() {
        return this.vehicle;
    }

    getUser() {
        return this.user;
    }

    getAlerts() {
        return this.alerts;
    }
}

// ==================== VIEWS ====================

class View {
    constructor() {
        this.elements = this.getElements();
    }

    getElements() {
        return {
            sidebar: document.getElementById('sidebar'),
            mobileMenuBtn: document.getElementById('mobileMenuBtn'),
            searchInput: document.getElementById('searchInput'),
            historyTableBody: document.getElementById('historyTableBody'),
            reportIssueBtn: document.getElementById('reportIssueBtn'),
            filterBtn: document.getElementById('filterBtn'),
            notificationBtn: document.querySelector('.notification-btn'),
            tableFooter: document.querySelector('.table-footer p'),
            odometerElement: document.querySelector('.stat-value.mono'),
            scheduleItems: document.querySelectorAll('.schedule-item'),
            navItems: document.querySelectorAll('.nav-item'),
            paginationBtns: document.querySelectorAll('.pagination button')
        };
    }

    showModal(title, message) {
        alert(`${title}\n\n${message}`);
    }

    renderServiceRecords(records) {
        const tbody = this.elements.historyTableBody;
        tbody.innerHTML = '';

        if (records.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="5" style="text-align: center; padding: 32px; color: #64748b;">
                        No results found
                    </td>
                </tr>
            `;
            return;
        }

        records.forEach(record => {
            const row = document.createElement('tr');
            row.dataset.recordId = record.id;
            row.innerHTML = `
                <td class="mono">${record.date}</td>
                <td>
                    <div class="service-type">
                        <span class="material-symbols-outlined">${record.icon}</span>
                        <span>${record.serviceType}</span>
                    </div>
                </td>
                <td class="mono">${record.mileage}</td>
                <td>${record.provider}</td>
                <td class="text-right">
                    <span class="badge badge-success">${record.status}</span>
                </td>
            `;
            tbody.appendChild(row);
        });
    }

    updateTableFooter(showing, total) {
        if (this.elements.tableFooter) {
            this.elements.tableFooter.innerHTML = `
                Showing <span class="highlight">1</span> to 
                <span class="highlight">${showing}</span> of 
                <span class="highlight">${total}</span> results
            `;
        }
    }

    updateOdometerDisplay(odometer) {
        if (this.elements.odometerElement) {
            this.elements.odometerElement.textContent = `${odometer.toLocaleString()} mi`;
            this.flashElement(this.elements.odometerElement);
        }
    }

    flashElement(element) {
        element.style.color = '#137fec';
        setTimeout(() => {
            element.style.color = '#0f172a';
        }, 500);
    }

    toggleSidebar(isOpen) {
        if (isOpen) {
            this.elements.sidebar.classList.remove('mobile-hidden');
        } else {
            this.elements.sidebar.classList.add('mobile-hidden');
        }
    }

    setFilterActive(isActive) {
        const btn = this.elements.filterBtn;
        if (isActive) {
            btn.style.backgroundColor = '#eff6ff';
            btn.style.borderColor = '#3b82f6';
            btn.style.color = '#3b82f6';
        } else {
            btn.style.backgroundColor = '#ffffff';
            btn.style.borderColor = '#e2e8f0';
            btn.style.color = '#64748b';
        }
    }

    animateProgressBars() {
        const progressFills = document.querySelectorAll('.progress-fill');
        progressFills.forEach(fill => {
            const width = fill.style.width;
            fill.style.width = '0%';
            setTimeout(() => {
                fill.style.width = width;
            }, 100);
        });
    }
}

// ==================== CONTROLLERS ====================

class SidebarController {
    constructor(view) {
        this.view = view;
        this.isOpen = false;
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.initializeMobileState();
        this.handleResize();
    }

    setupEventListeners() {
        this.view.elements.mobileMenuBtn.addEventListener('click', () => {
            this.toggle();
        });

        document.addEventListener('click', (e) => {
            this.handleOutsideClick(e);
        });
    }

    toggle() {
        this.isOpen = !this.isOpen;
        this.view.toggleSidebar(this.isOpen);
    }

    close() {
        this.isOpen = false;
        this.view.toggleSidebar(false);
    }

    handleOutsideClick(e) {
        if (window.innerWidth < 1024 && this.isOpen) {
            const sidebar = this.view.elements.sidebar;
            const menuBtn = this.view.elements.mobileMenuBtn;
            
            if (!sidebar.contains(e.target) && !menuBtn.contains(e.target)) {
                this.close();
            }
        }
    }

    initializeMobileState() {
        if (window.innerWidth < 1024) {
            this.view.toggleSidebar(false);
        }
    }

    handleResize() {
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                this.view.toggleSidebar(true);
                this.isOpen = false;
            } else if (!this.isOpen) {
                this.view.toggleSidebar(false);
            }
        });
    }
}

class SearchController {
    constructor(view, dataStore) {
        this.view = view;
        this.dataStore = dataStore;
        this.allRecords = this.dataStore.getServiceRecords();
        this.init();
    }

    init() {
        this.view.elements.searchInput.addEventListener('input', (e) => {
            this.handleSearch(e.target.value);
        });
    }

    handleSearch(searchTerm) {
        const filteredRecords = this.dataStore.searchServiceRecords(searchTerm);
        this.view.renderServiceRecords(filteredRecords);
        this.view.updateTableFooter(filteredRecords.length, this.allRecords.length);
        this.attachRowClickListeners();
    }

    attachRowClickListeners() {
        const rows = this.view.elements.historyTableBody.querySelectorAll('tr[data-record-id]');
        rows.forEach(row => {
            row.addEventListener('click', () => {
                const recordId = parseInt(row.dataset.recordId);
                const record = this.allRecords.find(r => r.id === recordId);
                if (record) {
                    this.showRecordDetails(record);
                }
            });
        });
    }

    showRecordDetails(record) {
        this.view.showModal(
            'Service Record Details',
            `${record.serviceType}\n\nDate: ${record.date}\nMileage: ${record.mileage}\nProvider: ${record.provider}\n\nIn a real application, this would show:\n- Full service report\n- Cost breakdown\n- Parts replaced\n- Technician notes\n- Invoice download option`
        );
    }
}

class ScheduleController {
    constructor(view, dataStore) {
        this.view = view;
        this.dataStore = dataStore;
        this.init();
    }

    init() {
        this.view.elements.scheduleItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                const service = this.dataStore.scheduledServices[index];
                if (service) {
                    this.showServiceDetails(service);
                }
            });
        });
    }

    showServiceDetails(service) {
        const details = service.getDetails();
        this.view.showModal(
            'Service Details',
            `${details.title}\n\nDate: ${details.date}\nLocation: ${details.description}\n\nIn a real application, this would open a detailed modal with options to:\n- View full service details\n- Reschedule\n- Add to calendar\n- Get directions`
        );
    }
}

class NotificationController {
    constructor(view, dataStore) {
        this.view = view;
        this.dataStore = dataStore;
        this.init();
    }

    init() {
        this.view.elements.notificationBtn.addEventListener('click', () => {
            this.showNotifications();
        });
    }

    showNotifications() {
        const alerts = this.dataStore.getAlerts();
        let message = 'Notifications:\n\n';
        
        alerts.forEach(alert => {
            message += `🔔 ${alert.name}: ${alert.status}`;
            if (alert.warning) {
                message += ` - ${alert.warning}`;
            }
            message += '\n';
        });

        const scheduled = this.dataStore.getScheduledServices();
        scheduled.forEach(service => {
            message += `🔔 ${service.title} scheduled for ${service.month} ${service.day}\n`;
        });

        message += '\nIn a real application, this would open a notifications panel.';
        this.view.showModal('Notifications', message);
    }
}

class FilterController {
    constructor(view) {
        this.view = view;
        this.isActive = false;
        this.init();
    }

    init() {
        this.view.elements.filterBtn.addEventListener('click', () => {
            this.toggle();
        });
    }

    toggle() {
        this.isActive = !this.isActive;
        this.view.setFilterActive(this.isActive);
        
        if (this.isActive) {
            this.showFilterOptions();
        }
    }

    showFilterOptions() {
        this.view.showModal(
            'Filter Options',
            '- By Date Range\n- By Service Type\n- By Provider\n- By Status\n\nIn a real application, this would show a dropdown menu with these filter options.'
        );
    }
}

class ReportIssueController {
    constructor(view) {
        this.view = view;
        this.init();
    }

    init() {
        this.view.elements.reportIssueBtn.addEventListener('click', () => {
            this.showReportForm();
        });
    }

    showReportForm() {
        this.view.showModal(
            'Report Issue',
            'Report Issue functionality would open a modal or form here.\n\nIn a real application, this would:\n- Open a form to describe the issue\n- Allow photo uploads\n- Capture vehicle and location data\n- Submit to maintenance team'
        );
    }
}

class NavigationController {
    constructor(view) {
        this.view = view;
        this.init();
    }

    init() {
        this.view.elements.navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                this.handleNavigation(e, item);
            });
        });

        this.setupKeyboardShortcuts();
    }

    handleNavigation(e, item) {
        const href = item.getAttribute('href');
        if (href === '#') {
            e.preventDefault();
            const text = item.querySelector('span:last-child').textContent;
            
            if (text !== 'My Vehicle') {
                this.view.showModal(
                    'Navigation',
                    `Navigating to ${text}...\n\nIn a real application, this would navigate to the ${text} page.`
                );
            }
        }
    }

    setupKeyboardShortcuts() {
        document.addEventListener('keydown', (e) => {
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                this.view.elements.searchInput.focus();
            }
        });
    }
}

class PaginationController {
    constructor(view) {
        this.view = view;
        this.init();
    }

    init() {
        this.view.elements.paginationBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                this.handlePagination(btn);
            });
        });
    }

    handlePagination(btn) {
        if (!btn.disabled) {
            const action = btn.textContent;
            this.view.showModal(
                'Pagination',
                `${action} page functionality.\n\nIn a real application, this would load the ${action.toLowerCase()} page of service history.`
            );
        }
    }
}

class VehicleController {
    constructor(view, dataStore) {
        this.view = view;
        this.dataStore = dataStore;
        this.vehicle = this.dataStore.getVehicle();
    }

    startOdometerUpdates() {
        setInterval(() => {
            const increase = Math.random() > 0.7 ? Math.floor(Math.random() * 3) : 0;
            if (increase > 0) {
                this.vehicle.updateOdometer(increase);
                this.view.updateOdometerDisplay(this.vehicle.odometer);
            }
        }, 30000);
    }
}

// ==================== APPLICATION ====================

class FleetGoApp {
    constructor() {
        this.dataStore = new DataStore();
        this.view = new View();
        this.controllers = {};
        
        this.init();
    }

    init() {
        console.log('%cFleetGo Dashboard', 'color: #137fec; font-size: 24px; font-weight: bold;');
        console.log('%cMVC Architecture Initialized', 'color: #64748b; font-size: 14px;');
        
        this.initializeControllers();
        this.setupInitialView();
        
        console.log('%c✓ All features loaded successfully!', 'color: #22c55e; font-weight: bold;');
    }

    initializeControllers() {
        this.controllers.sidebar = new SidebarController(this.view);
        this.controllers.search = new SearchController(this.view, this.dataStore);
        this.controllers.schedule = new ScheduleController(this.view, this.dataStore);
        this.controllers.notification = new NotificationController(this.view, this.dataStore);
        this.controllers.filter = new FilterController(this.view);
        this.controllers.reportIssue = new ReportIssueController(this.view);
        this.controllers.navigation = new NavigationController(this.view);
        this.controllers.pagination = new PaginationController(this.view);
        this.controllers.vehicle = new VehicleController(this.view, this.dataStore);
    }

    setupInitialView() {
        this.view.animateProgressBars();
        this.controllers.search.attachRowClickListeners();
        
        // Uncomment to enable real-time odometer updates
        // this.controllers.vehicle.startOdometerUpdates();
    }
}

// ==================== INITIALIZE APP ====================

document.addEventListener('DOMContentLoaded', () => {
    const app = new FleetGoApp();
    window.fleetGoApp = app; // Make available globally for debugging
});

// Add smooth scroll
document.documentElement.style.scrollBehavior = 'smooth';
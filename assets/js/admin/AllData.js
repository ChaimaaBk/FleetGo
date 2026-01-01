// ============================================
// FleetGo Dashboard - Main JavaScript
// ============================================

// Reports Data
const reportsData = [
    {
        id: 1,
        name: 'Q3 Fuel Consumption Analysis',
        date: 'Oct 24, 2023',
        category: 'Fuel',
        icon: 'local_gas_station',
        requestedBy: 'Sarah J.',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBGU4ec0S7Vz9ztRuiTQZLeKdje2sXvOeoWNWd1GPZB4abEQhRqEn2YAC_P7DKRdvrgXyHoMYZe1ptNBmkCUAQ38s65-4AdpUJY_GEIB3gJ9ygVG_ufLULy7A_2f7iLgSnZEiAZPzSxGCFepktC63SqtzZiY3jec9zUIwLLzikNxANdAmnKPiZp_unuOL7FVrvLHYeFShK5UM7OsxquNBwRvZ6o3ppKpxay4AR6P-rXH3E_WLf7-Hz6Jtfg2s32cyxFAZmSfh5OdQ',
        status: 'Ready'
    },
    {
        id: 2,
        name: 'Fleet Maintenance Ledger - Oct',
        date: 'Oct 22, 2023',
        category: 'Maintenance',
        icon: 'build',
        requestedBy: 'Mike R.',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBWCoTAXwY84HrzD2Lp1dqQIT6yrOZG1vrqVZJX34RDFL4OhOVgXTWc2IOBILkub_H8cbPFmUbfI9WMtbjMyzkkB3tdlRGn3aMeaqr-Aip9t8tmWdIAHAT_ndsZxyp1LLZh13UNW5xFK64L_uQ36jDbBFhecN2NYWKHbeYQEg8nnUmWhrhD10GzqxBCbUtrLNb_TPmRiVEpIr_S5mO8yaLtIgL4MbMxT3On83XTJDcDhT_1FUkol2HUqqidqK-K7LJkaMUiYJQQ3g',
        status: 'Ready'
    },
    {
        id: 3,
        name: 'Driver Safety Scorecard',
        date: 'Oct 20, 2023',
        category: 'Safety',
        icon: 'verified_user',
        requestedBy: 'Alex M.',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAf5lZGgwLxIbNsJG05BDq9csmhTQH3dEFRrguOghukDoaQ2jkU0WNq1mCLPujF7QjHZMrgB513eYxMaewfRd1oUvCNMa8gzgj4NhTJqdAsqqFwNZe3CJnwpyOnyHYFT7Cbo6eREuZ-BHXsJJCzk8Tn8IvVdij_qFKliKuz6r40Psxj2g0Ois8hdM47AuvCFiRoWrf16bM5YTzdAty_TgpowcRaqIH7o4HBNvCkDyfz5_bqZgWUjEG9KtJm3qAgUwY1tk_Kbf6v5w',
        status: 'Processing'
    },
    {
        id: 4,
        name: 'Annual Mileage Report 2023',
        date: 'Oct 15, 2023',
        category: 'Operations',
        icon: 'route',
        requestedBy: 'Sarah J.',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBelysVk26NaXwsJpF9m-zkUcMxlR4vwwp4-mTs6mJf6rESUPaS4OOOqjsYBP0_AAxd_dAa6CWBCrQuU9uZLeYqS0GjViLSyyYLbMaQTMhacGhUgc_9PXSsj3QtM08gf-P0KXnzkjiRswKoEQH0WJ9V9Urvb778C23fw-ifOumriJRTZGUxae7yM5OwY0VGg787k5tAxPR4zuaoriOS3KmLQo1eSrQ-DuizCyldtoeU-G3sU1jwB4-OEcrjesmuElS8vOlYo68Qog',
        status: 'Ready'
    },
    {
        id: 5,
        name: 'Vehicle Depreciation Analysis',
        date: 'Oct 12, 2023',
        category: 'Finance',
        icon: 'payments',
        requestedBy: 'Mike R.',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBWCoTAXwY84HrzD2Lp1dqQIT6yrOZG1vrqVZJX34RDFL4OhOVgXTWc2IOBILkub_H8cbPFmUbfI9WMtbjMyzkkB3tdlRGn3aMeaqr-Aip9t8tmWdIAHAT_ndsZxyp1LLZh13UNW5xFK64L_uQ36jDbBFhecN2NYWKHbeYQEg8nnUmWhrhD10GzqxBCbUtrLNb_TPmRiVEpIr_S5mO8yaLtIgL4MbMxT3On83XTJDcDhT_1FUkol2HUqqidqK-K7LJkaMUiYJQQ3g',
        status: 'Ready'
    }
];

// Chart Data
const chartData = [
    { month: 'Jan', fuel: 32, maintenance: 20 },
    { month: 'Feb', fuel: 40, maintenance: 22 },
    { month: 'Mar', fuel: 28, maintenance: 19.6 },
    { month: 'Apr', fuel: 36, maintenance: 23.4 },
    { month: 'May', fuel: 48, maintenance: 28.8 },
    { month: 'Jun', fuel: 44, maintenance: 22 }
];

// State Management
let currentPage = 1;
const itemsPerPage = 4;
let selectedReports = new Set();
let isDarkMode = false;
let filteredReportsData = [...reportsData];
let activeFilters = {
    status: ['Ready', 'Processing'],
    category: ['Fuel', 'Maintenance', 'Safety', 'Operations', 'Finance'],
    dateFrom: null,
    dateTo: null
};

// ============================================
// DOM Ready
// ============================================
document.addEventListener('DOMContentLoaded', () => {
    initializeApp();
});

function initializeApp() {
    // Initialize components
    setupEventListeners();
    renderReportsTable();
    renderChart();
    updatePagination();
    
    // Check for saved theme preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        toggleDarkMode();
    }
}

// ============================================
// Event Listeners Setup
// ============================================
function setupEventListeners() {
    // Sidebar toggle
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    
    menuToggle?.addEventListener('click', () => {
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
    
    // Theme toggle
    const themeToggle = document.getElementById('themeToggle');
    themeToggle?.addEventListener('click', toggleDarkMode);
    
    // Generate report button
    const generateBtn = document.getElementById('generateReport');
    generateBtn?.addEventListener('click', handleGenerateReport);
    
    // Export button
    const exportBtn = document.getElementById('exportBtn');
    exportBtn?.addEventListener('click', handleExportData);
    
    // Notification button
    const notificationBtn = document.getElementById('notificationBtn');
    notificationBtn?.addEventListener('click', () => {
        showNotification('You have 3 new notifications', 'info');
    });
    
    // Settings button
    const settingsBtn = document.getElementById('settingsBtn');
    settingsBtn?.addEventListener('click', () => {
        showNotification('Settings panel coming soon', 'info');
    });
    
    // Pagination
    const prevBtn = document.getElementById('prevPage');
    const nextBtn = document.getElementById('nextPage');
    
    prevBtn?.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderReportsTable();
            updatePagination();
        }
    });
    
    nextBtn?.addEventListener('click', () => {
        const totalPages = Math.ceil(filteredReportsData.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderReportsTable();
            updatePagination();
        }
    });
    
    // Select all checkbox
    const selectAll = document.getElementById('selectAll');
    selectAll?.addEventListener('change', handleSelectAll);
    
    // Tab switching
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault();
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            showNotification(`Switched to ${tab.textContent.trim()} tab`, 'success');
        });
    });
    
    // Filter changes
    const selects = document.querySelectorAll('.select-wrapper select');
    selects.forEach(select => {
        select.addEventListener('change', () => {
            console.log(`Filter changed: ${select.id} = ${select.value}`);
        });
    });

    // Filter button
    const filterBtns = document.querySelectorAll('.table-actions .btn-secondary');
    filterBtns.forEach(btn => {
        if (btn.textContent.includes('Filter')) {
            btn.addEventListener('click', openFilterModal);
        }
    });
}

// ============================================
// Dark Mode Toggle
// ============================================
function toggleDarkMode() {
    isDarkMode = !isDarkMode;
    document.body.classList.toggle('dark');
    
    const themeIcon = document.querySelector('#themeToggle .material-symbols-outlined');
    if (themeIcon) {
        themeIcon.textContent = isDarkMode ? 'light_mode' : 'dark_mode';
    }
    
    // Save preference
    localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
    
    // Re-render chart with new theme colors
    renderChart();
}

// ============================================
// Reports Table
// ============================================
function renderReportsTable() {
    const tbody = document.getElementById('reportsTableBody');
    if (!tbody) return;
    
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pageData = filteredReportsData.slice(start, end);
    
    tbody.innerHTML = pageData.map(report => `
        <tr>
            <td>
                <input type="checkbox" 
                       class="report-checkbox" 
                       data-id="${report.id}"
                       ${selectedReports.has(report.id) ? 'checked' : ''}>
            </td>
            <td style="font-weight: 500;">${report.name}</td>
            <td style="color: var(--text-secondary);">${report.date}</td>
            <td>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span class="material-symbols-outlined" style="color: #9ca3af; font-size: 18px;">${report.icon}</span>
                    <span>${report.category}</span>
                </div>
            </td>
            <td>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <div style="width: 24px; height: 24px; border-radius: 50%; background-image: url('${report.avatar}'); background-size: cover; background-position: center;"></div>
                    <span>${report.requestedBy}</span>
                </div>
            </td>
            <td>
                ${getStatusBadge(report.status)}
            </td>
            <td class="text-right">
                ${report.status === 'Ready' 
                    ? `<button class="link-button" onclick="handleDownloadReport(${report.id})" style="color: var(--primary); font-weight: 500; cursor: pointer; background: none; border: none; font-size: 14px;">Download</button>`
                    : `<span style="color: #9ca3af; font-size: 14px;">Wait...</span>`
                }
            </td>
        </tr>
    `).join('');
    
    // Attach event listeners to checkboxes
    const checkboxes = tbody.querySelectorAll('.report-checkbox');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', handleCheckboxChange);
    });
}

function getStatusBadge(status) {
    const badges = {
        'Ready': `
            <span style="display: inline-flex; align-items: center; gap: 6px; padding: 4px 10px; border-radius: 16px; font-size: 11px; font-weight: 600; background: rgba(34, 197, 94, 0.1); color: #16a34a; border: 1px solid rgba(34, 197, 94, 0.2);">
                <span style="width: 6px; height: 6px; border-radius: 50%; background: #16a34a;"></span>
                Ready
            </span>
        `,
        'Processing': `
            <span style="display: inline-flex; align-items: center; gap: 6px; padding: 4px 10px; border-radius: 16px; font-size: 11px; font-weight: 600; background: rgba(251, 191, 36, 0.1); color: #d97706; border: 1px solid rgba(251, 191, 36, 0.2);">
                <span style="width: 6px; height: 6px; border-radius: 50%; background: #f59e0b; animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;"></span>
                Processing
            </span>
        `
    };
    return badges[status] || badges['Ready'];
}

function handleCheckboxChange(e) {
    const reportId = parseInt(e.target.dataset.id);
    if (e.target.checked) {
        selectedReports.add(reportId);
    } else {
        selectedReports.delete(reportId);
    }
    updateSelectAllCheckbox();
}

function handleSelectAll(e) {
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pageData = filteredReportsData.slice(start, end);
    
    if (e.target.checked) {
        pageData.forEach(report => selectedReports.add(report.id));
    } else {
        pageData.forEach(report => selectedReports.delete(report.id));
    }
    renderReportsTable();
}

function updateSelectAllCheckbox() {
    const selectAll = document.getElementById('selectAll');
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pageData = filteredReportsData.slice(start, end);
    
    const allChecked = pageData.every(report => selectedReports.has(report.id));
    if (selectAll) {
        selectAll.checked = allChecked;
    }
}

function updatePagination() {
    const totalPages = Math.ceil(filteredReportsData.length / itemsPerPage);
    const start = (currentPage - 1) * itemsPerPage + 1;
    const end = Math.min(start + itemsPerPage - 1, filteredReportsData.length);
    
    const showingCount = document.getElementById('showingCount');
    const totalCount = document.getElementById('totalCount');
    
    if (showingCount) showingCount.textContent = `${start}-${end}`;
    if (totalCount) totalCount.textContent = filteredReportsData.length;
    
    // Update button states
    const prevBtn = document.getElementById('prevPage');
    const nextBtn = document.getElementById('nextPage');
    
    if (prevBtn) {
        prevBtn.disabled = currentPage === 1;
        prevBtn.style.opacity = currentPage === 1 ? '0.5' : '1';
        prevBtn.style.cursor = currentPage === 1 ? 'not-allowed' : 'pointer';
    }
    
    if (nextBtn) {
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.style.opacity = currentPage === totalPages ? '0.5' : '1';
        nextBtn.style.cursor = currentPage === totalPages ? 'not-allowed' : 'pointer';
    }
}

// ============================================
// Chart Rendering
// ============================================
function renderChart() {
    const container = document.getElementById('costChart');
    if (!container) return;
    
    const maxValue = Math.max(...chartData.map(d => d.fuel + d.maintenance));
    const chartHeight = 256;
    
    container.innerHTML = `
        <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: space-between; font-size: 12px; color: #9ca3af;">
            ${[40, 30, 20, 10, 0].map(val => `
                <div style="border-bottom: 1px solid ${isDarkMode ? '#374151' : '#f0f2f4'}; width: 100%; height: 0; position: relative;">
                    <span style="position: absolute; top: -12px; right: 0; opacity: 0.5;">$${val}k</span>
                </div>
            `).join('')}
        </div>
        <div style="position: absolute; inset: 0; display: flex; align-items: flex-end; justify-content: space-around; padding: 0 40px;">
            ${chartData.map(data => {
                const totalHeight = ((data.fuel + data.maintenance) / maxValue) * (chartHeight - 40);
                const fuelHeight = (data.fuel / (data.fuel + data.maintenance)) * totalHeight;
                const maintenanceHeight = totalHeight - fuelHeight;
                
                return `
                    <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; cursor: pointer; width: 100%; max-width: 40px; z-index: 10;" class="chart-bar">
                        <div style="position: relative; width: 100%; height: ${totalHeight}px; background: ${isDarkMode ? 'rgba(59, 130, 246, 0.3)' : '#e0e7ff'}; border-radius: 4px 4px 0 0; display: flex; flex-direction: column; justify-content: flex-end; transition: all 0.2s;">
                            <div style="width: 100%; height: ${fuelHeight}px; background: #137fec; border-radius: 4px 4px 0 0;"></div>
                            <div class="chart-tooltip" style="opacity: 0; position: absolute; bottom: 100%; left: 50%; transform: translateX(-50%); margin-bottom: 8px; background: #1f2937; color: white; font-size: 12px; padding: 6px 10px; border-radius: 6px; white-space: nowrap; transition: opacity 0.2s; pointer-events: none;">
                                $${data.fuel}k / $${data.maintenance}k
                            </div>
                        </div>
                        <span style="font-size: 12px; font-weight: 500; color: #6b7280;">${data.month}</span>
                    </div>
                `;
            }).join('')}
        </div>
    `;
    
    // Add hover effects
    const bars = container.querySelectorAll('.chart-bar');
    bars.forEach(bar => {
        bar.addEventListener('mouseenter', () => {
            const tooltip = bar.querySelector('.chart-tooltip');
            if (tooltip) tooltip.style.opacity = '1';
        });
        bar.addEventListener('mouseleave', () => {
            const tooltip = bar.querySelector('.chart-tooltip');
            if (tooltip) tooltip.style.opacity = '0';
        });
    });
}

// ============================================
// Action Handlers
// ============================================
function handleGenerateReport() {
    const dateRange = document.getElementById('dateRange')?.value;
    const reportType = document.getElementById('reportType')?.value;
    const vehicleGroup = document.getElementById('vehicleGroup')?.value;
    const driver = document.getElementById('driver')?.value;
    
    showNotification('Generating report...', 'info');
    
    // Simulate report generation
    setTimeout(() => {
        showNotification(`Report generated successfully for ${dateRange}`, 'success');
        console.log('Report params:', { dateRange, reportType, vehicleGroup, driver });
    }, 1500);
}

function handleExportData() {
    showNotification('Preparing export...', 'info');
    
    setTimeout(() => {
        // Simulate data export
        const exportData = {
            reports: filteredReportsData,
            chartData: chartData,
            exportDate: new Date().toISOString()
        };
        
        const dataStr = JSON.stringify(exportData, null, 2);
        const dataBlob = new Blob([dataStr], { type: 'application/json' });
        const url = URL.createObjectURL(dataBlob);
        
        const link = document.createElement('a');
        link.href = url;
        link.download = `fleetgo-export-${Date.now()}.json`;
        link.click();
        
        URL.revokeObjectURL(url);
        showNotification('Data exported successfully!', 'success');
    }, 1000);
}

function handleDownloadReport(reportId) {
    const report = filteredReportsData.find(r => r.id === reportId);
    if (report) {
        showNotification(`Downloading: ${report.name}`, 'success');
        console.log('Downloading report:', report);
    }
}

// ============================================
// Filter Modal Functions
// ============================================
function openFilterModal() {
    const modal = document.getElementById('filterModal');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeFilterModal() {
    const modal = document.getElementById('filterModal');
    modal.classList.remove('active');
    document.body.style.overflow = 'auto';
}

function applyFilters() {
    // Get selected status filters
    const statusCheckboxes = document.querySelectorAll('input[name="status"]:checked');
    activeFilters.status = Array.from(statusCheckboxes).map(cb => cb.value);
    
    // Get selected category filters
    const categoryCheckboxes = document.querySelectorAll('input[name="category"]:checked');
    activeFilters.category = Array.from(categoryCheckboxes).map(cb => cb.value);
    
    // Get date filters
    activeFilters.dateFrom = document.getElementById('filterDateFrom').value;
    activeFilters.dateTo = document.getElementById('filterDateTo').value;
    
    // Apply filters
    filteredReportsData = reportsData.filter(report => {
        // Filter by status
        if (!activeFilters.status.includes(report.status)) {
            return false;
        }
        
        // Filter by category
        if (!activeFilters.category.includes(report.category)) {
            return false;
        }
        
        // Filter by date
        if (activeFilters.dateFrom || activeFilters.dateTo) {
            const reportDate = new Date(report.date);
            
            if (activeFilters.dateFrom) {
                const fromDate = new Date(activeFilters.dateFrom);
                if (reportDate < fromDate) return false;
            }
            
            if (activeFilters.dateTo) {
                const toDate = new Date(activeFilters.dateTo);
                if (reportDate > toDate) return false;
            }
        }
        
        return true;
    });
    
    // Reset to first page and render
    currentPage = 1;
    renderReportsTable();
    updatePagination();
    
    // Show notification
    const filterCount = filteredReportsData.length;
    showNotification(`Showing ${filterCount} filtered report${filterCount !== 1 ? 's' : ''}`, 'success');
    
    closeFilterModal();
}

function resetFilters() {
    // Reset all checkboxes
    document.querySelectorAll('input[name="status"]').forEach(cb => cb.checked = true);
    document.querySelectorAll('input[name="category"]').forEach(cb => cb.checked = true);
    
    // Reset date inputs
    document.getElementById('filterDateFrom').value = '';
    document.getElementById('filterDateTo').value = '';
    
    // Reset filters
    activeFilters = {
        status: ['Ready', 'Processing'],
        category: ['Fuel', 'Maintenance', 'Safety', 'Operations', 'Finance'],
        dateFrom: null,
        dateTo: null
    };
    
    filteredReportsData = [...reportsData];
    currentPage = 1;
    renderReportsTable();
    updatePagination();
    
    showNotification('Filters reset', 'info');
}

// Close modal when clicking outside
document.addEventListener('click', (e) => {
    const modal = document.getElementById('filterModal');
    if (e.target === modal) {
        closeFilterModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeFilterModal();
    }
});

// ============================================
// Notification System
// ============================================
function showNotification(message, type = 'info') {
    // Remove existing notification
    const existing = document.querySelector('.notification');
    if (existing) existing.remove();
    
    const colors = {
        success: '#16a34a',
        error: '#dc2626',
        info: '#137fec',
        warning: '#f59e0b'
    };
    
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${colors[type]};
        color: white;
        padding: 16px 24px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        font-size: 14px;
        font-weight: 500;
        animation: slideIn 0.3s ease;
    `;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Add animation styles
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
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
`;
document.head.appendChild(style);

// ============================================
// Utility Functions
// ============================================
function formatCurrency(value) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0
    }).format(value);
}

function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString('en-US', {
        month: 'short',
        day: 'numeric',
        year: 'numeric'
    });
}

// Make functions globally accessible
window.handleDownloadReport = handleDownloadReport;
window.closeFilterModal = closeFilterModal;
window.applyFilters = applyFilters;
window.resetFilters = resetFilters;

console.log('FleetGo Dashboard initialized successfully!');
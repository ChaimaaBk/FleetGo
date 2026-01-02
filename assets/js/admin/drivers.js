// ============================================================================
// DATA
// ============================================================================
const driversData = [
    {
        id: 1,
        name: 'John Doe',
        driverId: 'DRV-4092',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCTyj8InTf0QaPvBP2Un4AUXNczjBwU6jGazL9s3Jmmvfxj4sE08ZFHTWtmPynYPz08Sk_klMW7lMedV_jzzDV9zzb273mO_w8UN5l2oFpTM07ItOOYt6Njm1PmgjMF4VocXDV8Wjmy81tRwOW7iMMTlJLw_plClYBX4krvMjlo5vOlU77s-KDLMz-LGyw7j-AIfStn6f6I7qU9jtCA8SHF_mT7qga_Pg5APOc6FWpwdMxBkvf_l0rkQsYedKC1R9W7Iia_iXU4Og',
        licenseClass: 'Class A',
        licenseNumber: '#99283711',
        licenseExpiry: 'Dec 12, 2024',
        phone: '(555) 123-4567',
        status: 'active',
        vehicle: 'Ford Transit #402',
        route: 'Downtown - North'
    },
    {
        id: 2,
        name: 'Sarah Jenkins',
        driverId: 'DRV-4110',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAsdyh8w0-NKv7qQ6X0y6kGvB-faRVNMMd4z-gCJoHIc8eZ5fHzlPcY8K5XgAnnOCtYZB_8J_fQn41W3k-Qxt1K4d7yHCdnD4bO8dWfPvNsS3ZES-dTmJpcwDKyEqR_1t1W02R7Bc9wnM0Y6xi6Yb7UwgBcXrrPn17RJX4dOB1SBXAAfMY_dqsTl9tZdBSk93FWYo2c88DhjWyDG9QmbMcGE3O2m7BaFKzufvKwVtf_ytGbWhAo-5ae6x0ANLIyc7Nxtyxs_II9lQ',
        licenseClass: 'Class B',
        licenseNumber: '#11293844',
        licenseExpiry: 'Oct 15, 2023 (10 days)',
        phone: '(555) 234-5678',
        status: 'on-duty',
        vehicle: 'Volvo FH16 #881',
        route: 'Long Haul: Chicago - NYC',
        warning: true
    },
    {
        id: 3,
        name: 'Michael Chen',
        driverId: 'DRV-3921',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDevI6BCYSm7QP6nHQea7eH2waIq4FEt8l6i19OaNt8G_IgzNgcXkAaeXRVUY4zGbtA1i3RxCUL34MqNFqJY9Q5Pe-r6ub49tTTgP8PARXJQ5wcQzYRpTQMso8erd9JpGGy_jDZyiWFtB083T0VrRW78vTSfMOKbbTMljltU2RCly5iili9_CRIJ4XQGfFNMAFp8QNeAPl_NEBQOSyczsKMgivCnwAghzZJL-j5P2J6yqzGP4i33o3ttNY3kAZupXRnedGfdNKlcA',
        licenseClass: 'Class C',
        licenseNumber: '#88273611',
        licenseExpiry: 'Feb 20, 2025',
        phone: '(555) 345-6789',
        status: 'off-duty',
        vehicle: 'Unassigned',
        route: 'Unassigned'
    },
    {
        id: 4,
        name: 'David Kim',
        driverId: 'DRV-4201',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA61zGCZFJUQSkCb8qnonMfsmLDLDJCDQ8H5dnx45DR0UNYpzgP6bO9Gvk6xnLbgVuoD8Wm5zsHYgcj_2cgngAud3NJ6xnoGg1f-dsU7TKSTW5Gg6oAtJIzfjKnaSdJgp4AHq-s7GoyeSVGPZm7NcWuyQsoT_cRp_7tQkpmpwptchXzBAdOz8TEFiaxs8SJQQQdtPgdnN2Ky5_2hvIaQ598ZZIeRt6peuTUGoExIO1I5v5oIFqgJyUMovgyZpM-7F6dA47OmnLWvw',
        licenseClass: 'Class A',
        licenseNumber: '#77283912',
        licenseExpiry: 'Jun 10, 2025',
        phone: '(555) 456-7890',
        status: 'active',
        vehicle: 'Mercedes Actros #305',
        route: 'East Coast Distribution'
    },
    {
        id: 5,
        name: 'Amanda Wilson',
        driverId: 'DRV-4155',
        avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBnK6fIU72XwwFRDewB7sL_fsHvaaMcmD-QBBV66el24gDX2l8-5uZoRerPBrVy7qRAkrVlMCGM7xEq701HuyJX_3Y1av9MqDuacJjLOkW-uVwbYPgnV8QcL26Uo7bcPAA-dLYX-LpUuvWUFFGJ4SwgTC3E_rzaYGxyEacPws2euwt9HZDDVG79_9E54aWipG8VfUOczICjPQcHs9aR8zOHEic2x75ZN9KNpNtNRcqcjPStH7jdPI_xWSgwCrMHEpbmka_vIRtVGQ',
        licenseClass: 'Class B',
        licenseNumber: '#55483921',
        licenseExpiry: 'Aug 05, 2024',
        phone: '(555) 567-8901',
        status: 'on-leave',
        vehicle: 'Unassigned',
        route: 'Unassigned'
    }
];

// ============================================================================
// STATE
// ============================================================================
let drivers = [...driversData];
let currentPage = 1;
const itemsPerPage = 5;
let filteredDrivers = [...drivers];
let editingDriverId = null;
let deletingDriverId = null;

// ============================================================================
// INITIALIZATION
// ============================================================================
document.addEventListener('DOMContentLoaded', function() {
    renderTable();
    attachEventListeners();
});

// ============================================================================
// RENDER TABLE
// ============================================================================
function renderTable() {
    const tableBody = document.getElementById('driversTableBody');
    tableBody.innerHTML = '';

    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const paginatedDrivers = filteredDrivers.slice(startIndex, endIndex);

    paginatedDrivers.forEach(driver => {
        const row = createTableRow(driver);
        tableBody.appendChild(row);
    });

    updatePagination();
}

function createTableRow(driver) {
    const row = document.createElement('tr');
    if (driver.warning) {
        row.style.backgroundColor = '#fff7ed';
    }

    const statusClass = `status-badge ${driver.status}`;
    const statusText = formatStatus(driver.status);

    row.innerHTML = `
        <td>
            <input type="checkbox" class="table-checkbox"/>
        </td>
        <td>
            <div class="driver-profile">
                <div class="driver-avatar" style="background-image: url('${driver.avatar}')"></div>
                <div class="driver-info">
                    <p class="driver-name">${driver.name}</p>
                    <p class="driver-id">ID: ${driver.driverId}</p>
                    <p class="driver-id">${driver.phone}</p>
                </div>
            </div>
        </td>
        <td>
            <div>
                <div>
                    <span class="license-badge">${driver.licenseClass}</span>
                    <span class="license-number">${driver.licenseNumber}</span>
                </div>
                <div class="license-expiry ${driver.warning ? 'warning' : ''}">
                    <span class="material-symbols-outlined">calendar_month</span>
                    Exp: ${driver.licenseExpiry}
                </div>
            </div>
        </td>
        <td>
            <span class="${statusClass}"></span>
            ${statusText}
        </td>
        <td>
            <div class="assignment">
                ${driver.vehicle === 'Unassigned' ? 
                    `<span class="assignment-unassigned">${driver.vehicle}</span>` :
                    `<p class="assignment-vehicle">${driver.vehicle}</p>
                     <p class="assignment-route">Route: ${driver.route}</p>`
                }
            </div>
        </td>
        <td>
            <div class="action-buttons">
                <button class="action-btn" onclick="editDriver(${driver.id})" title="Edit">
                    <span class="material-symbols-outlined">edit</span>
                </button>
                <button class="action-btn delete" onclick="deleteDriver(${driver.id})" title="Delete">
                    <span class="material-symbols-outlined">delete</span>
                </button>
            </div>
        </td>
    `;

    return row;
}

function formatStatus(status) {
    const statusMap = {
        'active': 'Active',
        'on-duty': 'On Duty',
        'off-duty': 'Off Duty',
        'on-leave': 'On Leave',
        'suspended': 'Suspended'
    };
    return statusMap[status] || status;
}

// ============================================================================
// FILTERING & SEARCH
// ============================================================================
function handleSearch(e) {
    const searchTerm = e.target.value.toLowerCase();
    applyFilters();
}

function handleStatusFilter(e) {
    applyFilters();
}

function applyFilters() {
    const searchTerm = document.getElementById('driverSearch').value.toLowerCase();
    const statusFilter = document.getElementById('statusFilter').value;

    filteredDrivers = drivers.filter(driver => {
        const matchSearch = 
            driver.name.toLowerCase().includes(searchTerm) ||
            driver.driverId.toLowerCase().includes(searchTerm) ||
            driver.phone.toLowerCase().includes(searchTerm) ||
            driver.licenseNumber.toLowerCase().includes(searchTerm);

        const matchStatus = statusFilter === 'Status: All' || 
            formatStatus(driver.status) === statusFilter;

        return matchSearch && matchStatus;
    });

    currentPage = 1;
    renderTable();
}

// ============================================================================
// PAGINATION
// ============================================================================
function updatePagination() {
    const totalPages = Math.ceil(filteredDrivers.length / itemsPerPage);
    const pageNumbersContainer = document.getElementById('pageNumbers');
    pageNumbersContainer.innerHTML = '';

    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, filteredDrivers.length);

    document.querySelector('.current-page').textContent = filteredDrivers.length === 0 ? 0 : startIndex + 1;
    document.querySelector('.items-per-page').textContent = endIndex;
    document.querySelector('.total-items').textContent = filteredDrivers.length;

    // Generate page numbers
    for (let i = 1; i <= Math.min(totalPages, 8); i++) {
        const btn = document.createElement('button');
        btn.className = `pagination-btn ${i === currentPage ? 'active' : ''}`;
        btn.textContent = i;
        btn.onclick = () => goToPage(i);
        pageNumbersContainer.appendChild(btn);
    }

    if (totalPages > 8) {
        const dots = document.createElement('span');
        dots.textContent = '...';
        pageNumbersContainer.appendChild(dots);

        const lastBtn = document.createElement('button');
        lastBtn.className = 'pagination-btn';
        lastBtn.textContent = totalPages;
        lastBtn.onclick = () => goToPage(totalPages);
        pageNumbersContainer.appendChild(lastBtn);
    }

    // Update prev/next buttons
    document.querySelector('.prev-btn').disabled = currentPage === 1;
    document.querySelector('.next-btn').disabled = currentPage === totalPages || totalPages === 0;
}

function goToPage(page) {
    currentPage = page;
    renderTable();
}

function handlePrevPage() {
    if (currentPage > 1) {
        currentPage--;
        renderTable();
    }
}

function handleNextPage() {
    const totalPages = Math.ceil(filteredDrivers.length / itemsPerPage);
    if (currentPage < totalPages) {
        currentPage++;
        renderTable();
    }
}

// ============================================================================
// DRIVER ACTIONS
// ============================================================================
function editDriver(id) {
    const driver = drivers.find(d => d.id === id);
    editingDriverId = id;

    document.getElementById('modalTitle').textContent = 'Edit Driver';
    document.getElementById('driverName').value = driver.name;
    document.getElementById('driverId').value = driver.driverId;
    document.getElementById('driverPhone').value = driver.phone;
    document.getElementById('licenseClass').value = driver.licenseClass;
    document.getElementById('licenseNumber').value = driver.licenseNumber;
    document.getElementById('licenseExpiry').value = driver.licenseExpiry;
    document.getElementById('driverStatus').value = driver.status;
    document.getElementById('vehicleAssignment').value = driver.vehicle;
    document.getElementById('driverRoute').value = driver.route;

    document.getElementById('driverModal').classList.remove('hidden');
}

function deleteDriver(id) {
    const driver = drivers.find(d => d.id === id);
    deletingDriverId = id;

    document.getElementById('deleteDriverName').textContent = driver.name;
    document.getElementById('deleteModal').classList.remove('hidden');
}

function closeDriverModal() {
    document.getElementById('driverModal').classList.add('hidden');
    editingDriverId = null;
    document.getElementById('driverForm').reset();
    document.getElementById('modalTitle').textContent = 'Add Driver';
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
    deletingDriverId = null;
}

function handleSaveDriver(event) {
    event.preventDefault();

    const driverData = {
        name: document.getElementById('driverName').value,
        driverId: document.getElementById('driverId').value,
        phone: document.getElementById('driverPhone').value,
        licenseClass: document.getElementById('licenseClass').value,
        licenseNumber: document.getElementById('licenseNumber').value,
        licenseExpiry: document.getElementById('licenseExpiry').value,
        status: document.getElementById('driverStatus').value,
        vehicle: document.getElementById('vehicleAssignment').value || 'Unassigned',
        route: document.getElementById('driverRoute').value || 'Unassigned'
    };

    if (editingDriverId) {
        // Update existing driver
        const driverIndex = drivers.findIndex(d => d.id === editingDriverId);
        if (driverIndex !== -1) {
            drivers[driverIndex] = { ...drivers[driverIndex], ...driverData };
        }
        showNotification('Driver updated successfully');
    } else {
        // Add new driver
        const newId = Math.max(...drivers.map(d => d.id), 0) + 1;
        drivers.push({
            id: newId,
            avatar: 'https://via.placeholder.com/150',
            warning: false,
            ...driverData
        });
        showNotification('Driver added successfully');
    }

    closeDriverModal();
    applyFilters();
}

function confirmDelete() {
    drivers = drivers.filter(d => d.id !== deletingDriverId);
    closeDeleteModal();
    applyFilters();
    showNotification('Driver deleted successfully');
}

// ============================================================================
// NOTIFICATIONS
// ============================================================================
function showNotification(message) {
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #078838;
        color: white;
        padding: 16px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1001;
        animation: slideUp 0.3s ease;
    `;
    notification.textContent = message;
    document.body.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// ============================================================================
// EVENT LISTENERS
// ============================================================================
function attachEventListeners() {
    // Search
    const searchInput = document.getElementById('driverSearch');
    if (searchInput) {
        searchInput.addEventListener('input', handleSearch);
    }

    // Status filter
    const statusFilter = document.getElementById('statusFilter');
    if (statusFilter) {
        statusFilter.addEventListener('change', handleStatusFilter);
    }

    // Pagination
    document.querySelector('.prev-btn').addEventListener('click', handlePrevPage);
    document.querySelector('.next-btn').addEventListener('click', handleNextPage);

    // Add driver button
    const addBtn = document.querySelector('.add-driver-btn');
    if (addBtn) {
        addBtn.addEventListener('click', function() {
            editingDriverId = null;
            document.getElementById('driverForm').reset();
            document.getElementById('modalTitle').textContent = 'Add Driver';
            document.getElementById('driverModal').classList.remove('hidden');
        });
    }

    // Export button
    const exportBtn = document.querySelector('.export-btn');
    if (exportBtn) {
        exportBtn.addEventListener('click', function() {
            alert('Export functionality');
        });
    }

    // Close modals on overlay click
    document.getElementById('driverModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDriverModal();
        }
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });

    // Close modals on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDriverModal();
            closeDeleteModal();
        }
    });
}
// ============================================================================
// DATA
// ============================================================================
const vehiclesData = [
    {
        id: 1,
        name: 'Toyota Camry',
        year: 2023,
        type: 'Sedan',
        status: 'active',
        plate: 'ABC-1234',
        vin: '1HGCM8263MX...',
        driver: 'John Doe',
        mileage: '12,450 km',
        image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAKkvIOjaYZvCVwtnUc55DryTUo32pBRW595nG3oarVajWeGYQC_mym5BgcvlM7m7qJq_16wC0Pt4FvvbcSiaVO4ybv8A0-4UZeDSbI7Y3RO-DiXelcKwBYyK1eKloCVVQ5TiG1N9zXkNLAe6Qxjf8eAIqhB3WbOrefbDnqWjOFBh3zJu_Gz8J1BNTq4k4WCrvlGDLJvBPPl-_gJiJnOf0G1tRXNt5mdMV-mBhe7yo1unJ9TTGD8_AJhJvOFHz6X_qc5kLzQtPtMw',
        driverImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCi8jIsjhu15je0aMMPmrDsY8zlSryVjWnrhlkHeMT5tUs3mM13Sxn6d8fRmtqdEnx0G4zar0CNuZUCYnR6ev8DnoAwP7ENSFhaliBTfZAP1XsMkNOc9AikgRc4AZtyAr9EcyQqVGt5jM5tPCcWufyYTYYB65wOgDS26RkN-EeHYjCGLNfGIWDIG-z3H8J98_JfD3NR1EIqUCI6OKjqcycO5qgK2xqi685mhpmb4f4X9Ke0E_JpMt50DVp2VTIAJkDQfeTWPINe8Q'
    },
    {
        id: 2,
        name: 'Ford Transit',
        year: 2021,
        type: 'Cargo Van',
        status: 'maintenance',
        plate: 'TRK-9876',
        vin: '2FTYR1459KA...',
        driver: 'Unassigned',
        mileage: '45,120 km',
        image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC2SVBk1QLm5QKh091TJLB2uT6RNynoj2pDDmrk3wdHFWKz10rqpHDay27f0IMwxga3IhZ4CbFQQ4BJ1bnBObaoJHN9TCAXgUSonA58NuQxPm01cTLtSwzFzZAv3QUcU3eGzc5Nlxw81JE6D-ZBWPlr6yLX2-tXOuirfxVRWODqH--QOCPAaiityyiPq3Vu8DbhZ7-o3DV9-JRfbSfklgFbkYWD52xhrtKlBdxZyBclq1nE5p_aVC8NmWPNy-XbNvrXoklf4UJ2bw',
        driverImage: null
    },
    {
        id: 3,
        name: 'Rivian R1T',
        year: 2024,
        type: 'Electric Pickup',
        status: 'active',
        plate: 'ELC-2024',
        vin: '7FPGK1922LN...',
        driver: 'Sarah Connor',
        mileage: '3,200 km',
        image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAB68RLRdaMIpgQlSaMmDOiT6yfXbtWF9qAZNX355h5cSQzvo6BFY-yWIr9owSqZJyZO5oPG3bBzszI83-HRrnIMoWjDfxH_BSbS-fFD9J9ZrPgwtpZ9QOo80iPkOidt38a0VtJmNoL_s869cWhFYRowIONd6UW-AeUHuy4y-SpVYzlpHHkWAZdfPRUGU3ZiJHMg6974zmAJEW80gn5AQw4c63o-ZdmIf_zmUfkvF-d9LHlFE6ZCgPYg63mZfIuAjUSOYkfKX4bSA',
        driverImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCBKxlAw3ot9Z_0WMuDphVE_sVJabC7oDfMnAVKTyWnpIl9WhhplY0fxACMULz6X4gu7nYdy5FyFW7Cjexq279fmAfxWio4wGHH12DYlF8Ncj2ZG141wuHVAIbVlHtLNPtD_omRUo76AkMCeY3s0rocEEwX6LIbaO-f0TQk7OuNICLN5SE3xh0l1QlSFEQFt7HOc2qpDXfUx5rCDxHX9BT9rvnXXfEKg6j4GOl4T5Z9BFzNyqObakPQoSi2zWcUfnv5E4pZg-D9vg'
    },
    {
        id: 4,
        name: 'Honda Civic',
        year: 2020,
        type: 'Sedan',
        status: 'out-of-service',
        plate: 'XTY-5544',
        vin: '1HGFA5622PL...',
        driver: 'Unassigned',
        mileage: '88,210 km',
        image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCDbwdD5pzSVpm6T7rHMMSe55g-ftV7fAN7uB45UDHDMP1iiiTyaqAVA3mMapmbCZ5c7dvImWgEws7rgRONvi6U5p3oJOnHwhqIcrkt8dsXMWezx7yedpOK2kBFWcJjAz8OjkVs9K6z5qRWI52dJ_EBLWQIRuM_LLhzfYNwKKxqL72CYV0F7AAEUEiJRi0u_1_sGMp3fw8W0IbYhu-eaBtuf9tsuTwWib-3TVPwDn966i96N_rvygxRhjUw2ukRgAwqJB3hDqFK_A',
        driverImage: null
    },
    {
        id: 5,
        name: 'Chevrolet Corvette',
        year: 2023,
        type: 'Sports',
        status: 'active',
        plate: 'SPD-9999',
        vin: '1G1YC2D44P5...',
        driver: 'Mike Ross',
        mileage: '5,100 km',
        image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBa8VoRqFZ3t_deEzDcqkNg-iOLaD-ROQWiL9rht6pMh0mJ885h7MbWf7Wr5eu0nU15gv1jfZUlOGCPfkldLcU7NiFFEkKjGGHjaTLQN1_lODCsYpCCc8XEZBv_cT66dVGaRllaj1HqX6KfOA4e2ExWLsqUHza4r-yvSo4aHUzpzv8vHGmGsMUREbeHlfprZK9P2pkgOREVW2NqxnX3NfX7sEi8Ed1kp1hk7TFqJ7vMccYTXyd5aBwd3ck2qUMis2VvognbA4Omyw',
        driverImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC51Fvg1jY2UEHVjLFjJOBysK8O-9yGdXWLNGUIiG7k3rzZPmrauYIkCXMNGBfS7gi1S-apXYLt8TaOIOYusGfhjM615DB6jYJn6aH-xDGjUvn8rAEApgQ9a4-RHuLI50TS4WY_NkHrQ9wf14o0GsQjAkkrBtc9jOzdO6WBqqLEyMTA-Oi3QtN5lKi2yOMAiyH4bApx0hE3ECHsc8F5uC6B7oiLtVS0EO0Rgir7VWHMqsG2f1yj5fPihNTN7NEwmA71g2y4wVuUgg'
    }
];

// ============================================================================
// STATE VARIABLES
// ============================================================================
let vehicles = [...vehiclesData];
const ITEMS_PER_PAGE = 5;
let currentPage = 1;
let filteredVehicles = [...vehicles];
let editingVehicleId = null;
let deletingVehicleId = null;

// ============================================================================
// INITIALIZATION
// ============================================================================
document.addEventListener('DOMContentLoaded', function() {
    renderTable();
    updatePagination();
    attachEventListeners();
    setupTheme();
});

// ============================================================================
// RENDER TABLE
// ============================================================================
function renderTable() {
    const tableBody = document.getElementById('table-body');
    tableBody.innerHTML = '';

    const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
    const endIndex = startIndex + ITEMS_PER_PAGE;
    const paginatedVehicles = filteredVehicles.slice(startIndex, endIndex);

    if (paginatedVehicles.length === 0) {
        tableBody.innerHTML = `
            <tr>
                <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-secondary);">
                    No vehicles found
                </td>
            </tr>
        `;
        return;
    }

    paginatedVehicles.forEach(vehicle => {
        const row = createTableRow(vehicle);
        tableBody.appendChild(row);
    });
}

function createTableRow(vehicle) {
    const row = document.createElement('tr');
    
    const statusClass = `status-badge ${vehicle.status}`;
    const statusText = formatStatus(vehicle.status);
    
    const driverCell = vehicle.driver === 'Unassigned' 
        ? `<span class="text-xs italic text-slate-400">Unassigned</span>`
        : `<div class="driver-cell">
            <div class="driver-avatar" style="background-image: url('${vehicle.driverImage}')"></div>
            <span>${vehicle.driver}</span>
        </div>`;

    row.innerHTML = `
        <td class="py-4 px-6">
            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary bg-white dark:bg-slate-700 dark:border-slate-600"/>
        </td>
        <td class="py-4 px-6">
            <div class="vehicle-cell">
                <div class="vehicle-image" style="background-image: url('${vehicle.image}')"></div>
                <div class="vehicle-info">
                    <p>${vehicle.name}</p>
                    <p>${vehicle.year} • ${vehicle.type}</p>
                </div>
            </div>
        </td>
        <td class="py-4 px-6">
            <span class="${statusClass}">
                <span class="dot"></span>
                ${statusText}
            </span>
        </td>
        <td class="py-4 px-6">
            <div class="details-cell">
                <span>${vehicle.plate}</span>
                <span>${vehicle.vin}</span>
            </div>
        </td>
        <td class="py-4 px-6">
            ${driverCell}
        </td>
        <td class="py-4 px-6">
            <div class="mileage-cell">
                <span>${vehicle.mileage}</span>
            </div>
        </td>
        <td class="py-4 px-6">
            <div style="display: flex; gap: 8px; justify-content: flex-end;">
                <button class="btn-action btn-edit" onclick="handleEditVehicle(${vehicle.id})" title="Edit">
                    <span class="material-symbols-outlined">edit</span>
                </button>
                <button class="btn-action btn-delete" onclick="handleDeleteVehicle(${vehicle.id})" title="Delete">
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
        'maintenance': 'Maintenance',
        'out-of-service': 'Out of Service'
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

function handleFilter(e) {
    applyFilters();
}

function applyFilters() {
    const searchTerm = document.querySelector('.search-box input').value.toLowerCase();
    const statusFilter = document.querySelectorAll('.filter-select')[0].value;
    const typeFilter = document.querySelectorAll('.filter-select')[1].value;

    filteredVehicles = vehicles.filter(vehicle => {
        const matchSearch = 
            vehicle.name.toLowerCase().includes(searchTerm) ||
            vehicle.plate.toLowerCase().includes(searchTerm) ||
            vehicle.vin.toLowerCase().includes(searchTerm) ||
            vehicle.driver.toLowerCase().includes(searchTerm);

        const matchStatus = statusFilter === 'Status: All' || 
            vehicle.status === statusFilter.toLowerCase();

        const matchType = typeFilter === 'Type: All' || 
            vehicle.type === typeFilter;

        return matchSearch && matchStatus && matchType;
    });

    currentPage = 1;
    renderTable();
    updatePagination();
}

// ============================================================================
// PAGINATION
// ============================================================================
function updatePagination() {
    const totalPages = Math.ceil(filteredVehicles.length / ITEMS_PER_PAGE);
    const prevBtn = document.querySelectorAll('.btn-pagination')[0];
    const nextBtn = document.querySelectorAll('.btn-pagination')[1];
    const pageInfo = document.querySelector('.table-footer span');

    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages || totalPages === 0;

    const startItem = filteredVehicles.length === 0 ? 0 : (currentPage - 1) * ITEMS_PER_PAGE + 1;
    const endItem = Math.min(currentPage * ITEMS_PER_PAGE, filteredVehicles.length);

    pageInfo.innerHTML = `
        Showing <span class="font-medium">${startItem}-${endItem}</span> of 
        <span class="font-medium">${filteredVehicles.length}</span> vehicles
    `;
}

function handlePagination(isNext) {
    const totalPages = Math.ceil(filteredVehicles.length / ITEMS_PER_PAGE);
    
    if (isNext && currentPage < totalPages) {
        currentPage++;
    } else if (!isNext && currentPage > 1) {
        currentPage--;
    }
    
    renderTable();
    updatePagination();
}

// ============================================================================
// MODAL VEHICLE (ADD/EDIT)
// ============================================================================
function openVehicleModal(vehicleId = null) {
    const modal = document.getElementById('vehicleModal');
    const modalTitle = document.getElementById('modalTitle');
    const form = document.getElementById('vehicleForm');
    
    editingVehicleId = vehicleId;

    if (vehicleId) {
        const vehicle = vehicles.find(v => v.id === vehicleId);
        modalTitle.textContent = 'Edit Vehicle';
        
        document.getElementById('vehicleName').value = vehicle.name;
        document.getElementById('vehicleYear').value = vehicle.year;
        document.getElementById('vehicleType').value = vehicle.type;
        document.getElementById('vehiclePlate').value = vehicle.plate;
        document.getElementById('vehicleVin').value = vehicle.vin;
        document.getElementById('vehicleDriver').value = vehicle.driver === 'Unassigned' ? '' : vehicle.driver;
        document.getElementById('vehicleMileage').value = vehicle.mileage;
        document.getElementById('vehicleStatus').value = vehicle.status;
    } else {
        modalTitle.textContent = 'Add Vehicle';
        form.reset();
    }

    modal.classList.remove('hidden');
}

function closeVehicleModal() {
    document.getElementById('vehicleModal').classList.add('hidden');
    editingVehicleId = null;
}

function handleAddVehicle() {
    openVehicleModal();
}

function handleEditVehicle(vehicleId) {
    openVehicleModal(vehicleId);
}

function handleSaveVehicle(event) {
    event.preventDefault();

    const vehicleData = {
        name: document.getElementById('vehicleName').value,
        year: parseInt(document.getElementById('vehicleYear').value),
        type: document.getElementById('vehicleType').value,
        plate: document.getElementById('vehiclePlate').value,
        vin: document.getElementById('vehicleVin').value,
        driver: document.getElementById('vehicleDriver').value || 'Unassigned',
        mileage: document.getElementById('vehicleMileage').value,
        status: document.getElementById('vehicleStatus').value,
        image: 'https://via.placeholder.com/200',
        driverImage: null
    };

    if (editingVehicleId) {
        // Update existing vehicle
        const vehicleIndex = vehicles.findIndex(v => v.id === editingVehicleId);
        if (vehicleIndex !== -1) {
            vehicles[vehicleIndex] = { ...vehicles[vehicleIndex], ...vehicleData };
        }
        showNotification('Vehicle updated successfully');
    } else {
        // Add new vehicle
        const newId = Math.max(...vehicles.map(v => v.id), 0) + 1;
        vehicles.push({ id: newId, ...vehicleData });
        showNotification('Vehicle added successfully');
    }

    closeVehicleModal();
    applyFilters();
}

// ============================================================================
// MODAL DELETE
// ============================================================================
function handleDeleteVehicle(vehicleId) {
    deletingVehicleId = vehicleId;
    document.getElementById('deleteModal').classList.remove('hidden');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
    deletingVehicleId = null;
}

function confirmDelete() {
    vehicles = vehicles.filter(v => v.id !== deletingVehicleId);
    closeDeleteModal();
    applyFilters();
    showNotification('Vehicle deleted successfully');
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
        background-color: #10b981;
        color: white;
        padding: 16px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
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
    // Search functionality
    const searchInput = document.querySelector('.search-box input');
    if (searchInput) {
        searchInput.addEventListener('input', handleSearch);
    }

    // Filter selects
    const filterSelects = document.querySelectorAll('.filter-select');
    filterSelects.forEach(select => {
        select.addEventListener('change', handleFilter);
    });

    // Add vehicle button
    const addVehicleBtn = document.querySelector('.btn-primary');
    if (addVehicleBtn) {
        addVehicleBtn.addEventListener('click', handleAddVehicle);
    }

    // Pagination buttons
    const paginationBtns = document.querySelectorAll('.btn-pagination');
    paginationBtns.forEach((btn, index) => {
        btn.addEventListener('click', function() {
            handlePagination(index === 1);
        });
    });

    // Close modals on overlay click
    const vehicleModal = document.getElementById('vehicleModal');
    if (vehicleModal) {
        vehicleModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeVehicleModal();
            }
        });
    }

    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeDeleteModal();
            }
        });
    }

    // Close modals on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeVehicleModal();
            closeDeleteModal();
        }
    });
}

// ============================================================================
// THEME MANAGEMENT
// ============================================================================
function setupTheme() {
    const htmlElement = document.documentElement;
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Check localStorage first, then system preference
    const isDark = localStorage.getItem('theme') === 'dark' ||
                   (!localStorage.getItem('theme') && prefersDark);
    
    if (isDark) {
        htmlElement.classList.add('dark');
    } else {
        htmlElement.classList.remove('dark');
    }
}

function toggleTheme() {
    const htmlElement = document.documentElement;
    const isDark = htmlElement.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

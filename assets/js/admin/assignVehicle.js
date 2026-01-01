// ============================================================================
// DATA
// ============================================================================
const assignmentsData = [
    {
        id: 1,
        vehicleName: 'Ford Transit',
        vehiclePlate: 'XY 987 ZW',
        vehicleImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdPvfZJJpLTgSt79W7szhQsWxf-dmSVSGPwlwH86bxSUwPZmMkXpYk_rm_qhi4biu-y7AN7wlrVxrjloElRTs2iNjuVOZfwBm3Knau55DvB8bfbv82Q3MjSjZeQv7ZVjL0dHu356zx3X2N52EaNAvkgvaKPTtb-RzVtqMcx-pAHl4cpRFRfce0QYPq0PYVHdlASgKZcDgZWp_sr0949z5fy3VD9gBGXCXf6RNBr-eTkYsoCvgO1wwvlmFAZsmCkrW9cxrn3A_ytg',
        driverName: 'Sarah Smith',
        driverId: 'ID: 122',
        driverImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuARaso-q_2qD0j5gPr6G8ogbi3U2cHcWpYhyrhoQldB5Y9qxmeFLcRnVKCt1DFG8dL5bb5PSkXoMUEdnZK7OXYEx5r7HwYbdPCPIhS8_7_j050CmMs6Godx7mvVu76r8x4usvcngGwRl7ZHSmEAWS7P91HQygYr78ExoIegt5eTKYfKjs0zUmna2EX5D1yV2J8fAtKLzzVov50lq2-RGRuR6o15PutTmx-xuiQ4hW0D09rptH3r6-al2vfnFq40z05FuTD160BoAA',
        startDate: '2024-10-12',
        endDate: '2024-10-24',
        daysRemaining: 12,
        status: 'active',
        notes: 'Regular route assignment'
    },
    {
        id: 2,
        vehicleName: 'Volvo FH16',
        vehiclePlate: 'TR 442 KL',
        vehicleImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC7wLAen3uL4GZWYcMzYwarfDcPscouEDIlLwM0MzjnSBQjo2LLsge8HfY6wcMa-CYGWYYA7MLMyBXkyDBclsuyEBOEPIW66zQ8ZGCZaLmu2WFngrF1ynvHglZlkrIdJyYAFvb8X-2FwvKeNiY8-7dXJhOC8Cmwy88N5hnf-F1YEyjeeq6hsWIGWfi-NuTbfJEX2vVkmayRJUtq2pWCW13t5YOCRRumlorAUM76bEphrFxEfxqgjURfaC_SXZWOjJ7RRAcVle6bag',
        driverName: 'Mike Johnson',
        driverId: 'ID: 884',
        driverImage: '',
        startDate: '2024-10-10',
        endDate: '2024-11-10',
        daysRemaining: 28,
        status: 'active',
        notes: 'Long haul assignment'
    },
    {
        id: 3,
        vehicleName: 'Chevrolet Malibu',
        vehiclePlate: 'NY 551 OP',
        vehicleImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuArEOPjGAB-ilIHBVec1j3Ofro-AOKr0N7QzT3M2DtUwk7diE601iuR7uEFfLm5qNmEP6kIUCcEVrPiwwbNyejQxrHm-LXDVDiw_rZIJ21ZjafNxxvUUvUKeIigFP2U_Jj7to1zUDC7cBxhEpnOYNaARUUJPR3023B7eaJ1nMttBv-A-qhq6pnjCGoc8oIlCWcHswMeYK9blehWF9axJjKE65b--1rLrGq7tzXw_LiB166Ac9FDTknckUBKRasy7eA7Wm8K53MM7A',
        driverName: 'David Chen',
        driverId: 'ID: 301',
        driverImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuByshU-OINNtB7Jwe7CI7u2W-EKV5S1OZb52Cc7j_AcupCg8WaqS63_oGC-oYPOjfUQdhgSbdzNeOb2BgHXWbMRapr4iWc6XRfeTQUGKbBRV8o9Ws7sNENXg00F3owmocA6y9D0i4LJYio2yNnK3r-Exz1vbPj8qGPzxqi5CjeB2h5-lm0BrBW8DmxMDK4rQEhOizM4UdmjHIu1419R2ETKycqu_GjTk4whlkX3b6nRcVbGzS7d8DFtSdTyhU9zE9GG-1f-FbW7ag',
        startDate: '2024-10-25',
        endDate: '2024-10-30',
        daysRemaining: 0,
        status: 'scheduled',
        notes: 'Scheduled for next week'
    },
    {
        id: 4,
        vehicleName: 'Mercedes Sprinter',
        vehiclePlate: 'MS 772 QP',
        vehicleImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB6iRYPcEtnpBJB3AOejBhqUqRjbWeTzJP_9OHmbzLXDexN7V5PFuusWZopy5jDbQcJ7O3aFKH8l5BpmCPFYsYOEDZEybk2JoqqhCzbHUNIPtq_rVMp1AJQ_yErtDiyxpn9XtqfACAsKxdSTsMa9cAdrpKZAmsxVsMmOxsPqvQXBS08N4w6VkYmUptudaciHlJXIt-gcSOIi5aHtJTlo7n2hhejIKzJMcijChYRpdoUlXAkGEckCR-MoBA-uPuUiogopefizlDlEA',
        driverName: 'Emily Davis',
        driverId: 'ID: 559',
        driverImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA8Lmd4wQqhIbqiEeKTjp2Mq5pO5L1TF_akNkA1k7xfWZ92JjmUv7o2xzY7MZax0hQMkVtp_d-r4Hz-XrrJRfUR48R8mlUpb1M3dLbBqhep4F-Cs3fh2dgUFm-OCknOSeO7JPLvx6-V1143EVEn8x9UYOxY_dABfBGVpCmVqmfYZRtnSgTu8MWO_zlCxifvpmquw8AVZEMUAtfmnnbMPbhHG0mT8KtpkKbkRFhRGxJBR70McW1uXa708HkdeMlkdMqJyhYSToy8dA',
        startDate: '2024-10-01',
        endDate: '2024-10-15',
        daysRemaining: 0,
        status: 'completed',
        notes: 'Assignment completed'
    }
];

// ============================================================================
// STATE
// ============================================================================
let assignments = [...assignmentsData];
let filteredAssignments = [...assignments];
let currentFilter = 'all';
let currentPage = 1;
const itemsPerPage = 4;
let editingAssignmentId = null;
let deletingAssignmentId = null;

// ============================================================================
// INITIALIZATION
// ============================================================================
document.addEventListener('DOMContentLoaded', function() {
    renderAssignmentsTable();
    attachEventListeners();
});

// ============================================================================
// RENDER TABLE
// ============================================================================
function renderAssignmentsTable() {
    const tableBody = document.getElementById('assignmentsTableBody');
    tableBody.innerHTML = '';

    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const paginatedAssignments = filteredAssignments.slice(startIndex, endIndex);

    if (paginatedAssignments.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="5" style="text-align: center; padding: 40px; color: #64748b;">No assignments found</td></tr>';
        return;
    }

    paginatedAssignments.forEach(assignment => {
        const row = createTableRow(assignment);
        tableBody.appendChild(row);
    });

    updatePagination();
}

function createTableRow(assignment) {
    const row = document.createElement('tr');

    const daysText = assignment.daysRemaining > 0 
        ? `${assignment.daysRemaining} days remaining`
        : assignment.status === 'scheduled'
        ? 'Starts in 3 days'
        : 'Ended recently';

    row.innerHTML = `
        <td>
            <div class="vehicle-cell">
                <div class="vehicle-image" style="background-image: url('${assignment.vehicleImage}')"></div>
                <div class="vehicle-info">
                    <p>${assignment.vehicleName}</p>
                    <p>${assignment.vehiclePlate}</p>
                </div>
            </div>
        </td>
        <td>
            <div class="driver-cell">
                ${assignment.driverImage ? 
                    `<div class="driver-avatar" style="background-image: url('${assignment.driverImage}')"></div>` :
                    `<div class="driver-avatar" style="background-color: #dbeafe; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #137fec;">MI</div>`
                }
                <div class="driver-info">
                    <p>${assignment.driverName}</p>
                    <p>${assignment.driverId}</p>
                </div>
            </div>
        </td>
        <td>
            <div class="period-cell">
                <p>${formatDate(assignment.startDate)} - ${formatDate(assignment.endDate)}</p>
                <p>${daysText}</p>
            </div>
        </td>
        <td>
            <span class="status-badge ${assignment.status}">${capitalizeFirst(assignment.status)}</span>
        </td>
        <td class="actions-col">
            <button class="action-btn" onclick="openEditModal(${assignment.id})" title="Edit">
                <span class="material-symbols-outlined">edit</span>
            </button>
            <button class="action-btn" onclick="openDeleteModal(${assignment.id})" title="Delete">
                <span class="material-symbols-outlined">delete</span>
            </button>
        </td>
    `;

    return row;
}

function formatDate(dateString) {
    const options = { month: 'short', day: 'numeric' };
    return new Date(dateString).toLocaleDateString('en-US', options);
}

function capitalizeFirst(str) {
    return str.charAt(0).toUpperCase() + str.slice(1).replace('-', ' ');
}

// ============================================================================
// FILTERING & SEARCH
// ============================================================================
function applyFilters() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();

    filteredAssignments = assignments.filter(assignment => {
        const matchSearch = 
            assignment.vehicleName.toLowerCase().includes(searchTerm) ||
            assignment.vehiclePlate.toLowerCase().includes(searchTerm) ||
            assignment.driverName.toLowerCase().includes(searchTerm) ||
            assignment.driverId.toLowerCase().includes(searchTerm);

        const matchFilter = currentFilter === 'all' || assignment.status === currentFilter;

        return matchSearch && matchFilter;
    });

    currentPage = 1;
    renderAssignmentsTable();
}

// ============================================================================
// PAGINATION
// ============================================================================
function updatePagination() {
    const totalPages = Math.ceil(filteredAssignments.length / itemsPerPage);
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, filteredAssignments.length);

    document.querySelector('.current').textContent = filteredAssignments.length === 0 ? 0 : startIndex + 1;
    document.querySelector('.items').textContent = endIndex;
    document.querySelector('.total').textContent = assignments.length;

    document.querySelector('.prev-btn').disabled = currentPage === 1;
    document.querySelector('.next-btn').disabled = currentPage === totalPages || totalPages === 0;
}

function handlePrevPage() {
    if (currentPage > 1) {
        currentPage--;
        renderAssignmentsTable();
    }
}

function handleNextPage() {
    const totalPages = Math.ceil(filteredAssignments.length / itemsPerPage);
    if (currentPage < totalPages) {
        currentPage++;
        renderAssignmentsTable();
    }
}

// ============================================================================
// MODALS
// ============================================================================
function openEditModal(id) {
    const assignment = assignments.find(a => a.id === id);
    editingAssignmentId = id;

    document.getElementById('editEndDate').value = assignment.endDate;
    document.getElementById('editNotes').value = assignment.notes;
    document.getElementById('editModal').classList.remove('hidden');
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
    editingAssignmentId = null;
}

function handleSaveEdit(event) {
    event.preventDefault();

    const assignment = assignments.find(a => a.id === editingAssignmentId);
    if (assignment) {
        assignment.endDate = document.getElementById('editEndDate').value;
        assignment.notes = document.getElementById('editNotes').value;
    }

    closeEditModal();
    applyFilters();
    showNotification('Assignment updated successfully');
}

function openDeleteModal(id) {
    deletingAssignmentId = id;
    document.getElementById('deleteModal').classList.remove('hidden');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
    deletingAssignmentId = null;
}

function confirmDelete() {
    assignments = assignments.filter(a => a.id !== deletingAssignmentId);
    closeDeleteModal();
    applyFilters();
    showNotification('Assignment deleted successfully');
}

// ============================================================================
// FORM SUBMISSION
// ============================================================================
function handleAssignmentForm(event) {
    event.preventDefault();

    const vehicleSelect = document.getElementById('vehicleSelect').value;
    const driverSelect = document.getElementById('driverSelect').value;
    const startDate = document.getElementById('startDate').value;
    const endDate = document.getElementById('endDate').value;
    const notes = document.getElementById('notes').value;

    if (!vehicleSelect || !driverSelect || !startDate || !endDate) {
        alert('Please fill in all required fields');
        return;
    }

    const newId = Math.max(...assignments.map(a => a.id), 0) + 1;
    
    assignments.push({
        id: newId,
        vehicleName: `Vehicle ${vehicleSelect}`,
        vehiclePlate: `PL ${vehicleSelect}`,
        vehicleImage: 'https://via.placeholder.com/150',
        driverName: `Driver ${driverSelect}`,
        driverId: `ID: ${driverSelect}`,
        driverImage: '',
        startDate,
        endDate,
        daysRemaining: 0,
        status: 'scheduled',
        notes
    });

    document.getElementById('assignmentForm').reset();
    applyFilters();
    showNotification('Vehicle assigned successfully');
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
        z-index: 2000;
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
    // Form submission
    document.getElementById('assignmentForm').addEventListener('submit', handleAssignmentForm);

    // Search
    document.getElementById('searchInput').addEventListener('input', applyFilters);

    // Tab filters
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.dataset.filter === 'completed' ? 'completed' : 
                           this.dataset.filter === 'scheduled' ? 'scheduled' : 'active';
            applyFilters();
        });
    });

    // Pagination
    document.querySelector('.prev-btn').addEventListener('click', handlePrevPage);
    document.querySelector('.next-btn').addEventListener('click', handleNextPage);

    // Modal overlays
    document.getElementById('editModal').addEventListener('click', function(e) {
        if (e.target === this) closeEditModal();
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) closeDeleteModal();
    });

    // Close modals on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEditModal();
            closeDeleteModal();
        }
    });
}
<?php
// Démarrer la session si nécessaire
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure le controller pour récupérer les données
require_once __DIR__ . '/../../controllers/assignmentController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Assign Vehicles - FleetGo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/admin/assignVehicle.css"/>
</head>
<body>
    <!-- Top Navigation -->
    <header class="header">
        <div class="logo-container">
            <div class="logo-icon">
                <span class="material-symbols-outlined fill">local_shipping</span>
            </div>
            <div>
                <h1 class="logo-title">Fleet<span>Go</span></h1>
            </div>
        </div>
        <div class="header-right">
            <button class="icon-btn">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="icon-btn">
                <span class="material-symbols-outlined">settings</span>
            </button>
            
        </div>
    </header>

    <!-- Main Content -->
    <div class="layout-container">
        <div class="content-wrapper">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <a href="dashbord.php">Dashbord</a>
                <span>/</span>
                <span>Assign Vehicles</span>
            </div>

            <!-- Page Header -->
            <div class="page-header">
                <div class="header-title">
                    <h1>Assign Vehicles</h1>
                    <p>Manage fleet distribution and driver schedules efficiently.</p>
                </div>

                <!-- Stats Cards -->
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <span class="material-symbols-outlined">assignment_ind</span>
                        </div>
                        <div>
                            <p class="stat-label">Total Assigned</p>
                            <p class="stat-value">142</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <span class="material-symbols-outlined">directions_car</span>
                        </div>
                        <div>
                            <p class="stat-label">Available Vehicles</p>
                            <p class="stat-value">18</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div>
                            <p class="stat-label">Available Drivers</p>
                            <p class="stat-value">5</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Grid -->
            <div class="main-grid">
                <!-- Left Column: Assignment Form -->
                <div class="form-card">
                    <div class="card-header">
                        <h3>New Assignment</h3>
                    </div>
                    <form id="assignmentForm" class="form-content" action="../../controllers/assignmentController.php" method="POST">
                        <input type="hidden" name="ajouterAssignment" value="1"/>
                        <!-- Vehicle Select -->
                        <label class="form-group">
                            <span class="label-text">Select Vehicle</span>
                            <select id="vehicleSelect" required>
                                <option disabled selected>Search model or plate...</option>
                                <option value="1">Toyota Prius - AB 123 CD (Available)</option>
                                <option value="2">Ford Transit - XY 987 ZW (Available)</option>
                                <option value="3">Tesla Model 3 - EV 555 EL (Available)</option>
                            </select>
                        </label>

                        <!-- Driver Select -->
                        <label class="form-group">
                            <span class="label-text">Select Driver</span>
                            <select id="driverSelect" name="id_driver" required>
                                <option disabled selected>Search driver name or ID...</option>
                                <option value="1">John Doe - ID: 459 (Available)</option>
                                <option value="2">Sarah Smith - ID: 122 (On Leave)</option>
                                <option value="3">Mike Ross - ID: 889 (Available)</option>
                            </select>
                        </label>

                        <!-- Dates -->
                        <div class="date-row">
                            <label class="form-group">
                                <span class="label-text">Start Date</span>
                                <input type="date" id="startDate" name="start_date" required/>
                            </label>
                            <label class="form-group">
                                <span class="label-text">End Date</span>
                                <input type="date" id="endDate" name="end_date" required/>
                            </label>
                        </div>

                        <!-- Status -->
                        <label class="form-group">
                            <span class="label-text">Status</span>
                            <select name="status" required>
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                        </label>

                        <!-- Notes -->
                        <label class="form-group">
                            <span class="label-text">Notes (Optional)</span>
                            <textarea id="notes" placeholder="Special instructions for the driver..." rows="3"></textarea>
                        </label>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-submit">
                            <span class="material-symbols-outlined">add_circle</span>
                            Assign Vehicle
                        </button>
                    </form>
                </div>

                <!-- Right Column: Assignments Table -->
                <div class="table-card">
                    <!-- Table Header -->
                    <div class="table-header">
                        <h3>Current Assignments</h3>
                        <div class="tab-buttons">
                            <button class="tab-btn active" data-filter="all">Active</button>
                            <button class="tab-btn" data-filter="scheduled">Scheduled</button>
                            <button class="tab-btn" data-filter="completed">History</button>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="search-bar">
                        <span class="material-symbols-outlined">search</span>
                        <input type="text" id="searchInput" placeholder="Search by driver, vehicle or plate..."/>
                    </div>

                    <!-- Table -->
                    <div class="table-wrapper">
                        <table class="assignments-table">
                            <thead>
                                <tr>
                                    <th>Vehicle</th>
                                    <th>Driver</th>
                                    <th>Period</th>
                                    <th>Status</th>
                                    <th class="actions-col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="assignmentsTableBody">
                                <!-- Table rows populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="table-footer">
                        <?php
                        mysqli_data_seek($assignments, 0);
                        $total_assignments = mysqli_num_rows($assignments);
                        ?>
                        <span class="pagination-info">Total: <span class="total"><?php echo $total_assignments; ?></span> assignation(s)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Edit Assignment -->
    <div id="editModal" class="modal hidden">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Assignment</h3>
                <button class="modal-close" onclick="closeEditModal()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form id="editForm" action="../../controllers/assignmentController.php" method="POST">
                <input type="hidden" name="modifierAssignment" value="1"/>
                <input type="hidden" name="id" id="editAssignmentId"/>
                <label class="form-group">
                    <span class="label-text">Driver ID</span>
                    <input type="number" id="editIdDriver" name="id_driver" required/>
                </label>
                <label class="form-group">
                    <span class="label-text">Start Date</span>
                    <input type="date" id="editStartDate" name="start_date" required/>
                </label>
                <label class="form-group">
                    <span class="label-text">End Date</span>
                    <input type="date" id="editEndDate" name="end_date" required/>
                </label>
                <label class="form-group">
                    <span class="label-text">Status</span>
                    <select id="editStatus" name="status" required>
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                    </select>
                </label>
                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="closeEditModal()">Cancel</button>
                    <button type="submit" class="btn-save">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal: Delete Assignment -->
    <div id="deleteModal" class="modal hidden">
        <div class="modal-overlay"></div>
        <div class="modal-content delete-modal">
            <div class="modal-header">
                <h3>Delete Assignment</h3>
                <button class="modal-close" onclick="closeDeleteModal()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <p class="modal-text">Are you sure you want to delete this assignment? This action cannot be undone.</p>
            <div class="form-actions">
                <button class="btn-cancel" onclick="closeDeleteModal()">Cancel</button>
                <button class="btn-delete" onclick="confirmDelete()">Delete</button>
            </div>
        </div>
    </div>

    <script>
    function openEditAssignmentModal(id) {
        document.getElementById('editModal').classList.remove('hidden');
        document.getElementById('editAssignmentId').value = id;
    }
    
    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const editModal = document.getElementById('editModal');
        if (editModal) {
            editModal.querySelector('.modal-overlay').addEventListener('click', closeEditModal);
        }
    });
    </script>
</body>
</html>
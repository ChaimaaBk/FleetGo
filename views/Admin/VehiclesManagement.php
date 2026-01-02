<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Vehicle Management - FleetGo</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/admin/VehiclesManagement.css"/>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo-container">
            <div class="logo-icon">
                <span class="material-symbols-outlined fill">local_shipping</span>
            </div>
            <div>
                <h1 class="logo-title">Fleet<span>Go</span></h1>
                <p class="logo-subtitle">Management System</p>
            </div>
        </div>

        <nav class="nav-menu">
            <a class="menu-item" href="dashbord.php">
                <span class="material-symbols-outlined fill">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="menu-item active" href="VehiclesManagement.php">
                <span class="material-symbols-outlined">local_shipping</span>
                <span>Vehicles</span>
            </a>
            <a class="menu-item" href="drivers.php">
                <span class="material-symbols-outlined">group</span>
                <span>Drivers</span>
            </a>
            <a class="menu-item" href="assignVehicle.php">
                <span class="material-symbols-outlined">build</span>
                <span>Assign Vehicle</span>
            </a>

            <a class="menu-item" href="AllData.php">
                <span class="material-symbols-outlined">description</span>
                <span>All data</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <a class="menu-item" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span>Settings</span>
            </a>
            <div class="user-profile">
                <div class="user-avatar"></div>
                <div class="user-info">
                    <p class="user-name">Admin User</p>
                    <p class="user-email">admin@fleetgo.com</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="header-container">
                <div class="breadcrumb">
                    <a href="dashbord.php">Dashboard</a>
                    <span class="material-symbols-outlined">chevron_right</span>
                    <span>Vehicle Registry</span>
                </div>
                <div class="header-top">
                    <div class="header-title">
                        <h2>Vehicle Registry</h2>
                        <p>Manage, track, and optimize your entire fleet inventory</p>
                    </div>
                    <div class="header-actions">
                        <button class="btn btn-primary">
                            <span class="material-symbols-outlined">add</span>
                            Add Vehicle
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <div class="content-area">
            <div class="content-container">
                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Total Vehicles</p>
                            <span class="material-symbols-outlined">directions_car</span>
                        </div>
                        <div class="stat-value">
                            <p>142</p>
                            <span class="stat-badge positive">+5%</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Active Fleet</p>
                            <span class="material-symbols-outlined active">check_circle</span>
                        </div>
                        <div class="stat-value">
                            <p>118</p>
                            <span class="stat-badge positive">+2%</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">In Maintenance</p>
                            <span class="material-symbols-outlined maintenance">build</span>
                        </div>
                        <div class="stat-value">
                            <p>12</p>
                            <span class="stat-badge neutral">Avg 3 days</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Out of Service</p>
                            <span class="material-symbols-outlined danger">block</span>
                        </div>
                        <div class="stat-value">
                            <p>12</p>
                            <span class="stat-badge danger">-1%</span>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="filters-bar">
                    <div class="search-box">
                        <span class="material-symbols-outlined">search</span>
                        <input type="text" placeholder="Search by VIN, Plate, or Driver..."/>
                    </div>
                    <div class="filters-group">
                        <select class="filter-select">
                            <option>Status: All</option>
                            <option>Active</option>
                            <option>Maintenance</option>
                            <option>Retired</option>
                        </select>
                        <select class="filter-select">
                            <option>Type: All</option>
                            <option>Truck</option>
                            <option>Sedan</option>
                            <option>Van</option>
                        </select>
                        <button class="btn btn-filter">
                            <span class="material-symbols-outlined">filter_list</span>
                            <span>More Filters</span>
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-container">
                    <table class="vehicles-table">
                        <thead>
                            <tr>
                                <th><input type="checkbox"/></th>
                                <th>Vehicle</th>
                                <th>Status</th>
                                <th>Details (VIN / Plate)</th>
                                <th>Driver</th>
                                <th>Mileage</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <!-- Rows will be populated by JavaScript -->
                        </tbody>
                    </table>
                    <div class="table-footer">
                        <span>Showing <span class="font-medium">1-5</span> of <span class="font-medium">142</span> vehicles</span>
                        <div class="pagination">
                            <button class="btn-pagination" disabled>Previous</button>
                            <button class="btn-pagination">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL ADD/EDIT VEHICLE -->
        <div id="vehicleModal" class="modal hidden">
            <div class="modal-overlay"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="modalTitle">Add Vehicle</h3>
                    <button class="btn-close" onclick="closeVehicleModal()">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <form id="vehicleForm" onsubmit="handleSaveVehicle(event)">
                    <div class="form-group">
                        <label for="vehicleName">Vehicle Name</label>
                        <input type="text" id="vehicleName" required/>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="vehicleYear">Year</label>
                            <input type="number" id="vehicleYear" required/>
                        </div>
                        <div class="form-group">
                            <label for="vehicleType">Type</label>
                            <input type="text" id="vehicleType" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="vehiclePlate">License Plate</label>
                            <input type="text" id="vehiclePlate" required/>
                        </div>
                        <div class="form-group">
                            <label for="vehicleVin">VIN</label>
                            <input type="text" id="vehicleVin" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vehicleDriver">Driver</label>
                        <input type="text" id="vehicleDriver"/>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="vehicleMileage">Mileage</label>
                            <input type="text" id="vehicleMileage" required/>
                        </div>
                        <div class="form-group">
                            <label for="vehicleStatus">Status</label>
                            <select id="vehicleStatus" required>
                                <option value="active">Active</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="out-of-service">Out of Service</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary-form" onclick="closeVehicleModal()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Vehicle</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- MODAL DELETE CONFIRMATION -->
        <div id="deleteModal" class="modal hidden">
            <div class="modal-overlay"></div>
            <div class="modal-content delete-modal-content">
                <div class="modal-header">
                    <h3>Delete Vehicle</h3>
                    <button class="btn-close" onclick="closeDeleteModal()">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <p>Are you sure you want to delete this vehicle? This action cannot be undone.</p>
                <div class="form-actions">
                    <button class="btn btn-secondary-form" onclick="closeDeleteModal()">Cancel</button>
                    <button class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                </div>
            </div>
        </div>
    </main>

    <script src="../../assets/js/admin/VehiclesManagement.js"></script>
</body>
</html>
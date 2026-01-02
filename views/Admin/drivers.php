<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Driver Management - FleetGo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/admin/drivers.css"/>
</head>
<body>
    <div class="flex-container">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-content">
                <div class="logo-container">
                    <div class="logo-icon">
                        <span class="material-symbols-outlined fill">local_shipping</span>
                    </div>
                    <div>
                        <h1 class="logo-title">Fleet<span>Go</span></h1>
                        <p class="logo-subtitle">Admin console</p>
                    </div>
                </div>

                <nav class="nav-menu">
                    <a class="menu-item" href="dashbord.php">
                        <span class="material-symbols-outlined fill">dashboard</span>
                        <span>Dashboard</span>
                    </a>
                    <a class="menu-item" href="VehiclesManagement.php">
                        <span class="material-symbols-outlined">local_shipping</span>
                        <span>Vehicles</span>
                    </a>
                    <a class="menu-item active" href="drivers.php">
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

        <!-- MAIN CONTENT -->
        <div class="main-wrapper">
            <!-- HEADER -->
            <header class="header">
                <div class="header-left">
                    <button class="menu-toggle">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <h2>Driver Management</h2>
                </div>

                <div class="header-right">
                    <button class="icon-btn notifications-btn">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="notification-badge"></span>
                    </button>
                    <button class="icon-btn">
                        <span class="material-symbols-outlined">settings</span>
                    </button>
                </div>
            </header>

            <!-- MAIN CONTENT AREA -->
            <main class="main-content">
                <div class="content-wrapper">
                    <!-- STATS CARDS -->
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-header">
                                <div>
                                    <p class="stat-label">Total Drivers</p>
                                    <h3 class="stat-value">42</h3>
                                </div>
                                <div class="stat-icon blue">
                                    <span class="material-symbols-outlined">groups</span>
                                </div>
                            </div>
                            <div class="stat-footer">
                                <span class="material-symbols-outlined trending-up">trending_up</span>
                                <p class="stat-trend">+2% from last month</p>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-header">
                                <div>
                                    <p class="stat-label">Active On Duty</p>
                                    <h3 class="stat-value">35</h3>
                                </div>
                                <div class="stat-icon green">
                                    <span class="material-symbols-outlined">local_shipping</span>
                                </div>
                            </div>
                            <div class="stat-footer">
                                <p class="stat-info">83% utilization rate</p>
                            </div>
                        </div>

                        <div class="stat-card warning-card">
                            <div class="stat-header">
                                <div>
                                    <p class="stat-label">Licenses Expiring</p>
                                    <h3 class="stat-value">3</h3>
                                </div>
                                <div class="stat-icon orange">
                                    <span class="material-symbols-outlined">warning</span>
                                </div>
                            </div>
                            <div class="stat-footer">
                                <p class="stat-warning">Action required within 30 days</p>
                            </div>
                        </div>
                    </div>

                    <!-- FILTERS & SEARCH -->
                    <div class="filters-section">
                        <div class="search-input">
                            <span class="material-symbols-outlined">search</span>
                            <input type="text" placeholder="Search by name, license, or phone..." id="driverSearch"/>
                        </div>
                        <div class="filters-group">
                            <select id="statusFilter" class="filter-select">
                                <option>Status: All</option>
                                <option>Active</option>
                                <option>On Leave</option>
                                <option>Suspended</option>
                            </select>
                            <button class="add-driver-btn">
                                <span class="material-symbols-outlined">add</span>
                                Add Driver
                            </button>
                        </div>
                    </div>

                    <!-- TABLE -->
                    <div class="table-container">
                        <div class="table-wrapper">
                            <table class="drivers-table">
                                <thead>
                                    <tr>
                                        <th class="checkbox-col">
                                            <input type="checkbox" class="table-checkbox"/>
                                        </th>
                                        <th>Driver Profile</th>
                                        <th>License Details</th>
                                        <th>Status</th>
                                        <th>Current Assignment</th>
                                        <th class="actions-col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="driversTableBody">
                                    <!-- Table rows will be populated by JavaScript -->
                                </tbody>
                            </table>
                        </div>

                        <!-- TABLE FOOTER -->
                        <div class="table-footer">
                            <p class="footer-text">Showing <span class="current-page">1</span> to <span class="items-per-page">5</span> of <span class="total-items">42</span> results</p>
                            <div class="pagination">
                                <button class="pagination-btn prev-btn">
                                    <span class="material-symbols-outlined">chevron_left</span>
                                </button>
                                <div class="page-numbers" id="pageNumbers">
                                    <!-- Page numbers will be populated by JavaScript -->
                                </div>
                                <button class="pagination-btn next-btn">
                                    <span class="material-symbols-outlined">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- MODALES -->
    <!-- Modal Ajouter/Modifier Driver -->
    <div id="driverModal" class="modal hidden">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Add Driver</h3>
                <button class="modal-close" onclick="closeDriverModal()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form id="driverForm" onsubmit="handleSaveDriver(event)">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" id="driverName" required/>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Driver ID</label>
                        <input type="text" id="driverId" required/>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" id="driverPhone" required/>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>License Class</label>
                        <select id="licenseClass" required>
                            <option>Class A</option>
                            <option>Class B</option>
                            <option>Class C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>License Number</label>
                        <input type="text" id="licenseNumber" required/>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>License Expiry</label>
                        <input type="text" id="licenseExpiry" placeholder="e.g., Dec 12, 2024" required/>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select id="driverStatus" required>
                            <option value="active">Active</option>
                            <option value="on-duty">On Duty</option>
                            <option value="off-duty">Off Duty</option>
                            <option value="on-leave">On Leave</option>
                            <option value="suspended">Suspended</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Current Vehicle Assignment</label>
                    <input type="text" id="vehicleAssignment" placeholder="e.g., Ford Transit #402"/>
                </div>

                <div class="form-group">
                    <label>Route</label>
                    <input type="text" id="driverRoute" placeholder="e.g., Downtown - North"/>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="closeDriverModal()">Cancel</button>
                    <button type="submit" class="btn-submit">Save Driver</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Supprimer Driver -->
    <div id="deleteModal" class="modal hidden">
        <div class="modal-overlay"></div>
        <div class="modal-content delete-modal">
            <div class="modal-header">
                <h3>Delete Driver</h3>
                <button class="modal-close" onclick="closeDeleteModal()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <p class="modal-text">Are you sure you want to delete <strong id="deleteDriverName"></strong>? This action cannot be undone.</p>
            <div class="form-actions">
                <button class="btn-cancel" onclick="closeDeleteModal()">Cancel</button>
                <button class="btn-delete" onclick="confirmDelete()">Delete</button>
            </div>
        </div>
    </div>

    <script src="../../assets/js/admin/drivers.js"></script>
</body>
</html>
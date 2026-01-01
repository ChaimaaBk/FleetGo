<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Reports & Analytics - FleetGo</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/admin/AllData.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="logo-container">
                <div class="logo-icon">
                    <span class="material-symbols-outlined fill">local_shipping</span>
                </div>
                <div>
                    <h1 class="logo-title">Fleet<span>Go</span></h1>
                    <p class="logo-subtitle">Admin Portal</p>
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
                <a class="menu-item" href="drivers.php">
                    <span class="material-symbols-outlined">group</span>
                    <span>Drivers</span>
                </a>
                <a class="menu-item" href="assignVehicle.php">
                    <span class="material-symbols-outlined">build</span>
                    <span>Assign Vehicle</span>
                </a>

                <a class="menu-item active" href="AllData.php">
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
        <div class="main-wrapper">
            <!-- Header -->
            <header class="header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <div class="mobile-logo">
                        <div class="logo-icon-small">
                            <span class="material-symbols-outlined">local_shipping</span>
                        </div>
                        <h2>Fleet<span class="highlight">Go</span></h2>
                    </div>
                </div>
                
                <div class="header-actions">
                    <button class="icon-btn" id="notificationBtn">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="notification-badge"></span>
                    </button>
                    <button class="icon-btn" id="settingsBtn">
                        <span class="material-symbols-outlined">settings</span>
                    </button>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="content">
                <!-- Breadcrumb -->
                <div class="breadcrumb">
                    <a href="dashbord.php">Dashboard</a>
                    <span class="material-symbols-outlined">chevron_right</span>
                    <span>Reports & Analytics</span>
                </div>

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h1>Reports & Analytics</h1>
                        <p>Access comprehensive data across your entire fleet operation. Generate custom reports on costs, safety, and performance.</p>
                    </div>
                    <div class="header-buttons">
                        <button class="btn-primary" id="exportBtn">
                            <span class="material-symbols-outlined">download</span>
                            Export Data
                        </button>
                    </div>
                </div>

                <!-- Tabs -->
                <nav class="tabs">
                    <a href="#" class="tab active">Overview</a>
                    <a href="#" class="tab">Fuel Management</a>
                    <a href="#" class="tab">Driver Behavior</a>
                    <a href="#" class="tab">Cost Analysis</a>
                </nav>

                <!-- Filters -->
                <div class="filters-card">
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label>Date Range</label>
                            <div class="select-wrapper">
                                <select id="dateRange">
                                    <option>Last 30 Days</option>
                                    <option>Last Quarter</option>
                                    <option>Year to Date</option>
                                    <option>Custom Range</option>
                                </select>
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </div>
                        <div class="filter-group">
                            <label>Report Type</label>
                            <div class="select-wrapper">
                                <select id="reportType">
                                    <option>Executive Summary</option>
                                    <option>Detailed Ledger</option>
                                    <option>Exception Report</option>
                                    <option>Performance Cards</option>
                                </select>
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </div>
                        <div class="filter-group">
                            <label>Vehicle Group</label>
                            <div class="select-wrapper">
                                <select id="vehicleGroup">
                                    <option>All Vehicles</option>
                                    <option>Heavy Duty Trucks</option>
                                    <option>Delivery Vans</option>
                                    <option>Sedans</option>
                                </select>
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </div>
                        <div class="filter-group">
                            <label>Driver</label>
                            <div class="select-wrapper">
                                <select id="driver">
                                    <option>All Drivers</option>
                                    <option>Active Only</option>
                                    <option>On Leave</option>
                                </select>
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn-primary btn-generate" id="generateReport">
                        <span class="material-symbols-outlined">analytics</span>
                        Generate Report
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <span class="stat-badge badge-red">
                                <span class="material-symbols-outlined">trending_up</span> 2.4%
                            </span>
                        </div>
                        <div class="stat-content">
                            <p>Total Fleet Cost</p>
                            <p class="stat-value">$142,308</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <span class="material-symbols-outlined">local_gas_station</span>
                            </div>
                            <span class="stat-badge badge-green">
                                <span class="material-symbols-outlined">trending_down</span> 5.1%
                            </span>
                        </div>
                        <div class="stat-content">
                            <p>Fuel Usage</p>
                            <p class="stat-value">12,450 <span class="unit">Gal</span></p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <span class="material-symbols-outlined">verified_user</span>
                            </div>
                            <span class="stat-badge badge-green">
                                <span class="material-symbols-outlined">arrow_upward</span> 4pts
                            </span>
                        </div>
                        <div class="stat-content">
                            <p>Avg Safety Score</p>
                            <p class="stat-value">94<span class="unit">/100</span></p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <span class="material-symbols-outlined">monitor_heart</span>
                            </div>
                            <span class="stat-badge badge-neutral">Stable</span>
                        </div>
                        <div class="stat-content">
                            <p>Fleet Availability</p>
                            <p class="stat-value">98.5%</p>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="charts-grid">
                    <!-- Cost Analysis Chart -->
                    <div class="chart-card chart-large">
                        <div class="chart-header">
                            <div>
                                <h3>Cost Analysis</h3>
                                <p>Fuel vs Maintenance over last 6 months</p>
                            </div>
                            <button class="link-button">
                                Full Analysis <span class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </div>
                        <div class="chart-container" id="costChart"></div>
                        <div class="chart-legend">
                            <div class="legend-item">
                                <span class="legend-color" style="background: #137fec;"></span>
                                Fuel Cost
                            </div>
                            <div class="legend-item">
                                <span class="legend-color" style="background: #cbd5e1;"></span>
                                Maintenance Cost
                            </div>
                        </div>
                    </div>

                    <!-- Maintenance Donut Chart -->
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3>Maintenance Status</h3>
                            <button class="icon-btn-small">
                                <span class="material-symbols-outlined">more_horiz</span>
                            </button>
                        </div>
                        <div class="donut-chart">
                            <div class="donut" id="maintenanceDonut">
                                <div class="donut-center">
                                    <span class="donut-value">124</span>
                                    <span class="donut-label">Events</span>
                                </div>
                            </div>
                        </div>
                        <div class="donut-legend">
                            <div class="legend-row">
                                <div class="legend-item">
                                    <span class="legend-dot" style="background: #137fec;"></span>
                                    <span>Scheduled</span>
                                </div>
                                <span class="legend-value">65%</span>
                            </div>
                            <div class="legend-row">
                                <div class="legend-item">
                                    <span class="legend-dot" style="background: #cbd5e1;"></span>
                                    <span>Completed</span>
                                </div>
                                <span class="legend-value">20%</span>
                            </div>
                            <div class="legend-row">
                                <div class="legend-item">
                                    <span class="legend-dot" style="background: #ef4444;"></span>
                                    <span>Overdue</span>
                                </div>
                                <span class="legend-value">15%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reports Table -->
                <div class="table-section">
                    <div class="table-header">
                        <h3>Generated Reports Repository</h3>
                        <div class="table-actions">
                            <button class="btn-secondary btn-small">
                                <span class="material-symbols-outlined">tune</span> Filter
                            </button>
                            <button class="btn-secondary btn-small">
                                <span class="material-symbols-outlined">checklist</span> Bulk Actions
                            </button>
                        </div>
                    </div>
                    
                    <div class="table-card">
                        <div class="table-wrapper">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll" /></th>
                                        <th>Report Name</th>
                                        <th>Generated On</th>
                                        <th>Category</th>
                                        <th>Requested By</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="reportsTableBody">
                                    <!-- Reports will be populated by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                        <div class="table-footer">
                            <span class="table-info">Showing <span id="showingCount">1-4</span> of <span id="totalCount">28</span> reports</span>
                            <div class="pagination">
                                <button class="btn-secondary btn-small" id="prevPage">Previous</button>
                                <button class="btn-secondary btn-small" id="nextPage">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Filter Modal -->
    <div class="modal-overlay" id="filterModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Filter Reports</h3>
                <button class="modal-close" onclick="closeFilterModal()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="filter-section">
                    <label>Status</label>
                    <div class="checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="status" value="Ready" checked>
                            <span>Ready</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="status" value="Processing" checked>
                            <span>Processing</span>
                        </label>
                    </div>
                </div>

                <div class="filter-section">
                    <label>Category</label>
                    <div class="checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="category" value="Fuel" checked>
                            <span>Fuel</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="category" value="Maintenance" checked>
                            <span>Maintenance</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="category" value="Safety" checked>
                            <span>Safety</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="category" value="Operations" checked>
                            <span>Operations</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="category" value="Finance" checked>
                            <span>Finance</span>
                        </label>
                    </div>
                </div>

                <div class="filter-section">
                    <label>Date Range</label>
                    <div class="date-inputs">
                        <input type="date" id="filterDateFrom" class="date-input">
                        <span>to</span>
                        <input type="date" id="filterDateTo" class="date-input">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-secondary" onclick="resetFilters()">Reset</button>
                <button class="btn-primary" onclick="applyFilters()">Apply Filters</button>
            </div>
        </div>
    </div>

    <script src="../../assets/js/admin/AllData.js"></script>
</body>
</html>
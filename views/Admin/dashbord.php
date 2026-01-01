<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetGo Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/admin/dashbord.css">
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
                <p class="logo-subtitle">Admin Panel</p>
            </div>
        </div>
        
        <nav class="nav-menu">
            <a class="menu-item active" href="dashbord.php">
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
            <div class="header-left">
                <button class="menu-toggle">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h2 class="page-title">Dashboard</h2>
            </div>
            <div class="header-right">
                <!-- Search -->
                <div class="search-box">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" placeholder="Search vehicles, drivers...">
                </div>
                <!-- Add Button -->
                <button class="btn-primary">
                    <span class="material-symbols-outlined">add</span>
                    <span>Add Vehicle</span>
                </button>
                <!-- Notifications -->
                <button class="btn-notification">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="notification-badge"></span>
                </button>
            </div>
        </header>
        
        <!-- Scrollable Content -->
        <div class="content-wrapper">
            <div class="container">
                
                <!-- KPI Cards -->
                <div class="kpi-grid">
                    <!-- Card 1 -->
                    <div class="kpi-card">
                        <div class="kpi-header">
                            <div>
                                <p class="kpi-label">Total Vehicles</p>
                                <h3 class="kpi-value">142</h3>
                            </div>
                            <div class="kpi-icon blue">
                                <span class="material-symbols-outlined">directions_car</span>
                            </div>
                        </div>
                        <div class="kpi-badge success">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>+2% from last month</span>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="kpi-card">
                        <div class="kpi-header">
                            <div>
                                <p class="kpi-label">Active Drivers</p>
                                <h3 class="kpi-value">38</h3>
                            </div>
                            <div class="kpi-icon purple">
                                <span class="material-symbols-outlined">person</span>
                            </div>
                        </div>
                        <div class="kpi-badge success">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>+5% availability</span>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="kpi-card">
                        <div class="kpi-header">
                            <div>
                                <p class="kpi-label">Total Distance (Mo)</p>
                                <h3 class="kpi-value">12,450 km</h3>
                            </div>
                            <div class="kpi-icon amber">
                                <span class="material-symbols-outlined">map</span>
                            </div>
                        </div>
                        <div class="kpi-badge neutral">
                            <span>Target: 12,000 km</span>
                        </div>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="kpi-card">
                        <div class="kpi-header">
                            <div>
                                <p class="kpi-label">Fuel Efficiency</p>
                                <h3 class="kpi-value">8.5 <span class="kpi-unit">L/100km</span></h3>
                            </div>
                            <div class="kpi-icon red">
                                <span class="material-symbols-outlined">local_gas_station</span>
                            </div>
                        </div>
                        <div class="kpi-badge danger">
                            <span class="material-symbols-outlined">trending_down</span>
                            <span>-1% efficiency</span>
                        </div>
                    </div>
                </div>
                
                <!-- Charts Section -->
                <div class="charts-grid">
                    <!-- Main Chart (Fuel Cost) -->
                    <div class="chart-card chart-main">
                        <div class="chart-header">
                            <div>
                                <h3 class="chart-title">Fuel Consumption Cost</h3>
                                <p class="chart-subtitle">Last 6 months analysis</p>
                            </div>
                            <div class="chart-stats">
                                <p class="chart-value">$4,200</p>
                                <p class="chart-change">-5% vs previous period</p>
                            </div>
                        </div>
                        <!-- Chart Visualization -->
                        <div class="chart-container">
                            <svg class="chart-svg" fill="none" height="100%" preserveAspectRatio="none" viewBox="0 0 478 150" width="100%" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
                                        <stop offset="0%" stop-color="#137fec" stop-opacity="0.2"></stop>
                                        <stop offset="100%" stop-color="#137fec" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V150H0V109Z" fill="url(#chartGradient)"></path>
                                <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25" stroke="#137fec" stroke-linecap="round" stroke-width="3" vector-effect="non-scaling-stroke"></path>
                            </svg>
                        </div>
                        <div class="chart-labels">
                            <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span>
                        </div>
                    </div>
                    
                    <!-- Secondary Chart (Fleet Status) -->
                    <div class="chart-card chart-secondary">
                        <h3 class="chart-title">Fleet Status</h3>
                        <p class="chart-subtitle">Real-time vehicle availability</p>
                        <div class="status-list">
                            <div class="status-item">
                                <div class="status-info">
                                    <span class="status-label">On Trip</span>
                                    <span class="status-value">65%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill blue" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="status-item">
                                <div class="status-info">
                                    <span class="status-label">Parked</span>
                                    <span class="status-value">20%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill gray" style="width: 20%"></div>
                                </div>
                            </div>
                            <div class="status-item">
                                <div class="status-info">
                                    <span class="status-label">Maintenance</span>
                                    <span class="status-value">10%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill amber" style="width: 10%"></div>
                                </div>
                            </div>
                            <div class="status-item">
                                <div class="status-info">
                                    <span class="status-label">Idling</span>
                                    <span class="status-value">5%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill red" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Section: Map & Alerts -->
                <div class="bottom-grid">
                    <!-- Live Map -->
                    <div class="map-card">
                        <div class="map-badge">
                            <span class="live-indicator">
                                <span class="ping"></span>
                                <span class="dot"></span>
                            </span>
                            Live Tracking
                        </div>
                        <div class="map-container">
                            <!-- Map Pins -->
                            <div class="map-pin pin-1" data-tooltip="Vehicle #104">
                                <span class="material-symbols-outlined">local_shipping</span>
                            </div>
                            <div class="map-pin pin-2 amber" data-tooltip="Service Req.">
                                <span class="material-symbols-outlined">build</span>
                            </div>
                            <div class="map-pin pin-3">
                                <span class="material-symbols-outlined">local_shipping</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Alerts & Activity -->
                    <div class="alerts-card">
                        <div class="alerts-header">
                            <h3 class="alerts-title">Attention Needed</h3>
                            <span class="alerts-badge">3 New</span>
                        </div>
                        <div class="alerts-list">
                            <!-- Alert Item 1 -->
                            <div class="alert-item">
                                <div class="alert-icon red">
                                    <span class="material-symbols-outlined">warning</span>
                                </div>
                                <div class="alert-content">
                                    <h4 class="alert-title">Maintenance Overdue</h4>
                                    <p class="alert-text">Vehicle #402 exceeded 5000km since last service.</p>
                                    <button class="alert-link">Schedule Service</button>
                                </div>
                            </div>
                            
                            <!-- Alert Item 2 -->
                            <div class="alert-item">
                                <div class="alert-icon amber">
                                    <span class="material-symbols-outlined">badge</span>
                                </div>
                                <div class="alert-content">
                                    <h4 class="alert-title">License Expiry Warning</h4>
                                    <p class="alert-text">Driver Michael Scott's license expires in 5 days.</p>
                                    <button class="alert-link">View Profile</button>
                                </div>
                            </div>
                            
                            <!-- Alert Item 3 -->
                            <div class="alert-item">
                                <div class="alert-icon gray">
                                    <span class="material-symbols-outlined">oil_barrel</span>
                                </div>
                                <div class="alert-content">
                                    <h4 class="alert-title">Unusual Fuel Drop</h4>
                                    <p class="alert-text">Vehicle #112 reported sudden fuel level decrease.</p>
                                    <button class="alert-link">Investigate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
    
    <script src="../../assets/js/admin/dashbord.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Dashboard - FleetGo</title>
    <link rel="stylesheet" href="../../assets/css/users/dashbord.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="root-container">
        <!-- Top Navigation Bar -->
        <header class="header">
            <div class="header-left">
                <div class="logo-container">
                    <div class="logo-icon">
                        <span class="material-symbols-outlined fill">local_shipping</span>
                    </div>
                    <div>
                        <h1 class="logo-title">Fleet<span>Go</span></h1>
                    </div>
                <div class="search-container">
                </div>
            </div>
            <div class="header-right">
                <nav class="nav-menu">
                    <a class="nav-link active" href="dashbord.php">Dashboard</a>
                    <span class="material-symbols-outlined">chevron_right</span>
                    <a class="nav-link" href="vehicle.php">Vehicle</a>
                    <span class="material-symbols-outlined">chevron_right</span>
                    <a class="nav-link" href="maintenance.php">Maintenance</a>
                </nav>
                <div class="header-actions">
                    <button class="icon-button">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="notification-badge"></span>
                    </button>
                    <button class="user-button">
                        <div class="user-avatar">
                            <div class="avatar-gradient"></div>
                        </div>
                        <span class="user-name"><a href="userProfile.php">Alex D.</a></span>
                    </button>
                </div>
            </div>
        </header>

        <div class="main-content">
            <div class="content-wrapper">
                <!-- Page Heading -->
                <div class="page-header">
                    <div class="page-title-section">
                        <h1 class="page-title">Welcome back, Alex</h1>
                        <p class="page-subtitle">Tuesday, Oct 24 • 08:30 AM</p>
                    </div>
                    
                </div>

                <!-- Quick Stats Row -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Assigned Vehicle</p>
                            <span class="material-symbols-outlined stat-icon-blue">local_shipping</span>
                        </div>
                        <p class="stat-value">Ford Transit #402</p>
                        <div class="stat-badge success">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Active & Ready</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Fuel Level</p>
                            <span class="material-symbols-outlined stat-icon-orange">local_gas_station</span>
                        </div>
                        <div class="fuel-info">
                            <p class="stat-value">78%</p>
                            <span class="fuel-range">~320 mi range</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 78%"></div>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Odometer</p>
                            <span class="material-symbols-outlined stat-icon-purple">speed</span>
                        </div>
                        <p class="stat-value">42,509 <span class="stat-unit">mi</span></p>
                        <p class="stat-note">Next service in 2,491 mi</p>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Safety Score</p>
                            <span class="material-symbols-outlined stat-icon-green">verified_user</span>
                        </div>
                        <p class="stat-value">98<span class="stat-max">/100</span></p>
                        <div class="stat-badge success">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>Top 5% of fleet</span>
                        </div>
                    </div>
                </div>

                <!-- Main Layout Grid -->
                <div class="layout-grid">
                    <!-- Left Column -->
                    <div class="left-column">
                        <!-- Vehicle Overview -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Vehicle Overview</h3>
                                <button class="link-button">View Full Details</button>
                            </div>
                            <div class="vehicle-content">
                                <div class="vehicle-image-container">
                                    <img alt="Side view of a white commercial delivery van" class="vehicle-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbNnXhgy7SfVoKll3k7YAFN3z7f0Ar7uPc-4eA7nheM_XYwkCucpQi16_SyILnWxxmS8dY4vC_PByujGoWqgMvE12a-2nc6CkoHE5xu2LKXeqpLK-paAmZ1S-98d7qQ-T_WQFOACPFyAM0skngtC0QgzyG2qfZl9Q6eNNpLEzQmdpreXMUeMjWMWfKpVyossUtdi666Pp5GUXr_ftQY1y75w3v9EfbNS1s-1RYcoQkSqwL_owaK-Zi-BO6T0h7YTgnCDD92ecV9w">
                                    <div class="status-badge">OPERATIONAL</div>
                                </div>
                                <div class="vehicle-details">
                                    <div class="details-grid">
                                        <div class="detail-item">
                                            <p class="detail-label">License Plate</p>
                                            <p class="detail-value license">CA 8492 L8</p>
                                        </div>
                                        <div class="detail-item">
                                            <p class="detail-label">Type</p>
                                            <p class="detail-value">Refrigerated Van</p>
                                        </div>
                                        <div class="detail-item">
                                            <p class="detail-label">Last Inspection</p>
                                            <p class="detail-value">Oct 20, 2023</p>
                                        </div>
                                        <div class="detail-item">
                                            <p class="detail-label">Load Capacity</p>
                                            <p class="detail-value">2,500 lbs</p>
                                        </div>
                                    </div>
                                    <div class="vehicle-actions">
                                        <button class="action-button">
                                            <span class="material-symbols-outlined">build</span>
                                            Report Issue
                                        </button>
                                        <button class="action-button">
                                            <span class="material-symbols-outlined">text_snippet</span>
                                            Docs
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Today's Schedule -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Today's Schedule</h3>
                                <span class="trips-badge">2 Trips</span>
                            </div>
                            <div class="trips-container">
                                <div class="trip-item">
                                    <div class="trip-time">
                                        <span class="time-label">Start</span>
                                        <span class="time-value">08:00</span>
                                    </div>
                                    <div class="trip-details">
                                        <div class="trip-header">
                                            <h4 class="trip-title">Route #1024: NYC to Boston</h4>
                                            <span class="status-tag scheduled">SCHEDULED</span>
                                        </div>
                                        <div class="trip-info">
                                            <div class="info-item">
                                                <span class="material-symbols-outlined">pin_drop</span>
                                                Brooklyn Depot
                                            </div>
                                            <span class="separator">•</span>
                                            <div class="info-item">
                                                <span class="material-symbols-outlined">flag</span>
                                                Boston Center
                                            </div>
                                            <span class="separator">•</span>
                                            <span>215 mi</span>
                                        </div>
                                    </div>
                                    <button class="trip-button">View Map</button>
                                </div>

                                <div class="trip-item pending">
                                    <div class="trip-time">
                                        <span class="time-label">Start</span>
                                        <span class="time-value">14:30</span>
                                    </div>
                                    <div class="trip-details">
                                        <div class="trip-header">
                                            <h4 class="trip-title">Route #1025: Return Trip</h4>
                                            <span class="status-tag pending-tag">PENDING</span>
                                        </div>
                                        <div class="trip-info">
                                            <div class="info-item">
                                                <span class="material-symbols-outlined">pin_drop</span>
                                                Boston Center
                                            </div>
                                            <span class="separator">•</span>
                                            <div class="info-item">
                                                <span class="material-symbols-outlined">flag</span>
                                                Brooklyn Depot
                                            </div>
                                        </div>
                                    </div>
                                    <button class="trip-button">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column">
                        <!-- Quick Actions -->
                        <div class="card">
                            <div class="card-header-simple">
                                <h3 class="card-title">Quick Actions</h3>
                            </div>
                            <div class="quick-actions-grid">
                                <button class="quick-action-btn">
                                    <div class="action-icon blue">
                                        <span class="material-symbols-outlined">local_gas_station</span>
                                    </div>
                                    <span class="action-label">Log Fuel</span>
                                </button>
                                <button class="quick-action-btn">
                                    <div class="action-icon purple">
                                        <span class="material-symbols-outlined">rule</span>
                                    </div>
                                    <span class="action-label">Inspect</span>
                                </button>
                                <button class="quick-action-btn">
                                    <div class="action-icon green">
                                        <span class="material-symbols-outlined">upload_file</span>
                                    </div>
                                    <span class="action-label">Upload Docs</span>
                                </button>
                                <button class="quick-action-btn">
                                    <div class="action-icon red">
                                        <span class="material-symbols-outlined">support_agent</span>
                                    </div>
                                    <span class="action-label">Dispatch</span>
                                </button>
                            </div>
                        </div>

                        <!-- Notifications -->
                        <div class="card">
                            <div class="card-header-simple">
                                <h3 class="card-title">Notifications</h3>
                            </div>
                            <div class="notifications-container">
                                <div class="notification alert">
                                    <div class="notification-icon">
                                        <span class="material-symbols-outlined">warning</span>
                                    </div>
                                    <div class="notification-content">
                                        <h4 class="notification-title">Oil Change Required</h4>
                                        <p class="notification-text">Vehicle #402 is due for maintenance in 200 miles. Please schedule soon.</p>
                                    </div>
                                </div>

                                <div class="notification info">
                                    <div class="notification-icon">
                                        <span class="material-symbols-outlined">info</span>
                                    </div>
                                    <div class="notification-content">
                                        <h4 class="notification-title">New Policy Update</h4>
                                        <p class="notification-text">Winter driving safety guidelines have been updated. Review before next trip.</p>
                                    </div>
                                </div>

                                <div class="notification normal">
                                    <div class="notification-icon">
                                        <span class="material-symbols-outlined">calendar_today</span>
                                    </div>
                                    <div class="notification-content">
                                        <h4 class="notification-title">Upcoming Holiday</h4>
                                        <p class="notification-text">Fleet operations closed on Nov 24 for Thanksgiving.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="footer-link" href="#">View All Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/users/dashbord.js"></script>
</body>
</html>
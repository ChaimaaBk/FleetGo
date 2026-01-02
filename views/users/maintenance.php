<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Vehicle Maintenance - FleetGo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/users/maintenance.css">
</head>
<body>
    <div class="app-container">
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
           <header class="header">
                <div class="header-left">
                    <div class="logo-icon">
                        <span class="material-symbols-outlined">local_shipping</span>
                    </div>
                    <h2 class="logo-text">Fleet<span class="logo-accent">Go</span></h2>
                </div>
                <nav class="breadcrumb-nav">
                    <a href="dashbord.php" class="breadcrumb-link">Dashboard</a>
                    <span class="breadcrumb-separator">›</span>
                    <a href="vehicle.php" class="breadcrumb-link">Vehicle</a>
                    <span class="breadcrumb-separator">›</span>
                    <a href="maintenance.php" class="breadcrumb-link breadcrumb-active">Maintenance</a>
                </nav>
                <div class="header-actions">
                    <button class="icon-button notification-btn">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="notification-badge"></span>
                    </button>
                    <div class="profile-button">
                        <div class="profile-avatar"></div>
                        <span class="profile-name"><a href="userProfile.php">Alex D.</a></span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="content-wrapper">
                <!-- Page Heading -->
                <div class="page-header">
                    <div>
                        <h1>Vehicle Maintenance</h1>
                        <p>Manage health and service history for your assigned vehicle.</p>
                    </div>
                    <button class="btn-primary" id="reportIssueBtn">
                        <span class="material-symbols-outlined">report_problem</span>
                        Report Issue
                    </button>
                </div>

                <!-- Vehicle Profile -->
                <div class="vehicle-grid">
                    <div class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC2n8GpT4C7f5Q3y40sIZkXICibn_F69QHy92Zkqg5PPqZen3is_843tVI6B8lQQHP3MqdYywzDdD92oShBfaxSr3qaK_nEhWeV36sZrwe6PhpE7Sy7rSlTGoibcpp7zMjW4YXcnV7dJu_bJT25XJUc_pGw5VtVSpUXV1y5gHTMkxLCz8H4Yj3KE0zsndT0u3Gy54ckDyoeONZINtXttwDiTIKei8shXsfOzIFTx6_BlcDhIRdgd068ano3523H2d37qrDQs7ikdg');"></div>
                        <div class="vehicle-info">
                            <div class="vehicle-header">
                                <div>
                                    <h3>Ford Transit Connect</h3>
                                    <div class="vehicle-details">
                                        <span>Plate: <span class="mono">ABC-1234</span></span>
                                        <span class="divider">|</span>
                                        <span>VIN: <span class="mono">1FM5K8...</span></span>
                                    </div>
                                </div>
                                <span class="badge badge-success">Good Condition</span>
                            </div>
                            <div class="vehicle-stats">
                                <div class="stat">
                                    <p class="stat-label">Odometer</p>
                                    <p class="stat-value mono">45,230 mi</p>
                                    <p class="stat-subtitle">Updated today</p>
                                </div>
                                <div class="stat">
                                    <p class="stat-label">Avg MPG</p>
                                    <p class="stat-value mono">24.5</p>
                                </div>
                                <div class="stat">
                                    <p class="stat-label">Assignment</p>
                                    <p class="stat-value">Since Jan '23</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alerts-card">
                        <div class="alerts-header">
                            <span class="material-symbols-outlined warning">warning</span>
                            <h3>Upcoming Service</h3>
                        </div>
                        <div class="alerts-content">
                            <div class="progress-item">
                                <div class="progress-header">
                                    <span>Oil Life</span>
                                    <span>15% remaining</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill orange" style="width: 15%"></div>
                                </div>
                                <p class="progress-warning">Service due in 500 miles</p>
                            </div>
                            <div class="progress-item">
                                <div class="progress-header">
                                    <span>Tire Wear</span>
                                    <span>Good</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill green" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Schedule & History -->
                <div class="schedule-history-grid">
                    <!-- Upcoming Schedule -->
                    <div class="schedule-section">
                        <h3 class="section-title">
                            <span class="material-symbols-outlined">calendar_month</span>
                            Upcoming Schedule
                        </h3>
                        <div class="schedule-card">
                            <div class="schedule-item due-soon">
                                <div class="schedule-date orange">
                                    <span class="month">Nov</span>
                                    <span class="day">15</span>
                                </div>
                                <div class="schedule-info">
                                    <h4>Oil Change & Filter</h4>
                                    <p>Scheduled at Fleet Service Center A</p>
                                    <span class="badge badge-orange">Due soon</span>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <div class="schedule-date">
                                    <span class="month">Dec</span>
                                    <span class="day">01</span>
                                </div>
                                <div class="schedule-info">
                                    <h4>Brake Inspection</h4>
                                    <p>Routine yearly check</p>
                                    <span class="badge badge-gray">Scheduled</span>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <div class="schedule-date">
                                    <span class="month">Jan</span>
                                    <span class="day">10</span>
                                </div>
                                <div class="schedule-info">
                                    <h4>Registration Renewal</h4>
                                    <p>Document submission required</p>
                                    <span class="badge badge-gray">Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="tip-card">
                            <h4>Did you know?</h4>
                            <p>Keeping your tires properly inflated can improve your mileage by up to 3%. Check them weekly!</p>
                        </div>
                    </div>

                    <!-- Service History -->
                    <div class="history-section">
                        <div class="history-header">
                            <h3 class="section-title">
                                <span class="material-symbols-outlined">history</span>
                                Service History
                            </h3>
                            <div class="history-controls">
                                <div class="search-box">
                                    <span class="material-symbols-outlined">search</span>
                                    <input type="text" placeholder="Search logs..." id="searchInput">
                                </div>
                                <button class="filter-btn" id="filterBtn">
                                    <span class="material-symbols-outlined">filter_list</span>
                                </button>
                            </div>
                        </div>
                        <div class="history-table-card">
                            <div class="table-wrapper">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Service Type</th>
                                            <th>Mileage</th>
                                            <th>Provider</th>
                                            <th class="text-right">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="historyTableBody">
                                        <tr>
                                            <td class="mono">Oct 01, 2023</td>
                                            <td>
                                                <div class="service-type">
                                                    <span class="material-symbols-outlined">tire_repair</span>
                                                    <span>Tire Rotation</span>
                                                </div>
                                            </td>
                                            <td class="mono">42,000 mi</td>
                                            <td>QuickLane Services</td>
                                            <td class="text-right">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mono">Aug 15, 2023</td>
                                            <td>
                                                <div class="service-type">
                                                    <span class="material-symbols-outlined">build</span>
                                                    <span>Routine Inspection</span>
                                                </div>
                                            </td>
                                            <td class="mono">38,500 mi</td>
                                            <td>Fleet HQ Garage</td>
                                            <td class="text-right">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mono">Jun 02, 2023</td>
                                            <td>
                                                <div class="service-type">
                                                    <span class="material-symbols-outlined">oil_barrel</span>
                                                    <span>Oil Change</span>
                                                </div>
                                            </td>
                                            <td class="mono">35,120 mi</td>
                                            <td>Jiffy Lube</td>
                                            <td class="text-right">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mono">Mar 22, 2023</td>
                                            <td>
                                                <div class="service-type">
                                                    <span class="material-symbols-outlined">battery_alert</span>
                                                    <span>Battery Replacement</span>
                                                </div>
                                            </td>
                                            <td class="mono">32,450 mi</td>
                                            <td>Fleet HQ Garage</td>
                                            <td class="text-right">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mono">Jan 10, 2023</td>
                                            <td>
                                                <div class="service-type">
                                                    <span class="material-symbols-outlined">minor_crash</span>
                                                    <span>Bumper Repair</span>
                                                </div>
                                            </td>
                                            <td class="mono">30,100 mi</td>
                                            <td>AutoBody Experts</td>
                                            <td class="text-right">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-footer">
                                <p>Showing <span class="highlight">1</span> to <span class="highlight">5</span> of <span class="highlight">12</span> results</p>
                                <div class="pagination">
                                    <button disabled>Previous</button>
                                    <button>Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="../../assets/js/users/maintenance.js"></script>
</body>
</html>
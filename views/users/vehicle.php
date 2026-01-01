<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View My Vehicle - FleetGo</title>
    <link rel="stylesheet" href="../../assets/css/users/vehicle.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Top Navigation -->
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
            <a href="vehicle.php" class="breadcrumb-link breadcrumb-active">Vehicle</a>
            <span class="breadcrumb-separator">›</span>
            <a href="maintenance.php" class="breadcrumb-link">Maintenance</a>
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

    <!-- Contenu principal -->
    <main class="main-content">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title-section">
                    <h1 class="page-title">My Assigned Vehicle</h1>
                    <p class="page-subtitle">Manage details, maintenance, and documents for your current vehicle.</p>
                </div>
                <div class="page-actions">
                    <button class="btn btn-secondary" id="historyBtn">
                        <span class="material-symbols-outlined">history</span>
                        <span>History</span>
                    </button>
                    <button class="btn btn-primary" id="reportIssueBtn">
                        <span class="material-symbols-outlined">report_problem</span>
                        <span>Report Issue</span>
                    </button>
                </div>
            </div>

            <!-- Vehicle Hero Section -->
            <div class="vehicle-hero">
                <div class="vehicle-image-section">
                    <div class="vehicle-image"></div>
                    <div class="vehicle-status">
                        <span class="material-symbols-outlined">check_circle</span>
                        Active - In Transit
                    </div>
                </div>
                <div class="vehicle-details-section">
                    <div class="vehicle-title">
                        <h3>2022 Ford Transit Connect XL</h3>
                        <p>Standard Cargo Van • Long Wheelbase</p>
                    </div>
                    <div class="vehicle-specs">
                        <div class="spec-item">
                            <p class="spec-label">License Plate</p>
                            <p class="spec-value">ABC-1234</p>
                        </div>
                        <div class="spec-item">
                            <p class="spec-label">VIN</p>
                            <p class="spec-value spec-mono">1FAHP3...</p>
                        </div>
                        <div class="spec-item">
                            <p class="spec-label">Transmission</p>
                            <p class="spec-value">Automatic</p>
                        </div>
                        <div class="spec-item">
                            <p class="spec-label">Fuel Type</p>
                            <p class="spec-value">Gasoline</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <p class="stat-label">Odometer</p>
                        <span class="material-symbols-outlined stat-icon stat-icon-blue">speed</span>
                    </div>
                    <p class="stat-value">45,230 <span class="stat-unit">mi</span></p>
                </div>
                <div class="stat-card">
                    <div class="stat-header">
                        <p class="stat-label">Fuel Level</p>
                        <span class="material-symbols-outlined stat-icon stat-icon-green">local_gas_station</span>
                    </div>
                    <p class="stat-value">75%</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 75%"></div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-header">
                        <p class="stat-label">Next Service</p>
                        <span class="material-symbols-outlined stat-icon stat-icon-orange">build</span>
                    </div>
                    <p class="stat-value">Nov 15</p>
                    <p class="stat-info">In 14 days</p>
                </div>
                <div class="stat-card">
                    <div class="stat-header">
                        <p class="stat-label">Avg. MPG</p>
                        <span class="material-symbols-outlined stat-icon stat-icon-blue">eco</span>
                    </div>
                    <p class="stat-value">24 <span class="stat-unit">mpg</span></p>
                </div>
            </div>

            <!-- Documents & Quick Actions -->
            <div class="content-grid">
                <!-- Documents List -->
                <div class="documents-section">
                    <div class="section-header">
                        <h3 class="section-title">Vehicle Documents</h3>
                        <button class="link-button">View All</button>
                    </div>
                    <div class="documents-list">
                        <div class="document-item">
                            <div class="document-info">
                                <div class="document-icon document-icon-red">
                                    <span class="material-symbols-outlined">description</span>
                                </div>
                                <div class="document-details">
                                    <p class="document-name">Insurance Policy.pdf</p>
                                    <p class="document-meta">Expires: Dec 31, 2023</p>
                                </div>
                            </div>
                            <button class="icon-button-small">
                                <span class="material-symbols-outlined">download</span>
                            </button>
                        </div>
                        <div class="document-item">
                            <div class="document-info">
                                <div class="document-icon document-icon-blue">
                                    <span class="material-symbols-outlined">badge</span>
                                </div>
                                <div class="document-details">
                                    <p class="document-name">Vehicle Registration.pdf</p>
                                    <p class="document-meta">Valid until Jun 2024</p>
                                </div>
                            </div>
                            <button class="icon-button-small">
                                <span class="material-symbols-outlined">download</span>
                            </button>
                        </div>
                        <div class="document-item">
                            <div class="document-info">
                                <div class="document-icon document-icon-gray">
                                    <span class="material-symbols-outlined">menu_book</span>
                                </div>
                                <div class="document-details">
                                    <p class="document-name">Driver's Manual.pdf</p>
                                    <p class="document-meta">v2.1 Updated 2022</p>
                                </div>
                            </div>
                            <button class="icon-button-small">
                                <span class="material-symbols-outlined">download</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="sidebar-section">
                    <h3 class="section-title">Quick Actions</h3>
                    <div class="quick-actions">
                        <button class="action-button">
                            <span class="material-symbols-outlined">local_gas_station</span>
                            <span>Log Fuel Entry</span>
                        </button>
                        <button class="action-button">
                            <span class="material-symbols-outlined">fact_check</span>
                            <span>Pre-Trip Inspection</span>
                        </button>
                        <button class="action-button">
                            <span class="material-symbols-outlined">contact_phone</span>
                            <span>Contact Manager</span>
                        </button>
                    </div>
                    <!-- Manager Card -->
                    <div class="manager-card">
                        <p class="manager-label">Your Fleet Manager</p>
                        <div class="manager-info">
                            <div class="manager-avatar"></div>
                            <div>
                                <p class="manager-name">Sarah Jenkins</p>
                                <p class="manager-title">Fleet Ops Lead</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Report Issue Modal -->
    <div id="reportModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Report an Issue</h2>
                <button class="modal-close" id="closeReportModal">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form id="reportForm" class="modal-body">
                <div class="form-group">
                    <label for="issueType">Issue Type</label>
                    <select id="issueType" class="form-control" required>
                        <option value="">Select a type</option>
                        <option value="mechanical">Mechanical Issue</option>
                        <option value="electrical">Electrical Issue</option>
                        <option value="body">Body Damage</option>
                        <option value="tire">Tire Issue</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="issueDescription">Description</label>
                    <textarea id="issueDescription" class="form-control" rows="4" placeholder="Describe the issue in detail..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="issueSeverity">Severity</label>
                    <select id="issueSeverity" class="form-control" required>
                        <option value="">Select severity</option>
                        <option value="low">Low - Can wait</option>
                        <option value="medium">Medium - Address soon</option>
                        <option value="high">High - Urgent</option>
                        <option value="critical">Critical - Immediate</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancelReport">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit Report</button>
                </div>
            </form>
        </div>
    </div>

    <!-- History Modal -->
    <div id="historyModal" class="modal">
        <div class="modal-content modal-large">
            <div class="modal-header">
                <h2>Vehicle History</h2>
                <button class="modal-close" id="closeHistoryModal">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="history-list">
                    <div class="history-item">
                        <div class="history-icon history-icon-green">
                            <span class="material-symbols-outlined">local_gas_station</span>
                        </div>
                        <div class="history-details">
                            <p class="history-title">Fuel Fill-up</p>
                            <p class="history-meta">Oct 28, 2023 • 12 gal • Shell Station</p>
                        </div>
                        <p class="history-value">$45.80</p>
                    </div>
                    <div class="history-item">
                        <div class="history-icon history-icon-blue">
                            <span class="material-symbols-outlined">build</span>
                        </div>
                        <div class="history-details">
                            <p class="history-title">Regular Maintenance</p>
                            <p class="history-meta">Oct 15, 2023 • Oil Change & Filters</p>
                        </div>
                        <p class="history-value">$89.00</p>
                    </div>
                    <div class="history-item">
                        <div class="history-icon history-icon-orange">
                            <span class="material-symbols-outlined">report_problem</span>
                        </div>
                        <div class="history-details">
                            <p class="history-title">Issue Reported</p>
                            <p class="history-meta">Oct 10, 2023 • Front Brake Noise</p>
                        </div>
                        <span class="history-status status-resolved">Resolved</span>
                    </div>
                    <div class="history-item">
                        <div class="history-icon history-icon-green">
                            <span class="material-symbols-outlined">fact_check</span>
                        </div>
                        <div class="history-details">
                            <p class="history-title">Inspection Completed</p>
                            <p class="history-meta">Oct 5, 2023 • Pre-Trip Inspection</p>
                        </div>
                        <span class="history-status status-passed">Passed</span>
                    </div>
                    <div class="history-item">
                        <div class="history-icon history-icon-green">
                            <span class="material-symbols-outlined">local_gas_station</span>
                        </div>
                        <div class="history-details">
                            <p class="history-title">Fuel Fill-up</p>
                            <p class="history-meta">Oct 1, 2023 • 11 gal • BP Station</p>
                        </div>
                        <p class="history-value">$42.30</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/users/vehicle.js"></script>
</body>
</html>
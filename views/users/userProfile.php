<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View My Info (Driver) - FleetGo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/users/userProfile.css">
</head>
<body>
    <div class="app-container">
        <!-- Main Content -->
        <main class="main-content">
            <!-- Desktop Header -->
            <header class="desktop-header">
                <div class="header-left">
                    <div class="logo-icon">
                        <span class="material-symbols-outlined">local_shipping</span>
                    </div>
                    <h2 class="logo-text">Fleet<span class="logo-accent">Go</span></h2>
                </div>
                <div class="breadcrumb">
                    <a href="dashbord.php">Dashbord</a>
                    <span>/</span>
                    <span>View My Profile</span>
                </div>
                <div class="header-actions">
                    <div class="notification-wrapper">
                        <span class="notification-badge"></span>
                        <button class="icon-btn" id="notificationBtn">
                            <span class="material-symbols-outlined">notifications</span>
                        </button>
                    </div>
                    <button class="icon-btn" id="helpBtn">
                        <span class="material-symbols-outlined">help</span>
                    </button>
                </div>
            </header>

            <!-- Page Content -->
            <div class="page-content">
                <div class="content-wrapper">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div>
                            <h1>View My Info</h1>
                            <p class="subtitle">Review and update your personal details and license information.</p>
                        </div>
                        <div class="header-controls">
                            <span class="secure-badge">
                                <span class="material-symbols-outlined">lock</span>
                                Secure Connection
                            </span>
                            <button class="btn-primary" id="saveBtn">
                                <span class="material-symbols-outlined">save</span>
                                Save Changes
                            </button>
                        </div>
                    </div>

                    <!-- Profile Card -->
                    <div class="profile-card">
                        <div class="profile-info">
                            <div class="profile-avatar-wrapper">
                                <div class="profile-avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBTpmjBsKBFfMdZZflgc8D1Q0fbFTpSaDRZ5-eAbt2G37gL9hlK46O1168fKbv0mPwTUWhRJ5FcyKz9dPj-qcy1N8rPKWUFyMs2Vgk6A_UbDM1KnQgLHbFwt20mU3T1gz9ZHW7jNoq2ghUXXzJJYdpQ3HEObDhQ1RgjNDAXv-SE7aCEf0hoI5VNXu590ydO2K3KapEN3MBzogqU7WsqG_3hOnsTyQYplYq6Q23cJt2B_fwQtQzhaW0o1OZoPrLTT-xbPFLqU-H8-g");'></div>
                                <button class="edit-photo-btn" id="editPhotoBtn" title="Edit Photo">
                                    <span class="material-symbols-outlined">photo_camera</span>
                                </button>
                                <input type="file" id="photoInput" accept="image/*" style="display: none;">
                            </div>
                            <div class="profile-details">
                                <h2>John Doe</h2>
                                <p class="profile-subtitle">Senior Driver <span class="separator">|</span> ID: <span class="employee-id">EMP-8942</span></p>
                                <div class="profile-badges">
                                    <span class="badge badge-success">
                                        <span class="material-symbols-outlined">check_circle</span>
                                        Active
                                    </span>
                                    <span class="badge badge-info">
                                        <span class="material-symbols-outlined">military_tech</span>
                                        Safe Driver Lvl 3
                                    </span>
                                </div>
                            </div>
                            <div class="profile-stats">
                                <div class="stat-box">
                                    <span class="stat-label">Total Trips</span>
                                    <span class="stat-value">1,248</span>
                                </div>
                                <div class="stat-box">
                                    <span class="stat-label">Safety Score</span>
                                    <span class="stat-value stat-success">98/100</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Grid -->
                    <div class="content-grid">
                        <!-- Left Column -->
                        <div class="left-column">
                            <!-- Personal Details -->
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        <span class="material-symbols-outlined">person</span>
                                        Personal Details
                                    </h3>
                                </div>
                                <div class="card-body form-grid">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-input" value="John" id="firstName">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-input" value="Doe" id="lastName">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-input" value="john.doe@fleetgo.com" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-input" value="+1 (555) 123-4567" id="phone">
                                    </div>
                                    <div class="form-group full-width">
                                        <label>Home Address</label>
                                        <input type="text" class="form-input" value="1234 Maple Avenue, Springfield, IL 62704" id="address">
                                    </div>
                                </div>
                            </div>

                            <!-- Emergency Contacts -->
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        <span class="material-symbols-outlined icon-danger">emergency</span>
                                        Emergency Contacts
                                    </h3>
                                    <button class="btn-link" id="addContactBtn">
                                        <span class="material-symbols-outlined">add</span> Add Contact
                                    </button>
                                </div>
                                <div class="card-body form-grid">
                                    <div class="form-group">
                                        <label>Primary Contact Name</label>
                                        <input type="text" class="form-input" value="Jane Doe" id="emergencyName">
                                    </div>
                                    <div class="form-group">
                                        <label>Relationship</label>
                                        <select class="form-input" id="emergencyRelation">
                                            <option value="Spouse" selected>Spouse</option>
                                            <option value="Parent">Parent</option>
                                            <option value="Sibling">Sibling</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group full-width">
                                        <label>Contact Phone</label>
                                        <div class="input-with-icon">
                                            <span class="material-symbols-outlined">phone</span>
                                            <input type="tel" class="form-input" value="555-9876" id="emergencyPhone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="right-column">
                            <div class="card card-full-height">
                                <div class="card-header">
                                    <h3>
                                        <span class="material-symbols-outlined">badge</span>
                                        License Information
                                    </h3>
                                </div>
                                <div class="card-body license-body">
                                    <!-- Driver's License -->
                                    <div class="license-section">
                                        <div class="license-header">
                                            <div>
                                                <p class="license-label">Driver's License</p>
                                                <p class="license-number">DL-8829-441-2</p>
                                            </div>
                                            <span class="status-badge status-active">ACTIVE</span>
                                        </div>
                                        <div class="license-details">
                                            <div class="detail-row">
                                                <span>Class</span>
                                                <span class="detail-value">CDL Class A</span>
                                            </div>
                                            <div class="detail-row">
                                                <span>Issued</span>
                                                <span class="detail-value">Dec 15, 2020</span>
                                            </div>
                                            <div class="detail-row">
                                                <span>Expires</span>
                                                <span class="detail-value detail-success">Dec 15, 2025</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hazmat Cert -->
                                    <div class="license-section license-warning">
                                        <div class="license-header">
                                            <div>
                                                <p class="license-label">Hazmat Cert</p>
                                                <p class="license-number">HM-9921</p>
                                            </div>
                                            <span class="status-badge status-warning">EXPIRING</span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress-fill" style="width: 92%"></div>
                                        </div>
                                        <p class="warning-text">
                                            <span class="material-symbols-outlined">warning</span>
                                            Expires in 14 days
                                        </p>
                                        <button class="btn-outline btn-warning" id="uploadRenewalBtn">Upload Renewal</button>
                                    </div>

                                    <!-- Upload Documents -->
                                    <div>
                                        <p class="upload-label">Upload Documents</p>
                                        <div class="upload-area" id="uploadArea">
                                            <span class="material-symbols-outlined">upload_file</span>
                                            <p class="upload-text">Drop files here or click to upload</p>
                                            <p class="upload-hint">PDF, JPG, PNG (Max 5MB)</p>
                                            <input type="file" id="fileInput" accept=".pdf,.jpg,.jpeg,.png" multiple style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Settings -->
                    <div class="card security-card">
                        <div class="card-header">
                            <h3>
                                <span class="material-symbols-outlined">lock</span>
                                Security Settings
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="security-item">
                                <div>
                                    <p class="security-title">Two-Factor Authentication</p>
                                    <p class="security-desc">Add an extra layer of security to your account.</p>
                                </div>
                                <label class="toggle-switch">
                                    <input type="checkbox" id="twoFactorToggle" checked>
                                    <span class="toggle-slider"></span>
                                </label>
                            </div>
                            <hr class="divider">
                            <div class="security-item">
                                <div>
                                    <p class="security-title">Password</p>
                                    <p class="security-desc">Last changed 3 months ago</p>
                                </div>
                                <button class="btn-link" id="changePasswordBtn">Change Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Notification Toast -->
    <div class="toast" id="toast">
        <span class="material-symbols-outlined" id="toastIcon">check_circle</span>
        <span id="toastMessage">Changes saved successfully!</span>
    </div>

    <script src="../../assets/js/users/userProfile.js"></script>
</body>
</html>
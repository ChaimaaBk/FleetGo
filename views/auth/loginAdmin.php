<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleet Command - Admin Portal</title>
    <link rel="stylesheet" href="../../assets/css/auth/loginAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-------- Left side -------->
        <div class="left-panel">
            <div>
                <div class="logo-container">
                    <div class="logo-icon">
                        <span class="material-symbols-outlined fill">local_shipping</span>
                    </div>
                    <div>
                        <h1 class="logo-title">Fleet<span>Go</span></h1>
                    </div>
                </div>

                <div class="content">
                    <h2 class="title">Seamlessly manage your global fleet operations from a single secure portal</h2>
                    <p class="subtitle">Track vehicles, monitor driver performance, optimize routes, and gain real-time insights into your entire fleet ecosystem</p>
                </div>

                <div class="status-badges">
                    <div class="badge badge-operational">
                        <span class="status-dot"></span>
                        <div>
                            <div class="badge-label">System Status</div>
                            <div class="badge-value">Operational</div>
                        </div>
                    </div>

                    <div class="badge badge-security">
                        <i class="fa-solid fa-shield shield-icon"></i>
                        <div>
                            <div class="badge-label">Security</div>
                            <div class="badge-value">Encrypted</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-------- Right side -------->
        <div class="right-panel">
            <div class="login-container">
                <div class="login-header">
                    <h1 class="login-title">Admin Portal</h1>
                    <p class="login-subtitle">Please enter your credentials to access the dashboard</p>
                </div>

                <form id="loginForm">
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-envelope input-icon"></i>
                            <input type="email" class="form-input" id="email" placeholder="admin@fleetGo.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock input-icon"></i>
                            <input type="password" class="form-input" id="password" placeholder="••••••••" required>
                            <button type="button" class="toggle-password" id="togglePassword">
                                <svg class="eye-icon" id="eyeIcon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox-wrapper">
                            <input type="checkbox" id="remember" class="checkbox">
                            <label for="remember" class="checkbox-label">Remember this device</label>
                        </div>
                        
                    </div>

                    <button type="submit" class="submit-btn"><a href="../Admin/dashbord.php">Sign In</a></button>

                    <div class="divider">OR</div>

                    <div class="driver-link">
                        Vous êtes chauffeur? <a href="loginUser.php">Go to Driver Portal</a>
                    </div>
                </form>

                <div class="footer">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Help Center</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/auth/loginAdmin.js"></script>
</body>
</html>
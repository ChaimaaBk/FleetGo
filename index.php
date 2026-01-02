<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetGo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-------------Navbar----------------->
    <nav>

    <!-------------Logo----------------->
        <div class="logo">
            <i class="fa-solid fa-truck"></i> 
            <span id="fleet">Fleet</span><span id="go">Go</span>
        </div>

        <!-------------Navbar List----------------->
        <ul>
            <li><a href="">Features</a></li>
            <li><a href="">Pricing</a></li>
            <li><a href="">Resources</a></li>
            <li><a href="">Support</a></li>
        </ul>
        <button class="login"><a href="./views/login.php"><strong>Log In</strong></a></button>
    </nav>

    <!-------------Header----------------->
    <header>
        <section class="contenue">
            <div class="sous-contenue">
                <h1>Optimize your fleet operations with <span>Precision</span></h1>
                <p>
                    The all-in-one solution for driver management, maintenance, fuel, and trips. Reduce costs, improve safety, and increase efficiency today
                </p>
                
                <div class="dashbord-btns">
                    <button class="btn-primary"><a href="views/auth/loginAdmin.php">Access Dashboard</a></button>
                </div>
                
                <div class="trusted">
                    <div class="avatar-group">
                        <img src="./imgs/avatar1.png" alt="" id="avatar1"></img>
                        <img src="./imgs/avatar2.png" alt="" id="avatar2"></img>
                        <img src="./imgs/avatar3.png" alt="" id="avatar3"></img>
                    </div>
                    <span class="trusted-text">Trusted by +2,000 logistics managers</span>
                </div>
            </div>
            <div class="image-section">
                <img src="./imgs/headerImg.png" alt="">
            </div>
        </section>
    </header>

    <!-------------Main----------------->

    <!-------------Partners Section----------------->
    <section class="partners-section">
        <div class="container">
            <p class="partners-title">TRUSTED BY INDUSTRY LEADERS</p>
            <div class="partners-grid">
                <div class="partner-item">
                    <span><i class="fa-regular fa-truck"></i></i></span> TRANSCO
                </div>
                <div class="partner-item">
                    <span><i class="fa-solid fa-box-open"></i></span> LOGISTIX
                </div>
                <div class="partner-item">
                    <span><i class="fa-solid fa-plane-departure"></i></span> AERO FREIGHT
                </div>
                <div class="partner-item">
                    <span><i class="fa-solid fa-ship"></i></span> OCEANIC
                </div>
                <div class="partner-item">
                    <span><i class="fa-solid fa-gas-pump"></i></span> FUELCORP
                </div>
            </div>
        </div>
    </section>

    <!-------------Capabilities----------------->
    <section class="capabilities">
        <div class="cap-title">
            <h1>Core Features</h1>
            <p>
                Everything you need to manage your fleet efficiently on a unified platform. No more spreadsheets or disconnected systems
            </p>
        </div>
        <div class="cap-cards">

            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="title-card">Real-time Tracking</div>
                <div class="p-card">
                    Monitor vehicle location and status live on our interactive map. Receive instant updates on route deviations and ETAs (Estimated Times of Arrival)
                </div>
                <div class="img-card"><img src="./imgs/timeMap.png" alt=""></div>
            </div>

            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-wrench"></i></div>
                <div class="title-card">Maintenance Alerts</div>
                <div class="p-card">
                    Prevent breakdowns with automated service reminders based on mileage or engine hours. Schedule repairs without disrupting your operations
                </div>
                <div class="img-card"><img src="./imgs/maintenance.png" alt="" style="margin-top:2rem;"></div>
            </div>

            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-chart-line"></i></div>
                <div class="title-card">Cost Analysis</div>
                <div class="p-card">
                    Track fuel consumption, driver behavior, and operational expenses. Use our powerful reporting tools to optimize your budget
                </div>
                <div class="img-card"><img src="./imgs/analyse.png" alt="" style="margin-top:2rem;"></div>
            </div>

        </div>
    </section>
    
    <!-------------Gallery Section----------------->
    <section class="gallery-section">
        <div class="gallery-card">
            <div class="grid-item large-card">
                <img src="./imgs/camion.png" alt="Vue directe">
                <div class="card-overlay">
                    <span>Live Fleet View</span>
                    <h3>Monitor your assets anywhere</h3>
                </div>
            </div>

            <div class="grid-item small-card">
                <img src="./imgs/management.png" alt="management">
            </div>
            <div class="grid-item small-card">
                <img src="./imgs/MoteurAutomobile.png" alt="moteurAutomobile">
            </div>
            <div class="grid-item medium-card">
                <img src="./imgs/analyses.png" alt="Analyses">
            </div>
        </div>
    </section>
    <hr>
    
    <!-------------Footer----------------->
    <footer>
        <div class="footer">

            <!-------------Logo----------------->
            <div class="logo">
                <i class="fa-solid fa-truck"></i> 
                <span id="fleet">Fleet</span><span id="go">Go</span>
            </div>

            <!-------------Footer List----------------->
            <div class="foot-list">
                <ul>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Careers</a></li>
                </ul>
            </div>

            <!-------------Footer List----------------->
            <div class="foot-icon">
                <a href=""><i class="fa-solid fa-share-nodes"></i></a>
                <a href=""><i class="fa-solid fa-earth-americas"></i></a>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
        <div class="p-footer">
            © 2025 FleetManager Pro. All rights reserved
        </div>
    </footer>


</body>
</html>
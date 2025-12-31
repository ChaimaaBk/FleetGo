<!DOCTYPE html5>
<html lang="fr">
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
            <li><a href="">Fonctionnalités</a></li>
            <li><a href="">Tarifs</a></li>
            <li><a href="">Ressources</a></li>
            <li><a href="">Assistance</a></li>
        </ul>
        <button class="login"><a href="login.php"><strong>Log In</strong></a></button>
    </nav>

    <!-------------Header----------------->
    <header>
        <section class="contenue">
            <div class="sous-contenue">
                <h1>Optimisez vos opérations de flotte avec <span>Précision</span></h1>
                <p>
                    La solution tout-en-un pour la gestion des conducteurs, de la maintenance, du carburant et des trajets. Réduisez les coûts, améliorez la sécurité et augmentez l'efficacité dès aujourd'hui
                </p>
                
                <div class="dashbord-btns">
                    <button class="btn-primary">Accéder au tableau de bord</button>
                    <button class="btn-secondary">Demander une démo</button>
                </div>
                
                <div class="trusted">
                    <div class="avatar-group">
                        <img src="./imgs/avatar1.png" alt="" id="avatar1"></img>
                        <img src="./imgs/avatar2.png" alt="" id="avatar2"></img>
                        <img src="./imgs/avatar3.png" alt="" id="avatar3"></img>
                    </div>
                    <span class="trusted-text">Approuvé par plus de 2 000 gestionnaires logistiques</span>
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
            <h1>Fonctionnalités principales</h1>
            <p>
                Tout ce dont vous avez besoin pour gérer 
                votre flotte efficacement sur une plateforme 
                unifiée. Plus de feuilles de calcul ou de 
                systèmes déconnectés
            </p>
        </div>
        <div class="cap-cards">

            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="title-card">Suivi en temps réel</div>
                <div class="p-card">
                    Surveillez l'emplacement et le statut des 
                    véhicules en direct sur notre carte interactive. 
                    Recevez des mises à jour instantanées sur les 
                    déviations d'itinéraire et les heures d'arrivée prévues.
                </div>
                <div class="img-card"><img src="./imgs/timeMap.png" alt=""></div>
            </div>

            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-wrench"></i></div>
                <div class="title-card">Alertes de maintenance</div>
                <div class="p-card">
                    Évitez les pannes grâce à des rappels d'entretien 
                    automatisés basés sur le kilométrage ou les heures 
                    moteur. Planifiez les réparations sans interrompre 
                    les opérations.
                </div>
                <div class="img-card"><img src="./imgs/maintenance.png" alt="" style="margin-top:2rem;"></div>
            </div>

            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-chart-line"></i></div>
                <div class="title-card">Analyse des coûts</div>
                <div class="p-card">
                    Suivez la consommation de carburant, le comportement 
                    des conducteurs et les dépenses opérationnelles. 
                    Utilisez nos outils de reporting puissants pour 
                    optimiser votre budget.
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
                    <span>Vue de la flotte en direct</span>
                    <h3>Surveillez vos actifs n'importe où</h3>
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
                    <li><a href="">Politique de confidentialité</a></li>
                    <li><a href="">Conditions d'utilisation</a></li>
                    <li><a href="">Contactez-nous</a></li>
                    <li><a href="">Carrières</a></li>
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
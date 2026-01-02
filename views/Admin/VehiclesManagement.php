<?php
// Démarrer la session si nécessaire
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure le controller pour récupérer les données
require_once __DIR__ . '/../../controllers/vehiculeController.php';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Vehicle Management - FleetGo</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/admin/VehiclesManagement.css"/>
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
                <p class="logo-subtitle">Management System</p>
            </div>
        </div>

        <nav class="nav-menu">
            <a class="menu-item" href="dashbord.php">
                <span class="material-symbols-outlined fill">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="menu-item active" href="VehiclesManagement.php">
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
            <div class="header-container">
                <div class="breadcrumb">
                    <a href="dashbord.php">Dashboard</a>
                    <span class="material-symbols-outlined">chevron_right</span>
                    <span>Vehicle Registry</span>
                </div>
                <div class="header-top">
                    <div class="header-title">
                        <h2>Vehicle Registry</h2>
                        <p>Manage, track, and optimize your entire fleet inventory</p>
                    </div>
                    <div class="header-actions">
                        <button class="btn btn-primary">
                            <span class="material-symbols-outlined">add</span>
                            Add Vehicle
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <div class="content-area">
            <div class="content-container">
                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Total Vehicles</p>
                            <span class="material-symbols-outlined">directions_car</span>
                        </div>
                        <div class="stat-value">
                            <p>142</p>
                            <span class="stat-badge positive">+5%</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Active Fleet</p>
                            <span class="material-symbols-outlined active">check_circle</span>
                        </div>
                        <div class="stat-value">
                            <p>118</p>
                            <span class="stat-badge positive">+2%</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">In Maintenance</p>
                            <span class="material-symbols-outlined maintenance">build</span>
                        </div>
                        <div class="stat-value">
                            <p>12</p>
                            <span class="stat-badge neutral">Avg 3 days</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <p class="stat-label">Out of Service</p>
                            <span class="material-symbols-outlined danger">block</span>
                        </div>
                        <div class="stat-value">
                            <p>12</p>
                            <span class="stat-badge danger">-1%</span>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="filters-bar">
                    <div class="search-box">
                        <span class="material-symbols-outlined">search</span>
                        <input type="text" placeholder="Search by VIN, Plate, or Driver..."/>
                    </div>
                    <div class="filters-group">
                        <select class="filter-select">
                            <option>Status: All</option>
                            <option>Active</option>
                            <option>Maintenance</option>
                            <option>Retired</option>
                        </select>
                        <select class="filter-select">
                            <option>Type: All</option>
                            <option>Truck</option>
                            <option>Sedan</option>
                            <option>Van</option>
                        </select>
                        <button class="btn btn-filter">
                            <span class="material-symbols-outlined">filter_list</span>
                            <span>More Filters</span>
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-container">
                    <table class="vehicles-table">
                        <thead>
                            <tr>
                                <th><input type="checkbox"/></th>
                                <th>Vehicle</th>
                                <th>Status</th>
                                <th>Details (VIN / Plate)</th>
                                <th>Driver</th>
                                <th>Mileage</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <?php
                            if ($vehicules && mysqli_num_rows($vehicules) > 0) {
                                while ($vehicule = mysqli_fetch_assoc($vehicules)) {
                                    $id = htmlspecialchars($vehicule['id']);
                                    $brand = htmlspecialchars($vehicule['brand'] ?? '');
                                    $model = htmlspecialchars($vehicule['model'] ?? '');
                                    $status = htmlspecialchars($vehicule['status'] ?? 'active');
                                    $booked_by = htmlspecialchars($vehicule['booked_by'] ?? 'N/A');
                                    $is_active = $vehicule['is_active'] ?? 0;
                            ?>
                            <tr>
                                <td><input type="checkbox"/></td>
                                <td>
                                    <div class="vehicle-info-cell">
                                        <strong><?php echo $brand . ' ' . $model; ?></strong>
                                    </div>
                                </td>
                                <td>
                                    <span class="status-badge status-<?php echo strtolower($status); ?>">
                                        <?php echo ucfirst($status); ?>
                                    </span>
                                </td>
                                <td class="mono"><?php echo $id; ?></td>
                                <td><?php echo $booked_by; ?></td>
                                <td>-</td>
                                <td>
                                    <div class="actions-cell">
                                        <button class="btn-action btn-edit" onclick="openEditModal(<?php echo $id; ?>)">
                                            <span class="material-symbols-outlined">edit</span>
                                        </button>
                                        <a href="../../controllers/vehiculeController.php?deleteVehicule=<?php echo $id; ?>" 
                                           class="btn-action btn-delete" 
                                           onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?');">
                                            <span class="material-symbols-outlined">delete</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                            } else {
                            ?>
                            <tr>
                                <td colspan="7" style="text-align: center; padding: 2rem;">
                                    <p>Aucun véhicule trouvé.</p>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="table-footer">
                        <?php
                        // Réinitialiser le pointeur du résultat pour compter
                        mysqli_data_seek($vehicules, 0);
                        $total_count = mysqli_num_rows($vehicules);
                        ?>
                        <span>Total: <span class="font-medium"><?php echo $total_count; ?></span> véhicule(s)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL ADD/EDIT VEHICLE -->
        <div id="vehicleModal" class="modal hidden">
            <div class="modal-overlay"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="modalTitle">Add Vehicle</h3>
                    <button class="btn-close" onclick="closeVehicleModal()">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <form id="vehicleForm" action="../../controllers/vehiculeController.php" method="POST">
                    <input type="hidden" name="ajouterVehicule" value="1"/>
                    <div class="form-group">
                        <label for="vehicleName">Vehicle Name (Brand)</label>
                        <input type="text" id="vehicleName" name="brand" required/>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="vehicleYear">Year</label>
                            <input type="number" id="vehicleYear" required/>
                        </div>
                        <div class="form-group">
                            <label for="vehicleType">Type/Model</label>
                            <input type="text" id="vehicleType" name="model" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="vehiclePlate">License Plate</label>
                            <input type="text" id="vehiclePlate" required/>
                        </div>
                        <div class="form-group">
                            <label for="vehicleVin">VIN</label>
                            <input type="text" id="vehicleVin" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vehicleDriver">Driver ID (booked_by)</label>
                        <input type="text" id="vehicleDriver" name="booked_by"/>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="vehicleMileage">Mileage</label>
                            <input type="text" id="vehicleMileage" required/>
                        </div>
                        <div class="form-group">
                            <label for="vehicleStatus">Status</label>
                            <select id="vehicleStatus" name="status" required>
                                <option value="active">Active</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="out-of-service">Out of Service</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="is_active" value="1"/>
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary-form" onclick="closeVehicleModal()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Vehicle</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- MODAL EDIT VEHICLE -->
        <div id="editVehicleModal" class="modal hidden">
            <div class="modal-overlay"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Edit Vehicle</h3>
                    <button class="btn-close" onclick="closeEditModal()">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <form id="editVehicleForm" action="../../controllers/vehiculeController.php" method="POST">
                    <input type="hidden" name="modifierVehicule" value="1"/>
                    <input type="hidden" name="id" id="editVehicleId"/>
                    <div class="form-group">
                        <label for="editVehicleBrand">Brand</label>
                        <input type="text" id="editVehicleBrand" name="brand" required/>
                    </div>
                    <div class="form-group">
                        <label for="editVehicleModel">Model</label>
                        <input type="text" id="editVehicleModel" name="model" required/>
                    </div>
                    <div class="form-group">
                        <label for="editVehicleBookedBy">Driver ID (booked_by)</label>
                        <input type="text" id="editVehicleBookedBy" name="booked_by"/>
                    </div>
                    <div class="form-group">
                        <label for="editVehicleStatus">Status</label>
                        <select id="editVehicleStatus" name="status" required>
                            <option value="active">Active</option>
                            <option value="maintenance">Maintenance</option>
                            <option value="out-of-service">Out of Service</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editVehicleIsActive">Is Active</label>
                        <select id="editVehicleIsActive" name="is_active" required>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary-form" onclick="closeEditModal()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Vehicle</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="../../assets/js/admin/VehiclesManagement.js"></script>
</body>
</html>
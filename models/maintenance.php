<?php
// ===========================
// AJOUTER MAINTENANCE
// ===========================
function ajouterMaintenance($conn, $vehicle_id, $description, $maintenance_date){
    $vehicle_id = (int)$vehicle_id;
    $description = mysqli_real_escape_string($conn, $description);
    $maintenance_date = mysqli_real_escape_string($conn, $maintenance_date);

    $sql = "INSERT INTO maintenance(vehicle_id, description, maintenance_date)
            VALUES($vehicle_id, '$description', '$maintenance_date')";
    return mysqli_query($conn, $sql);
}

// ===========================
// LISTE MAINTENANCES
// ===========================
function listeMaintenance($conn){
    $sql = "SELECT * FROM maintenance ORDER BY id DESC";
    return mysqli_query($conn, $sql);
}

// ===========================
// GET MAINTENANCE BY ID
// ===========================
function getMaintenanceById($conn, $id){
    $id = (int)$id;
    $sql = "SELECT * FROM maintenance WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// ===========================
// SUPPRIMER MAINTENANCE
// ===========================
function supprimerMaintenance($conn, $id){
    $id = (int)$id;
    $sql = "DELETE FROM maintenance WHERE id = $id";
    return mysqli_query($conn, $sql);
}

// ===========================
// MODIFIER MAINTENANCE
// ===========================
function modifierMaintenance($conn, $id, $vehicle_id, $description, $maintenance_date){
    $id = (int)$id;
    $vehicle_id = (int)$vehicle_id;
    $description = mysqli_real_escape_string($conn, $description);
    $maintenance_date = mysqli_real_escape_string($conn, $maintenance_date);

    $sql = "UPDATE maintenance SET
            vehicle_id=$vehicle_id,
            description='$description',
            maintenance_date='$maintenance_date'
            WHERE id = $id";
    return mysqli_query($conn, $sql);
}
?>

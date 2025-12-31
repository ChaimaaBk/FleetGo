<?php
// ===========================
// AJOUTER MAINTENANCE
// ===========================
function ajouterMaintenance($conn, $date, $type, $cout, $id_vehicule){
    $date = mysqli_real_escape_string($conn, $date);
    $type = mysqli_real_escape_string($conn, $type);
    $cout = (float)$cout;
    $id_vehicule = (int)$id_vehicule;

    $sql = "INSERT INTO maintenance(date, type, cout, id_vehicule)
            VALUES('$date', '$type', $cout, $id_vehicule)";
    return mysqli_query($conn, $sql);
}

// ===========================
// LISTE MAINTENANCE
// ===========================
function listeMaintenance($conn){
    $sql = "SELECT m.*, v.immatriculation, v.marque, v.modele
            FROM maintenance m
            LEFT JOIN vehicule v ON m.id_vehicule = v.id_vehicule
            ORDER BY m.date DESC";
    return mysqli_query($conn, $sql);
}

// ===========================
// GET MAINTENANCE BY ID
// ===========================
function getMaintenanceById($conn, $id){
    $id = (int)$id;
    $sql = "SELECT m.*, v.immatriculation, v.marque, v.modele
            FROM maintenance m
            LEFT JOIN vehicule v ON m.id_vehicule = v.id_vehicule
            WHERE m.id_maintenance = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// ===========================
// SUPPRIMER MAINTENANCE
// ===========================
function supprimerMaintenance($conn, $id){
    $id = (int)$id;
    $sql = "DELETE FROM maintenance WHERE id_maintenance = $id";
    return mysqli_query($conn, $sql);
}

// ===========================
// MODIFIER MAINTENANCE
// ===========================
function modifierMaintenance($conn, $id, $date, $type, $cout, $id_vehicule){
    $id = (int)$id;
    $date = mysqli_real_escape_string($conn, $date);
    $type = mysqli_real_escape_string($conn, $type);
    $cout = (float)$cout;
    $id_vehicule = (int)$id_vehicule;

    $sql = "UPDATE maintenance SET
            date='$date',
            type='$type',
            cout=$cout,
            id_vehicule=$id_vehicule
            WHERE id_maintenance = $id";
    return mysqli_query($conn, $sql);
}
?>

<?php
// ===========================
// AJOUTER VEHICULE
// ===========================
function ajouterVehicule($conn, $brand, $model, $is_active, $booked_by, $status){
    $brand = mysqli_real_escape_string($conn, $brand);
    $model = mysqli_real_escape_string($conn, $model);
    $status = mysqli_real_escape_string($conn, $status);

    $sql = "INSERT INTO vehicules(brand, model, is_active, booked_by, status)
            VALUES('$brand', '$model', $is_active, $booked_by, '$status')";
    return mysqli_query($conn, $sql);
}

// ===========================
// LISTE VEHICULES
// ===========================
function listeVehicule($conn){
    $sql = "SELECT * FROM vehicules ORDER BY id DESC";
    return mysqli_query($conn, $sql);
}

// ===========================
// GET VEHICULE BY ID
// ===========================
function getVehiculeById($conn, $id){
    $id = (int)$id;
    $sql = "SELECT * FROM vehicules WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// ===========================
// SUPPRIMER VEHICULE
// ===========================
function supprimerVehicule($conn, $id){
    $id = (int)$id;
    $sql = "DELETE FROM vehicules WHERE id = $id";
    return mysqli_query($conn, $sql);
}

// ===========================
// MODIFIER VEHICULE
// ===========================
function modifierVehicule($conn, $id, $brand, $model, $is_active, $booked_by, $status){
    $id = (int)$id;
    $brand = mysqli_real_escape_string($conn, $brand);
    $model = mysqli_real_escape_string($conn, $model);
    $status = mysqli_real_escape_string($conn, $status);

    $sql = "UPDATE vehicules SET
            brand='$brand',
            model='$model',
            is_active=$is_active,
            booked_by=$booked_by,
            status='$status'
            WHERE id = $id";
    return mysqli_query($conn, $sql);
}
?>

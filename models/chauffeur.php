<?php
// ===========================
// AJOUTER DRIVER
// ===========================
function ajouterDriver($conn, $full_name, $email, $password, $phone_number, $life_time_vehicles, $total_kms){
    $full_name = mysqli_real_escape_string($conn, $full_name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $phone_number = mysqli_real_escape_string($conn, $phone_number);

    $sql = "INSERT INTO driver(full_name, email, password, phone_number, life_time_vihecules, total_kms)
            VALUES('$full_name', '$email', '$password', '$phone_number', $life_time_vehicles, $total_kms)";
    return mysqli_query($conn, $sql);
}

// ===========================
// LISTE DRIVERS
// ===========================
function listeDriver($conn){
    $sql = "SELECT * FROM driver ORDER BY driver_id DESC";
    return mysqli_query($conn, $sql);
}

// ===========================
// GET DRIVER BY ID
// ===========================
function getDriverById($conn, $id){
    $id = (int)$id;
    $sql = "SELECT * FROM driver WHERE driver_id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// ===========================
// SUPPRIMER DRIVER
// ===========================
function supprimerDriver($conn, $id){
    $id = (int)$id;
    $sql = "DELETE FROM driver WHERE driver_id = $id";
    return mysqli_query($conn, $sql);
}

// ===========================
// MODIFIER DRIVER
// ===========================
function modifierDriver($conn, $id, $full_name, $email, $password, $phone_number, $life_time_vehicles, $total_kms){
    $id = (int)$id;
    $full_name = mysqli_real_escape_string($conn, $full_name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $phone_number = mysqli_real_escape_string($conn, $phone_number);

    $sql = "UPDATE driver SET
            full_name='$full_name',
            email='$email',
            password='$password',
            phone_number='$phone_number',
            life_time_vihecules=$life_time_vehicles,
            total_kms=$total_kms
            WHERE driver_id = $id";
    return mysqli_query($conn, $sql);
}
?>

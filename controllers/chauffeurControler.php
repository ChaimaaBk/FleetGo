<?php
include '../config/connexion.php';
include '../models/driver.php';

// ===========================
// AJOUTER DRIVER
// ===========================
if(isset($_POST['ajouterDriver'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $life_time_vehicles = $_POST['life_time_vehicles'];
    $total_kms = $_POST['total_kms'];

    if(ajouterDriver($conn, $full_name, $email, $password, $phone_number, $life_time_vehicles, $total_kms)){
        header("Location: ../views/driver_list.php?success=1");
    }else{
        echo "Erreur lors de l'ajout du driver";
    }
}

// ===========================
// SUPPRIMER DRIVER
// ===========================
if(isset($_GET['deleteDriver'])){
    $id = $_GET['deleteDriver'];
    if(supprimerDriver($conn, $id)){
        header("Location: ../views/driver_list.php?deleted=1");
    }else{
        echo "Erreur lors de la suppression";
    }
}

// ===========================
// MODIFIER DRIVER
// ===========================
if(isset($_POST['modifierDriver'])){
    $id = $_POST['driver_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $life_time_vehicles = $_POST['life_time_vehicles'];
    $total_kms = $_POST['total_kms'];

    if(modifierDriver($conn, $id, $full_name, $email, $password, $phone_number, $life_time_vehicles, $total_kms)){
        header("Location: ../views/driver_list.php?updated=1");
    }else{
        echo "Erreur lors de la modification";
    }
}

// ===========================
// LISTE DRIVER (pour afficher dans views)
// ===========================
$drivers = listeDriver($conn);
?>

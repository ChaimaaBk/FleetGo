<?php
include '../config/connexion.php';
include '../models/vehicule.php';

// AJOUTER VEHICULE
if(isset($_POST['ajouterVehicule'])){
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $is_active = $_POST['is_active'];
    $booked_by = $_POST['booked_by'];
    $status = $_POST['status'];

    if(ajouterVehicule($conn, $brand, $model, $is_active, $booked_by, $status)){
        header("Location: ../views/Admin/VehiclesManagement.php?success=1");
    }else{
        echo "Erreur lors de l'ajout du véhicule";
    }
}

// SUPPRIMER VEHICULE
if(isset($_GET['deleteVehicule'])){
    $id = $_GET['deleteVehicule'];
    if(supprimerVehicule($conn, $id)){
        header("Location: ../views/Admin/VehiclesManagement.php?deleted=1");
    }else{
        echo "Erreur lors de la suppression";
    }
}

// MODIFIER VEHICULE
if(isset($_POST['modifierVehicule'])){
    $id = $_POST['id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $is_active = $_POST['is_active'];
    $booked_by = $_POST['booked_by'];
    $status = $_POST['status'];

    if(modifierVehicule($conn, $id, $brand, $model, $is_active, $booked_by, $status)){
        header("Location: ../views/Admin/VehiclesManagement.php?updated=1");
    }else{
        echo "Erreur lors de la modification";
    }
}

// LISTE VEHICULES
$vehicules = listeVehicule($conn);
?>

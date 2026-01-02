<?php
include '../config/connexion.php';
include '../models/maintenance.php';

// AJOUTER MAINTENANCE
if(isset($_POST['ajouterMaintenance'])){
    $vehicle_id = $_POST['vehicle_id'];
    $description = $_POST['description'];
    $maintenance_date = $_POST['maintenance_date'];

    if(ajouterMaintenance($conn, $vehicle_id, $description, $maintenance_date)){
        header("Location: ../views/users/maintenance.php?success=1");
    }else{
        echo "Erreur lors de l'ajout";
    }
}

// SUPPRIMER MAINTENANCE
if(isset($_GET['deleteMaintenance'])){
    $id = $_GET['deleteMaintenance'];
    if(supprimerMaintenance($conn, $id)){
        header("Location: ../views/users/maintenance.php?deleted=1");
    }else{
        echo "Erreur lors de la suppression";
    }
}

// MODIFIER MAINTENANCE
if(isset($_POST['modifierMaintenance'])){
    $id = $_POST['id'];
    $vehicle_id = $_POST['vehicle_id'];
    $description = $_POST['description'];
    $maintenance_date = $_POST['maintenance_date'];

    if(modifierMaintenance($conn, $id, $vehicle_id, $description, $maintenance_date)){
        header("Location: ../views/users/maintenance.php?updated=1");
    }else{
        echo "Erreur lors de la modification";
    }
}

// LISTE MAINTENANCE
$maintenances = listeMaintenance($conn);
?>

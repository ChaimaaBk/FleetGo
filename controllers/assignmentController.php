<?php
include '../config/connexion.php';
include '../models/assignment.php';

// AJOUTER ASSIGNMENT
if(isset($_POST['ajouterAssignment'])){
    $id_driver = $_POST['id_driver'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    if(ajouterAssignment($conn, $id_driver, $start_date, $end_date, $status)){
        header("Location: ../views/Admin/assignVehicle.php?success=1");
    }else{
        echo "Erreur lors de l'ajout";
    }
}

// SUPPRIMER ASSIGNMENT
if(isset($_GET['deleteAssignment'])){
    $id = $_GET['deleteAssignment'];
    if(supprimerAssignment($conn, $id)){
        header("Location: ../views/Admin/assignVehicle.php?deleted=1");
    }else{
        echo "Erreur lors de la suppression";
    }
}

// MODIFIER ASSIGNMENT
if(isset($_POST['modifierAssignment'])){
    $id = $_POST['id'];
    $id_driver = $_POST['id_driver'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    if(modifierAssignment($conn, $id, $id_driver, $start_date, $end_date, $status)){
        header("Location: ../views/Admin/assignVehicle.php?updated=1");
    }else{
        echo "Erreur lors de la modification";
    }
}

// LISTE ASSIGNMENTS
$assignments = listeAssignment($conn);
?>

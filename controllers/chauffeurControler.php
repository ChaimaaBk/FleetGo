<?php
include 'config/connexion.php';
include 'models/chauffeur.php'; 

session_start();
include 'includes/auth.php';

$message = "";
$message_type = "";

// ===========================
// AJOUTER CHAUFFEUR
// ===========================
if (isset($_POST['ajouter'])) {
    if (ajouterChauffeur($conn, $_POST['nom'], $_POST['prenom'], $_POST['permis'], $_POST['telephone'])) {
        $message = "Chauffeur ajouté avec succès";
        $message_type = "success";
    } else {
        $message = "Erreur lors de l'ajout";
        $message_type = "error";
    }
}

// ===========================
// MODIFIER CHAUFFEUR
// ===========================
if (isset($_POST['modifier'])) {
    if (modifierChauffeur(
        $conn,
        $_POST['id'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['permis'],
        $_POST['telephone']
    )) {
        $message = "Chauffeur modifié avec succès";
        $message_type = "success";
    } else {
        $message = "Erreur lors de la modification";
        $message_type = "error";
    }
}

// ===========================
// SUPPRIMER CHAUFFEUR
// ===========================
if (isset($_GET['supprimer'])) {
    if (supprimerChauffeur($conn, $_GET['supprimer'])) {
        $message = "Chauffeur supprimé avec succès";
        $message_type = "success";
    } else {
        $message = "Erreur lors de la suppression";
        $message_type = "error";
    }
}

// ===========================
// LISTE CHAUFFEURS
// ===========================
$liste = listeChauffeur($conn);

// ===========================
// CHAUFFEUR À MODIFIER
// ===========================
$chauffeur_edit = null;
if (isset($_GET['editer'])) {
    $chauffeur_edit = getChauffeurById($conn, $_GET['editer']);
}
?>

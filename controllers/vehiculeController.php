<?php
session_start();
include 'config/connexion.php';
include 'includes/auth.php';

$message = "";
$message_type = "";

/* =======================
   AJOUTER VEHICULE
======================= */
if (isset($_POST['ajouter'])) {
    $imm    = $_POST['imm'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee  = $_POST['annee'];
    $etat   = $_POST['etat'];

    $sql = "INSERT INTO vehicule (immatriculation, marque, modele, annee, etat)
            VALUES ('$imm', '$marque', '$modele', '$annee', '$etat')";

    if (mysqli_query($conn, $sql)) {
        $message = "Véhicule ajouté avec succès";
        $message_type = "success";
    } else {
        $message = "Erreur lors de l'ajout";
        $message_type = "error";
    }
}

/* =======================
   MODIFIER VEHICULE
======================= */
if (isset($_POST['modifier'])) {
    $id     = $_POST['id'];
    $imm    = $_POST['imm'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee  = $_POST['annee'];
    $etat   = $_POST['etat'];

    $sql = "UPDATE vehicule SET
            immatriculation='$imm',
            marque='$marque',
            modele='$modele',
            annee='$annee',
            etat='$etat'
            WHERE id_vehicule=$id";

    if (mysqli_query($conn, $sql)) {
        $message = "Véhicule modifié avec succès";
        $message_type = "success";
    } else {
        $message = "Erreur lors de la modification";
        $message_type = "error";
    }
}

/* =======================
   SUPPRIMER VEHICULE (POST)
======================= */
if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM vehicule WHERE id_vehicule=$id";

    if (mysqli_query($conn, $sql)) {
        $message = "Véhicule supprimé avec succès";
        $message_type = "success";
    } else {
        $message = "Erreur lors de la suppression";
        $message_type = "error";
    }
}

/* =======================
   RECUPERER POUR EDIT (POST)
======================= */
$vehicule_edit = null;
if (isset($_POST['editer'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM vehicule WHERE id_vehicule=$id";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $vehicule_edit = mysqli_fetch_assoc($res);
    }
}

/* =======================
   LISTE VEHICULES
======================= */
$sql = "SELECT * FROM vehicule ORDER BY id_vehicule DESC";
$liste = mysqli_query($conn, $sql);
?>

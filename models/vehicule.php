<?php
// ===========================
// AJOUTER VEHICULE
// ===========================
function ajouterVehicule($conn, $imm, $marque, $modele, $annee, $etat){
    $imm = mysqli_real_escape_string($conn, $imm);
    $marque = mysqli_real_escape_string($conn, $marque);
    $modele = mysqli_real_escape_string($conn, $modele);
    $annee = mysqli_real_escape_string($conn, $annee);
    $etat = mysqli_real_escape_string($conn, $etat);

    $sql = "INSERT INTO vehicule(immatriculation, marque, modele, annee, etat)
            VALUES('$imm', '$marque', '$modele', '$annee', '$etat')";
    return mysqli_query($conn, $sql);
}

// ===========================
// LISTE VEHICULES
// ===========================
function listeVehicule($conn){
    $sql = "SELECT * FROM vehicule ORDER BY id_vehicule DESC";
    return mysqli_query($conn, $sql);
}

// ===========================
// GET VEHICULE BY ID
// ===========================
function getVehiculeById($conn, $id){
    $id = (int)$id;
    $sql = "SELECT * FROM vehicule WHERE id_vehicule = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// ===========================
// SUPPRIMER VEHICULE
// ===========================
function supprimerVehicule($conn, $id){
    $id = (int)$id;
    $sql = "DELETE FROM vehicule WHERE id_vehicule = $id";
    return mysqli_query($conn, $sql);
}

// ===========================
// MODIFIER VEHICULE
// ===========================
function modifierVehicule($conn, $id, $imm, $marque, $modele, $annee, $etat){
    $id = (int)$id;
    $imm = mysqli_real_escape_string($conn, $imm);
    $marque = mysqli_real_escape_string($conn, $marque);
    $modele = mysqli_real_escape_string($conn, $modele);
    $annee = mysqli_real_escape_string($conn, $annee);
    $etat = mysqli_real_escape_string($conn, $etat);

    $sql = "UPDATE vehicule SET
            immatriculation='$imm',
            marque='$marque',
            modele='$modele',
            annee='$annee',
            etat='$etat'
            WHERE id_vehicule = $id";
    return mysqli_query($conn, $sql);
}
?>

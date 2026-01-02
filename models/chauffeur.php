<?php
// ===========================
// AJOUTER CHAUFFEUR
// ===========================
function ajouterChauffeur($conn, $nom, $prenom, $permis, $telephone){
    $nom = mysqli_real_escape_string($conn, $nom);
    $prenom = mysqli_real_escape_string($conn, $prenom);
    $permis = mysqli_real_escape_string($conn, $permis);
    $telephone = mysqli_real_escape_string($conn, $telephone);

    $sql = "INSERT INTO chauffeur(nom, prenom, permis, telephone)
            VALUES('$nom', '$prenom', '$permis', '$telephone')";
    return mysqli_query($conn, $sql);
}

// ===========================
// LISTE CHAUFFEURS
// ===========================
function listeChauffeur($conn){
    $sql = "SELECT * FROM chauffeur ORDER BY id_chauffeur DESC";
    return mysqli_query($conn, $sql);
}

// ===========================
// GET CHAUFFEUR BY ID
// ===========================
function getChauffeurById($conn, $id){
    $id = (int)$id;
    $sql = "SELECT * FROM chauffeur WHERE id_chauffeur = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// ===========================
// SUPPRIMER CHAUFFEUR
// ===========================
function supprimerChauffeur($conn, $id){
    $id = (int)$id;
    $sql = "DELETE FROM chauffeur WHERE id_chauffeur = $id";
    return mysqli_query($conn, $sql);
}

// ===========================
// MODIFIER CHAUFFEUR
// ===========================
function modifierChauffeur($conn, $id, $nom, $prenom, $permis, $telephone){
    $id = (int)$id;
    $nom = mysqli_real_escape_string($conn, $nom);
    $prenom = mysqli_real_escape_string($conn, $prenom);
    $permis = mysqli_real_escape_string($conn, $permis);
    $telephone = mysqli_real_escape_string($conn, $telephone);

    $sql = "UPDATE chauffeur SET
            nom='$nom',
            prenom='$prenom',
            permis='$permis',
            telephone='$telephone'
            WHERE id_chauffeur = $id";
    return mysqli_query($conn, $sql);
}
?>

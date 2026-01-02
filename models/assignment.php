<?php
// ===========================
// AJOUTER ASSIGNMENT
// ===========================
function ajouterAssignment($conn, $id_driver, $start_date, $end_date, $status){
    $id_driver = (int)$id_driver;
    $start_date = mysqli_real_escape_string($conn, $start_date);
    $end_date = mysqli_real_escape_string($conn, $end_date);
    $status = mysqli_real_escape_string($conn, $status);

    $sql = "INSERT INTO assignment(id_driver, start_date, end_date, status)
            VALUES($id_driver, '$start_date', '$end_date', '$status')";
    return mysqli_query($conn, $sql);
}

// ===========================
// LISTE ASSIGNMENTS
// ===========================
function listeAssignment($conn){
    $sql = "SELECT * FROM assignment ORDER BY id DESC";
    return mysqli_query($conn, $sql);
}

// ===========================
// GET ASSIGNMENT BY ID
// ===========================
function getAssignmentById($conn, $id){
    $id = (int)$id;
    $sql = "SELECT * FROM assignment WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// ===========================
// SUPPRIMER ASSIGNMENT
// ===========================
function supprimerAssignment($conn, $id){
    $id = (int)$id;
    $sql = "DELETE FROM assignment WHERE id = $id";
    return mysqli_query($conn, $sql);
}

// ===========================
// MODIFIER ASSIGNMENT
// ===========================
function modifierAssignment($conn, $id, $id_driver, $start_date, $end_date, $status){
    $id = (int)$id;
    $id_driver = (int)$id_driver;
    $start_date = mysqli_real_escape_string($conn, $start_date);
    $end_date = mysqli_real_escape_string($conn, $end_date);
    $status = mysqli_real_escape_string($conn, $status);

    $sql = "UPDATE assignment SET
            id_driver=$id_driver,
            start_date='$start_date',
            end_date='$end_date',
            status='$status'
            WHERE id = $id";
    return mysqli_query($conn, $sql);
}
?>

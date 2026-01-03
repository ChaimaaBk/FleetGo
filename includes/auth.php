<?php
// Démarrer la session si elle n'est pas déjà démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérification de session
if (!isset($_SESSION['user_id'])) {
    header("Location: ../views/auth/loginUser.php");
    exit();
}
?>


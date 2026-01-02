<?php
// Vérification de session
if (!isset($_SESSION['user_id'])) {
    header("Location: ../views/auth/loginUser.php");
    exit();
}
?>


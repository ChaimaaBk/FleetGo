<?php
// Script pour créer des utilisateurs de test
// Exécutez ce fichier une seule fois via votre navigateur : http://localhost/FleetGo/create_test_users.php

require_once 'config/connexion.php';

// Créer l'utilisateur admin
$login_admin = 'admin';
$password_admin = 'admin123';
$hash_admin = password_hash($password_admin, PASSWORD_DEFAULT);

// Échapper les valeurs pour la sécurité
$login_admin_escaped = mysqli_real_escape_string($conn, $login_admin);
$hash_admin_escaped = mysqli_real_escape_string($conn, $hash_admin);

$sql_admin = "INSERT INTO utilisateur (nom, prenom, login, password, role) 
              VALUES ('Admin', 'Test', '$login_admin_escaped', '$hash_admin_escaped', 'admin')";

$result_admin = mysqli_query($conn, $sql_admin);

if ($result_admin) {
    echo "Utilisateur admin créé avec succès !<br>";
    echo "Login: admin<br>";
    echo "Password: admin123<br><br>";
} else {
    // Vérifier si l'erreur est due à un doublon
    if (strpos(mysqli_error($conn), 'Duplicate entry') !== false) {
        echo "L'utilisateur admin existe déjà.<br><br>";
    } else {
        echo "Erreur lors de la création de l'admin : " . mysqli_error($conn) . "<br><br>";
    }
}

// Créer l'utilisateur normal
$login_user = 'user';
$password_user = 'user123';
$hash_user = password_hash($password_user, PASSWORD_DEFAULT);

// Échapper les valeurs pour la sécurité
$login_user_escaped = mysqli_real_escape_string($conn, $login_user);
$hash_user_escaped = mysqli_real_escape_string($conn, $hash_user);

$sql_user = "INSERT INTO utilisateur (nom, prenom, login, password, role) 
             VALUES ('Dupont', 'Jean', '$login_user_escaped', '$hash_user_escaped', 'user')";

$result_user = mysqli_query($conn, $sql_user);

if ($result_user) {
    echo "Utilisateur user créé avec succès !<br>";
    echo "Login: user<br>";
    echo "Password: user123<br><br>";
} else {
    // Vérifier si l'erreur est due à un doublon
    if (strpos(mysqli_error($conn), 'Duplicate entry') !== false) {
        echo "L'utilisateur user existe déjà.<br><br>";
    } else {
        echo "Erreur lors de la création de l'utilisateur : " . mysqli_error($conn) . "<br><br>";
    }
}

// Vérifier si au moins un utilisateur a été créé
if ($result_admin || $result_user) {
    echo "<strong>Les utilisateurs de test ont été créés !</strong><br>";
} else {
    echo "<strong>Les utilisateurs de test existent déjà dans la base de données.</strong><br>";
}

echo "<a href='views/login.php'>Aller à la page de connexion</a>";
?>

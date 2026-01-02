<?php
// Fichier de connexion à la base de données MySQL
// Configuration simple pour débutant avec MySQLi

// Informations de connexion
$host = 'localhost';        // Adresse du serveur MySQL
$dbname = 'gestion_flotte'; // Nom de la base de données
$username = 'root';         // Nom d'utilisateur MySQL (par défaut dans XAMPP)
$password = '';             // Mot de passe MySQL (vide par défaut dans XAMPP)

// Créer la connexion
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Définir le jeu de caractères en UTF-8
mysqli_set_charset($conn, "utf8");
?>

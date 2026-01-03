<?php
// Démarrer la session
session_start();

// Inclure le modèle utilisateur
require_once __DIR__ . '/../models/user.php';

// Variable pour stocker les messages
$erreur = '';
$succes = '';

// Vérifier si le formulaire a été soumis (méthode POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Récupérer les données du formulaire
    $email = $_POST['email'] ?? '';
    $role = $_POST['role'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Vérifier que les champs ne sont pas vides
    if (empty($email) || empty($password)) {
        $erreur = "Veuillez remplir tous les champs";
    } else {
        // Vérifier les identifiants avec la fonction du modèle
        if($role=="admin")
            $user = verifierLoginAdmin($email, $password);
        else
            $user= verifierLoginDriver($email, $password);
        
        if ($user) {
            // Connexion réussie - créer la session avec les données de l'utilisateur
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_nom'] = $user['nom'] ?? '';
            $_SESSION['user_prenom'] = $user['prenom'] ?? '';
            $_SESSION['logged_in'] = true;

            // Message de succès

            $succes = "Connexion réussie !";
            // if($role=="admin")
                // redirection to admin interface
            // else
                // redirection to driver interface

            // exit;
            
        } else {
            // Identifiants incorrects
            $erreur = "Email ou mot de passe incorrect";
        }
    }
}
?>


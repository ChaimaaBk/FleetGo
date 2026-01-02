<?php
// Démarrer la session si nécessaire
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure le modèle utilisateur
require_once __DIR__ . '/../models/user.php';

// Variable pour stocker les messages
$erreur = '';
$succes = '';

// Vérifier si le formulaire a été soumis (méthode POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Récupérer les données du formulaire
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Vérifier que les champs ne sont pas vides
    if (empty($email) || empty($password)) {
        $erreur = "Veuillez remplir tous les champs";
    } else {
        // Vérifier les identifiants avec la fonction du modèle
        $user = verifierLogin($email, $password);
        
        if ($user) {
            // Connexion réussie - créer la session avec les données de l'utilisateur
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_nom'] = $user['nom'] ?? '';
            $_SESSION['user_prenom'] = $user['prenom'] ?? '';
            $_SESSION['logged_in'] = true;
            
            // Message de succès
            $succes = "Connexion réussie !";
            
            // Redirection (laissée vide comme demandé)
            // header('Location: ...');
            // exit;
            
        } else {
            // Identifiants incorrects
            $erreur = "Email ou mot de passe incorrect";
        }
    }
}
?>


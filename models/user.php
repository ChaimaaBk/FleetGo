<?php
// Inclure le fichier de connexion
require_once __DIR__ . '/../config/connexion.php';

/**
 * Fonction pour vérifier les identifiants de connexion
 * @param string $email L'email de l'utilisateur
 * @param string $mot_de_passe Le mot de passe en clair
 * @return array|false Retourne les données de l'utilisateur si succès, false si échec
 */
function verifierLoginAdmin($email, $mot_de_passe) {
    global $pdo;
    
    // Préparer la requête SQL pour récupérer l'utilisateur par email
    $sql = "SELECT id, email, password,full_name FROM driver WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    
    // Récupérer l'utilisateur
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Vérifier si l'utilisateur existe
    if ($user) {
        // Vérifier si le mot de passe correspond (comparaison avec le hash)
        if (password_verify($mot_de_passe, $user['password'])) {
            // Retourner les informations de l'utilisateur (sans le mot de passe)
            unset($user['password']);
            return $user;
        }
    }
    
    // Si les identifiants sont incorrects
    return false;
}

function verifierLoginDriver($email, $mot_de_passe) {
    global $pdo;
    
    // Préparer la requête SQL pour récupérer l'utilisateur par email
    $sql = "SELECT id, email, password,full_name FROM driver WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    
    // Récupérer l'utilisateur
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Vérifier si l'utilisateur existe
    if ($user) {
        // Vérifier si le mot de passe correspond (comparaison avec le hash)
        if (password_verify($mot_de_passe, $user['password'])) {
            // Retourner les informations de l'utilisateur (sans le mot de passe)
            unset($user['password']);
            return $user;
        }
    }
    
    // Si les identifiants sont incorrects
    return false;
}




?>


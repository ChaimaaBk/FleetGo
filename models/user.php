<?php
// Inclure le fichier de connexion
require_once __DIR__ . '/../config/connexion.php';

/**
 * Fonction pour vérifier les identifiants de connexion
 * @param string $email L'email de l'utilisateur
 * @param string $mot_de_passe Le mot de passe en clair
 * @return array|false Retourne les données de l'utilisateur si succès, false si échec
 */
function verifierLogin($email, $mot_de_passe) {
    global $conn;
    
    // Préparer la requête SQL pour récupérer l'utilisateur par email (requête préparée pour la sécurité)
    $sql = "SELECT id, email, password, nom, prenom FROM utilisateurs WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        // Liaison des paramètres
        mysqli_stmt_bind_param($stmt, "s", $email);
        
        // Exécuter la requête
        mysqli_stmt_execute($stmt);
        
        // Récupérer le résultat
        $result = mysqli_stmt_get_result($stmt);
        
        // Récupérer l'utilisateur
        $user = mysqli_fetch_assoc($result);
        
        // Fermer le statement
        mysqli_stmt_close($stmt);
        
        // Vérifier si l'utilisateur existe
        if ($user) {
            // Vérifier si le mot de passe correspond (comparaison avec le hash)
            if (password_verify($mot_de_passe, $user['password'])) {
                // Retourner les informations de l'utilisateur (sans le mot de passe)
                unset($user['password']);
                return $user;
            }
        }
    }
    
    // Si les identifiants sont incorrects
    return false;
}
?>


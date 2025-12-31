<?php
// Fichier login.php - Traite la connexion de l'utilisateur

// Démarrer la session pour stocker les informations de l'utilisateur
session_start();

// Inclure le fichier de connexion à la base de données
require_once 'config/connexion.php';

// Vérifier si le formulaire a été soumis (méthode POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Récupérer les données du formulaire
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Vérifier que les champs ne sont pas vides
    if (empty($login) || empty($password)) {
        $erreur = "Veuillez remplir tous les champs";
    } else {
        
        // Échapper les caractères spéciaux pour éviter les injections SQL
        $login = mysqli_real_escape_string($conn, $login);
        
        // Préparer la requête SQL pour chercher l'utilisateur
        $sql = "SELECT id_user, nom, prenom, login, password, role FROM utilisateur WHERE login = '$login'";
        
        // Exécuter la requête
        $result = mysqli_query($conn, $sql);
        
        // Vérifier si la requête a réussi
        if ($result) {
            
            // Vérifier si un utilisateur a été trouvé
            if (mysqli_num_rows($result) > 0) {
                
                // Récupérer les données de l'utilisateur
                $utilisateur = mysqli_fetch_assoc($result);
                
                // Vérifier si le mot de passe est correct
                if (password_verify($password, $utilisateur['password'])) {
                    
                    // Connexion réussie - Stocker les informations dans la session
                    $_SESSION['id_user'] = $utilisateur['id_user'];
                    $_SESSION['nom'] = $utilisateur['nom'];
                    $_SESSION['prenom'] = $utilisateur['prenom'];
                    $_SESSION['login'] = $utilisateur['login'];
                    $_SESSION['role'] = $utilisateur['role'];
                    $_SESSION['connecte'] = true;
                    
                    // Rediriger vers une page (vous remplirez le nom plus tard)
                    header('Location: .php');
                    exit();
                    
                } else {
                    // Mot de passe incorrect
                    $erreur = "Login ou mot de passe incorrect";
                }
                
            } else {
                // Aucun utilisateur trouvé
                $erreur = "Login ou mot de passe incorrect";
            }
            
        } else {
            // Erreur lors de l'exécution de la requête
            $erreur = "Erreur lors de la connexion";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - FleetGo</title>
</head>
<body>
    <h1>Connexion</h1>
    
    <?php if (isset($erreur)): ?>
        <p style="color: red;"><?php echo $erreur; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="login.php">
        <div>
            <label for="login">Login :</label>
            <input type="text" id="login" name="login" required>
        </div>
        
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>
    
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>

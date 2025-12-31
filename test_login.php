<?php
/**
 * Fichier de test pour vérifier le fonctionnement du système de login
 * Accéder à ce fichier via le navigateur : http://localhost/FleetGo/test_login.php
 */

// Inclure les fichiers nécessaires
require_once __DIR__ . '/config/connexion.php';
require_once __DIR__ . '/models/user.php';

echo "<h1>Test du système de login</h1>";

// Test 1 : Vérifier la connexion à la base de données
echo "<h2>Test 1 : Connexion à la base de données</h2>";
try {
    $test = $pdo->query("SELECT 1");
    echo "<p style='color: green;'>✓ Connexion à la base de données réussie</p>";
} catch(PDOException $e) {
    echo "<p style='color: red;'>✗ Erreur de connexion : " . $e->getMessage() . "</p>";
}

// Test 2 : Vérifier si la table utilisateurs existe
echo "<h2>Test 2 : Vérification de la table utilisateurs</h2>";
try {
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM utilisateurs");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<p style='color: green;'>✓ Table utilisateurs trouvée (" . $result['count'] . " utilisateur(s))</p>";
} catch(PDOException $e) {
    echo "<p style='color: red;'>✗ Erreur : " . $e->getMessage() . "</p>";
    echo "<p>Assurez-vous d'avoir exécuté le fichier database.sql</p>";
}

// Test 3 : Vérifier si l'utilisateur de test existe
echo "<h2>Test 3 : Vérification de l'utilisateur de test</h2>";
try {
    $stmt = $pdo->prepare("SELECT email, nom, prenom FROM utilisateurs WHERE email = :email");
    $stmt->execute([':email' => 'admin@fleetgo.com']);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        echo "<p style='color: green;'>✓ Utilisateur de test trouvé :</p>";
        echo "<ul>";
        echo "<li>Email : " . htmlspecialchars($user['email']) . "</li>";
        echo "<li>Nom : " . htmlspecialchars($user['nom']) . "</li>";
        echo "<li>Prénom : " . htmlspecialchars($user['prenom']) . "</li>";
        echo "</ul>";
    } else {
        echo "<p style='color: red;'>✗ Utilisateur de test non trouvé</p>";
    }
} catch(PDOException $e) {
    echo "<p style='color: red;'>✗ Erreur : " . $e->getMessage() . "</p>";
}

// Test 4 : Tester la fonction de vérification de login
echo "<h2>Test 4 : Test de la fonction verifierLogin()</h2>";

// Test avec les bonnes identifiants
$result = verifierLogin('admin@fleetgo.com', 'admin123');
if ($result) {
    echo "<p style='color: green;'>✓ Connexion réussie avec les identifiants corrects</p>";
    echo "<p>Données retournées :</p>";
    echo "<pre>" . print_r($result, true) . "</pre>";
} else {
    echo "<p style='color: red;'>✗ Échec de connexion avec les identifiants corrects</p>";
}

// Test avec de mauvais identifiants
$result = verifierLogin('admin@fleetgo.com', 'mauvais_mot_de_passe');
if ($result === false) {
    echo "<p style='color: green;'>✓ Rejet correct des mauvais identifiants</p>";
} else {
    echo "<p style='color: red;'>✗ Problème : les mauvais identifiants ont été acceptés</p>";
}

// Test avec un email inexistant
$result = verifierLogin('inexistant@test.com', 'admin123');
if ($result === false) {
    echo "<p style='color: green;'>✓ Rejet correct d'un email inexistant</p>";
} else {
    echo "<p style='color: red;'>✗ Problème : un email inexistant a été accepté</p>";
}

echo "<hr>";
echo "<p><a href='views/login.php'>Aller à la page de connexion</a></p>";
?>


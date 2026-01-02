-- Script SQL pour créer la base de données et la table utilisateurs
-- Exécuter ce script dans phpMyAdmin ou via la ligne de commande MySQL

-- Créer la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS fleetgo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Utiliser la base de données
USE fleetgo;

-- Créer la table utilisateurs
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insérer un utilisateur de test
-- Email: admin@fleetgo.com
-- Mot de passe: admin123
-- Le mot de passe est hashé avec la fonction password_hash() de PHP
INSERT INTO utilisateurs (email, password, nom, prenom) 
VALUES ('admin@fleetgo.com', '$2y$10$E3WhFadu8QpufOubLsOeVupCR2b5.ddEOs5YjpdMMQaWL1xaVJXhS', 'Admin', 'FleetGo')
ON DUPLICATE KEY UPDATE email=email;

-- Afficher les utilisateurs pour vérifier
SELECT * FROM utilisateurs;


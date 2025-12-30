-- Script SQL pour créer des données de test
-- Exécutez ce script dans phpMyAdmin ou via la ligne de commande MySQL

USE gestion_flotte;

-- Insérer un utilisateur admin de test
-- Login: admin
-- Password: admin123
INSERT INTO utilisateur (nom, prenom, login, password, role) 
VALUES ('Admin', 'Test', 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');

-- Insérer un utilisateur normal de test
-- Login: user
-- Password: user123
INSERT INTO utilisateur (nom, prenom, login, password, role) 
VALUES ('Dupont', 'Jean', 'user', '$2y$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy', 'user');

-- Note: Les mots de passe sont hashés avec password_hash()
-- admin123 = $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
-- user123 = $2y$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy

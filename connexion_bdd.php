<?php
// Paramètres de connexion à la base de données
$host = 'localhost'; // L'hôte de la base de données
$dbname = 'unchk_bignona'; // Le nom de la base de données
$username = 'admin'; // Votre nom d'utilisateur de la base de données
$password = '1234'; // Votre mot de passe de la base de données

// Tentative de connexion à la base de données avec PDO
try {
    // Création d'une instance de connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Configurer PDO pour rapporter les erreurs sous forme d'exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Définir le jeu de caractères pour la connexion PDO
    $pdo->exec("set names utf8");
} catch (PDOException $e) {
    // En cas d'échec de la connexion, afficher l'erreur
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>

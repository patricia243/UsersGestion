<?php
// Activer le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Démarrer la session AVANT tout
if (session_status() === PHP_SESSION_NONE) {
    // Donner un nom spécifique à la session
    session_name('user_management_session');
    session_start();
}

// DEBUG: Voir ce qui se passe
// echo "<!-- Session started: " . session_id() . " -->";

// Inclure les fichiers nécessaires
require_once "../core/Router.php";
require_once "../config/database.php";

// Créer une connexion PDO globale si elle n'existe pas
if (!isset($GLOBALS['pdo']) && !isset($pdo)) {
    try {
        $pdo = new PDO(
            "mysql:host=localhost;dbname=user_management;charset=utf8",
            "root",
            ""
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $GLOBALS['pdo'] = $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}

// Lancer le routeur
$router = new Router();
$router->run();
?>
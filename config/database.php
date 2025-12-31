<?php
$host = 'localhost';
$dbname = 'user_management';
$charset = 'utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=$charset",
        $username,
        $password
    );
    
    // Configuration supplémentaire
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo "Database connection successful";
    
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    // Pour le débogage seulement - à enlever en production
    // error_log($e->getMessage());
}
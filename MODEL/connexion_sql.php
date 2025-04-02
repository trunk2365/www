<?php

// Configuration de la connexion à la base de données
function getConnexion() {
    try {
        $dsn = "mysql:host=localhost;dbname=zigzagcar;charset=utf8mb4";
        $user = "root";
        $pass = "testostas123";
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        die();
    }
}

?>
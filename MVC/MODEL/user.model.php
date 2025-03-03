<?php
// model/user.model.php

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

// Récupérer tous les utilisateurs (id et nom uniquement)
function getAllUsers() {
    $pdo = getConnexion();
    $sql = "SELECT ID_USER, FIRSTNAME FROM klftcclft_users";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
        return false;
    }
}

// Récupérer un utilisateur par son ID
function getUserById($id) {
    $pdo = getConnexion();
    $sql = "SELECT * FROM klftcclft_users WHERE ID_USER = :ID_USER";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':ID_USER', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Créer un nouvel utilisateur
function createUser($pseudo, $prenom, $nom, $email, $password) {
    $pdo = getConnexion();
    $sql = "INSERT INTO klftcclft_users (PSEUDO_USER, FIRSTNAME, LASTNAME, EMAIL, PASSWORD) VALUES (:PSEUDO_USER, :FIRSTNAME, :LASTNAME, :EMAIL, :PASSWORD)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':PSEUDO_USER', $pseudo, PDO::PARAM_STR);
        $stmt->bindParam(':FIRSTNAME', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':LASTNAME', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':EMAIL', $email, PDO::PARAM_STR);
        $stmt->bindParam(':PASSWORD', $password, PDO::PARAM_STR);
        $stmt->execute();
        $lastInsertId = $pdo->lastInsertId(); // Récupérer l'ID ici
        return $lastInsertId; // Retourner l'ID
    } catch(PDOException $e) {
        echo "Erreur lors de la création de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Mettre à jour un utilisateur
function updateUser($id, $nom, $email, $password) {
    $pdo = getConnexion();
    $sql = "UPDATE klftcclft_users SET FIRSTNAME = :FIRSTNAME, EMAIL = :EMAIL, PASSWORD = :PASSWORD WHERE ID_USER = :ID_USER";
    // if (!empty($password)) {
    //     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //     $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    // } else {
    //     // Si le mot de passe n'est pas modifié, ne pas le mettre à jour
    //     $sql = "UPDATE users SET nom = :nom, email = :email WHERE id = :id";
    // }
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':ID_USER', $id, PDO::PARAM_INT);
        $stmt->bindParam(':FIRSTNAME', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':EMAIL', $email, PDO::PARAM_STR);
        $stmt->bindParam(':PASSWORD', $password, PDO::PARAM_STR);
        return $stmt->execute();
    } catch(PDOException $e) {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

// Supprimer un utilisateur
function deleteUser($id) {
    $pdo = getConnexion();
    $sql = "DELETE FROM klftcclft_users WHERE ID_USER = :ID_USER";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':ID_USER', $id, PDO::PARAM_INT);
        return $stmt->execute();
    } catch(PDOException $e) {
        echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

?>
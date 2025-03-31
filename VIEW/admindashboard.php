<?php
require_once '/laragon/www/MODEL/user.model.php';
session_start();
$_SESSION['PSEUDO_USER'];
$currentUser = getUserByPseudo($_SESSION['PSEUDO_USER']);
var_dump($currentUser);

function getUserByPseudo($pseudo) {
    $pdo = getConnexion();
    $sql = "SELECT * FROM klftcclft_users WHERE PSEUDO_USER = :PSEUDO_USER";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':PSEUDO_USER', $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

if ($currentUser['IS_ADMIN'] === 1) {
    echo 'Tu es admin';
}
else header('Location: /index.php');

?>

function isCurrentUserAdmin()
{
    $isConnected = isset($_SESSION['CURRENT_USER']) && $_SESSION['CURRENT_USER'] !== null;
    $isAdmin = $isConnected && $_SESSION['CURRENT_USER']['IS_ADMIN'];

    return $isAdmin;
}

role_helper.php

if (isCurrentUserAdmin()) {
    // 
} else {
    header('Location: ./index.php');
}

$_SESSION['CURRENT_USER'] = [
    'LAST_NAME' => 'trunky',
    'PSEUDO' => 'TOTO',
    'ID_ADMIN' => 1,
    'EMAIL' => 'toto@toto.com'
];
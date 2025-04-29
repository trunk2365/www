<?php
require_once '/laragon/www/MODEL/user.model.php';
session_start();
$_SESSION['PSEUDO_USER'];
$currentUser = getUserByPseudo($_SESSION['PSEUDO_USER']);
// var_dump($currentUser); // Supprimez ou commentez cette ligne

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
    echo '<div style="background-color: #e6ffe6; color: #28a745; padding: 20px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px; text-align: center;">';
    echo '<h2 style="color: #28a745; margin-top: 0;">Suppression du trajet réussie !</h2>';
    echo '<button style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 1em;">';
    echo '<a href="/index.php" style="color: white; text-decoration: none;">Retour vers l\'accueil</a>';
    echo '</button>';
    echo '</div>';
}
else header('Location: /index.php');

?>



<!-- function isCurrentUserAdmin()
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
]; -->
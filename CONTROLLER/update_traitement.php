<?php
session_start();
require_once '/laragon/www/MODEL/user.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
    if (!isset($_SESSION['ID_USER'])) {
        echo "Erreur: Utilisateur non connecté.";
        exit();
    }

    $id = $_SESSION['ID_USER'];
    $champ_a_modifier = $_POST['champ_a_modifier'];
    $nouvelle_valeur = $_POST[$champ_a_modifier];

    // Récupérer les valeurs actuelles depuis la session (ou potentiellement la base de données)
    $pseudo = $_SESSION['PSEUDO_USER'];
    $firstname = $_SESSION['FIRSTNAME'];
    $lastname = $_SESSION['LASTNAME'];
    $email = $_SESSION['EMAIL'];
    $password = null; // Initialiser à null par défaut

    // Mettre à jour la variable correspondante en fonction du champ modifié
    switch ($champ_a_modifier) {
        case 'FIRSTNAME':
            $firstname = $nouvelle_valeur;
            break;
        case 'LASTNAME':
            $lastname = $nouvelle_valeur;
            break;
        case 'EMAIL':
            $email = $nouvelle_valeur;
            break;
        case 'PASSWORD':
            $password = $nouvelle_valeur;
            break;
    }

    // Appeler la fonction updateUser avec les arguments attendus par votre modèle
    $result = updateUser($id, $firstname, $lastname, $email, $password);

    if ($result) {
        // Récupérer les informations mises à jour et mettre à jour la session
        $user_data = getUserById($id);
        if ($user_data) {
            $_SESSION['FIRSTNAME'] = $user_data['FIRSTNAME'];
            $_SESSION['LASTNAME'] = $user_data['LASTNAME'];
            $_SESSION['EMAIL'] = $user_data['EMAIL'];
            // Ne mettez à jour le mot de passe en session qu'après une nouvelle connexion sécurisée
        }
        echo '<div style="background-color: #e6ffe6; color: #28a745; padding: 20px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px; text-align: center;">';
        echo '<h2 style="color: #28a745; margin-top: 0;">Changement réussi !</h2>';
        echo '<button style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 1em;">';
        echo '<a href="/VIEW/changeinformation.php" style="color: white; text-decoration: none;">Retour au profil</a>';
        echo '</button>';
        echo '</div>';
    } else {
        echo "Erreur lors de la modification de vos informations.";
    }
    exit();
}
?>
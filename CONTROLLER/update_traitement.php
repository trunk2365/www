<?php
session_start();
require_once '/laragon/www/MODEL/user.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_SESSION['ID_USER'];
    $pseudo = $_SESSION['PSEUDO_USER'];
    $nom = $_POST['LASTNAME'];
    $email = $_POST['EMAIL'];
    $password = $_POST['PASSWORD'];

    $result = updateUser($pseudo, $nom, $email, $password);

    if ($result) {
        echo "<p class='reussite'> Changement réussie !</p>";
    } else {
        echo "Erreur lors de la modification de vos informations.";
    }
}
?>
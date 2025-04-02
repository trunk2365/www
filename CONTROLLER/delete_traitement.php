<?php
require_once '/laragon/www/MODEL/user.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ID_USER'];

    $result = deleteUser($id);

    if ($result) {
        echo "<p class='reussite'>Suppression du compte réussie !</p>";
    } else {
        echo "Erreur lors de la suppression de compte.";
    }
}
?>
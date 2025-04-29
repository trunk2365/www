<?php
session_start();
require_once '/laragon/www/MODEL/user.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['PSEUDO_USER'];
    $password = $_POST['PASSWORD'];

    $result = connectUser($pseudo, $password);


    if ($result) {
        header('Location: /index.php');
    } else {
        header('Location: /index.php');
    }
}

?>

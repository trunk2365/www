<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['PSEUDO_USER']) && $_SESSION['PSEUDO_USER'] !== null) {
    include '/laragon/www/VIEW/header_connecte.php';
} else {
    include '/laragon/www/VIEW/header_deconnecte.php';
}

?>
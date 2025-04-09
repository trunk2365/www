<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/mypublication.css">
    <title>Mes trajets</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php'

?>

<main>

<?php
require_once '/laragon/www/MODEL/reservation_model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $trajet = $_GET["ID_TRAJET"];
    $user = $_SESSION["ID_USER"];
    $result = createReservation($trajet, $user);

    if ($result) {
        echo "Réservation effectuée !";
    } else {
        echo "Problème lors de la réservation !";
    }
}

?>

</main>

<?php

include '/laragon/www/VIEW/footer.php';

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
</body>
</html>
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

<?php

$userId = $_SESSION['ID_USER'];

include '/laragon/www/MODEL/trajet_model.php';

$mesTrajets = getTrajetsByUserId($userId);

?>

<main>

<div class="container">
    <?php if (!empty($mesTrajets)) : ?>
        <?php foreach ($mesTrajets as $trajet) : ?>

        <div class="route-container">
            <div class="traveltime-container">
                <p>Heure de départ :<p>
                <p style="font-size: large;"><span><?= date('H:i', strtotime($trajet['HEURE_DEPART'])) ?></span></p>
            </div>
            <div class="price"><?= $trajet['PRIX'] ?>
            <p>€<p>
            </div>
            <div class="from-city">
                <p> <?= $trajet['VILLE_DEPART'] ?> </p> <img src="/ASSETS/IMGS/route.png" class="route-image">
                <p> <?= $trajet['VILLE_ARRIVEE'] ?> </p>
            </div>
            <div class="profile-container"><img src="/ASSETS/IMGS/profile.png" class="profile-picture">
                <p> <?= $trajet['PSEUDO_USER'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="notrajet">Vous n'avez posté aucun trajet pour le moment.</p>
    <?php endif; ?>
</div>


</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
        
</body>
</html>
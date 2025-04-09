<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/myreservation.css">
    <title>Mes réservations</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php'

?>

<main>
   
<div class="publication-container">

                <?php if (!empty($trajets)) : ?>
                    <?php foreach ($trajets as $trajet) : ?>
                        <div class="route-container">
                            <div class="traveltime-container">
                                <p>Heure de départ :
                                <p>
                                <p style="font-size: large;"><span><?= date('H:i', strtotime($trajet['HEURE_DEPART'])) ?></span></p>
                            </div>
                            <div class="price"><?= $trajet['PRIX'] ?><p>€
                                <p>
                            </div>
                            <div class="from-city">
                                <p> <?= $trajet['VILLE_DEPART'] ?> </p> <img src="/ASSETS/IMGS/route.png" class="route-image">
                                <p> <?= $trajet['VILLE_ARRIVEE'] ?> </p>
                            </div>
                            <div class="profile-container"><img src="/ASSETS/IMGS/profile.png" class="profile-picture">
                                <p> <?= $trajet['PSEUDO_USER'] ?></p>
                                <?php if ($trajet["PLACES_DISPONIBLES"] > 0) :?>
                                    <form method="post" action="/CONTROLLER/create_reservation.php?ID_TRAJET=<?= $trajet["ID_TRAJET"] ?>">
                                        <div class="button-container">
                                            <button class="reserved">Test</button>
                                        </div>
                                    </form>
                                    <?php else : ?>
                                    <p class="complet"> Trajet complet ! </p>
                                    <?php endif;?>
                                <!-- ATTENTION PAS RESERVER UN TRUC DEJA RESERVED -->
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Aucun trajets trouvés.</p>
                <?php endif; ?>
            </div>


</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
        
</body>
</html>
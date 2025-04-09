<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/publish.css">
    <title>Publier un trajet</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php';
include '/laragon/www/CONTROLLER/create_trajet_traitement.php';

?>

<main>
    <div class="form-group">
        <form method="post">
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Point de rencontre : </p>
                    <p class="text-sub">Destination : </p>
                    <p class="text-sub">Places disponibles : </p>
                    <p class="text-sub">Heure de départ :</p>
                    <p class="text-sub">Date de départ :</p>
                    <p class="text-sub">Prix souhaité :</p>
                </div>

                <div class="info-field">
                    <input type="text" class="field" name="VILLE_DEPART">
                    <input type="text" class="field" name="VILLE_ARRIVEE">
                    <div id="sieges-container">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="0">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="1">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="2">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="3">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="4">
                    </div>
                    <input type="hidden" id="nombre_places" name="PLACES_DISPONIBLES" value="">
                    <input type="time" class="field" name="HEURE_DEPART">
                    <input type="date" class="field" name="DATE_DEPART">
                    <input type="number" class="field" name="PRIX">
                    
                </div>
            </div>
            <div class="group-2">
                <button class="sub-button">Publier</button>
            </div>
           
        </form>
        
    </div>

</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/nombreplaces.js"></script>  
<script src="/ASSETS/JS/burgermenu.js"></script>
</body>
</html>
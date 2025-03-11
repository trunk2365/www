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

include '/laragon/www/VIEW/header_connecte.php'

?>

<main>
    <div class="form-group">
        <form>
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Point de rencontre : </p>
                    <p class="text-sub">Destination : </p>
                    <p class="text-sub">Places disponibles : </p>
                    <p class="text-sub">Fumeurs/euses ? :</p>
                    <p class="text-sub">Heure de départ :</p>
                    <p class="text-sub">Date de départ :</p>
                    
                </div>
                <div class="info-field">
                    <input type="text" class="field">
                    <input type="text" class="field">
                    <div id="sieges-container">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="0">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="1">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="2">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="3">
                        <img src="/ASSETS/IMGS/siege-gris.png" alt="Siège gris" class="siege gris" data-siege-index="4">
                    </div>
                    <div class="choices-bar">
                        <label class="choices-text" for="oui">Oui</label> <input type="radio" value="oui" name="choix"> <label class="choices-text" for="non">Non</label> <input type="radio" value="non" name="choix">
                    </div>
                    <input type="time" class="field">
                    <input type="date" class="field"> 
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
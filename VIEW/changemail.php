<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/changemail.css">
    <title>Changer E-mail</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php'

?>

<main>

    <div class="form-group-subscribe">
        <form>
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Adresse mail actuelle : </p>
                    <p class="text-sub">Nouvelle adresse mail : </p>
                </div>
                <div class="info-field">
                    <input type="text" class="field">
                    <input type="text" class="field">
                </div>
            </div>
            <button class="sub-button">Appliquer vos modifications</button>
        </form>
        
    </div>

    


</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script> 
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/changeinformation.css">
    <title>Changer infos</title>
</head>
<body>

<?php

include '/laragon/www/VIEW/header_connecte.php'

?>

<main>

    <div class="form-group-subscribe">
        <form>
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Nom : </p>
                    <p class="text-sub">Prénom : </p>
                </div>
                <div class="info-field">
                    <input type="text" class="field">
                    <input type="text" class="field">
                </div>
            </div>
            <div class="group-2">
                <div class="upload-picture">
                    <img src="/ASSETS/IMGS/upload.png" class="img-upload">
                Insérer une photo
                </div>
                <input type="text" class="description">
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
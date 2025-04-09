<?php

require '/laragon/www/CONTROLLER/update_traitement.php';

?>

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

include '/laragon/www/CONTROLLER/header_controller.php'

?>

<main>
    <div class="form-group-subscribe">
        <form method="post">
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Nom : </p>
                    <p class="text-sub">Prénom : </p>
                    <p class="text-sub">Nouvelle adresse mail : </p>
                    <p class="text-sub">Nouveau mot de passe : </p>

                </div>
                <div class="info-field">
                
                    <input type="text" class="field" name="LASTNAME" id="lastname" required>
                    <input type="text" class="field" name="FIRSTNAME" id="firstname" required>
                    <input type="text" class="field" name="EMAIL" id="email" required>
                    <input type="text" class="field" name="PASSWORD" id="password" required>
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
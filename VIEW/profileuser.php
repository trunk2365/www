<?php
require '/laragon/www/CONTROLLER/delete_traitement.php';
session_start();
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/profileuser.css">
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
                    <p class="text-sub">Nom de compte : <?=$_SESSION['PSEUDO_USER'] ?> </p>
                    <p class="text-sub">Prénom : <?=$_SESSION['FIRSTNAME'] ?> </p>
                    <p class="text-sub">Nom : <?=$_SESSION['LASTNAME'] ?> </p>
                    <p class="text-sub">Adresse mail : <?=$_SESSION['EMAIL'] ?> </p>
                </div>
            </div>
            <button class="sub-button">Supprimer votre compte</button>
        </form>
        
    </div>

    


</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script> 
</body>
</html>
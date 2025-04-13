<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/settingmenu.css">
    <title>Paramètre</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php';

?>

<main>

    <div class="menu-account">
        <div class="back-button"><a class="menu-button-style2" href="/VIEW/myaccount.php">Précédent</a></div>
        <div class="menu-button"><a href="/VIEW/profileuser.php" class="menu-button-style2">Voir profil/Supprimer compte</a></div>
        <div class="menu-button"><a href="/VIEW/changeinformationtest.php" class="menu-button-style2">Changer toutes les informations</a></div>
    </div>

</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
</body>
</html>
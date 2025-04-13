<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/myaccount.css">
    <title>Mon compte</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php'

?>

<main>

<div class="menu-account">
    <div class="back-button"><a class="menu-button-style2" href="/index.php">Accueil</a></div>
    <div class="menu-button"><a href="/VIEW/publish.php" class="menu-button-style2">Publier un trajet</a></div>
    <div class="menu-button"><a class="menu-button-style2" href="/VIEW/mypublication.php">Mes trajets publiés</a></div>
    <div class="menu-button"><a class="menu-button-style2" href="/VIEW/myreservation.php">Mes réservations</a></div>
    <div class="menu-button"><a class="menu-button-style2" href="/VIEW/settingmenu.php">Profil/paramètre du compte</a></div>
</div>

</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
</body>
</html>
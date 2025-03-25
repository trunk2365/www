<?php
session_start();
if (isset($_GET['deconnexion']) && $_GET['deconnexion'] === 'reussie') {
    echo "<p>Déconnexion réussie ! </p>";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/style2.css">

    <title>Accueil</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php'

?>

<main>

        

    <div class="form-group">
        <p><span style="font-weight: bold;">ZigzagCar</span>, c'est bien plus qu'un simple service de covoiturage. C'est une communauté de voyageurs qui partagent leurs trajets au quotidien, pour aller travailler, partir en week-end.
        <br><br><span style="font-weight: bold; color:#87CEEB; text-decoration:underline">Comment ça marche ? :</span>
        <br>
        <br>
        <span style="font-weight: bold; color: rgb(124, 124, 124);">Inscription facile:</span> En quelques clics, vous créez votre profil et indiquez vos trajets réguliers ou occasionnels.
        <br><span style="font-weight: bold; color: rgb(124, 124, 124)">Mise en relation intelligente:</span> Notre algorithme met en relation les conducteurs et les passagers ayant des itinéraires similaires, en tenant compte de vos préférences (horaire, itinéraire, type de véhicule, etc.).
        <br><span style="font-weight: bold; color: rgb(124, 124, 124)">Réservation sécurisée:</span> Vous pouvez réserver votre place en toute sécurité, en payant directement en ligne.
        <br><span style="font-weight: bold; color: rgb(124, 124, 124)">Partage d'expériences:</span> ZigzagCar, c'est aussi l'occasion de rencontrer de nouvelles personnes, de partager des anecdotes et de découvrir de nouveaux horizons.
        <br><br><br><br>Liste des pages (temporaire) :
        <br><br><button class="normal-btn"><a href="/VIEW/settingmenu.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Parametre</a></button></span>
        <button class="normal-btn"><a href="/VIEW/myaccount.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mon compte</a></button></span>
        <button class="normal-btn"><a href="/VIEW/mypublication.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mes publications</a></button></span>
        <button class="normal-btn"><a href="/VIEW/myreservation.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mes reservations</a></button></span>
        <button class="normal-btn"><a href="/VIEW/publish.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Publier un trajet</a></button></span>
        <button class="normal-btn"><a href="/VIEW/loginpage.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Login Page</a></button></span>
    
    </p>

    </div>

    <div class="form-group-title">
        <img class="img-route" src="/ASSETS/IMGS/road.png" height="60vh"> <h2>Trajets populaires : </h2>
    </div>

    <div class="route-list">
        <div class="form-group-route">
           <p class="text-route">Trajets > Trajets
           <br>Trajets depuis :<br>
           <br><br><span>Nom de la ville numéro 1 : </span><span>prix</span>
           <br><span>Nom de la ville numéro 1 : </span><span>prix</span>
           <br><span>Nom de la ville numéro 1 : </span><span>prix</span></p>
           <img class="img-city" src="https://www.la-poze-travel.com/wp-content/uploads/2021/03/ancien-hotel-de-ville-meximieux-ain-min.jpg">
        </div>

        <div class="form-group-route">
            <p class="text-route">Trajets > Trajets
            <br>Trajets depuis :<br>
            <br><br><span>Nom de la ville numéro 1 : </span><span>prix</span>
            <br><span>Nom de la ville numéro 1 : </span><span>prix</span>
            <br><span>Nom de la ville numéro 1 : </span><span>prix</span></p>
            <img class="img-city" src="https://upload.wikimedia.org/wikipedia/commons/f/f8/Amsterdam_Westerkerk_Blick_vom_Turm_auf_die_Prinsengracht_2.jpg">
        </div>
    </div>

</main>


<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
</body>
</html>
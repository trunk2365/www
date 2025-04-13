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

include '/laragon/www/CONTROLLER/header_controller.php';
include '/laragon/www/MODEL/trajet_model.php';
    $trajets = getAllTrajets();

?>

<?php

if (isset($_GET['deconnexion']) && $_GET['deconnexion'] === 'reussie') {
    echo "<p class='logout-success-message'> Déconnexion réussie ! </p>";
}

?>

<main>
    <div class="form-group">
        <p><span style="font-weight: bold;">ZigzagCar</span>, c'est bien plus qu'un simple service de covoiturage. C'est une communauté de voyageurs qui partagent leurs trajets au quotidien, pour aller travailler, partir en week-end.
        <br><br><span style="font-weight: bold; color:#87CEEB; text-decoration:underline">Comment ça marche ? :</span>
        <br>
        <br>
        <span style="font-weight: bold; color: rgb(124, 124, 124);">Inscription facile:</span> En quelques clics, vous créez votre profil et indiquez vos trajets réguliers ou occasionnels.
        <br><span style="font-weight: bold; color: rgb(124, 124, 124)">Réservation sécurisée:</span> Vous pouvez réserver votre place en toute sécurité, en payant directement en ligne.
        <br><span style="font-weight: bold; color: rgb(124, 124, 124)">Partage d'expériences:</span> ZigzagCar, c'est aussi l'occasion de rencontrer de nouvelles personnes, de partager des anecdotes et de découvrir de nouveaux horizons.
        <br><br><br><br>Liste des pages (temporaire) :
        <br><br><button class="normal-btn"><a href="/VIEW/settingmenu.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Parametre</a></button></span>
        <button class="normal-btn"><a href="/VIEW/myaccount.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mon compte</a></button></span>
        <button class="normal-btn"><a href="/VIEW/mypublication.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mes publications</a></button></span>
        <button class="normal-btn"><a href="/VIEW/myreservation.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mes reservations</a></button></span>
        <button class="normal-btn"><a href="/VIEW/publish.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Publier un trajet</a></button></span>
        <button class="normal-btn"><a href="/VIEW/loginpage.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Login Page</a></button></span>
        <button class="normal-btn"><a href="/VIEW/admindashboard.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Admin</a></button></span>
        <button class="normal-btn"><a href="/VIEW/profileuser.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Profile</a></button></span>
    </p>
    </div>

    <div class="form-group-title">
        <img class="img-route" src="/ASSETS/IMGS/road.png" height="60vh"> <h2>Trajets récents : </h2>
    </div>


    <div class="container">
    <?php if (!empty($trajets)) : ?>
        <?php foreach ($trajets as $trajet) : ?>
    
        <div class="route-container">
            <div class="traveltime-container">
                <p>Heure de départ :<p>
                <p style="font-size: large;"><span><?= date('H:i', strtotime($trajet['HEURE_DEPART'])) ?></span></p>
            </div>
            <div class="price"><?= $trajet['PRIX'] ?>
            <p>€<p>
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
                                <button class="reserved">Réserver</button>
                            </div>
                        </form>
                    <?php else : ?>
                        <p class="complet"> Trajet complet ! </p>
                    <?php endif;?>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else : ?>
            <p class="notrajet">Aucun trajet n'est disponible pour le moment.</p>
        <?php endif; ?>
    </div>

</main>

<?php

include '/laragon/www/VIEW/footer.php';

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
<script src="/ASSETS/JS/searchbar.js"></script>
</body>
</html>
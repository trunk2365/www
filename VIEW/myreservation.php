<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/myreservation.css">
    <title>Mes réservations</title>
</head>
<body>

<?php

include '/laragon/www/VIEW/header_connecte.php'

?>

<main>
   
    <div class="route-container-recent">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/Ressources/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/Ressources/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price">50€</div>
        <div class="from-city"><p>Ville A</p> <img src="/Ressources/route.png" class="route-image"> <p>Ville B</p>
        </div>
        <div class="profile-container"><img src="/Ressources/profile.png" class="profile-picture"><p>Nom d'utilisateur</p></div>
    </div>

    <div class="route-container">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/Ressources/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/Ressources/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price">50€</div>
        <div class="from-city"><p>Ville A</p> <img src="/Ressources/route.png" class="route-image"> <p>Ville B</p>
        </div>
        <div class="profile-container"><img src="/Ressources/profile.png" class="profile-picture"><p>Nom d'utilisateur</p></div>
    </div>

    <div class="route-container">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/Ressources/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/Ressources/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price">50€</div>
        <div class="from-city"><p>Ville A</p> <img src="/Ressources/route.png" class="route-image"> <p>Ville B</p>
        </div>
        <div class="profile-container"><img src="/Ressources/profile.png" class="profile-picture"><p>Nom d'utilisateur</p></div>
    </div>

    <div class="route-container">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/Ressources/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/Ressources/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price">50€</div>
        <div class="from-city"><p>Ville A</p> <img src="/Ressources/route.png" class="route-image"> <p>Ville B</p>
        </div>
        <div class="profile-container"><img src="/Ressources/profile.png" class="profile-picture"><p>Nom d'utilisateur</p></div>
    </div>

</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
        
</body>
</html>
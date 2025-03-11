<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/mypublication.css">
    <title>Mes trajets</title>
</head>
<body>

<?php

include '/laragon/www/VIEW/header_connecte.php'

?>

<main>

    <div class="route-container-recent">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/ASSETS/IMGS/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/ASSETS/IMGS/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price">Soon</div>
        <div class="from-city"><p>Ville A</p> <img src="/ASSETS/IMGS/route.png" class="route-image"> <p>Ville B</p>
        </div>
    </div>

    <div class="route-container">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/ASSETS/IMGS/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/ASSETS/IMGS/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price"><img src="/ASSETS/IMGS/tick.png"></div>
        <div class="from-city"><p>Ville A</p> <img src="/ASSETS/IMGS/route.png" class="route-image"> <p>Ville B</p>
        </div>
    </div>

    <div class="route-container">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/ASSETS/IMGS/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/ASSETS/IMGS/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price"><img src="/ASSETS/IMGS/tick.png"></div>
        <div class="from-city"><p>Ville A</p> <img src="/ASSETS/IMGS/route.png" class="route-image"> <p>Ville B</p>
        </div>
    </div>

    <div class="route-container">
        <div class="traveltime-container">
            <p style="font-size: large;"><span>10h20</span></p>
            <img src="/ASSETS/IMGS/traveltime.png" height="30px">
            <p class="traveltime"><span style="color:#7e7e7e">1h00</span></p>
            <img src="/ASSETS/IMGS/traveltime2.png" height="30px">
            <p style="font-size: large;"><span>11h20</span></p>
        </div>
        <div class="price"><img src="/ASSETS/IMGS/tick.png"></div>
        <div class="from-city"><p>Ville A</p> <img src="/ASSETS/IMGS/route.png" class="route-image"> <p>Ville B</p>
        </div>
    </div>

</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
        
</body>
</html>
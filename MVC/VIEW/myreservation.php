<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/myreservation.css">
    <title>Mes réservations</title>
</head>
<body>

<header>
    <div class="flexbar">
        <img class="logo" src="/Ressources/logo.jpg" width="100vh">
        <div class="list">
            <ul>
            <li><button class="normal-btn"><a href="/index.php">Accueil</a></button></li>
            <li><button class="normal-btn"><a href="/MVC/VIEW/publication-list.php">Trajets</a></button></li>
            </ul>
        </div>

     <!-- Burger menu -->
     <div class="burger-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <nav class="active" id="myNav">
            <ul>
                <li><button><a href="/index.php">Accueil</a></button></li>
                <li><button><a href="/MVC/VIEW/publication-list.php">Trajets</a></button></li>
                <li><button><a href="/MVC/VIEW/subscribe.php">Inscription</a></button></li>
            </ul>
        </nav>

</header>

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

<footer>
<div class="flexfooter">
    <div class="right-group">
        <p>ZigzagCar - Tous droits réservés.
        <br><br>ZigzagCar - Covoiturage simple et rapide.
        <br>Contactez-nous à l'adresse [mail] ou au [tel].</p>
    </div>
    <div class="media-group">
        <img src="/Ressources/facebook.png" height="30vh"><label class="media">Facebook</label>
        <img src="/Ressources/twitter.png" height="30vh"><label class="media">Twitter</label>
    </div>
</div>

</footer>
<script src="/JS/burgermenu.js"></script>
        
</body>
</html>
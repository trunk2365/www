<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/publication-list.css">
    <title>Publications</title>
</head>
<body>

<header>
    <div class="flexbar">
        <img class="logo" src="/Ressources/logo.jpg" width="100vh">
        <div class="list">
            <form class="searchbar-container">
                    <input type="text" placeholder="Point de départ" class="searchbar">
                    <img src="/Ressources/route.png" width="30px" height="30px" class="route-picture">
                    <input type="text" placeholder="Destination" class="searchbar">
              </form>
            <ul>
                <li><button class="normal-btn"><a href="/index.php">Accueil</a></button></li>
                <li><button class="normal-btn"><a href="/MVC/VIEW/publication-list.php">Trajets</a></button></li>
                <li><button class="normal-btn"><a href="/MVC/VIEW/subscribe.php">Inscription</a></button></li>
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

<div class="container">
    <div class="filter-container">
        <label class="label-input" for="monCheckbox">Prix</label>
            <input type="range" id="rangeMin" name="rangeMin" min="0" max="100" value="0">
            <span id="rangeMinValue">0</span>

        <label class="label-input" for="monCheckbox">Nombre de places disponibles</label>
            <select id="choix" name="choix">
            <option value="option1">1 places</option>
            <option value="option2">2 places</option>
            <option value="option3">3 places</option>
            <option value="option3">4 places</option>
            </select>
        <label class="label-input" for="monCheckbox">Temps de trajets</label>
        <select id="choix" name="choix">
            <option value="option1">Moins d'1 heure</option>
            <option value="option2">Entres 1 et 2 heures</option>
            <option value="option3">Entres 2 et 3 heures</option>
            <option value="option3">Plus de 4 heures</option>
            </select>

        <label class="label-input" for="monCheckbox">Date de départ</label>
            <select id="choix" name="choix">
            <option value="option1">Aujourd'hui</option>
            <option value="option2">Demain</option>
            <option value="option3">Dans une semaine</option>
            <option value="option3">Préciser le jour</option>
            </select>

    </div>

    <div class="publication-container">
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
    </div>
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
<script src="/JS/minmax.js"></script>
</body>
</html>
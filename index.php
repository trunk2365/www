<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/style2.css">

    <title>Accueil</title>
</head>
<body>

<header>
    <div class="flexbar">
        <img class="logo" src="Ressources/logo.jpg" width="100vh">
        <form class="searchbar-container">
            <input type="text" placeholder="Point de départ" class="searchbar">
            <img src="/Ressources/route.png" width="30px" height="30px" class="route-picture">
            <input type="text" placeholder="Destination" class="searchbar">
          </form>
        <nav class="list">
            <ul>
                <li><button class="normal-btn"><a href="/index.php">Accueil</a></button></li>
                <li><button class="normal-btn"><a href="/MVC/VIEW/publication-list.php">Trajets</a></button></li>
                <li><button class="normal-btn"><a href="/MVC/VIEW/subscribe.php">Inscription</a></button></li>
            </ul>
        </nav>

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
        <br><br><button class="normal-btn"><a href="/MVC/VIEW/settingmenu.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Parametre</a></button></span>
        <button class="normal-btn"><a href="/MVC/VIEW/myaccount.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mon compte</a></button></span>
        <button class="normal-btn"><a href="/MVC/VIEW/mypublication.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mes publications</a></button></span>
        <button class="normal-btn"><a href="/MVC/VIEW/myreservation.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Mes reservations</a></button></span>
        <button class="normal-btn"><a href="/MVC/VIEW/publish.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Publier un trajet</a></button></span>
        <button class="normal-btn"><a href="/MVC/VIEW/loginpage.php"><span style="font-weight: bold; color: rgb(9, 233, 203)">Login Page</a></button></span>
    
    </p>

    </div>

    <div class="form-group-title">
        <img class="img-route" src="/Ressources/road.png" height="60vh"> <h2>Trajets populaires : </h2>
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

<footer>
<div class="flexfooter">
    <div class="right-group">
        <p>ZigzagCar - Tous droits réservés.
        <br><br>ZigzagCar - Covoiturage simple et rapide.
        <br>Contactez-nous à l'adresse [mail] ou au [tel].</p>
    </div>
    <div class="media-group">
        <img src="Ressources/facebook.png" height="30vh"><label class="media">Facebook</label>
        <img src="Ressources/twitter.png" height="30vh"><label class="media">Twitter</label>
    </div>
</div>

</footer>
<script src="/JS/burgermenu.js"></script>
</body>
</html>
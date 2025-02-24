<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/publish.css">
    <title>Publier un trajet</title>
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
    <div class="form-group">
        <form>
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Point de rencontre : </p>
                    <p class="text-sub">Destination : </p>
                    <p class="text-sub">Places disponibles : </p>
                    <p class="text-sub">Fumeurs/euses ? :</p>
                    
                </div>
                <div class="info-field">
                    <input type="text" class="field">
                    <input type="text" class="field">
                    <div class="seatbar">
                    <img src="/Ressources/seat1.png" class="seatpic">
                    <img src="/Ressources/seat1.png" class="seatpic">
                    <img src="/Ressources/seat0.png" class="seatpic">
                    <img src="/Ressources/seat0.png" class="seatpic">
                    <img src="/Ressources/seat0.png" class="seatpic">
                    </div>
                    <div class="choices-bar">
                        <p class="choices-text">Oui</p> <input type="checkbox"> <p class="choices-text">Non</p> <input type="checkbox">
                    </div> 
                </div>
            </div>
            <div class="group-2">
                <button class="sub-button">Publier</button>
            </div>
           
        </form>
        
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
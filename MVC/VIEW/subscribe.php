<?php
require '/laragon/www/MVC/CONTROLLER/inscription_traitement.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/subscribe.css">
    <title>Inscription</title>
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
    <div class="form-group-subscribe">
        <form method="post">
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Nom d'utilisateur : </p>
                    <p class="text-sub">Nom : </p>
                    <p class="text-sub">Prénom : </p>
                    <p class="text-sub">Adresse mail : </p>
                    <p class="text-sub">Mot de passe : </p>
                </div>
                <div class="info-field">
                    <input type="text" class="field" name="PSEUDO_USER" id="pseudo_user" required>
                    <input type="text" class="field" name="LASTNAME" id="lastname" required>
                    <input type="text" class="field" name="FIRSTNAME" id="firstname" required>
                    <input type="email" class="field" name="EMAIL" id="email" required>
                    <input type="password" class="field" name="PASSWORD" id="password" required>
                </div>
            </div>
            <div class="group-2">
                <div class="upload-picture">
                    <img src="/Ressources/upload.png" class="img-upload">
                Insérer une photo
                </div>
                <input type="text" class="description">
            </div>
            <div class="group-3">
                <p class="text-terms">Accepter les <a href="#" class="term-color">termes du contrat d'utilisation</a></p><input type="checkbox">
            </div>
            <form method="post" action="subscribe.php">
            <button class="sub-button">S'inscrire</button>
            </form>
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
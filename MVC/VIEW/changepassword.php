
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/changemail.css">
    <title>Changer mot de passe</title>
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
    <form method="post" action="../controllers/change_password_traitement.php">
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Ancien mot de passe : </p>
                    <p class="text-sub">Nouveau mot de passe : </p>
                </div>
                <div class="info-field">
                    <input type="password" class="field" name="old_password" required>
                    <input type="password" class="field" name="new_password" required>
                </div>
            </div>
            <button type="submit" class="sub-button">Appliquer vos modifications</button>
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
<?php
session_start();
var_dump($_SESSION)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/loginpage.css">
    <title>Connexion</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php'

?>

<main>
    <div class="form-group-login">
        <form method="post" action="/CONTROLLER/connexion_traitement.php">
            <div class="group-1">
                <div class="name-field">
                    <p class="text-sub">Nom d'utilisateur : </p>
                    <p class="text-sub">Mot de passe : </p>
                </div>
                <div class="info-field">
                    <input type="text" class="field" name="PSEUDO_USER" id="pseudo_user" required>
                    <input type="text" class="field" name="PASSWORD" id="password" required>
                </div>
            </div>
            <div class="group-2">
            <p class="password-forget">Mot de passe oublié ? </p>
            </div>
            <div class="group-3">
            <button class="sub-button">Se connecter</button>
            </div>
        </form>
        
    </div>

</main>

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
</body>
</html>
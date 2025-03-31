
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/changemail.css">
    <title>Changer mot de passe</title>
</head>
<body>

<?php

include '/laragon/www/CONTROLLER/header_controller.php'

?>

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

<?php

include '/laragon/www/VIEW/footer.php'

?>

<script src="/ASSETS/JS/burgermenu.js"></script>
</body>
</html>
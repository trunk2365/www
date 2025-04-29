<?php

require '/laragon/www/CONTROLLER/update_traitement.php';

// Vérifiez si l'utilisateur est connecté (sinon, redirigez-le)
if (!isset($_SESSION['ID_USER'])) {
    header('Location: /VIEW/loginpage.php'); // Redirigez vers la page de connexion
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/profileuser.css">
    <title>Changer infos</title>
</head>
<body>

<?php include '/laragon/www/CONTROLLER/header_controller.php' ?>

<main>

<div class="back-button"><a class="menu-button-style2" href="/VIEW/myaccount.php">Précédent</a></div>


    <div class="form-group-subscribe">
        <div class="group-1">
            <div class="info-row">
                <p class="text-sub">Nom de compte : <?=$_SESSION['PSEUDO_USER'] ?> </p>
            </div>

            <div class="info-row">
                <p class="text-sub">Prénom : <?=$_SESSION['FIRSTNAME'] ?> </p>
                <span class="edit-icon" onclick="toggleUpdateForm('prenom')">&#9998;</span>
            </div>
            <div id="update-prenom" class="update-form">
                <form method="post">
                    <label for="firstname">Nouveau prénom :</label>
                    <input type="text" name="FIRSTNAME" id="firstname">
                    <input type="hidden" name="champ_a_modifier" value="FIRSTNAME">
                    <button type="submit" name="update_info">Modifier</button>
                </form>
            </div>

            <div class="info-row">
                <p class="text-sub">Nom : <?=$_SESSION['LASTNAME'] ?> </p>
                <span class="edit-icon" onclick="toggleUpdateForm('nom')">&#9998;</span>
            </div>
            <div id="update-nom" class="update-form">
                <form method="post">
                    <label for="lastname">Nouveau nom :</label>
                    <input type="text" name="LASTNAME" id="lastname">
                    <input type="hidden" name="champ_a_modifier" value="LASTNAME">
                    <button type="submit" name="update_info">Modifier</button>
                </form>
            </div>

            <div class="info-row">
                <p class="text-sub">Adresse mail : <?=$_SESSION['EMAIL'] ?> </p>
                <span class="edit-icon" onclick="toggleUpdateForm('email')">&#9998;</span>
            </div>
            <div id="update-email" class="update-form">
                <form method="post">
                    <label for="email">Nouvelle adresse mail :</label>
                    <input type="email" name="EMAIL" id="email">
                    <input type="hidden" name="champ_a_modifier" value="EMAIL">
                    <button type="submit" name="update_info">Modifier</button>
                </form>
            </div>

            <div class="info-row">
                <p class="text-sub">Changer votre mot de passe</p>
                <span class="edit-icon" onclick="toggleUpdateForm('password')">&#9998;</span>
            </div>
            <div id="update-password" class="update-form">
                <form method="post">
                    <label for="password">Nouveau mot de passe</label>
                    <input type="password" name="PASSWORD" id="password">
                    <input type="hidden" name="champ_a_modifier" value="PASSWORD">
                    <button type="submit" name="update_info">Modifier</button>
                </form>
            </div>
        </div>
        </form>
    </div>
</main>

<?php include '/laragon/www/VIEW/footer.php' ?>

<script>
    function toggleUpdateForm(field) {
        const form = document.getElementById('update-' + field);
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }
</script>
<script src="/ASSETS/JS/burgermenu.js"></script>
<script src="/ASSETS/JS/toggle.js"></script>
</body>
</html>
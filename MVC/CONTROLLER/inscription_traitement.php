
<?php
require_once '/laragon/www/MVC/MODEL/user.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['PSEUDO_USER'];
    $prenom = $_POST['FIRSTNAME'];
    $nom = $_POST['LASTNAME'];
    $email = $_POST['EMAIL'];
    $password = $_POST['PASSWORD'];

    $result = createUser($pseudo, $prenom, $nom, $email, $password);

    if ($result) {
        echo "<p class='reussite'>Inscription réussie !</p>";
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>
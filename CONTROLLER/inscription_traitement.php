
<?php
require_once '/laragon/www/MODEL/user.model.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $id = $_SESSION['ID_USER'];
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
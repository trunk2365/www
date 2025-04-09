
<?php

require_once '/laragon/www/MODEL/trajet_model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $depart = $_POST['VILLE_DEPART'];
    $arrivee = $_POST['VILLE_ARRIVEE'];
    $date = $_POST['DATE_DEPART'];
    $heure = $_POST['HEURE_DEPART'];
    $places = $_POST['PLACES_DISPONIBLES'];
    $price = $_POST['PRIX'];
    $user = $_SESSION['ID_USER'];

    $result = createTrajet($depart, $arrivee, $date, $heure, $places, $price, $user);

    if ($result) {
        echo "<p class='succes-trajet'>Trajet crée avec succès !<p>";
    } else {
        echo "Erreur lors de la création de trajet. (sur le traitement)";
    }
}

?>
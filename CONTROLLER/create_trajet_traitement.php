<?php

require_once '/laragon/www/MODEL/trajet_model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $depart = $_POST['VILLE_DEPART'];
    $arrivee = $_POST['VILLE_ARRIVEE'];
    $date = $_POST['DATE_DEPART'];
    $heure = $_POST['HEURE_DEPART'];
    $places = $_POST['PLACES_DISPONIBLES'];
    $price = $_POST['PRIX'];

    $result = createTrajet($depart, $arrivee, $date, $heure, $places, $price);
    var_dump($result);

    if ($result) {
        echo "Trajet crée avec succès !";
    } else {
        echo "Erreur lors de la création de trajet. (sur le traitement)";
    }
}

?>
<?php

require_once '/laragon/www/MODEL/trajet_model.php';

if (isset($_GET['ID_TRAJET']) && is_numeric($_GET['ID_TRAJET'])) {
    $trajetIdToDelete = $_GET['ID_TRAJET'];


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $result = deleteTrajet($trajetIdToDelete);

        if ($result) {
            header("Location: /VIEW/admindashboard.php?suppression_reussie=1");
            exit();
        } else {

            header("Location: /VIEW/admindashboard.php?suppression_echec=1");
            exit();
        }
    } else {
        echo "Méthode de requête invalide (doit être POST pour la suppression).";
    }

} else {

    echo "ID de trajet invalide.";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/search-list.css">
    <title>Publications</title>
</head>

<body>

    <?php

    include '/laragon/www/CONTROLLER/header_controller.php';
    include '/laragon/www/MODEL/trajet_model.php';
    $trajets = getAllTrajets();

    ?>






    <main>


    <?php

// Inclure le fichier de modèle pour accéder à la base de données
require_once '/laragon/www/MODEL/trajet_model.php';

// Vérifier si les paramètres de recherche existent dans l'URL
if (isset($_GET['ville_depart']) && isset($_GET['ville_arrivee'])) {
    // Récupérer et nettoyer les valeurs de recherche
    $villeDepartRecherche = htmlspecialchars(trim($_GET['ville_depart']));
    $villeArriveeRecherche = htmlspecialchars(trim($_GET['ville_arrivee']));

    // Effectuer la recherche des trajets en utilisant les critères
    $trajetsTrouves = rechercherTrajets($villeDepartRecherche, $villeArriveeRecherche);

    // Afficher les résultats
    echo "<h2 class='search-result'>Résultats de la recherche :</h2>";

    if ($trajetsTrouves) {
        echo "<div class=\"publication-container\">";
        foreach ($trajetsTrouves as $trajet) {
            echo "<div class=\"route-container\">";
            echo "    <div class=\"traveltime-container\">";
            echo "        <p>Heure de départ :</p>";
            echo "        <p style=\"font-size: large;\"><span>" . date('H:i', strtotime($trajet['HEURE_DEPART'])) . "</span></p>";
            echo "    </div>";
            echo "    <div class=\"price\">" . htmlspecialchars($trajet['PRIX']) . "<p>€</p></div>";
            echo "    <div class=\"from-city\">";
            echo "        <p> " . htmlspecialchars($trajet['VILLE_DEPART']) . " </p> <img src=\"/ASSETS/IMGS/route.png\" class=\"route-image\">";
            echo "        <p> " . htmlspecialchars($trajet['VILLE_ARRIVEE']) . " </p>";
            echo "    </div>";
            echo "    <div class=\"profile-container\"><img src=\"/ASSETS/IMGS/profile.png\" class=\"profile-picture\">";
            echo "        <p> " . htmlspecialchars($trajet['PSEUDO_USER']) . "</p>";
            if ($trajet["PLACES_DISPONIBLES"] > 0) :
                echo "        <form method=\"post\" action=\"/CONTROLLER/create_reservation.php?ID_TRAJET=" . htmlspecialchars($trajet["ID_TRAJET"]) . "\">";
                echo "            <div class=\"button-container\">";
                echo "                <button class=\"reserved\">Réserver</button>";
                echo "            </div>";
                echo "        </form>";
            else :
                echo "        <p class=\"complet\"> Trajet complet ! </p>";
            endif;
            echo "    </div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>Aucun trajet trouvé pour votre recherche de : <strong>" . htmlspecialchars($villeDepartRecherche) . "</strong> à <strong>" . htmlspecialchars($villeArriveeRecherche) . "</strong>.</p>";
    }

} else {
    echo "<p>Veuillez spécifier les villes de départ et d'arrivée pour la recherche.</p>";
}

// Fonction pour rechercher les trajets dans la base de données
function rechercherTrajets($depart, $arrivee) {
    $pdo = getConnexion();
    $sql = "SELECT ID_USER, ID_OWNER, ID_TRAJET, VILLE_DEPART, VILLE_ARRIVEE, DATE_DEPART, HEURE_DEPART, PLACES_DISPONIBLES, PRIX, PSEUDO_USER 
            FROM trajets 
            LEFT JOIN klftcclft_users ON trajets.ID_OWNER=klftcclft_users.ID_USER
            WHERE VILLE_DEPART LIKE :depart
              AND VILLE_ARRIVEE LIKE :arrivee";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':depart', '%' . $depart . '%', PDO::PARAM_STR);
        $stmt->bindValue(':arrivee', '%' . $arrivee . '%', PDO::PARAM_STR);
        $stmt->execute();
        $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultats;
    } catch (PDOException $e) {
        echo "Erreur lors de la recherche des trajets : " . $e->getMessage();
        return false;
    }
}

?>



    </main>

    <?php

    include '/laragon/www/VIEW/footer.php'

    ?>

    <script src="/ASSETS/JS/burgermenu.js"></script>
    <script src="/ASSETS/JS/minmax.js"></script>
</body>

</html>




<?php

include '/laragon/www/MODEL/connexion_sql.php';

function createTrajet($depart, $arrivee, $date, $heure, $places, $price) {
    $pdo = getConnexion();
    $sql = "INSERT INTO trajets (VILLE_DEPART, VILLE_ARRIVEE, DATE_DEPART, HEURE_DEPART, PLACES_DISPONIBLES, PRIX) VALUES (:VILLE_DEPART, :VILLE_ARRIVEE, :DATE_DEPART, :HEURE_DEPART, :PLACES_DISPONIBLES ,:PRIX)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':VILLE_DEPART', $depart, PDO::PARAM_STR);
        $stmt->bindParam(':VILLE_ARRIVEE', $arrivee, PDO::PARAM_STR);
        $stmt->bindParam(':DATE_DEPART', $date, PDO::PARAM_STR);
        $stmt->bindParam(':HEURE_DEPART', $heure, PDO::PARAM_STR);
        $stmt->bindParam(':PLACES_DISPONIBLES', $places, PDO::PARAM_INT);
        $stmt->bindParam(':PRIX', $price, PDO::PARAM_STR);
        $stmt->execute();
        $lastInsertId = $pdo->lastInsertId(); // Récupérer l'ID ici
        return $lastInsertId; // Retourner l'ID
    } catch(PDOException $e) {
        echo "Erreur lors de la création de trajet (sur le modele) : " . $e->getMessage();
        return false;
    }
}

function getAllTrajets() {
    $pdo = getConnexion();
    $sql = "SELECT * FROM trajets"; 
    try {
        $stmt = $pdo->query($sql); // Exécution de la requête
        $trajets = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupération des résultats
        return $trajets;
    } catch(PDOException $e) {
        echo "Erreur lors de la récupération des trajets : " . $e->getMessage();
        return false;
    }
}
?>
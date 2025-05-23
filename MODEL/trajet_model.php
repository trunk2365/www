<?php

include '/laragon/www/MODEL/connexion_sql.php';

function createTrajet($depart, $arrivee, $date, $heure, $places, $price, $user) {
    $pdo = getConnexion();
    $sql = "INSERT INTO trajets (VILLE_DEPART, VILLE_ARRIVEE, DATE_DEPART, HEURE_DEPART, PLACES_DISPONIBLES, PRIX, ID_OWNER) VALUES (:VILLE_DEPART, :VILLE_ARRIVEE, :DATE_DEPART, :HEURE_DEPART, :PLACES_DISPONIBLES ,:PRIX, :ID_OWNER)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':VILLE_DEPART', $depart, PDO::PARAM_STR);
        $stmt->bindParam(':VILLE_ARRIVEE', $arrivee, PDO::PARAM_STR);
        $stmt->bindParam(':DATE_DEPART', $date, PDO::PARAM_STR);
        $stmt->bindParam(':HEURE_DEPART', $heure, PDO::PARAM_STR);
        $stmt->bindParam(':PLACES_DISPONIBLES', $places, PDO::PARAM_INT);
        $stmt->bindParam(':PRIX', $price, PDO::PARAM_STR);
        $stmt->bindParam(':ID_OWNER', $user, PDO::PARAM_INT);
        $stmt->execute();
        $lastInsertId = $pdo->lastInsertId(); 
        return $lastInsertId;
    } catch(PDOException $e) {
        echo "Erreur lors de la création de trajet (sur le modele) : " . $e->getMessage();
        return false;
    }
}

function getAllTrajets() {
    $pdo = getConnexion();
    $sql = "SELECT ID_USER, ID_OWNER, ID_TRAJET, VILLE_DEPART, VILLE_ARRIVEE, DATE_DEPART, HEURE_DEPART, PLACES_DISPONIBLES, PRIX, PSEUDO_USER FROM trajets LEFT JOIN klftcclft_users ON trajets.ID_OWNER=klftcclft_users.ID_USER"; 
    try {
        $stmt = $pdo->query($sql); 
        $trajets = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        return $trajets;
    } catch(PDOException $e) {
        echo "Erreur lors de la récupération des trajets : " . $e->getMessage();
        return false;
    }
}


function getTrajetsByUserId($userId) {
    $pdo = getConnexion();
    $sql = "SELECT ID_USER, ID_OWNER, ID_TRAJET, VILLE_DEPART, VILLE_ARRIVEE, DATE_DEPART, HEURE_DEPART, PLACES_DISPONIBLES, PRIX, PSEUDO_USER 
            FROM trajets 
            LEFT JOIN klftcclft_users ON trajets.ID_OWNER=klftcclft_users.ID_USER 
            WHERE trajets.ID_OWNER = :user_id";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->execute();
        $trajetsUtilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $trajetsUtilisateur;
    } catch(PDOException $e) {
        echo "Erreur lors de la récupération des trajets de l'utilisateur : " . $e->getMessage();
        return false;
    }
}

function deleteTrajet($trajetId) {
    $pdo = getConnexion();

    try {
        // Désactiver les vérifications de clés étrangères temporairement (si nécessaire pour l'ordre de suppression)
        $pdo->exec("SET foreign_key_checks = 0");

        // 1. Supprimer les réservations associées au trajet
        $sqlDeleteReservations = "DELETE FROM klftcclft_reservations WHERE ID_TRAJET = :ID_TRAJET";
        $stmtDeleteReservations = $pdo->prepare($sqlDeleteReservations);
        $stmtDeleteReservations->bindParam(':ID_TRAJET', $trajetId, PDO::PARAM_INT);
        $stmtDeleteReservations->execute();

        // 2. Supprimer le trajet lui-même
        $sqlDeleteTrajet = "DELETE FROM trajets WHERE ID_TRAJET = :ID_TRAJET";
        $stmtDeleteTrajet = $pdo->prepare($sqlDeleteTrajet);
        $stmtDeleteTrajet->bindParam(':ID_TRAJET', $trajetId, PDO::PARAM_INT);
        $stmtDeleteTrajet->execute();

        // Réactiver les vérifications de clés étrangères
        $pdo->exec("SET foreign_key_checks = 1");

        return true; 

    } catch (PDOException $e) {
        echo "Erreur lors de la suppression du trajet et des réservations : " . $e->getMessage();
        return false; 
    }
}

?>
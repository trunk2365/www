<?php

include '/laragon/www/MODEL/connexion_sql.php';

function createReservation($trajet, $user) {
    $pdo = getConnexion();
    $sql = "INSERT INTO klftcclft_reservations (ID_TRAJET, ID_USER) VALUES (:ID_TRAJET, :ID_USER)";
    try {
            $placesDisponibles = getPlacesDisponibles($trajet);
        if ($placesDisponibles < 1) {
            throw new Exception("Trajet complet.        ");
        }
        $stmtRemovePlacesDispo = $pdo->prepare("UPDATE trajets SET PLACES_DISPONIBLES = :PLACES_DISPONIBLES WHERE ID_TRAJET = :ID_TRAJET");
        $stmtRemovePlacesDispo->bindParam(':ID_TRAJET', $trajet, PDO::PARAM_INT);
        $updatedplacesdispo = $placesDisponibles - 1;
        $stmtRemovePlacesDispo->bindParam(':PLACES_DISPONIBLES', $updatedplacesdispo, PDO::PARAM_INT);
        $stmtRemovePlacesDispo->execute();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':ID_TRAJET', $trajet, PDO::PARAM_INT);
        $stmt->bindParam(':ID_USER', $user, PDO::PARAM_INT);
        $stmt->execute();
        $lastInsertId = $pdo->lastInsertId(); // Récupérer l'ID ici
        return $lastInsertId; // Retourner l'ID
    } catch(PDOException $e) {
        echo "Erreur lors de la reservation ! " . $e->getMessage();
        return false;
    }
    catch (Exception $e) {
        echo "Erreur :    " . $e->getMessage();
        return false;
    }
}

// Code pour reflechir

function getPlacesDisponibles($trajet)
{
    $pdo = getConnexion();
    try {
        $stmtTrajet = $pdo->prepare("SELECT * FROM TRAJETS WHERE ID_TRAJET = :ID_TRAJET");
        $stmtTrajet->bindParam(':ID_TRAJET', $trajet, PDO::PARAM_INT);
        $stmtTrajet->execute();
        $dbTrajet = $stmtTrajet->fetch(PDO::FETCH_ASSOC);
        $PlacesDisponibles = $dbTrajet["PLACES_DISPONIBLES"];
        return $PlacesDisponibles;
    } catch (PDOException $e) {
        echo "Erreur de base de donnée : " . $e->getMessage();
    }
}

try {
} catch (PDOException $e) {
    echo "Erreur de base de donnée : " . $e->getMessage();
    return false;
} catch (Exception $e) {
    echo "Erreur: " . $e->getMessage();
    return false;
}






?>
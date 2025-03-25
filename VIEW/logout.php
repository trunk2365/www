<?php
session_start();
session_unset();
session_destroy();
$_SESSION['message_deconnexion'] = "Déconnexion réussie.";
header('Location: ../index.php?deconnexion=reussie'); // Rediriger vers la page d'accueil
exit;
?>
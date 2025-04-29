<?php
// require_once '/laragon/www/MODEL/user.model.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $id = $_POST['ID_USER'];

//     $result = deleteUser($id);

//     if ($result) {
//         session_unset();
//         session_destroy();
//         header('Location: ../index.php?suppression=reussie');
        
//     } else {
//         echo "Erreur lors de la suppression de compte.";
//     }
// }
?>

<?php
session_start(); // Il est important d'appeler session_start() au début pour accéder à la session

require_once '/laragon/www/MODEL/user.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ID_USER'];

    $result = deleteUser($id);

    if ($result) {
        // Suppression réussie, maintenant déconnecter l'utilisateur

        // Supprimer toutes les variables de session
        session_unset();

        // Supprimer le cookie de session
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Détruire la session sur le serveur
        session_destroy();

        header('Location: ../index.php?suppression=reussie');
        exit();

    } else {
        echo "Erreur lors de la suppression de compte.";
    }
}
?>


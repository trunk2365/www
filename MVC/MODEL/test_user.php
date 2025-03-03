<?php


require_once '/laragon/www/MVC/MODEL/user.model.php';

// Données de test
$nom = 'Test User';
$email = 'test.user@example.com';
$password = 'motdepasse123';

// Création de l'utilisateur
$lastInsertId = createUser($pseudo, $prenom, $nom, $email, $password);

if ($lastInsertId) {
    echo "Utilisateur créé avec succès.\n";
    var_dump($lastInsertId);

    // Récupération de l'utilisateur
    $user = getUserById($lastInsertId);

    if ($user) {
        echo "Utilisateur récupéré :\n";
        print_r($user);
    } else {
        echo "Erreur : getUserById() a retourné false.\n"; // Message d'erreur plus précis
    }
} else {
    echo "Erreur lors de la création de l'utilisateur.\n";
}

?>
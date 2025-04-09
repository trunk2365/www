<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ASSETS/CSS/style.css">
    <link rel="stylesheet" href="/ASSETS/CSS/publication-list.css">
    <title>Publications</title>
</head>

<body>

    <?php

    include '/laragon/www/CONTROLLER/header_controller.php';
    include '/laragon/www/MODEL/trajet_model.php';
    $trajets = getAllTrajets();

    ?>

    <main>


        <!-- Les filtres -->
        <div class="container">
            <div class="filter-container">
                <label class="label-input" for="monCheckbox">Prix</label>
                <input class="filter-input" type="range" id="rangeMin" name="rangeMin" min="0" max="100" value="0">
                <span class="filter-input" id="rangeMinValue">0</span>

                <label class="label-input" for="monCheckbox">Nombre de places disponibles</label>
                <select class="filter-input" id="choix" name="choix">
                    <option value="option1">1 places</option>
                    <option value="option2">2 places</option>
                    <option value="option3">3 places</option>
                    <option value="option3">4 places</option>
                </select>
                <label class="label-input" for="monCheckbox">Temps de trajets</label>
                <select class="filter-input" id="choix" name="choix">
                    <option value="option1">Moins d'1 heure</option>
                    <option value="option2">Entres 1 et 2 heures</option>
                    <option value="option3">Entres 2 et 3 heures</option>
                    <option value="option3">Plus de 4 heures</option>
                </select>

                <label class="label-input" for="monCheckbox">Date de départ</label>
                <select class="filter-input" id="choix" name="choix">
                    <option value="option1">Aujourd'hui</option>
                    <option value="option2">Demain</option>
                    <option value="option3">Dans une semaine</option>
                    <option value="option3">Préciser le jour</option>
                </select>
            </div>





            <!-- Les publications -->
            <div class="publication-container">
                <?php if (!empty($trajets)) : ?>
                    <?php foreach ($trajets as $trajet) : ?>
                        <div class="route-container">
                            <div class="traveltime-container">
                                <p>Heure de départ :
                                <p>
                                <p style="font-size: large;"><span><?= date('H:i', strtotime($trajet['HEURE_DEPART'])) ?></span></p>
                            </div>
                            <div class="price"><?= $trajet['PRIX'] ?><p>€
                                <p>
                            </div>
                            <div class="from-city">
                                <p> <?= $trajet['VILLE_DEPART'] ?> </p> <img src="/ASSETS/IMGS/route.png" class="route-image">
                                <p> <?= $trajet['VILLE_ARRIVEE'] ?> </p>
                            </div>
                            <div class="profile-container"><img src="/ASSETS/IMGS/profile.png" class="profile-picture">
                                <p> <?= $trajet['PSEUDO_USER'] ?></p>
                                <?php if ($trajet["PLACES_DISPONIBLES"] > 0) :?>
                                    <form method="post" action="/CONTROLLER/create_reservation.php?ID_TRAJET=<?= $trajet["ID_TRAJET"] ?>">
                                        <div class="button-container">
                                            <button class="reserved">Réserver</button>
                                        </div>
                                    </form>
                                    <?php else : ?>
                                    <p class="complet"> Trajet complet ! </p>
                                    <?php endif;?>
                                <!-- ATTENTION PAS RESERVER UN TRUC DEJA RESERVED -->
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Aucun trajets trouvés.</p>
                <?php endif; ?>
            </div>
        </div>

    </main>

    <?php

    include '/laragon/www/VIEW/footer.php'

    ?>

    <script src="/ASSETS/JS/burgermenu.js"></script>
    <script src="/ASSETS/JS/minmax.js"></script>
</body>

</html>
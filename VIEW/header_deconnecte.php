

<header>
    <div class="flexbar">
        <img class="logo" src="/ASSETS/IMGS/logo.jpg" width="100vh">
        <div class="list">
            <?php
            $page_courante = basename($_SERVER['PHP_SELF']);
            // Nom de votre page de connexion
            $page_accueil = 'index.php';
            $page_trajet = 'publication-list.php';
            // Afficher le bouton de connexion si l'utilisateur n'est pas sur la page de connexion
            if ($page_courante === $page_accueil || $page_courante === $page_trajet) {
                echo '<form action="/VIEW/search_list.php" method="get" class="searchbar-container">
                        <input type="text" id="ville_depart" name="ville_depart" placeholder="Depart" class="searchbar">
                        <img src="/ASSETS/IMGS/route.png" width="30px" height="30px" class="route-picture">
                        <input type="text" id="ville_arrivee" name="ville_arrivee" placeholder="Destination" class="searchbar">
                    <button type="submit" class="search-button">
                        <img src="/ASSETS/IMGS/loupe.png" alt="Rechercher" class="search-icon">
                    </button>
                    </form>
               ';
            }
            ?>



            <ul>
            <li><button class="normal-btn"><a href="/index.php">Accueil</a></button></li>
            <li><button class="normal-btn"><a href="/VIEW/publication-list.php">Trajets</a></button></li>
            <li><button class="normal-btn"><a href="/VIEW/subscribe.php">Inscription</a></button></li>
            <?php
            $page_courante = basename($_SERVER['PHP_SELF']);
            // Nom de votre page de connexion
            $page_connexion = 'loginpage.php';
            // Afficher le bouton de connexion si l'utilisateur n'est pas sur la page de connexion
            if ($page_courante !== $page_connexion) {
                echo '<li><button class="normal-btn"><a href="/VIEW/loginpage.php">Connexion</a></button></li>';
            }
            ?>
            </ul>
        </div>
    

     <!-- Burger menu -->
     <div class="burger-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <nav class="active" id="myNav">
            <ul>
                <li><button><a href="/index.php">Accueil</a></button></li>
                <li><button><a href="/VIEW/publication-list.php">Trajets</a></button></li>
                <li><button><a href="/VIEW/subscribe.php">Inscription</a></button></li>
                <?php
                $page_courante = basename($_SERVER['PHP_SELF']);
                // Nom de votre page de connexion
                $page_connexion = 'loginpage.php';
                // Afficher le bouton de connexion si l'utilisateur n'est pas sur la page de connexion
                if ($page_courante !== $page_connexion) {
                    echo '<li><button class="normal-btn"><a href="/VIEW/loginpage.php">Connexion</a></button></li>';
                }
                ?>
            </ul>
        </nav>
</header>
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
                   echo '<form class="searchbar-container">
               <input type="text" placeholder="Point de départ" class="searchbar">
               <img src="/ASSETS/IMGS/route.png" width="30px" height="30px" class="route-picture">
               <input type="text" placeholder="Destination" class="searchbar">
               </form>';
               }
            ?>
            <ul>
                <li><button class="normal-btn"><a href="/index.php">Accueil</a></button></li>
                <li><button class="normal-btn"><a href="/VIEW/publication-list.php">Trajets</a></button></li>
                <li><button class="normal-btn"><a href="/VIEW/myaccount.php">Mon compte</a></button></li>
                <li><button class="normal-btn"><a href="/VIEW/logout.php">Deconnexion</a></button></li>
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
                <li><button><a href="/VIEW/myaccount.php">Mon compte</a></button></li>
                <li><button><a href="/VIEW/logout.php">Deconnexion</a></button></li>
            </ul>
        </nav>
</header>
<?php require_once './controllers/inscriptionCtrl.php' ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="assets\css\style.css" />
    <link rel="stylesheet" href="assets\css\table.css" />
    <link rel="stylesheet" href="assets\css\aboutus.css" />
    <link rel="stylesheet" href="assets\css\footer.css">
    <link rel="stylesheet" href="assets/css/inscription.css">
</head>

<body>
    <header>
        <nav>
            <!-- <button id="menu-toggle"> -->
            <div class="icons">
                <img id="menu-toggle" src="./assets/img/burger_fast_food_icon_181517.png" alt="burger">
            </div>
            <!-- </button> -->
            <div class="logo">
                <img src="./assets/img/logo.png" alt="" />
                <h1>Cook&Code</h1>
                <p>Goût du partage en ligne</p>
            </div>
            <ul id="menu-nav">
                <li><a target="/" href="/">Accueil</a></li>
                <li><a class="links-menu" target="recette-menu" href="#">Recettes</a></li>
                <li><a class="links-menu" target="menu-menu" href="#">Menu</a></li>
                <li><a class="links-menu" target="theme-menu" href="#">Thèmes</a></li>
                <li><a class="links-menu" target="idea-menu" href="#">Idées de recettes</a></li>
                <li><a class="links-menu" target="about-menu" href="#">À propos</a></li>
                <li><a href="./connexion.php">Mon compte</a></li>
            </ul>
            <?php
            if (!empty($_SESSION['id'])) { ?>
                <a href="profil.php"><img class="profil-icon" src="./assets/img/profil.png" alt="profil" /></a>
            <?php } ?>

            <div class="search">
                <img src="./assets/img/Vector.png" alt="" />
                <!-- <input type="text" placeholder="Je cherche..." /> -->
            </div>
        </nav>
    </header>

    <main>
        <div id="recette-menu" class="menu">
            <div>
                <button class="close-menu">retour</button>
                <section>
                    <div class="title-column title-top"><a href="#">Catégories</a></div>
                    <div class="title-column"><a href="#">Apéritifs</a></div>
                    <div class="title-column"><a href="#">Salades</a></div>
                    <div class="title-column"><a href="#">Plats</a></div>
                    <div class="title-column"><a href="#">Desserts</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Ingrédients</a></div>
                    <div class="title-column"><a href="#">Légumes</a></div>
                    <div class="title-column"><a href="#">Fruits</a></div>
                    <div class="title-column"><a href="#">Viandes</a></div>
                    <div class="title-column"><a href="#">Poissons</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Recettes d'automne</a></div>
                    <div class="title-column"><a href="#">Soupes</a></div>
                    <div class="title-column"><a href="#">Gratins aux potirons</a></div>
                    <div class="title-column"><a href="#">Tarte aux noix</a></div>
                    <div class="title-column"><a href="#">Fondant au chocolat</a></div>
                </section>
            </div>
        </div>
        <div id="menu-menu" class="menu">
            <div>
                <button class="close-menu">retour</button>
                <section>
                    <div class="title-column title-top"><a href="#">Menu enfants</a></div>
                    <div class="title-column"><a href="#">Soupes</a></div>
                    <div class="title-column"><a href="#">Plats</a></div>
                    <div class="title-column"><a href="#">Desserts</a></div>
                    <div class="title-column"><a href="#">Boissons</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Menu végétarien</a></div>
                    <div class="title-column"><a href="#">Salades</a></div>
                    <div class="title-column"><a href="#">Plats</a></div>
                    <div class="title-column"><a href="#">Desserts</a></div>
                    <div class="title-column"><a href="#">Soupes</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Menu familial</a></div>
                    <div class="title-column"><a href="#">Couscous</a></div>
                    <div class="title-column"><a href="#">Gratins</a></div>
                    <div class="title-column"><a href="#">Tartes</a></div>
                </section>
            </div>
        </div>
        <div id="theme-menu" class="menu">
            <div>
                <button class="close-menu">retour</button>
                <section>
                    <div class="title-column title-top"><a href="#">Les classiques</a></div>
                    <div class="title-column"><a href="#">Recettes traditionnelles</a></div>
                    <div class="title-column"><a href="#">Recettes du monde</a></div>
                    <div class="title-column"><a href="#">Recettes régionales</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Fêtes</a></div>
                    <div class="title-column"><a href="#">Halloween</a></div>
                    <div class="title-column"><a href="#">Noël</a></div>
                    <div class="title-column"><a href="#">Nouvel an</a></div>
                    <div class="title-column"><a href="#">Galette des rois</a></div>
                    <div class="title-column"><a href="#">Chandleur</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Minceur</a></div>
                    <div class="title-column"><a href="#">Apéritifs minceur</a></div>
                    <div class="title-column"><a href="#">Salades minceur</a></div>
                    <div class="title-column"><a href="#">Plats minceur</a></div>
                    <div class="title-column"><a href="#">Desserts minceur</a></div>
                    <div class="title-column"><a href="#">Recettes détox</a></div>
                </section>
            </div>
        </div>
        <div id="idea-menu" class="menu">
            <div>
                <button class="close-menu">retour</button>
                <section>
                    <div class="title-column title-top"><a href="#">Recettes faciles</a></div>
                    <div class="title-column"><a href="#">Tartiflette</a></div>
                    <div class="title-column"><a href="#">Chili cône carné</a></div>
                    <div class="title-column"><a href="#">Spaghetti bolognaise</a></div>
                    <div class="title-column"><a href="#">Risotto</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Recettes pas chères</a></div>
                    <div class="title-column"><a href="#">Crêpes</a></div>
                    <div class="title-column"><a href="#">Gratin dauphinois</a></div>
                    <div class="title-column"><a href="#">Quatre-quart</a></div>
                    <div class="title-column"><a href="#">Pâtes au thon</a></div>
                </section>
                <section>
                    <div class="title-column title-top"><a href="#">Recettes anti-gaspi</a></div>
                    <div class="title-column"><a href="#">Recettes avec des restes du poulet</a></div>
                    <div class="title-column"><a href="#">Pas de gaspi pour le riz</a></div>
                    <div class="title-column"><a href="#">Recettes avec des restes de brioches</a></div>
                    <div class="title-column"><a href="#">Un brunch avec des restes</a></div>
                </section>
            </div>
        </div>
        <div id="about-menu" class="card">
            <p class="team">L'équipe Cook&Code</p>
            <p class="description">
                Cook&Code, créé en 2024 par Fatimaezzahra BENCHEIKH, vous apporte chaque jour
                de nouvelles recettes, techniques, vidéos, trucs de pro pour vous aider à vous faire
                plaisir en cuisine.<br><br>
                Fatimaezzahra est également l'auteur du blog Biodélices et a publié de nombreux livres.
            </p>
            <div class="social-media">
                <p>Suivez Cook&Code</p>
                <div class="icons">
                    <img src="assets/img/instagram.png" alt="Instagram">
                    <img src="assets/img/facebook.png" alt="Facebook">
                    <img src="assets/img/pinterest.png" alt="Pinterest">
                </div>
            </div>
        </div>
        <section class="top-recipes"></section>
        <div class="signup-container">
            <h1>Créer un compte</h1>
            <form method="POST">
                <div class="input-pseudo">
                    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo*" required>
                    <?php if (!empty($error) && !empty($error['pseudo'])) { ?>
                        <small><?= $error['pseudo'] ?></small>
                    <?php } ?>
                </div>

                <div class="input-email">
                    <input type="email" id="email" name="email" placeholder="Email*" required>
                    <?php if (!empty($error) && !empty($error['email'])) { ?>
                        <small><?= $error['email'] ?></small>
                    <?php } ?>

                </div>

                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Mot de passe*" required>
                    <?php if (!empty($error) && !empty($error['password'])) { ?>
                        <small><?= $error['password'] ?></small>
                    <?php } ?>
                    <input type="password" id="password-confirm" name="password-confirm" placeholder="Confirmez le mot de passe" required>
                    <?php if (!empty($error) && !empty($error['password-confirm'])) { ?>
                        <small><?= $error['password-confirm'] ?></small>
                    <?php } ?>
                </div>

                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="newsletter">
                        Qu'est ce qu'on mange cette semaine ?
                    </label>
                    <label>
                        <input type="checkbox" name="terms" required>
                        <p>Je suis d'accord avec les
                        <p> <a href=""> termes et conditions </a> </p> d'utilisation du site</p>
                    </label>
                </div>

                <button type="submit">Je crée mon compte</button>
            </form>
        </div>


    </main>
    <footer>
        <div class="newsletter">
            <form action="#">
                <label for="email"> Recevez chaque semaine de délicieuses recettes</label>
                <input type="email" id="email" placeholder="Votre adresse mail..." required>
                <button type="submit">Valider</button>
            </form>
        </div>
        <div class="social-media">
            <div class="icons">
                <img src="assets/img/coffee_flickr_instagram_48785.png" alt="Instagram">
                <img src="assets/img/coffee_pinterest_48739.png" alt="Pinterest">
                <img src="assets/img/coffee_facebook_48792.png " alt="Facebook">
                <img src="assets/img/coffee_youtube_play_48788.png" alt="Youtube">
            </div>
        </div>
        <div class="footer-bottom">
            <p>Concocté avec <img src="assets/img/love_like_heart_icon_196980.png" alt="heart"> par Cook&Code</p>
            <p> 2024 Cook&Code. Tous Droits Réservés.</p>
            <div class="footer-links">
                <a href="#">Mentions légales</a>
                <a href="#">Contactez-nous</a>
            </div>
        </div>
    </footer>


</body>
<script src="./assets/js/index.js"></script>

</html>
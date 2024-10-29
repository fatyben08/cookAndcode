<?php
require_once "controllers/profilCtrl.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <link rel="stylesheet" href="assets\css\style.css" />
    <link rel="stylesheet" href="assets\css\footer.css" />
    <link rel="stylesheet" href="assets\css\profil.css" />

</head>

<body>

    <div class="container">
        <div class="profile-section">
            <h1>Mon compte</h1>
            <form method="POST">
                <div class="inputs">
                    <div class="input-group">
                        <input value="<?= $userData->pseudo ?>" type="text" id="pseudo" name="pseudo" placeholder="Pseudo">
                        <?php if (!empty($error) &&!empty($error['pseudo'])) {?>
                            <small><?= $error['pseudo']?></small>
                        <?php }?>
                    </div>

                    <div class="input-group">
                        <input value="<?= $userData->email ?>" type="email" id="email" name="email" placeholder="Email">
                        <?php if (!empty($error) &&!empty($error['email'])) {?>
                            <small><?= $error['email']?></small>
                        <?php }?>
                    </div>

                    <div class="input-group">
                        <input type="text" id="old_password" name="old_password" placeholder="Ancien mot de passe">
                        <?php if (!empty($error) &&!empty($error['old_password'])) {?>
                            <small><?= $error['old_password']?></small>
                        <?php }?>
                    </div>

                    <div class="input-group">
                        <input type="text" id="new_password" name="new_password" placeholder="Nouveau mot de passe">
                        <?php if (!empty($error) &&!empty($error['new_password'])) {?>
                            <small><?= $error['new_password']?></small>
                        <?php }?>
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" name="modify">Sauvgarder</button>
                    <a href="delete.php"><button type="button">Supprimer</button></a>
                    <a href=""><button type="button">Ajouter une recette</button></a>
                </div>
            </form>
        </div>
        <div class="recipe-book">
            <h2>Mon carnet de recettes</h2>
            <div class="recipe-gallery">

            </div>
        </div>
        <a href="logout.php"><button class="logout">Déconnexion</button></a>
    </div>
    <footer>
        <div class="newsletter">
            <form action="">
                <label for="email"> Recevez chaque semaine de délicieuses recettes</label>
                <input type="email" id="email" placeholder="Votre adresse mail..." required>
                <button type="submit">Valider</button>
            </form>
        </div>
        <div class="social-media">
            <div class="icons">
                <img src="assets/img/coffee_flickr_instagram_48785.png" alt="Instagram">
                <img src="assets/img/coffee_pinterest_48739.png" alt="Pinterest">
                <img src="assets/img/coffee_facebook_48792.png" alt="Facebook">
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

</html>
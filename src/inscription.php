<?php require_once'./controllers/inscriptionCtrl.php' ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="assets/css/inscription.css">
</head>

<body>
    <div class="signup-container">
        <h1>Créer un compte</h1>
        <form method="post">
            <div class="input-pseudo">
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo*" required>

            </div>

            <div class="input-email">
                <input type="email" id="email" name="email" placeholder="Email*" required>

            </div>

            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Mot de passe*" required>
                <input type="password" id="password-confirm" name="password-confirm" placeholder="Confirmez le mot de passe">
            </div>

            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="newsletter">
                    Qu'est ce qu'on mange cette semaine ?
                </label>
                <label>
                    <input type="checkbox" name="terms" required>
                    <p>Je suis d'accord avec les <p> <a href=""> termes et conditions </a> </p> d'utilisation du site</p>
                </label>
            </div>

            <button type="submit">Je crée mon compte</button>
        </form>
    </div>
</body>

</html>
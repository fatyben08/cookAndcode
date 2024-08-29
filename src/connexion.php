<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/connexion.css">
</head>

<body>
    <div class="container">
        <div class="left-box">
            <h2>On se connaît?</h2>
            <form>
                <label for="username">Je renseigne mon identifiant</label>
                <input type="text" id="username" name="username" placeholder="Identifiant">

                <label for="password">Je renseigne mon mot de passe</label>
                <div class="password-absolute">
                    <input type="password" id="password" name="password" class="input-password" placeholder="Mot de passe">

                    <div class="password-container">
                        <button type="button" id="show-password">Voir</button>
                    </div>
                </div>

                <a href="#" class="forgot-password">Mot de passe oublié</a>
                
                <button type="submit">Je me connecte</button>
            </form>
        </div>
        <div class="right-box">
            <h2>Nouveau ici?</h2>

            <div class="list">
                <div class="icon"><img src="./assets/img/Toque-Chef-Hat-PNG-Image.png" alt="toque"><p> Gérez vos favorites</p></div>  
                <div class="icon"><img src="./assets/img/Toque-Chef-Hat-PNG-Image.png" alt="toque"><p>Recevez nos nouveautés</p></div>
                <div class="icon"><img src="./assets/img/Toque-Chef-Hat-PNG-Image.png" alt="toque"><p>Partager votre avis</p></div>
            </div>

            <a href="./inscription.php"><button>Je crée mon compte</button></a>
        </div>
    </div>
</body>

</html>
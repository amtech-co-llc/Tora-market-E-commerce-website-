<?php
session_start();
// Redirect to home if already logged in via session or cookie
if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
    header("Location: acceuil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter sur Tora App</title>
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobile-format.css">

</head>

<body>
    <div class="container">
        <div class="connection-card">
            <div class="main-card">
                <div class="top-of-card">
                    <h2>Se connecter</h2>
                </div>
                <p id="visualizer_login" style="text-align: center;"></p>
                <form action="#" id="loginForm">
                    <div class="input">
                        <label for="">Votre E-mail ou Téléphone</label>
                        <input type="text" name="email_ou_phone" placeholder="Adresse mail ou numéro de téléphone">
                    </div>
                    <div class="input">
                        <label for="">Mot de passe</label>
                        <input type="password" name="password" placeholder="****************" maxlength="16">
                    </div>
                    <div class="other-con2">
                        <p><a href="#">Mot de passe oublié?</a></p>
                    </div>
                    <input type="text" placeholder="type de compte" value="" hidden>
                    <div class="input">
                        <button>Se connecter</button>
                    </div>
                    <div class="other-con">
                        <p>Pas encore eu un compte? <a href="./sign-up.php">Créer</a><br><a href="./">Retour</a>
                        </p>
                    </div>
                </form>
                <button id="google-connection">Se connecter avec google</button>
            </div>
        </div>
        <p id="copy-right-conn">&copy;2025 Tora Corporation. Tout droit réservé.
            <br> Propulsé par <a href="https://www.amtech-co.com" rel="sponsored">Amtech technology (Amtech-co LLC |
                Software)</a>
        </p>
    </div>
    <script src="./ajax/login.js"></script>
</body>

</html>
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
    <title>Créer un compte sur Tora App</title>
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobile-format.css">

</head>

<body>
    <div class="container">
        <div class="connection-card">
            <div class="main-card">
                <div class="top-of-card">
                    <h2>Créer un compte</h2>
                </div>
                <p id="visulizer_sign_up" style="text-align: center;margin-top: 0.4em;"></p>
                <form action="#" id="sign_up_form">
                    <div class="group-input1">
                        <div class="input1">
                            <label for="">Votre nom</label>
                            <input type="text" name="nom" placeholder="Entrez votre nom">
                        </div>
                        <div class="input1">
                            <label for="">E-mail</label>
                            <input type="email" name="email" placeholder="Adresse mail">
                        </div>
                    </div>
                    <div class="group-input1">
                        <div class="input1">
                            <label for="">Téléphone</label>
                            <input type="text" name="phone" placeholder="Ex: 243977777777">
                        </div>
                        <div class="input1">
                            <label for="">Mot de passe</label>
                            <input type="password" name="password" placeholder="****************" maxlength="16">
                        </div>
                    </div>
                    <div class="group-input1">
                        <div class="input1">
                            <label for="">Code (Facultatif)</label>
                            <input type="text" name="user_invite_code" placeholder="code d'invitation">
                        </div>
                        <!-- <div class="input1">
                            <label for="">Type de compte</label>
                            <select name="user_account_type" id="">
                                <option value="">-- type de compte --</option>
                                <option value="client">Client</option>
                                <option value="vendeur">Vendeur</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="other-con2">
                        <p><a href="#">Terme et politique d'utilisation</a></p>
                    </div>
                    <input type="text" placeholder="type de compte" value="" hidden>
                    <div class="input">
                        <button>Créer</button>
                    </div>
                    <div class="other-con">
                        <p>Avez-vous déjà eu un compte? <a href="./login.php">Se connecter</a><br><a
                                href="./">Retour</a></p>
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

    <script src="ajax/sign-up.js"></script>

</body>

</html>
<?php
session_start();
require_once("./php/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sûreté de la vente</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobile-format.css">
    <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">

    <!-- Essential SEO Meta Tags -->
    <meta name="description" content="Vendez vos produits avec toute sécurité et prix abordable">
    <meta name="keywords" content="Vente, Achat, Tora Corporation">
    <meta name="author" content="Tora Corporation">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:title" content="Tora Corporation">
    <meta property="og:description" content="Vendez vos produits avec toute sécurité et prix abordable">
    <meta property="og:image" content="https://www.example.com/images/preview.jpg">
    <meta property="og:url" content="https://www.example.com/your-page">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Tora Corporation">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="Vente en ligne">
    <meta name="twitter:title" content="Tora Corporation">
    <meta name="twitter:description" content="Vendez vos produits avec toute sécurité et prix abordable">
    <meta name="twitter:image" content="https://www.example.com/images/preview.jpg">
    <meta name="twitter:site" content="@YourTwitterHandle">
    <meta name="twitter:creator" content="@YourTwitterHandle">

    <!-- Favicon -->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

</head>

<body id="body" class="">
    <div class="before-desc">
        <div class="contents-help-description">
            <h1>🔐 Sûreté de la vente – Vendez en toute confiance avec TORA</h1><br>
            <p>
                Chez <strong>TORA</strong>, nous mettons tout en œuvre pour garantir à chaque vendeur une <strong>expérience sûre, fluide et professionnelle</strong>. <br>
                Vendre sur TORA, c’est bénéficier d’un cadre sécurisé pour publier vos annonces, échanger avec les acheteurs et conclure vos ventes <strong>sans risque inutile</strong>.
            </p>
            <div class="border-separator"></div><br>
            <h1>✅ 1. Création de compte vérifié</h1><br>
            <p>Chaque vendeur est invité à :</p><br>
            <ul>
                <li>Utiliser une adresse e-mail et un numéro de téléphone valides</li>
                <li>Compléter son profil avec des informations vérifiables</li>
                <li>Respecter les règles de publication</li><br>
                <p>🔒 Un profil vendeur complet renforce la confiance des acheteurs et réduit les litiges.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🛡️ 2. Sécurité des annonces</h1><br>
            <p>Pour protéger les vendeurs :</p><br>
            <ul>
                <li>Les annonces sont modérées automatiquement et/ou manuellement avant publication</li>
                <li>Les contenus frauduleux, illégaux ou suspects sont bloqués ou supprimés</li>
                <li>Les photos et descriptions sont encadrées par des standards de qualité</li><br>
                <p>💡 Une annonce claire, honnête et bien illustrée vous protège des retours injustifiés.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🧾 3. Paiement sécurisé</h1><br>
            <p><strong>💰 Si livraison via Tora Express :</strong></p><br>
            <ul>
                <li>Vous êtes payé uniquement après confirmation de bonne réception du produit</li>
            </ul><br>
            <p><strong>🤝 Si remise en main propre :</strong></p><br>
            <ul>
                <li>Fixez toujours un lieu public et sûr </li>
                <li>Montrez le produit, et ne le remettez qu’après avoir reçu le paiement complet</li><br>
                <p>📌 Ne jamais accepter de chèque, de virement différé ou d’acompte incertain.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🚩 4. Méfiance face aux arnaques</h1><br>
            <p>Restez vigilant face à :</p><br>
            <ul>
                <li>Des paiements suspects ou promesses irréalistes</li>
                <li>Des messages mal traduits, avec liens externes ou demandes douteuses</li><br>
                <p>🎯 En cas de doute : ne répondez pas, bloquez et signalez.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🔍 5. Suivi et preuve de vente</h1><br>
            <ul>
                <li>Gardez toujours une trace de la conversation avec l’acheteur</li>
                <li>Prenez une photo ou une vidéo du produit avant l’envoi</li>
                <li>Utilisez Tora Express pour garantir un suivi et une livraison contrôlée</li><br>
                <p>📄 Ces éléments peuvent servir de preuve en cas de réclamation ou litige.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>💬 6. Signaler un acheteur suspect</h1><br>
            <p>TORA vous permet de signaler rapidement un utilisateur :</p><br>
            <ul>
                <li>Cliquez sur son profil ou la conversation</li>
                <li>Appuyez sur « Signaler » et choisissez le motif</li>
                <li>Notre équipe agit dans les plus brefs délais</li><br>
                <p>🚨 Un comportement frauduleux entraîne le blocage du compte concerné.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🤝 7. Accompagnement et assistance vendeur</h1><br>
            <ul>
                <li>Une équipe dédiée pour répondre à vos questions</li>
                <li>Un centre d’aide complet (FAQ, tutoriels, chat)</li>
                <li>Une politique claire de gestion des litiges</li><br>
                <p>📱 Contact rapide : support@toracorporation.com ou WhatsApp +243 xxx xxx xxx</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🧠 Bonnes pratiques à retenir</h1><br>

            <table style="border-collapse: collapse; width: 100%; font-family: sans-serif;">
                <thead>
                    <tr style="background-color: #f2f2f2;">
                        <th style="border: 1px solid #ccc; padding: 8px; text-align: left;">Ce qu’il faut faire ✅</th>
                        <th style="border: 1px solid #ccc; padding: 8px; text-align: left;">Ce qu’il faut éviter ❌</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #ffffff;">
                        <td style="border: 1px solid #ccc; padding: 8px;">Demander un paiement sécurisé</td>
                        <td style="border: 1px solid #ccc; padding: 8px;">Accepter les promesses sans garantie</td>
                    </tr>
                    <tr style="background-color: #f2f2f2;">
                        <td style="border: 1px solid #ccc; padding: 8px;">Donner des infos claires sur l’article</td>
                        <td style="border: 1px solid #ccc; padding: 8px;">Surévaluer ou cacher les défauts</td>
                    </tr>
                    <tr style="background-color: #ffffff;">
                        <td style="border: 1px solid #ccc; padding: 8px;">Vendre via Tora Express si possible</td>
                        <td style="border: 1px solid #ccc; padding: 8px;">Livrer sans preuve ou contrepartie</td>
                    </tr>
                </tbody>
            </table><br>

            <p>TORA s’engage à respecter la vie privée, la sécurité et la liberté de chaque utilisateur.
                Nous mettons tout en œuvre pour vous offrir une plateforme sûre, éthique et conforme aux normes internationales.
            </p>
            <div class="border-separator"></div><br>
            <h1>🙌 TORA est avec vous</h1><br>
            <p>
                Notre mission est de vous offrir une plateforme sûre, juste et efficace.
                Grâce à vos bons réflexes et à nos outils de sécurité, vous pouvez vendre en toute sérénité.
            </p><br>

            <p>Avez-vous été satisfait par ce guide? <a href="./">Retour</a></p>
        </div>
    </div>

    <div class="footer-contents">
        <!-- beginning of footer cards -->
        <div class="cards-footer">
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Tora vente</a></li>
                    <li><a href="#">Tora Aide pour client</a></li>
                    <li><a href="#">Tora Aide pour vendeur</a></li>
                    <li><a href="#">Soutient</a></li>
                </ul>
            </div>
            <!-- end of card1 footer -->
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Sécurité</h3>
                <ul>
                    <li><a href="#">Sécurité de vos données</a></li>
                    <li><a href="#">Sécurité de vos conversations</a></li>
                    <li><a href="#">Sureté de vente</a></li>
                    <li><a href="#">Sécurité de vos achats</a></li>
                </ul>
            </div>
            <!-- end of card1 footer -->
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Entreprise</h3>
                <ul>
                    <li><a href="#">Qui sommes-nous?</a></li>
                    <li><a href="#">Pourquoi nous faire confiance</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Prendre un partenariat</a></li>
                </ul>
            </div>
            <!-- end of card1 footer -->
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Contacts</h3>
                <ul>
                    <li><a href="#">contact@toracorporation.com</a></li>
                    <li><a href="#">+243 000 000 000</a></li>
                </ul>
                <div class="social-medias">
                    <a href="#"><button><i class="ri-facebook-circle-fill"></i></button></a>
                    <a href="#"><button><i class="ri-instagram-line"></i></button></a>
                    <a href="#"><button><i class="ri-twitter-x-line"></i></button></a>
                </div>
            </div>
            <!-- end of card1 footer -->
        </div>
        <!-- end of footer cards -->
        <div class="copy-right-message">
            <p>&copy;2025 Tora Corporation. Tout droits réservé
                <br> Propulsé par
                <span itemprop="creator" itemscope itemtype="https://schema.org/Organization">
                    <a href="https://www.amtech-co.com" itemprop="url" rel="sponsored">
                        <span itemprop="name">Amtech Technology (Amtech-co LLC | Software)</span>
                    </a>
                    <meta itemprop="foundingDate" content="2021">
                    <meta itemprop="address" content="Goma, Democratic Republic of the Congo">
                    <meta itemprop="email" content="contact@amtech-co.com">
                    <meta itemprop="sameAs" content="https://www.linkedin.com/company/amtechtechnology/">
                    <span itemprop="founder" itemscope itemtype="https://schema.org/Person">
                        <meta itemprop="name" content="Audrey Mirindi">
                    </span>
                </span>
            </p>
        </div>
    </div>
    </div>

    <!-- beginning of scripting -->
    <!--  <script src="./ajax/account-details.js"></script> -->
</body>

</html>
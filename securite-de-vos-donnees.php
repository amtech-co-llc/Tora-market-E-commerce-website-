<?php
session_start();
require_once("./php/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sécurité des vos données</title>

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
            <h1>🔐 Sécurité de vos données – TORA</h1><br>
            <p>
                Chez <strong>TORA</strong>, votre <strong>confiance est notre priorité</strong>. <br>
                Nous nous engageons à protéger vos informations personnelles et à garantir une utilisation <strong>transparente, éthique et sécurité</strong> de vos données.
            </p>
            <div class="border-separator"></div><br>
            <h1> 1. Données collectées</h1><br>
            <p>Lorsque vous utilisez TORA, nous collectons certaines informations pour assurer le bon fonctionnement de la plateforme :</p><br>
            <ul>
                <li>Nom, adresse e-mail, numéro de téléphone</li>
                <li>Adresse de livraison ou de localisation</li>
                <li>Informations sur vos annonces, achats ou ventes</li>
                <li>Données de navigation (cookies, préférences, temps de connexion)</li><br>
                <p>📌 Ces données sont strictement nécessaires pour offrir une expérience fluide et personnalisée.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🔒 2. Protection des données</h1><br>
            <p>Nous utilisons des technologies avancées de sécurité pour garantir la confidentialité de vos informations :</p><br>
            <ul>
                <li>🔐 Chiffrement des données (SSL)</li>
                <li>🔐 Stockage sécurisé sur serveurs protégés</li>
                <li>🔐 Contrôle d’accès rigoureux</li>
                <li>🔐 Sauvegardes régulières</li>
                <li>🔐 Journalisation des accès pour prévenir tout abus</li><br>
                <p>💡 Nos équipes suivent des protocoles stricts de gestion des données personnelles.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>👁️‍🗨️ 3. Utilisation de vos données</h1><br>
            <p>Vos données sont utilisées uniquement pour :</p><br>
            <ul>
                <li>Créer et gérer votre compte</li>
                <li>Faciliter vos achats, ventes et livraisons</li>
                <li>Vous envoyer des notifications importantes</li>
                <li>Améliorer nos services (analyses anonymisées)</li>
                <li>Respecter nos obligations légales</li><br>
                <p>🚫 Nous ne vendons ni ne partageons vos données personnelles à des tiers non autorisés.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🤝 4. Vos droits</h1><br>
            <p>Conformément aux lois sur la protection des données,vous avez :</p><br>
            <ul>
                <li>✅ Le droit d’accès à vos données</li>
                <li>✅ Le droit de modification ou de suppression</li>
                <li>✅ Le droit de retirer votre consentement</li>
                <li>✅ Le droit d’opposition à certaines utilisations</li>
                <li>✅ Le droit de demander la portabilité de vos données</li><br>
                <p>📥 Pour exercer vos droits, contactez-nous à : contact@toracorporation.com</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🔧 5. Paramètres de confidentialité</h1><br>
            <p>Dans votre compte TORA, vous pouvez :</p><br>
            <ul>
                <li>Gérer vos informations personnelles</li>
                <li>Choisir qui peut voir vos publications</li>
                <li>Activer/désactiver les notifications</li>
                <li>Supprimer votre compte à tout moment</li><br>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🧑‍💻 6. Cookies et navigation</h1><br>
            <p>TORA utilise des cookies pour :</p><br>
            <ul>
                <li>Sauvegarder vos préférences</li>
                <li>Améliorer la navigation</li>
                <li>Proposer des contenus personnalisés</li><br>
                <p>Vous pouvez gérer vos préférences de cookies à tout moment dans les paramètres de votre navigateur.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🆘 7. En cas de problème ou de suspicion de fuite</h1><br>
            <p>Si vous remarquez une activité suspecte ou pensez que votre compte a été compromis :</p><br>
            <ul>
                <li>Changez immédiatement votre mot de passe</li>
                <li>Activez la double vérification (si disponible)</li>
                <li>Contactez notre équipe de sécurité à : securite@toracorporation.com</li><br>
                <p>Nous enquêtons et agissons rapidement pour protéger nos utilisateurs.</p>
            </ul><br>
            <div class="border-separator"></div><br>
            <h1>🙏 Notre engagement</h1><br>
            <p>TORA s’engage à respecter la vie privée, la sécurité et la liberté de chaque utilisateur.
                Nous mettons tout en œuvre pour vous offrir une plateforme sûre, éthique et conforme aux normes internationales.
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
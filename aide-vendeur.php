<?php
session_start();
require_once("./php/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aide Vendeur</title>

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
            <h1>💼 Centre d’Aide Vendeur – TORA</h1><br>
            <p>
                Bienvenue dans votre espace d’assistance dédié aux vendeurs TORA.
                Que vous soyez un vendeur occasionnel ou un professionnel, nous vous accompagnons à chaque étape pour vendre efficacement, en toute sécurité.
            </p>
            <div class="border-separator"></div><br>
            <h1>✅ 1. Création et activation du compte vendeur</h1><br>
            <h3>👤 Comment devenir vendeur sur TORA ?</h3><br>
            <ul>
                <li>Créez un compte TORA (gratuit).</li>
                <li>Dans votre profil, activez le mode vendeur.</li>
                <li>Remplissez les informations demandées (nom, téléphone, localisation, etc.).</li>
                <li>Commencez à publier vos annonces.</li>
            </ul><br>
            <h3>🔐 Puis-je vendre depuis n’importe quel pays ?</h3><br>
            <p>Oui. TORA est une plateforme ouverte à l’international. Il vous suffit d’avoir :</p><br>
            <ul>
                <li>Une bonne connexion internet</li>
                <li>Des produits conformes à la législation locale</li>
                <li>Une méthode de livraison ou de remise claire</li>
            </ul>
            <div class="border-separator"></div><br>
            <h1>📦 2. Publier une annonce</h1><br>
            <h3>📝 Comment créer une annonce ?</h3><br>
            <ul>
                <li>1. Cliquez sur « Vendre »</li>
                <li>2. Sélectionnez une catégorie et une sous-catégorie</li>
                <li>3. Remplissez les champs obligatoires :</li>
                <ul style="margin-left: 2em;">
                    <li>Titre clair</li>
                    <li>Description précise</li>
                    <li>Prix compétitif</li>
                    <li>Quantité disponible</li>
                    <li>Lieu de livraison</li>
                    <li>État du produit (neuf ou occasion)</li>
                    <li>Localisation</li>
                </ul>
                <li>4. Ajoutez de belles photos (au moins 3)</li>
                <li>5. Cliquez sur « Publier »</li>
            </ul><br>
            <h3>Pourquoi mon annonce n’apparaît-elle pas ?</h3><br>
            <ul>
                <li>Elle enfreint les règles de publication (produit interdit, photos floues, contenu trompeur, etc.)</li>
                <li>Contactez le support si elle reste invisible après 24h</li>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🧾 3. Gérer ses annonces et ventes</h1><br>
            <h3>✏️ Booster /Modifier / Supprimer une annonce</h3><br>
            <ul>
                <li>Allez dans « Mes annonces »</li>
                <li>Cliquez sur l’annonce concernée</li>
                <li>Choisissez « Booster » pour booster votre produit, « Modifier » pour changer les infos ou « Supprimer »</li>
            </ul><br>
            <h3>📊 Suivre ses ventes</h3><br>
            <ul>
                <li>Accédez au Tableau de bord vendeur</li>
                <li>Suivez vos évaluations, vos commandes, etc</li>
                <li>Répondez rapidement aux messages des acheteurs</li>
            </ul><br>
            <div class="border-separator"></div><br>
            <h1>🚚 4. Livraison avec Tora Express</h1><br>
            <h3>🚀 Pourquoi utiliser Tora Express ?</h3><br>
            <ul>
                <li>Livraison rapide et sécurisée</li>
                <li>Suivi en temps réel</li>
                <li>Moins de litiges liés à la non-réception</li>
            </ul><br>
            <h3>📍 Comment activer Tora Express ?</h3><br>
            <p>Lors de la création de votre annonce, sélectionnez « Livraison via Tora Express »</p><br>
            <div class="border-separator"></div><br>
            <h1>💬 5. Répondre aux clients</h1><br>
            <h3>🤝 Comment bien communiquer ?</h3><br>
            <ul>
                <li>Soyez courtois, clair et rapide</li>
                <li>Répondez dans un délai raisonnable (moins de 2h recommandé)</li>
                <li>Fournissez des détails utiles (dimensions, état exact, modalités de remise, etc.)</li>
            </ul><br>
            <h3>🚨 Que faire si un acheteur est irrespectueux ?</h3><br>
            <ul>
                <li>Ne répondez pas sous l’émotion</li>
                <li>Signalez immédiatement le comportement via « Signaler un utilisateur »</li>
            </ul><br>
            <div class="border-separator"></div><br>
            <h1>💳 6. Paiement et gestion des revenus</h1><br>
            <h3>💰 Quand suis-je payé ?</h3><br>
            <ul>
                <li>Si livraison via Tora Express : après confirmation de réception par l’acheteur</li>
                <li>Si remise en main propre : paiement direct à la livraison</li>
            </ul><br>
            <h3>🔐 Est-ce sécurisé ?</h3><br>
            <p>Oui. Les transactions sont sécurisées. TORA ne libère le paiement qu’après confirmation de la bonne réception par l’acheteur.</p><br>
            <div class="border-separator"></div><br>
            <h1>🧠 7. Conseils pour bien vendre</h1><br>
            <ul>
                <li>Utilisez des photos de qualité</li>
                <li>Soyez honnête dans la description</li>
                <li>Fixez un prix juste en fonction du marché</li>
                <li>Activez Tora Express pour rassurer les acheteurs</li>
                <li>Demandez des avis positifs après chaque vente réussie</li>
            </ul><br>
            <div class="border-separator"></div><br>
            <h1>🔧 8. Problèmes courants</h1><br>
            <p>
                <strong>Mon annonce a disparu</strong> :
                Vérifiez si elle a été désactivée pour non-conformité (contenu interdit, prix abusif, etc.) <br>
                <strong>L’acheteur ne répond plus</strong> :
                Relancez-le une fois. S’il ne répond pas, vous pouvez annuler la vente après 48h. <br>
                <strong>Je n’arrive pas à publier</strong> :
                Vérifiez votre connexion, votre application (mise à jour), et si tous les champs sont remplis. <br>
            </p><br>
            <div class="border-separator"></div><br>
            <h1>🛠️ 9. Assistance technique</h1><br>
            <ul>
                <li> 📧 support@tora.com</li>
                <li>📱 WhatsApp : +243 xxx xxx xxx</li>
                <li>💬 Chat intégré dans l’appli</li>
                <li>🕒 Disponible 24H/24H</li>
            </ul><br>
            <div class="border-separator"></div><br>
            <h1>🏆 10. Booster vos ventes (pour pros)</h1><br>
            <ul>
                <li><strong>Abonnement Pro</strong> : visibilité boostée + stats détaillées</li>
                <li><strong>Annonces sponsorisées</strong> : mettez vos produits en avant</li>
                <li><strong>Badges de confiance</strong> : vérifiez votre identité pour plus de crédibilité</li>
            </ul><br>

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
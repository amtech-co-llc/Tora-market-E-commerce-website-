<?php
session_start();
require_once("./php/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aide Acheteur</title>

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
            <h1>🛒 Centre d’Aide Acheteur – TORA</h1><br>
            <p>
                Bienvenue dans le <strong>centre d’assistance des acheteurs TORA</strong>. <br>
                Nous vous guidons étape par étape pour que vos achats soient simples, sécurisés et satisfaisants.
            </p>
            <div class="border-separator"></div><br>
            <h1>✅ 1. Avant l’achat</h1><br>
            <h3>🔎 Comment rechercher un produit ?</h3><br>
            <ul>
                <li>Utilisez la barre de recherche ou explorez les catégories disponibles.</li>
                <li>Appliquez des filtres (prix, localisation, état du produit, etc.).</li>
                <li>Consultez les photos, description et la note du vendeur.</li>
            </ul><br>
            <h3>👤 Comment vérifier un vendeur ?</h3><br>
            <ul>
                <li>Cliquez sur le profil du vendeur pour voir sa note, ses avis et son historique.</li>
                <li>Privilégiez les vendeurs vérifiés ou ayant plusieurs évaluations positives.</li>
                <li>N’hésitez pas à poser des questions via le chat intégré avant l’achat.</li>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🛍️ 2. Passer à l’achat ou à la commande</h1><br>
            <h3>🧾 Comment acheter un Produit ?</h3><br>
            <ul>
                <li>Cliquez sur le produit que vous voulez acheter.</li>
                <li>Lisez bien les détails du produit et vérifiez très bien les photos.</li>
                <li>Si intéressé, entrez en contact avec le vendeur via les différentes options : par appel direct, par WhatsApp ou par chat via Torachat.( il vous faut créer un compte type acheteur, c’est gratuit )</li>
                <li>Négociez le prix avec le vendeur ; toutefois vous pouvez demander l’aide de Tora Express.</li>
                <li>Une fois attendus avec le vendeur, passer au paiement ; Attention ! avant tout, lisez bien les conseils sur le paiement ( Ne payez jamais avant de voir le produit ).</li>
                <li>Si vous êtes loin du produit, pour votre sécurité et une livraison fiable, entrez en contact avec Tora Express ( Tora vérifie le produit pour vous et se charge de la livraison, pour plus d’information cliquez ici Tora EXPRESS.link ) .( il vous faut créer un compte type acheteur, c’est gratuit )</li>
            </ul><br>
            <h3>💬 Comment poser une question au vendeur ?</h3><br>
            <ul>
                <li>Cliquez sur une des options pour contacter le vendeur et commencer à discuter.</li>
                <li>Restez poli, précis et professionnel. Exemples :</li>
                <ul style="margin-left: 2em;">
                    <li><i>« Bonjour, est-ce que ce produit est encore disponible ? »</i></li>
                    <li><i>« Pourriez-vous me faire une réduction ? »</i></li>
                </ul>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🚚 3. Livraison</h1><br>
            <h3>📦 Quels modes de livraison sont proposés ?</h3><br>
            <ul>
                <li><strong>Remise en main propre</strong>: pratique si le vendeur est dans votre ville (priorisez un lieu publique et sûr.)</li>
                <li><strong>Tora Express</strong>: livraison rapide, suivie et sécurisée. (Utilisé ce mode si vous comptez acheter un produit qui distant de vous) ; Cliquez sur « Contacter TORA EXPRESS »</li>
            </ul><br>
            <div class="border-separator"></div><br>
            <h1>💳 4. Paiement</h1><br>
            <h3>💰 Quels sont les moyens de paiement disponibles ?</h3><br>
            <ul>
                <li>Espèces à la livraison ( Si vous êtes dans le même milieu avec le vendeur, payez après livraison et vérification du produit )</li>
                <li>Si loin de la ville, nous vous conseillons d’utiliser Tora Express : <br>
                    <p>Mode paiement uniquement avec TORA EXPRESS :</p>
                    <ul style="margin-left: 2em;">
                        <li>Mobile Money (Airtel Money, M-Pesa, Orange Money, etc.) </li>
                        <li>Virement bancaire</li>
                        <li>PayPal</li>
                    </ul>
                </li>
            </ul><br>
            <div class="border-separator"></div><br>
            <h1>❌ 5. Annulation </h1><br>
            <h3>❗ Le produit reçu est défectueux ou ne correspond pas ?</h3><br>
            <ul>
                <li>Contactez le vendeur depuis la commande concernée.</li>
                <li>Cliquez sur "Signaler un problème" pour ouvrir une réclamation.</li>
                <li>Contact l’équipe de TORA pour vous accompagner.</li>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🛡️ 6. Sécurité & Conseils</h1><br>
            <h3>✔️ Conseils pour acheter en toute sécurité :</h3><br>
            <ul>
                <li>Ne payez jamais en dehors de TORA (par virement privé, mobile money, paypal ou autre).</li>
                <li>Rencontrez toujours dans un lieu public et sûr si vous faites une remise en main propre.</li>
                <li>Vérifiez toujours le produit à la livraison.</li>
                <li>Possédez toujours un compte acheteur pour bénéficier plus d’avantage.</li>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🤝 7. Assistance & Contact</h1><br>
            <p>Vous avez une question urgente ou besoin d’aide ?</p>
            <ul>
                <li>📧 Email : support@toracorporation.com</li>
                <li>☎️ WhatsApp : +243 xxx xxx xxx</li>
                <li>💬 Chat en direct dans l’application</li>
                <li>🕐 Service disponible 24H/24H</li>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🎯 Résumé rapide des étapes pour acheter sur TORA</h1><br>
            <ul>
                1. Créez un compte gratuitement <br>
                2. Recherchez et trouvez votre article <br>
                3. Contactez le vendeur si besoin <br>
                4. Contacter TORA EXPRESS si important ( conseillé) <br>
                5. Laissez un avis ⭐⭐⭐⭐⭐
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
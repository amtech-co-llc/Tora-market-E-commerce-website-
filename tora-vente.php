<?php
session_start();
require_once("./php/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tora Vente</title>

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
            <h1>🛒 Vendez facilement avec TORA, partout dans le monde !</h1><br>
            <p>
                <strong>Que vous soyez particulier ou professionnel</strong>, vous pouvez vendre vos produits <strong>où que vous soyez</strong>, dans <strong>n'importe quelle ville , pays ou continent</strong> grâce à <strong>TORA</strong>, votre plateforme de confiance pour la vente de produits neufs et d’occasion. <br><br>
                Il suffit simplement de <strong>créer un compte vendeur</strong> et de suivre quelques étapes simples pour commencer à vendre.
            </p>
            <div class="border-separator"></div><br>
            <h1>✨ Pourquoi vendre sur TORA ?</h1><br>
            <ul>
                <li>Inscription gratuite et rapide</li>
                <li>Large visibilité auprès d’acheteurs locaux et internationaux</li>
                <li>Catégories variées pour tout type de produit</li>
                <li>Tora Express pour faciliter vos livraisons</li>
                <li>Assistance client à votre disposition en cas de besoin</li>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🛠️ Comment vendre sur TORA ?</h1><br>
            <p>Suivez ces étapes simples :</p><br>
            <ul>
                <li>1. Cliquez sur le bouton « Vendre » sur la page d’accueil.</li>
                <li>2. Créez un compte (ou connectez-vous si vous en avez déjà un).</li>
                <li>3. Choisissez la catégorie qui correspond à votre produit.</li>
                <li>4. Sélectionnez la sous-catégorie appropriée.</li>
                <li>5. Remplissez les informations du produit :</li>
                <ul style="margin-left: 2em;">
                    <li>🏷️ Titre du produit</li>
                    <li>📝 Description claire et détaillée</li>
                    <li>💵 Prix compétitif</li>
                    <li>📍 Lieu de livraison</li>
                    <li>📦 Quantité disponible</li>
                    <li>🌟 État du produit (neuf ou occasion)</li>
                    <li>📌 Localisation précise</li>
                </ul>
                <li>6. Ajoutez des photos de qualité sous plusieurs angles.</li>
                <li>7. Cliquez sur « Publier » : votre annonce est en ligne !</li><br>
                <p>💡 Nos équipes suivent des protocoles stricts de gestion des données personnelles.</p>
            </ul>
            <div class="border-separator"></div><br>
            <h1>🎯 Que pouvez-vous vendre sur TORA ?</h1><br>
            <p>Tout ce que vous voulez, à condition que ce soit légal et conforme à nos conditions d’utilisation. Voici les catégories disponibles :</p><br>
            <h3>🔹 Téléphones & Tablettes</h3><br>
            <ul>
                <li>Téléphones portables</li>
                <li>Tablettes</li>
                <li>Montres intelligentes</li>
                <li>Accessoires divers</li>
            </ul><br>
            <h3>🔹 Électronique</h3><br>
            <ul>
                <li>Ordinateurs & PC</li>
                <li>TV, imprimantes, audio, caméras</li>
                <li>Réseaux & accessoires</li>
            </ul><br>
            <h3>🔹 Mode & Habillement</h3><br>
            <ul>
                <li>Vêtements, sacs, chaussures</li>
                <li>Bijoux, accessoires, montres</li>
            </ul><br>
            <h3>🔹 Santé & Beauté</h3><br>
            <ul>
                <li>Parfums, maquillage, soins de la peau</li>
                <li>Produits capillaires, compléments alimentaires</li>
            </ul><br>
            <h3>🔹 Bébé & Enfant</h3><br>
            <ul>
                <li>Vêtements, meubles, accessoires</li>
                <li>Jouets, sécurité bébé</li>
            </ul><br>
            <h3>🔹 Véhicules & Transport</h3><br>
            <ul>
                <li>Voitures, motos, bus, camions</li>
            </ul><br>
            <h3>🔹 Propriétés</h3><br>
            <ul>
                <li>Maisons & appartements (à vendre ou louer)</li>
                <li>Terrains & parcelles</li>
            </ul><br>
            <h3>🔹 Meubles & Électroménagers</h3><br>
            <ul>
                <li>Meubles, cuisines, électroménagers</li>
                <li>Jardin et décoration</li>
            </ul><br>
            <h3>🔹 Équipements Professionnels</h3><br>
            <ul>
                <li>Équipements industriels, médicaux, d’impression</li>
                <li>Matériel de sécurité, papeterie, etc.</li>
            </ul><br>
            <h3>🔹 Art, Sport & Loisirs</h3><br>
            <ul>
                <li>Instruments, livres, jeux, bricolage, camping</li>
            </ul><br>
            <h3>🔹 Agriculture & Alimentation</h3><br>
            <ul>
                <li>Produits alimentaires, bétail, boissons</li>
                <li>Machines agricoles</li>
            </ul><br>
            <h3>🔹 Animaux</h3><br>
            <ul>
                <li>Chiens, chats, poissons, oiseaux</li>
            </ul><br>
            <h3>🔹 Quincaillerie & Construction</h3><br>
            <ul>
                <li>Matériaux de construction, outils manuels et électriques</li>
                <li>Plomberie, électricité, menuiserie</li>
            </ul><br>
            <h3>🔹 Réparation & Pièces de rechange</h3><br>
            <h3>🔹 Et bien plus encore !</h3>

            <div class="border-separator"></div><br>
            <h1>🧾 Astuces pour bien vendre :</h1><br>
            <ul>
                <li>Utilisez des photos lumineuses et nettes</li>
                <li>Décrivez honnêtement votre produit</li>
                <li>Fixez un prix attractif</li>
                <li>Soyez réactif aux messages des acheteurs</li>
                <li>Activez Tora Express pour livrer rapidement</li><br>
            </ul>
            <div class="border-separator"></div><br>
            <h1>📲 Rejoignez dès maintenant la communauté TORA !</h1><br>
            <p>Créez votre boutique, publiez vos produits et commencez à générer des revenus en toute simplicité.
                <br>👉 <a href="./sign-up.php">Créer mon compte vendeur maintenant</a>
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
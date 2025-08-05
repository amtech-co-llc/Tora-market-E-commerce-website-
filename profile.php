<?php
session_start();
require_once("./php/config.php");
require_once("./php/view_format.php");

if (!isset($_SESSION['user_unique_id_session']) && !isset($_COOKIE['user_unique_id_session'])) {
    header("Location: ./");
    exit();
}

$user_select = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
$query_select = $pdo->prepare($user_select);
$query_select->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
$result_select = $query_select->fetch(PDO::FETCH_ASSOC);

if (($result_select['user_category'] == "none" && $result_select['contact_phone'] == "0") || ($result_select['user_category'] == "none" || $result_select['contact_phone'] == "0")) {
    header("Location: account-details.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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

<body>
    <div class="container2">
        <!-- beginning of navigation bar -->
        <div class="before-navigation-add">
            <div class="navigation-bar-add">
                <a href="./">
                    <h3>Tora corporation</h3>
                </a>
                <a href="./php/logout.php"><button id="buttons" style="font-size: 14px;"><i class="ri-logout-circle-line"></i> Se déconneter</button></a>
            </div>
        </div>
        <!-- end of navigation bar -->
        <div class="chat-card-user-list">
            <div class="users-card">
                <div class="conversation-profile">
                    <a href="./chat.php" type="name"><i class="ri-arrow-left-fill"></i></a>
                    <h2 style="text-align: center;">Votre Profile</h2>
                </div>
                <div class="profile-details">
                    <div class="image">
                        <?php
                        if ($result_select['user_image'] == "./") {
                            echo "<img src='./assets/avatar/user_icon_male.png' alt=''>";
                        } else {
                            echo "<img src='./assets/images/image1.jpeg' alt=''>";
                        }
                        ?>
                    </div>
                    <div class="profile-details-2">
                        <h3><?php echo $result_select['user_name'] ?></h3>
                        <p>E-mail: <?php echo $result_select['user_email'] ?></p>
                        <p>phone: <?php echo $result_select['user_phone'] ?></p>
                        <p>Numéro de contact: <?php echo $result_select['contact_phone'] ?></p>
                        <br>

                        <?php
                        if ($result_select['user_category'] == "acheteur") {
                            echo "
                                <p class='profile-message client'>
                                    En vous abonnant, vous allez beneficier de la sécurité lors de votre achat! Merci de
                                    faire confiance à Tora Corporation.
                                    <a href='#' type='name'><button>S'abonner</button></a>
                                </p>
                            ";
                        } else {
                            if ($result_select['trial'] == "free") {
                                echo "
                                <p class='profile-message client'>
                                    <h4>🎉 Vous êtes actuellement en période d’essai gratuite (30 jours)</h4>
                                    Profitez pleinement de notre plateforme e-commerce pour tester toutes les fonctionnalités dédiées aux vendeurs.
                                    <h4>🔒 Passez à un compte premium dès maintenant</h4>
                                    Débloquez l’accès illimité aux outils de gestion avancée, à la mise en avant de vos produits, au support prioritaire, aux statistiques détaillées, et bien plus encore.
                                    Ne laissez pas votre boutique en pause – boostez vos ventes dès aujourd’hui !
                                    <a href='#' type='name'><button>Activer l'accès complet</button></a>
                                </p>
                            ";
                            } else if ($result_select['trial'] == "expired") {
                                echo "
                                <p class='profile-message client'>
                                    <h4>⚠️ Votre abonnement Pro a expiré</h4>
                                    Votre période d’abonnement au Plan Pro est terminée.
                                    Vous êtes actuellement en mode limité, avec un accès restreint aux fonctionnalités avancées.<br>
                                    🎯 Pour continuer à bénéficier de tous les avantages du Plan Pro meilleure visibilité, gestion optimisée, statistiques détaillées, et assistance prioritaire
                                    nous vous invitons à renouveler votre abonnement.
                                    <a href='#' type='name'><button>Renouveler</button></a>
                                </p>
                                ";
                            } else {
                                echo "
                                <p class='profile-message client'>
                                    <h4>✅ Vous bénéficiez actuellement du Plan Pro</h4>
                                    Merci de faire confiance à notre plateforme !
                                    Votre compte premium vous donne accès à toutes les fonctionnalités avancées : 
                                    visibilité renforcée, outils de performance, assistance prioritaire, et bien plus encore.
                                    <h4>🚀 Continuez à optimiser vos ventes et à développer votre boutique en toute sérénité.</h4>
                                </p>
                            ";
                            }
                        }
                        ?>


                    </div>
                    <div class="modify-profile">
                        <h2>Modifer votre Profile</h2>
                        <form action="#">
                            <div class="group-input1">
                                <div class="input1">
                                    <label for="">Votre Nom</label>
                                    <input type="text" placeholder="Modifier votre nom">
                                </div>
                                <div class="input1">
                                    <label for="">Votre E-mail</label>
                                    <input type="text" placeholder="Modifier vortre E-mail">
                                </div>
                            </div>
                            <div class="group-input1">
                                <div class="input1">
                                    <label for="">Votre Numéro</label>
                                    <input type="number" placeholder="Modifier votre Numéro">
                                </div>
                                <div class="input1">
                                    <label for="">Numéro de contact</label>
                                    <input type="number" placeholder="Modifier votre Numéro">
                                </div>
                            </div>
                            <div class="group-input1">
                                <div class="input1">
                                    <label for="">Mot de passe</label>
                                    <input type="password" placeholder="****************">
                                </div>
                                <div class="input1">
                                    <label for="">Confirmer</label>
                                    <input type="password" placeholder="****************">
                                </div>
                            </div>
                            <div class="input1">
                                <label for="">Séléctionner des images</label>
                                <input type="file" accept="image/*" required>
                            </div>
                            <button>Modifer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-navigation-bottom">
            <div class="buttons-icons">
                <div class="icon-1">
                    <a href="./index.php"><button id="home-btn"><i class="ri-home-4-line"></i></button></a>
                    <label for="">Acceuille</label>
                </div>
                <?php
                if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                    $sql_acc = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
                    $query_acc = $pdo->prepare($sql_acc);
                    $query_acc->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
                    $res_acc = $query_acc->fetch(PDO::FETCH_ASSOC);

                    if ($res_acc['user_category'] == "vendeur" || $res_acc['user_category'] == "entreprise") {
                        echo '<div class="icon-1">
                    <a href="./publication.php"><button><i class="ri-add-circle-line"></i></button></a>
                    <label for="">Vendre</label>
                    </div>';
                    } else {
                        echo '<div class="icon-1" style="color:gray;">
                    <button><i class="ri-add-circle-line" style="color:gray;"></i></button>
                    <label for="">Vendre</label>
                    </div>';
                    }
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php"><button><i class="ri-add-circle-line"></i></button></a>
                    <label for="">Vendre</label>
                </div>';
                }
                ?>
                <?php
                if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                    echo '<div class="icon-1">
                    <a href="./chat.php">
                        <button><i class="ri-chat-new-fill"></i><span class="chat-num">+90</span></button>
                    </a>
                    <label for="">Chater</label>
                </div>';
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php">
                        <button><i class="ri-chat-new-fill"></i><span class="chat-num">+90</span></button>
                    </a>
                    <label for="">Chater</label>
                </div>';
                }
                ?>
                <?php
                if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                    echo '<div class="icon-1">
                    <a href="./profile.php"><button><i class="ri-user-add-line"></i></button></a>
                    <label for="">Compte</label>
                    </div>';
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php"><button><i class="ri-user-add-line"></i></button></a>
                    <label for="">Compte</label>
                    </div>';
                }
                ?>
            </div>
        </div>
        <!--  ====================================================================================== -->
        <p id="copy-right-conns">
            &copy;2025 Tora Corporation. Tout droit réservé.
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
</body>

</html>
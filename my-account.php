<?php
session_start();
require_once("./php/config.php");
require_once("./php/view_format.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tora Corporation</title>

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
    <div class="container">
        <!-- beginning of navigation bar -->
        <div class="navigation-bar">
            <div class="navigation-bar-contents">
                <!-- <div class="top-bar">
          <span>+243 000 000 000</span>
          <p>Trouvez une bonne experience sur l'application <a href="#">Télécharger</a></p>
          <p><span><i class="ri-user-shared-line"></i> Se Connecter</span> <span>| Créer un compte</span></p>
        </div> -->
            </div>
            <div class="bottom-bar">
                <div class="bottom-contents">
                    <a href="./">
                        <h3>Tora Corporation</h3>
                    </a>
                    <!-- <div class="nav-cont">
            <ul>
              <a href="#">
                <li>Acceuil</li>
              </a>
              <a href="#">
                <li>Vendre un produit</li>
              </a>
              <a href="#">
                <li>Aide</li>
              </a>
            </ul>
          </div> -->
                    <div class="nav-right-bot">
                        <div class="contents-right-nav">
                            <div class="search">
                                <input type="text" list="tech-options" placeholder="Filtrer par prix et par nom..."
                                    id="searchInput">
                                <datalist id="tech-options">
                                    <option value="10 $">
                                    <option value="20 $">
                                    <option value="50 $">
                                    <option value="100 $">
                                    <option value="500 $">
                                    <option value="1000 $">
                                    <option value="autres...">
                                </datalist>
                                <!-- <span class="search-icon"><i class="ri-search-line"></i></span> -->
                                <!-- beginning of search-results -->
                                <div class="search-results">
                                    <ul>
                                        <!-- beginning of result-article1 -->
                                        <a href="./voir-plus.php">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="./voir-plus.php">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="./voir-plus.php">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                    </ul>
                                </div>
                                <!-- end of search-results -->
                            </div>
                            <div class="notifications">
                                <span class="notification"><i class="ri-notification-2-line"></i></span>
                                <p class="notification-number">+9</p>
                            </div>
                            <div class="see-notification">
                                <div class="notification-contents">
                                    <ul>
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                    </ul>
                                </div>
                            </div>
                            <a href="./publication.php"><button id="buttons">Vendre un produit</button></a>
                        </div>
                    </div>
                    <div class="user-contents">
                        <select name="" id="">
                            <option value="fr">Français</option>
                            <option value="en">Anglais</option>
                        </select>
                        <a href="./accounts.php"><button><i class="ri-user-shared-line"></i> Céer un
                                compte</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  ====================================================================================== -->
        <!--  beginning of mobile navigation -->
        <div class="mobile-navigation">
            <a href="./">
                <h3>Tora</h3>
            </a>
            <div class="search">
                <input type="text" list="tech-options" placeholder="Chercher un article..." id="searchInput2">
                <datalist id="tech-options">
                    <option value="10 $"></option>
                    <option value="20 $">
                    <option value="50 $">
                    <option value="100 $">
                    <option value="500 $">
                    <option value="1000 $">
                    <option value="autres...">
                </datalist>
                <!-- <span class="search-icon"><i class="ri-search-line"></i></span> -->
                <!-- beginning of search-results -->
                <div class="search-results2">
                    <ul>
                        <!-- beginning of result-article1 -->
                        <a href="./voir-plus.php">
                            <li>
                                <img src="./assets/images/image1.jpeg" alt="">
                                <div class="res-details">
                                    <h4>Lenovo T480s</h4>
                                    <p>Ordinateur Portable</p>
                                </div>
                            </li>
                        </a>
                        <!-- end of result-article1 -->
                        <!-- beginning of result-article1 -->
                        <a href="./voir-plus.php">
                            <li>
                                <img src="./assets/images/image1.jpeg" alt="">
                                <div class="res-details">
                                    <h4>Lenovo T480s</h4>
                                    <p>Ordinateur Portable</p>
                                </div>
                            </li>
                        </a>
                        <!-- end of result-article1 -->
                        <!-- beginning of result-article1 -->
                        <a href="./voir-plus.php">
                            <li>
                                <img src="./assets/images/image1.jpeg" alt="">
                                <div class="res-details">
                                    <h4>Lenovo T480s</h4>
                                    <p>Ordinateur Portable</p>
                                </div>
                            </li>
                        </a>
                        <!-- end of result-article1 -->
                        <!-- beginning of result-article1 -->
                        <a href="#">
                            <li>
                                <img src="./assets/images/image1.jpeg" alt="">
                                <div class="res-details">
                                    <h4>Lenovo T480s</h4>
                                    <p>Ordinateur Portable</p>
                                </div>
                            </li>
                        </a>
                        <!-- end of result-article1 -->
                        <!-- beginning of result-article1 -->
                        <a href="#">
                            <li>
                                <img src="./assets/images/image1.jpeg" alt="">
                                <div class="res-details">
                                    <h4>Lenovo T480s</h4>
                                    <p>Ordinateur Portable</p>
                                </div>
                            </li>
                        </a>
                        <!-- end of result-article1 -->
                        <!-- beginning of result-article1 -->
                        <a href="#">
                            <li>
                                <img src="./assets/images/image1.jpeg" alt="">
                                <div class="res-details">
                                    <h4>Lenovo T480s</h4>
                                    <p>Ordinateur Portable</p>
                                </div>
                            </li>
                        </a>
                        <!-- end of result-article1 -->
                        <!-- beginning of result-article1 -->
                        <a href="#">
                            <li>
                                <img src="./assets/images/image1.jpeg" alt="">
                                <div class="res-details">
                                    <h4>Lenovo T480s</h4>
                                    <p>Ordinateur Portable</p>
                                </div>
                            </li>
                        </a>
                        <!-- end of result-article1 -->
                    </ul>
                </div>
                <!-- end of search-results -->
            </div>
            <button id="menu-button"><i class="ri-menu-3-fill"></i></button>
        </div>
        <div class="before-mobile-menu">
            <div class="mobile-menu">
                <div class="top-mob">
                    <h2>Tora Corporation</h2>
                </div>
                <div class="menu-contents-mob">
                    <ul>
                        <a href="#">
                            <li>
                                <div class="bell-not">
                                    <i class="ri-notification-2-line"></i>
                                    <span>+9</span>
                                </div>
                                Notifications
                            </li>
                        </a>
                        <a href="#">
                            <li>Vendre un produit</li>
                        </a>
                        <a href="./sign-up.php">
                            <li>Créer un compte</li>
                        </a>
                    </ul>
                    <select name="" id="" class="mobile-language-chooser">
                        <option value="fr">Français</option>
                        <option value="en">Anglais</option>
                    </select>
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
        <!--  end of mobile navigation -->
        <!--  ====================================================================================== -->
        <!-- end of navigation bar -->
        <div class="body-contents">
            <div class="body-contents-details">
                <h2>Tous les produits</h2>
                <!-- categorie list -->
                <div class="categories-list">
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-00" checked>
                        <label for="categorie-list-00">Tout</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-0">
                        <label for="categorie-list-0">Accesoires</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-1">
                        <label for="categorie-list-1">Appareils</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-2">
                        <label for="categorie-list-2">Habillement</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-3">
                        <label for="categorie-list-3">Aménagement</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-03">
                        <label for="categorie-list-03">Meubles</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-4">
                        <label for="categorie-list-4">Chaussures</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-5">
                        <label for="categorie-list-5">Gadgets</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-6">
                        <label for="categorie-list-6">Transport</label>
                    </div>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <div class="list1">
                        <input type="radio" name="categorie" id="categorie-list-7">
                        <label for="categorie-list-7">Ornement</label>
                    </div>
                    <!-- end of list1 -->
                </div>
                <!-- end of categorie list -->
                <!-- beginning of carousel -->
                <div class="story-wrapper">
                    <div class="scroll-controls">
                        <button class="scroll-btn left"><i class="ri-arrow-left-s-line"></i></button>
                        <button class="scroll-btn right"><i class="ri-arrow-right-s-line"></i></button>
                    </div>
                    <div class="fade-left"></div>
                    <div class="fade-right"></div>
                    <!-- beginning of story cards -->
                    <div class="story-bar" id="storyBar">
                        <div class="story-card">
                            <a href="./voir-plus.html"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="./voir-plus.html"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="./voir-plus.html"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="./voir-plus.html"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                        <div class="story-card">
                            <a href="#"><img src="./assets/images/image1.jpeg"></a>
                        </div>
                    </div>
                    <!-- end of story cards -->
                </div>
                <!-- end of carousel -->
                <!-- ====================================================================================================== -->
                <!-- beginning of cards -->
                <div class="cards" id="card-container">
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Nouveau Produit</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="./voir-plus.html"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="./voir-plus.html"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="./voir-plus.html"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="./voir-plus.html"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="./voir-plus.html"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="./voir-plus.html"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="./voir-plus.html"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->



                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- beginning of card1 -->
                    <!-- beginning of card1 -->
                    <div class="card1">
                        <div class="image">
                            <img src="./assets/images/image1.jpeg" alt="">
                            <span class="product-state">Neuf</span>
                        </div>
                        <div class="details">
                            <div class="prix">
                                <h1>200$</h1>
                                <div class="rating">
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill active"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <h4>Iphone 11 Pro max</h4>
                            <p class="description">Lorem Ipsum venit is remit for postum venit lorim ester nas tua...
                            </p>
                            <div class="bottom-det">
                                <p><i class="ri-map-pin-2-line"></i> Goma</p>
                                <a href="#"><button>Voir les details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card1 -->
                </div>
                <!-- end of cards -->
                <!-- ====================================================================================================== -->
                <!-- Pagination buttons -->
                <div id="pagination" class="pagination-controls"></div>

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
                <p>&copy;2025 Tora Corporation. Tout droits réservé <br> Propulsé par
                    <a href="https://www.amtech-co.com" rel="sponsored">Amtech technology (Amtech-co LLC | Software)</a>
                </p>
            </div>
        </div>
    </div>



    <!-- beginning of scripting -->
    <script src="./assets/js/pagination.js"></script>
    <script src="./assets/js/menu.js"></script>
    <script>
        const storyBar = document.getElementById('storyBar');
        const scrollAmount = 120;

        document.querySelector('.scroll-btn.left').addEventListener('click', () => {
            storyBar.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        document.querySelector('.scroll-btn.right').addEventListener('click', () => {
            storyBar.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });




        document.getElementById('searchInput').addEventListener('input', () => {
            const input = document.getElementById('searchInput').value;
            if (input.length > 0) {
                document.querySelector('.search-results').classList.add('show');
            } else {
                document.querySelector('.search-results').classList.remove('show');
            }
        });

        document.getElementById('searchInput2').addEventListener('input', () => {
            const input2 = document.getElementById('searchInput2').value;
            if (input2.length > 0) {
                document.querySelector('.search-results2').classList.add('show');
                document.querySelector('.categories-list').style.position = 'static';
            } else {
                document.querySelector('.search-results2').classList.remove('show');
                document.querySelector('.categories-list').style.position = 'sticky';
            }
        });
    </script>
</body>

</html>
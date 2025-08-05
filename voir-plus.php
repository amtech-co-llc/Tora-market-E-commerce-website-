<?php
session_start();
require_once("./php/config.php");
require_once("./php/view_format.php");
require_once("./php/time-format.php");

$viewF = new viewFormat();
$time = new passedTime();


$unique_id = htmlspecialchars($_GET['marque']);

$sql = "SELECT * FROM produit WHERE seo_link = ?";
$query = $pdo->prepare($sql);
$query->execute([$unique_id]);
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    foreach ($res as $row) {
        $sql_image = "SELECT * FROM imagess WHERE product_unique_id = ?";
        $query_image = $pdo->prepare($sql_image);
        $query_image->execute([$row['unique_id']]);
        $res_image = $query_image->fetchAll(PDO::FETCH_ASSOC);
        if (count($res_image) > 0) {

            $sql_save_view = "UPDATE produit SET nom_de_vues = ? WHERE seo_link = ?";
            $query_save_view = $pdo->prepare($sql_save_view);
            $query_save_view->execute([(int)$row['nom_de_vues'] + 1, $unique_id]);


            $sql_image2 = "SELECT * FROM imagess WHERE product_unique_id = ?";
            $query_image2 = $pdo->prepare($sql_image2);
            $query_image2->execute([$row['unique_id']]);
            $res_image2 = $query_image2->fetch(PDO::FETCH_ASSOC);


            $sql_ratings = "SELECT ratings FROM ratings WHERE product_seo_link = ?";
            $query_ratings = $pdo->prepare($sql_ratings);
            $query_ratings->execute([$unique_id]);
            $ratings = $query_ratings->fetchAll(PDO::FETCH_COLUMN);
            $total = count($ratings);
            if ($total > 0) {
                $sum = array_sum($ratings);
                $average = $sum / $total;
                // Round to the nearest 0.5
                $average_rounded = round($average * 2) / 2;
            } else {
                $average_rounded = 0;
            }

?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $row['titre'] ?></title>

                <link rel="stylesheet" href="./assets/css/style.css">
                <link rel="stylesheet" href="./assets/css/mobile-format.css">
                <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">

                <!-- Essential SEO Meta Tags -->
                <meta name="description" content="<?php
                                                    $description = (strlen($row['description']) > 100) ? substr($row['description'], 0, 100) . "..." : $row['description'];
                                                    echo $description;
                                                    ?>">
                <meta name="keywords" content="Vente, Achat, Tora Corporation">
                <meta name="author" content="Tora Corporation">
                <meta name="robots" content="index, follow">

                <!-- Open Graph / Facebook / WhatsApp -->
                <meta property="og:title" content="<?php echo $row['titre'] . " • Note: {$average_rounded} ⭐" ?>">
                <meta property="og:description" content="<?php
                                                            $description = (strlen($row['description']) > 100) ? substr($row['description'], 0, 100) . "..." : $row['description'];
                                                            echo $description;
                                                            ?>">
                <meta property="og:image" content="https://www.toracorporation.com/<?php echo $res_image2['image_link']; ?>">
                <meta property="og:url" content="https://www.example.com/your-page">
                <meta property="og:type" content="website">
                <meta property="og:site_name" content="Tora Corporation">

                <!-- Twitter Card -->
                <meta name="twitter:card" content="Vente en ligne">
                <meta name="twitter:title" content="<?php echo $row['titre'] ?>">
                <meta name="twitter:description" content="<?php
                                                            $description = (strlen($row['description']) > 50) ? substr($row['description'], 0, 50) . "..." : $row['description'];
                                                            echo $description;
                                                            ?>">
                <meta name="twitter:image" content="https://www.toracorporation.com/<?php echo $res_image2['image_link']; ?>">
                <meta name="twitter:site" content="@YourTwitterHandle">
                <meta name="twitter:creator" content="@YourTwitterHandle">

                <!-- Favicon -->
                <link rel="icon" href="./favicon.ico" type="image/x-icon">


            </head>

            <body id="body" class="">
                <div class="container">
                    <!-- beginning of navigation bar -->
                    <div class="navigation-bar">
                        <div class="bottom-bar">
                            <div class="bottom-contents">
                                <a href="./">
                                    <h3>Tora Corporation</h3>
                                </a>
                                <div class="nav-right-bot">
                                    <div class="contents-right-nav">
                                        <div class="search">
                                            <div class="search-first-box">
                                                <input type="text" placeholder="Filtrer par nom..." id="searchInput">
                                            </div>
                                            <!-- <span class="search-icon"><i class="ri-search-line"></i></span> -->
                                            <!-- beginning of search-results -->
                                            <div class="search-results"></div>
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
                                        <?php
                                        if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {

                                            $sql_acc = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
                                            $query_acc = $pdo->prepare($sql_acc);
                                            $query_acc->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
                                            $res_acc = $query_acc->fetch(PDO::FETCH_ASSOC);

                                            if ($res_acc['user_category'] == "vendeur" || $res_acc['user_category'] == "entreprise") {
                                                echo '<a href="./publication.php"><button id="buttons"><i class="ri-add-large-fill"></i> Vendre un
                                    produit </button></a>';
                                            } else {
                                                echo "";
                                            }
                                        } else {
                                            echo '<a href="./login.php"><button id="buttons"><i class="ri-add-large-fill"></i> Vendre un
                                    produit</button></a>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="user-contents">
                                    <select name="" id="">
                                        <option value="fr">Français</option>
                                        <option value="en">Anglais</option>
                                    </select>
                                    <?php
                                    if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                                        echo '<a href="./profile.php"><img src="./assets/avatar/user_icon_male.png"
                                                style="width: 30px; height: 30px; border-radius: 50%;" alt=""></a>';
                                        echo '<a href="./php/logout.php"><button><i class="ri-logout-circle-line"></i> Se déconneter</button></a>';
                                    } else {
                                        echo '<a href="./login.php"><button><i class="ri-user-shared-line"></i> Se
                                            connecter</button></a>';
                                    }
                                    ?>
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
                    <!--  beginning of mobile navigation -->
                    <div class="mobile-navigation">
                        <a href="./">
                            <h3>Tora</h3>
                        </a>
                        <div class="search">
                            <div class="search-first-box">
                                <input type="text" placeholder="Filtrer par nom..." id="searchInput2">
                            </div>
                            <!-- <span class="search-icon"><i class="ri-search-line"></i></span> -->
                            <!-- beginning of search-results -->
                            <div class="search-results2"></div>
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
                                    <a href="./publication.php">
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
                    <!--  end of mobile navigation -->
                    <!--  ====================================================================================== -->

                    <div class="body-contents">
                        <div class="content-details-results">
                            <div class="details-contents">
                                <div class="images">
                                    <div class="principale-image">
                                        <?php
                                        foreach ($res_image as $row_image) {
                                            echo '<a href="' . $row_image['image_link'] . '"><img src="' . $row_image['image_link'] . '" class="slide" alt="Image 1"></a>';
                                        }
                                        ?>
                                        <!-- <img src="./assets/images/image1.jpeg" class="slide" alt="Image 2">
                                            <img src="./assets/images/image1.jpeg" class="slide" alt="Image 3">
                                            <img src="./assets/images/image1.jpeg" class="slide" alt="Image 4"> -->
                                    </div>
                                    <button class="prev" onclick="prevSlide()"><i class="ri-arrow-left-s-line"></i></button>
                                    <button class="next" onclick="nextSlide()"><i class="ri-arrow-right-s-line"></i></button>
                                </div>
                                <div class="other-contents">
                                    <?php
                                    if ($row['promotion'] == "Enabled") {
                                    ?>
                                        <div class="title" style="display: flex;justify-content:space-between;">
                                            <h1><?php echo $row['titre'] ?></h1>
                                            <span style='display:flex;
                                                    gap:0.1em;
                                                    height:fit-content;
                                                    padding:0.2em;
                                                    background:rgba(0, 176, 158, 0.26);
                                                    border-radius:8px;
                                                    border:1px solid rgb(0, 176, 158);
                                                    color:rgb(0, 176, 158);
                                        '>Sponsorisé <i class='ri-verified-badge-fill'></i></span>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <h1><?php echo $row['titre'] ?></h1>
                                    <?php
                                    }
                                    ?>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p><br>
                                    <div class="contents-details">
                                        <div class="price-and-state">
                                            <h1><i class="ri-money-dollar-circle-fill"></i>
                                                <?php
                                                if ($row['currency'] == "USD") {
                                                    echo $viewF->formatNumberShort($row['prix'])
                                                        . "$";
                                                } else {
                                                    echo $viewF->formatNumberShort($row['prix'])
                                                        . " " . $row['currency'];
                                                }
                                                ?>
                                            </h1>
                                            <h1><i class="ri-refresh-fill"></i>
                                                <?php if ($row['etat'] == "Nouveau Produit") {
                                                    echo "N. Produit";
                                                } else {
                                                    echo $row['etat'];
                                                } ?></h1>
                                        </div>
                                        <div class="localisation-categorie">
                                            <div class="location">
                                                <i class="ri-map-pin-2-line"></i> <?php echo $row['location'] ?>
                                            </div>
                                            <div class="categorie">
                                                <i class="ri-pantone-fill"></i> <?php echo $row['categorie'] ?>
                                            </div>
                                            <div class="number-of-views">
                                                <i class="ri-eye-line"></i> <?php echo $viewF->formatNumberShort($row['nom_de_vues']); ?>
                                            </div>
                                            <div class="added-time">
                                                <i class="ri-calendar-schedule-line"></i> <?php echo $time->timeAgo($row['duree']); ?>
                                            </div>
                                        </div>
                                        <div class="other-details-liv">
                                            <div class="livraison">
                                                <i class="ri-truck-line"></i> Livraison: <?php echo $row['delivary'] ?>
                                            </div>
                                            <div class="number-in-stock">
                                                <i class="ri-store-3-fill"></i> En stock: <?php echo $viewF->formatNumberShort($row['stock_number']); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="links-and-contact">
                                        <h2>Contactez le vendeur</h2><br>
                                        <?php
                                        $sql_user = "SELECT * FROM user_accounts WHERE user_unique_id = ?";
                                        $query_user = $pdo->prepare($sql_user);
                                        $query_user->execute([$row['user_unique_id']]);
                                        $res_user = $query_user->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="contacts-v">
                                            <a href="#"><button><i class="ri-shield-flash-line"></i> Utiliser Tora express</button></a>
                                            <a href="./conversation.php"><button><i class="ri-mail-add-line"></i></button></a>
                                            <a href="tel:+<?php echo $res_user['contact_phone']; ?>"><button><i class="ri-phone-fill"></i></button></a>
                                            <a href="https://wa.me/<?php echo $res_user['contact_phone']; ?>?text=Pouvez-vous me dire plus sur ce produit?%0Ahttps://toracorporation.com/<?php echo $row['seo_link'] ?>" rel="noopener noreferrer"><button><i class="ri-whatsapp-line"></i></button></a>
                                        </div>
                                    </div>
                                    <div class="partager">
                                        <h2>Partager et Coter</h2><br>
                                        <div class="buttons-share">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://toracorporation.com/<?php echo $row['seo_link'] ?>" target="_blank" rel="noopener noreferrer"><button><i class="ri-facebook-circle-fill"></i> Facebook</button></a>
                                            <a href="https://wa.me/?text=<?php echo $description ?>%0Ahttps://toracorporation.com/<?php echo $row['seo_link'] ?>" target="_blank" rel="noopener noreferrer"><button><i class="ri-whatsapp-line"></i> Whatsapp</button></a>
                                            <button id="avis-button"><i class="ri-star-half-fill"></i> Votre avis</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cotes">

                            <?php
                            $sql_cotation2 = "SELECT COUNT(*) FROM ratings WHERE product_seo_link = ?";
                            $query_cotation2 = $pdo->prepare($sql_cotation2);
                            $query_cotation2->execute([$row['seo_link']]);
                            $count = $query_cotation2->fetchColumn();

                            echo "<h1 style='text-align:center;'>Avis des clients ({$count})</h1><br>";

                            ?>
                            <!-- beginning of rating -->
                            <div class="contents-rate" id="rating-container">
                                <?php
                                $sql_cotation = "SELECT * FROM ratings WHERE product_seo_link = ? ORDER BY RAND() DESC";
                                $query_cotation = $pdo->prepare($sql_cotation);
                                $query_cotation->execute([$row['seo_link']]);
                                $res_cotation = $query_cotation->fetchAll(PDO::FETCH_ASSOC);
                                if (count($res_cotation) > 0) {
                                    foreach ($res_cotation as $row_cotation) {
                                ?>
                                        <!-- beginning of rating card -->
                                        <div class="card">
                                            <?php
                                            if ($row_cotation['user_image'] == "./") {
                                                echo "<img src='./assets/avatar/user_icon_male.png' alt=''>";
                                            } else {
                                                echo "<img src='{$row_cotation['user_image']}' alt=''>";
                                            }
                                            ?>
                                            <div class="avis-desc">
                                                <h3><?php echo $row_cotation['user_name']; ?></h3>
                                                <?php
                                                if ($row_cotation['ratings'] == "1") {
                                                    echo '
                                                            <p class="avis-star">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </p>
                                                        ';
                                                } else if ($row_cotation['ratings'] == "2") {
                                                    echo '
                                                            <p class="avis-star">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </p>
                                                        ';
                                                } else if ($row_cotation['ratings'] == "3") {
                                                    echo '
                                                            <p class="avis-star">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </p>
                                                        ';
                                                } else if ($row_cotation['ratings'] == "4") {
                                                    echo '
                                                            <p class="avis-star">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </p>
                                                        ';
                                                } else if ($row_cotation['ratings'] == "5") {
                                                    echo '
                                                            <p class="avis-star">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                            </p>
                                                        ';
                                                }
                                                ?>
                                                <p><?php echo $row_cotation['comment']; ?></p>
                                            </div>
                                        </div>
                                        <!-- end of rating card -->
                                <?php
                                    }
                                } else {
                                    echo "<span style='color:gray;font-weight:bold;text-align:center;font-size:22px;'>Soit le premier à côter</span>";
                                }
                                ?>
                            </div>
                            <!-- end of rating -->
                            <div id="pagination-controls2" class="pagination-controls"></div>
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

                <div class="pop-up-rating">
                    <div class="card-for-pop-up-rating">
                        <div class="title">
                            <h2>Laisez votre Avis</h2>
                        </div>
                        <?php
                        if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                        ?>
                            <form action="#" id="ratings-form">
                                <p id="visualizer"></p>
                                <select name="rating-cotation" id="" type="rating">
                                    <option value="">-- Nombre d'etoiles --</option>
                                    <option value="5">5 étoiles</option>
                                    <option value="4">4 étoiles</option>
                                    <option value="3">3 étoiles</option>
                                    <option value="2">2 étoiles</option>
                                    <option value="1">1 étoiles</option>
                                </select>
                                <textarea name="comment" id="" placeholder="votre commentaire"></textarea>
                                <input type="text" name="product_seo_url" value="<?php echo $unique_id ?>" id="" hidden>
                                <button id="submit-btn">Envoyer</button>
                            </form>
                        <?php
                        } else {
                        ?>
                            <form action="#" id="ratings-form">
                                <p id="visualizer"></p>
                                <select name="rating-cotation" id="" type="rating" disabled>
                                    <option value="">-- Nombre d'etoiles --</option>
                                    <option value="5">5 étoiles</option>
                                    <option value="4">4 étoiles</option>
                                    <option value="3">3 étoiles</option>
                                    <option value="2">2 étoiles</option>
                                    <option value="1">1 étoiles</option>
                                </select>
                                <textarea name="comment" id="" placeholder="votre commentaire" disabled></textarea>
                                <input type="text" name="product_seo_url" value="<?php echo $unique_id ?>" id="" hidden disabled>
                                <span style='color:orange;font-weight:bold;text-align:center;'>Connectez-vous à votre compte pour noter <br><a href="./login.php" style="color:rgb(0, 176, 158);">Se connecter</a></span>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>


                <!-- beginning of scripting -->
                <!--     <script src="./assets/js/pagination2.js"></script> -->
                <script src="./assets/js/menu.js"></script>
                <script src="./ajax/star-ratings.js"></script>

                <script>
                    let currentIndex = 0;
                    const slides = document.querySelectorAll('.slide');

                    document.getElementById('searchInput').addEventListener('input', () => {
                        const input = document.getElementById('searchInput').value;
                        console.log(input);
                        if (input.length > 0) {
                            document.querySelector('.search-results').classList.add('show');

                            const xhr1 = new XMLHttpRequest();
                            xhr1.open("GET", `php/recherche.php?prod=${input}`, true);
                            xhr1.onload = () => {
                                if (xhr1.readyState == xhr1.DONE && xhr1.status == 200) {
                                    const data1 = xhr1.response;
                                    document.querySelector('.search-results').innerHTML = data1;
                                }
                            }
                            xhr1.send();

                        } else {
                            document.querySelector('.search-results').classList.remove('show');
                        }
                    });

                    document.getElementById('searchInput2').addEventListener('input', () => {
                        const input2 = document.getElementById('searchInput2').value;
                        console.log(input2);
                        if (input2.length > 0) {
                            document.querySelector('.search-results2').classList.add('show');
                            /* document.querySelector('.categories-list').style.position = 'static'; */

                            const xhr1 = new XMLHttpRequest();
                            xhr1.open("GET", `php/recherche.php?prod=${input2}`, true);
                            xhr1.onload = () => {
                                if (xhr1.readyState == xhr1.DONE && xhr1.status == 200) {
                                    const data1 = xhr1.response;
                                    document.querySelector('.search-results2').innerHTML = data1;
                                }
                            }
                            xhr1.send();

                        } else {
                            document.querySelector('.search-results2').classList.remove('show');
                            /*  document.querySelector('.categories-list').style.position = 'sticky'; */
                        }
                    });

                    /* =============================================================================================== */
                    /* image sliders */

                    function showSlide(index) {
                        const totalSlides = slides.length;
                        if (index >= totalSlides) currentIndex = 0;
                        else if (index < 0) currentIndex = totalSlides - 1;
                        else currentIndex = index;
                        console.log(currentIndex);
                        const slideWidth = slides[0].clientWidth;
                        document.querySelector('.principale-image').style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                    }

                    function nextSlide() {
                        showSlide(currentIndex + 1);
                    }

                    function prevSlide() {
                        showSlide(currentIndex - 1);
                    }

                    window.addEventListener('resize', () => showSlide(currentIndex));
                    window.onload = () => showSlide(currentIndex);
                </script>

                <!-- beginning of pagination for rating system -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const cardsPerPage = 2;
                        const cards = Array.from(document.querySelectorAll("#rating-container .card"));
                        const paginationContainer = document.getElementById("pagination-controls2");
                        let currentPage = 1;

                        function showPage(page) {
                            const totalPages = Math.ceil(cards.length / cardsPerPage);
                            currentPage = Math.max(1, Math.min(page, totalPages)); // Clamp to range

                            const start = (currentPage - 1) * cardsPerPage;
                            const end = start + cardsPerPage;

                            cards.forEach((card, index) => {
                                card.style.display = index >= start && index < end ? "flex" : "none";
                            });

                            renderPagination(totalPages);

                            // Scroll to top of the card container when switching pages
                            document.querySelector('.cotes').scrollTo({
                                top: 0,
                                behavior: "smooth"
                            });
                        }

                        function renderPagination(totalPages) {
                            paginationContainer.innerHTML = "";

                            // Prev Button
                            const prevBtn = document.createElement("button");
                            prevBtn.innerHTML = "<i class='ri-arrow-left-s-line'></i>";
                            prevBtn.disabled = currentPage === 1;
                            prevBtn.addEventListener("click", () => showPage(currentPage - 1));
                            paginationContainer.appendChild(prevBtn);

                            // Logic for pagination buttons with ellipsis
                            const maxVisible = 1; // Max visible pages

                            const addPageButton = (pageNum) => {
                                const btn = document.createElement("button");
                                btn.textContent = pageNum;
                                btn.classList.add("page-btn");
                                if (pageNum === currentPage) btn.classList.add("active");
                                btn.addEventListener("click", () => showPage(pageNum));
                                paginationContainer.appendChild(btn);
                            };

                            const addEllipsis = () => {
                                const span = document.createElement("span");
                                span.innerHTML = "<i class='ri-more-fill'></i>";
                                span.style.margin = "0 4px";
                                paginationContainer.appendChild(span);
                            };

                            if (totalPages <= maxVisible) {
                                // If there are 6 or fewer pages, show them all
                                for (let i = 1; i <= totalPages; i++) {
                                    addPageButton(i);
                                }
                            } else {
                                // Always show the first page
                                addPageButton(1);

                                // Show ellipsis if the current page is beyond the first few pages
                                if (currentPage > 2) {
                                    addEllipsis();
                                }

                                // Display the range of pages around the current page
                                const start = Math.max(2, currentPage - 2);
                                const end = Math.min(totalPages - 1, currentPage + 1);

                                for (let i = start; i <= end; i++) {
                                    addPageButton(i);
                                }

                                // Show ellipsis if the current page is far from the last few pages
                                if (currentPage < totalPages - 2) {
                                    addEllipsis();
                                }

                                // Always show the last page
                                addPageButton(totalPages);
                            }

                            // Next Button
                            const nextBtn = document.createElement("button");
                            nextBtn.innerHTML = "<i class='ri-arrow-right-s-line'></i>";
                            nextBtn.disabled = currentPage === totalPages;
                            nextBtn.addEventListener("click", () => showPage(currentPage + 1));
                            paginationContainer.appendChild(nextBtn);
                        }

                        // Initialize the first page
                        showPage(1);
                    });
                </script>
                <!-- end of pagination for rating system -->


                <!--  toggle voir plus and voir moin -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const maxLength = 180;

                        document.querySelectorAll("#rating-container .avis-desc p:not(.avis-star)").forEach(paragraph => {
                            const originalText = paragraph.textContent.trim();

                            // Skip paragraphs that are already short
                            if (originalText.length <= maxLength) {
                                paragraph.textContent = originalText; // Clean up any span
                                return;
                            }

                            const truncatedText = originalText.slice(0, maxLength) + "...";
                            paragraph.dataset.full = originalText;
                            paragraph.dataset.truncated = truncatedText;

                            function setParagraphContent(isExpanded) {
                                paragraph.innerHTML = `
          ${isExpanded ? originalText : truncatedText}
          <span class="toggle-text" style="cursor:pointer; color: rgb(1, 145, 130);">
            ${isExpanded ? "Voir moins" : "Voir plus"}
          </span>
        `;
                                paragraph.querySelector(".toggle-text").addEventListener("click", () => {
                                    setParagraphContent(!isExpanded);
                                });
                            }

                            setParagraphContent(false);
                        });
                    });
                </script>



                <!--  toggle voir plus and voir moin 2 -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const maxLength = 190;

                        document.querySelectorAll(".details-contents .other-contents p").forEach(paragraph => {
                            const originalText = paragraph.textContent.trim();

                            // Skip paragraphs that are already short
                            if (originalText.length <= maxLength) {
                                paragraph.textContent = originalText; // Clean up any span
                                return;
                            }

                            const truncatedText = originalText.slice(0, maxLength) + "...";
                            paragraph.dataset.full = originalText;
                            paragraph.dataset.truncated = truncatedText;

                            function setParagraphContent(isExpanded) {
                                paragraph.innerHTML = `
          ${isExpanded ? originalText : truncatedText}
          <span class="toggle-text" style="cursor:pointer; color: rgb(1, 145, 130);">
            ${isExpanded ? "Voir moins" : "Voir plus"}
          </span>
        `;
                                paragraph.querySelector(".toggle-text").addEventListener("click", () => {
                                    setParagraphContent(!isExpanded);
                                });
                            }

                            setParagraphContent(false);
                        });
                    });
                </script>


                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const avis_button = document.getElementById('avis-button');
                        avis_button.addEventListener('click', () => {
                            setTimeout(() => {
                                document.querySelector('.pop-up-rating').classList.add('show');
                                document.body.classList.add("noscroll");
                                document.documentElement.classList.add("noscroll"); // for <html>
                            }, 300);
                            window.scrollTo({
                                top: 0,
                                behavior: "smooth"
                            });
                        });
                    });

                    window.addEventListener('click', (e) => {
                        if (e.target == document.querySelector('.pop-up-rating')) {
                            document.querySelector('.pop-up-rating').classList.remove('show');
                            document.body.classList.remove("noscroll");
                            document.documentElement.classList.remove("noscroll"); // for <html>
                        }
                    });
                </script>




            </body>

            </html>

<?php
        }
    }
}
?>
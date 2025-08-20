<?php
session_start();
require_once("./php/config.php");
require_once("./php/view_format.php");

$user_unique_id = htmlspecialchars($_GET['unique_id']);
$url = htmlspecialchars($_GET['url']);
$fullUrl = $url;

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
    <title>Chat</title>

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

<body onload="scrollToBottom()">
    <div class="container2">
        <!-- beginning of navigation bar -->
        <div class="before-navigation-add">
            <div class="navigation-bar-add">
                <a href="./">
                    <h3>Tora corporation</h3>
                </a>
                <a href="./profile.php"><button><i class="ri-settings-4-line"></i></button></a>
            </div>
        </div>
        <!-- end of navigation bar -->
        <div class="chat-card-user-list">
            <div class="users-card">
                <?php
                $sql_user = "SELECT * FROM user_accounts WHERE user_unique_id = ?";
                $query_user = $pdo->prepare($sql_user);
                $query_user->execute([$user_unique_id]);
                $res_user = $query_user->fetch();
                ?>
                <div class="conversation-profile">
                    <a href="./chat.php" type="name" style="text-decoration: none;color: black;"><i class="ri-arrow-left-fill"></i></a>
                    <!--  <img src="./assets/images/image1.jpeg" alt=""> -->
                    <a href="#" type="name" style="text-decoration: none;color: black;">
                        <h3><?php echo $res_user['user_name']; ?></h3>
                    </a>
                </div>
                <!--  beginning of conversations -->
                <div class="conversation-place" id="chat-container">
                    <!-- <p id="test"></p> -->
                </div>
                <!--  end of conversations -->
                <!-- beginning of input fileds -->
                <div class="input-msg">
                    <div class="image-place">
                        <img src="./assets/images/image1.jpeg" class="imagePreview" alt="">
                    </div>
                    <form action="#" id="msgSentForm">
                        <input type="text" name="sender_id" value="<?php echo $res_user['user_unique_id']; ?>" hidden>
                        <?php if (!empty($fullUrl)) {
                            echo '<textarea name="message" id="textA" placeholder="Ecrit un message...">' . $fullUrl . '</textarea>';
                        } else {
                            echo '<textarea name="message" id="textA" placeholder="Ecrit un message..."></textarea>';
                        } ?>
                        <div class="file">
                            <input type="file" accept="image/*" name="sent_image" id="select-file" hidden>
                            <label for="select-file"><i class="ri-image-fill"></i></label>
                        </div>
                        <button id="sendButton"><i class="ri-telegram-fill"></i></button>
                    </form>
                </div>
                <!-- end of input fileds -->
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
        <!-- <p id="copy-right-conns">&copy;2025 Tora Corporation. Tout droit réservé.
            <br> Propulsé par <a href="https://www.amtech-co.com">Amtech technology (Amtech-co LLC | Software)</a>
        </p> -->
    </div>
    <script>
        document.getElementById("chat-container").addEventListener("click", (e) => {
            const deleteBtn = e.target.closest(".quick-action");
            if (deleteBtn) {
                const messageId = deleteBtn.getAttribute("data-id");
                /* alert("Deleting message ID: " + messageId); */

                // Example AJAX request to delete message
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "php/delete-message.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onload = () => {
                    if (xhr.readyState == xhr.DONE && xhr.status == 200) {
                        alert(xhr.response);
                    }
                };
                xhr.send("id=" + messageId);
            }
        });
    </script>
    <script src="./assets/js/conversation.js"></script>
    <script src="./ajax/conversation.js"></script>
</body>

</html>
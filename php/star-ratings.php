<?php
session_start();
require("./config.php");

$rating_cotation = htmlspecialchars($_POST['rating-cotation']);
$comment = htmlspecialchars($_POST['comment']);
$product_seo_url = htmlspecialchars($_POST['product_seo_url']);

if (!empty($rating_cotation) && !empty($comment)) {
    $sql = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
    $res = $query->fetch(PDO::FETCH_ASSOC);

    if (isset($_SESSION['user_unique_id_session'])) {
        $unique_id = $_SESSION['user_unique_id_session'];
    } else if (isset($_COOKIE['user_unique_id_session'])) {
        $unique_id = $_COOKIE['user_unique_id_session'];
    }

    $sql2 = "INSERT INTO ratings(`user_unique_id`,`user_name`,`user_number`,`ratings`,`comment`,`user_image`,`product_seo_link`)
    VALUES(?,?,?,?,?,?,?)";
    $query2 = $pdo->prepare($sql2);
    $execute = $query2->execute([$unique_id, $res['user_name'], $res['contact_phone'], $rating_cotation, $comment, $res['user_image'], $product_seo_url]);
    if ($execute) {
        echo "success";
    } else {
        echo "<span style='color:red;font-weight:bold;text-align:center;'>L'Erreur est survenu lors de l'envoie</span>";
    }
} else {
    echo "<span style='color:red;font-weight:bold;text-align:center;'>Remplissez tous les champs s'il vous plaît!</span>";
}

<?php
/////////////////////////////////////////////////////////////////////////////////////////////
session_start();
require_once("./config.php");

$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
$user_invite_code = htmlspecialchars($_POST['user_invite_code']);
$user_account_type = "none";
$user_image = "./";
$unique_id = rand(10000, 100000);

if (empty($user_invite_code)) {
    $user_invite_code = "0";
}

if (!empty($nom) && !empty($email) && !empty($phone) && !empty($password) && !empty($user_account_type)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql_select = "SELECT * FROM user_accounts WHERE user_email = ?";
        $query_select = $pdo->prepare($sql_select);
        $query_select->execute([$email]);
        $user_obj = $query_select->fetchAll(PDO::FETCH_ASSOC);
        if (count($user_obj) > 0) {
            echo "<br><span style='color:red;'>Il ya déjà un compte avec cet email</span>";
        } else {
            $sql = "INSERT INTO user_accounts(`user_unique_id`,`user_name`,`user_phone`,`user_email`,`user_image`,`user_category`,`user_password`,`invitation_code`,`contact_phone`,`trial`)
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = $pdo->prepare($sql);
            $execution = $query->execute([$unique_id, $nom, $phone, $email, $user_image, $user_account_type, $password, $user_invite_code, "0", "free"]);
            if ($execution) {
                $_SESSION['user_unique_id_session'] = $unique_id;
                setcookie("user_unique_id_session", $unique_id, time() + (86400 * 7), "/");

                echo "success";
            } else {
                echo "<br><span style='color:red;'>L'erreur s'est produit lors de l'enregistrement!</span>";
            }
        }
    } else {
        echo "<br><span style='color:red;'>Votre email est incorrect!</span>";
    }
} else {
    echo "<br><span style='color:red;'>Remplissez tous les champs s'il vous plaît</span>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
///////////////////////////////////////////////////////////////////////////////////////////
session_start();
require_once("./config.php");

$email_ou_phone = htmlspecialchars($_POST['email_ou_phone']);
$password = htmlspecialchars($_POST['password']);

if (!empty($email_ou_phone) && !empty($password)) {
    // test if the input for email and phone number is numeric then use it as a phone number
    if (is_numeric($email_ou_phone)) {
        $sql = "SELECT * FROM user_accounts WHERE user_phone = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$email_ou_phone]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        if (count($result) > 0) {
            foreach ($result as $row) {
                // test if the password match then return success message
                if (password_verify($password, $row['user_password'])) {
                    echo "success";
                } else {
                    echo "<br><span style='color:red;'>Votre mot de passe est incorrect</span>";
                }
            }
        } else {
            echo "<br><span style='color:red;'>Votre email n'est pas enregistré!</span>";
        }
    } else {
        // if the input for phone and email is not numeric then use it as email
        if (filter_var($email_ou_phone, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM user_accounts WHERE user_email = ?";
            $query = $pdo->prepare($sql);
            $query->execute([$email_ou_phone]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                foreach ($result as $row) {
                    // test if the password match then return success message
                    if (password_verify($password, $row['user_password'])) {
                        $_SESSION['user_unique_id_session'] = $row['user_unique_id'];
                        setcookie("user_unique_id_session", $row['user_unique_id'], time() + (86400 * 7), "/");

                        echo "success";
                    } else {
                        echo "<br><span style='color:red;'>Votre mot de passe est incorrect</span>";
                    }
                }
            } else {
                echo "<br><span style='color:red;'>Votre email n'est pas enregistré!</span>";
            }
        } else {
            echo "<br><span style='color:red;'>Votre email est incorrect!</span>";
        }
    }
} else {
    echo "<br><span style='color:red;'>Remplissez tous les champs s'il vous plaît!</span>";
}

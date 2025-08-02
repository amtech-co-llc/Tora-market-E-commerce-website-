<?php
session_start();
require_once("./config.php");

$accountType = htmlspecialchars($_POST['account_type']);
$actual_number = $_POST['actual-number'];

$sql = "UPDATE user_accounts SET contact_phone = ?, user_category = ? WHERE user_unique_id = ?";
$query = $pdo->prepare($sql);
$execute = $query->execute([$actual_number, $accountType, $_SESSION['user_unique_id_session']]);
if ($execute) {
    echo "registered";
} else {
    echo "not registered";
}


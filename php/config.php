<?php
///////////////////////////////////////////////////////////////////////////////////////

$db_name = "tora_corporation";
$user_name = "root";
$password = "";
$host = "localhost";

try {
    // atablish the connection to the database
    $pdo = new PDO("mysql:host={$host};dbname={$db_name}", "{$user_name}", "{$password}");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // test if the connection was successfully etablished
    if ($pdo) {
        // return this message if the connection was successfully etablished
        //echo "conneté";
    } else {
        // return message if the connection wasn't successfully etablished
        echo "L'erreur s'est produit lors de la connection à la base de données";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

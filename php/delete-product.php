<?php
session_start();
require_once("./config.php");

// Sanitize the incoming unique_id
$unique_id = htmlspecialchars($_GET['unique_id'] ?? '');

if (!$unique_id) {
    exit("No product ID provided.");
}

// Step 1: Select all images associated with this product
$sql3 = "SELECT image_link FROM imagess WHERE product_unique_id = ?";
$query3 = $pdo->prepare($sql3);
$query3->execute([$unique_id]);

$res = $query3->fetchAll(PDO::FETCH_ASSOC);

// Step 2: Unlink image files if they exist
foreach ($res as $row) {
    $image_path = "../" . $row['image_link'];
    unlink($image_path);
}

// Step 3: Delete image records
$sql_delete_images = "DELETE FROM imagess WHERE product_unique_id = ?";
$pdo->prepare($sql_delete_images)->execute([$unique_id]);

// Step 4: Delete the product
$sql_delete_product = "DELETE FROM produit WHERE unique_id = ?";
$execute = $pdo->prepare($sql_delete_product)->execute([$unique_id]);

if ($execute) {
    header("Location: ../publication.php");
} else {
    echo "Failed to delete product.";
}

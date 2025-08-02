<?php
///////////////////////////////////////////////////////////////////////////////////////////////////
session_start();
require_once("./config.php");

$marque = htmlspecialchars($_POST['marque']);
$prix = htmlentities($_POST['prix']);
$Localisation = htmlspecialchars($_POST['Localisation']);
$categorie = htmlspecialchars($_POST['categorie']);
$sous_categorie = htmlspecialchars($_POST['sous-categorie']);
$Livraison = htmlspecialchars($_POST['Livraison']);
$etat_produit = htmlspecialchars($_POST['etat_produit']);
$nombre_produit = htmlspecialchars($_POST['nombre_produit']);
$description = htmlspecialchars($_POST['description']);
$currency = htmlspecialchars($_POST['currency']);

$nombre_de_vues = "1";
$unique_id = rand(10000, 1000000);


/* =========================== SEO FRIENDLY URL ==================================== */

// Convert to lowercase
$marque_clean = strtolower($marque);

// Replace accented characters with normal letters
$marque_clean = iconv('UTF-8', 'ASCII//TRANSLIT', $marque_clean);

// Remove apostrophes, underscores, emojis, and all non-alphanumeric characters except spaces and hyphens
$marque_clean = preg_replace('/[^a-z0-9\s-]/', '', $marque_clean);

// Replace spaces and multiple hyphens with a single hyphen
$marque_clean = preg_replace('/[\s-]+/', '-', trim($marque_clean));

// Generate the final SEO-friendly URL
$seo_url = $marque_clean . '-' . $unique_id;

/* ======================================================================================== */


$total = isset($_FILES['images']['name']) && is_array($_FILES['images']['name'])
    ? count($_FILES['images']['name'])
    : 0;


if (
    !empty($marque) && !empty($prix) && !empty($Localisation) && !empty($categorie) && !empty($sous_categorie) && !empty($Livraison) && !empty($etat_produit) && !empty($nombre_produit) && !empty($description) && isset($_FILES['images']) &&
    count($_FILES['images']['name']) > 0
) {

    $sql = "INSERT INTO produit(`titre`,`description`,`prix`,`categorie`,`sous_categorie`,`location`,`etat`,`nom_de_vues`,`unique_id`,`delivary`,`stock_number`,`currency`,`promotion`,`seo_link`,`user_unique_id`)
     VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $execution = $query->execute([$marque, $description, $prix, $categorie, $sous_categorie, $Localisation, $etat_produit, $nombre_de_vues, $unique_id, $Livraison, $nombre_produit, $currency, "disabled", $seo_url, $_SESSION['user_unique_id_session']]);
    if ($execution) {
        for ($i = 0; $i < $total; $i++) {
            $tmpName = $_FILES['images']['tmp_name'][$i];
            $fileName = basename($_FILES['images']['name'][$i]);
            $targetDir = "../uploaded-images/";
            $targetPath = $targetDir . $unique_id . "_" . $fileName;
            $saveImageTodb =  "uploaded-images/" . $unique_id . "_" . $fileName;

            if (move_uploaded_file($tmpName, $targetPath)) {

                $sql2 = "INSERT INTO imagess(`product_unique_id`,`seo_link`,`image_link`)
                 VALUES(:unique_id, :prod_name, :image_link)";
                $query2 = $pdo->prepare($sql2);
                $query2->execute([
                    ":unique_id" => $unique_id,
                    ":prod_name" => $seo_url,
                    "image_link" => $saveImageTodb
                ]);
            } else {
                echo "<span style='color:red;'>L'erreur s'est produit lors dela publication des images</span>";
            }
        }
        echo "success";
    } else {
        echo "<span style='color:red;'>L'erreur s'est produit lors de l'enregistrement!</span>";
    }
} else {
    echo "<span style='color:red;'>Remplissez tous les champs s'il vous plaît!</span>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////

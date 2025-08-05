<?php
session_start();
require("./config.php");
require_once("./view_format.php");

$viewF = new viewFormat();

// Fetch POST data
$sous_categorie = trim($_POST['sous_categorie'] ?? '');
$location = trim($_POST['location'] ?? '');
$price_min = trim($_POST['price_min'] ?? '');
$price_max = trim($_POST['price_max'] ?? '');
$currency = trim($_POST['currency'] ?? '');
$state = trim($_POST['state'] ?? '');
$marque = trim($_POST['marque'] ?? '');

// Validate sous_categorie
if (empty($sous_categorie)) {
    echo "<p>Paramètre 'sous_categorie' requis</p>";
    exit;
}

// Base query
$sql = "SELECT * FROM produit WHERE sous_categorie = :sous_categorie";
$params = [':sous_categorie' => $sous_categorie];

// Add filters dynamically
if (!empty($location)) {
    $sql .= " AND LOWER(location) LIKE LOWER(:location)";
    $params[':location'] = "%" . strtolower($location) . "%";
}

// Handle price range
if (!empty($price_min) && !empty($price_max)) {
    $sql .= " AND CAST(prix AS UNSIGNED) BETWEEN :price_min AND :price_max";
    $params[':price_min'] = $price_min;
    $params[':price_max'] = $price_max;
} elseif (!empty($price_min)) {
    $sql .= " AND CAST(prix AS UNSIGNED) >= :price_min";
    $params[':price_min'] = $price_min;
} elseif (!empty($price_max)) {
    $sql .= " AND CAST(prix AS UNSIGNED) <= :price_max";
    $params[':price_max'] = $price_max;
}

if (!empty($currency)) {
    $sql .= " AND currency = :currency";
    $params[':currency'] = $currency;
}

if (!empty($state)) {
    $sql .= " AND etat = :state";
    $params[':state'] = $state;
}

// Add filtering for marque (case-insensitive)
if (!empty($marque)) {
    $sql .= " AND LOWER(titre) LIKE :marque";
    $params[':marque'] = "%" . strtolower($marque) . "%";
}

// Add sorting logic (promotion boost)
$sql .= " ORDER BY (RAND() + IF(promotion = 'enabled', 0.4, 0)) DESC";

// Prepare and execute
$query = $pdo->prepare($sql);
$query->execute($params);
$res_prod = $query->fetchAll(PDO::FETCH_ASSOC);

// If no products found
if (!$res_prod || count($res_prod) === 0) {
    echo "<h1 style='text-align:center;color:gray;'>Pas de produit disponible</h1>";
    exit;
}

// Display products
foreach ($res_prod as $row_prod) {
    // Fetch product image
    $sql_prod_image = "SELECT * FROM imagess WHERE product_unique_id = ? LIMIT 1";
    $query_prod_image = $pdo->prepare($sql_prod_image);
    $query_prod_image->execute([$row_prod['unique_id']]);
    $res_prod_image = $query_prod_image->fetch(PDO::FETCH_ASSOC);

    if ($res_prod_image) {
?>
        <!-- beginning of card1 -->
        <div class="card1">
            <div class="image">
                <a href="./<?php echo htmlspecialchars($row_prod['seo_link']) ?>">
                    <img src="<?php echo htmlspecialchars($res_prod_image['image_link']) ?>" alt="">
                </a>
                <?php
                // State badge
                if ($row_prod['etat'] == "Utilisé") {
                    echo "<span class='product-state' style='background:rgba(255,166,0,0.63);border:1px solid orange;color:white;'>
                            <i class='ri-restart-line'></i> {$row_prod['etat']}</span>";
                } else {
                    echo "<span class='product-state' style='background:rgba(0,176,158,0.63);border:1px solid rgb(0,176,158);color:white;'>
                            <i class='ri-price-tag-3-line'></i> {$row_prod['etat']}</span>";
                }
                ?>
            </div>
            <div class="details">
                <div class="prix">
                    <h1>
                        <?php
                        if ($row_prod['currency'] == "USD") {
                            echo $viewF->formatNumberShort($row_prod['prix']) . "$";
                        } else {
                            echo $viewF->formatNumberShort($row_prod['prix']) . " " . $row_prod['currency'];
                        }
                        ?>
                    </h1>

                    <?php
                    // Fetch ratings
                    $sql_ratings = "SELECT ratings FROM ratings WHERE product_seo_link = ?";
                    $query_ratings = $pdo->prepare($sql_ratings);
                    $query_ratings->execute([$row_prod['seo_link']]);
                    $ratings = $query_ratings->fetchAll(PDO::FETCH_COLUMN);

                    $total = count($ratings);
                    if ($total > 0) {
                        $sum = array_sum($ratings);
                        $average = $sum / $total;
                        $average_rounded = round($average * 2) / 2;
                        echo "<div class='rating'>";
                        for ($i = 1; $i <= 5; $i++) {
                            if ($average_rounded >= $i) {
                                echo "<i class='ri-star-fill active'></i>";
                            } elseif ($average_rounded == $i - 0.5) {
                                echo "<i class='ri-star-half-fill active'></i>";
                            } else {
                                echo "<i class='ri-star-fill'></i>";
                            }
                        }
                        echo "</div>";
                    } else {
                        echo "<div class='rating'>
                                <i class='ri-star-fill'></i><i class='ri-star-fill'></i><i class='ri-star-fill'></i>
                                <i class='ri-star-fill'></i><i class='ri-star-fill'></i>
                              </div>";
                    }
                    ?>
                </div>

                <?php
                // Title with promotion tag
                if ($row_prod['promotion'] == "Enabled") {
                    echo "<div class='title-prom' style='display:flex;justify-content:space-between;'>
                            <h4>{$row_prod['titre']}</h4>
                            <span style='display:flex;gap:0.1em;'>Sponsorisé <i class='ri-verified-badge-fill'></i></span>
                          </div>";
                } else {
                    echo "<h4>{$row_prod['titre']}</h4>";
                }
                ?>

                <p class="description">
                    <?php
                    $description = $row_prod['description'];
                    echo (strlen($description) > 50) ? substr($description, 0, 50) . "..." : $description;
                    ?>
                </p>

                <div class="bottom-det">
                    <p><i class="ri-map-pin-2-line"></i> <?php echo htmlspecialchars($row_prod['location']) ?></p>
                    <a href="./<?php echo htmlspecialchars($row_prod['seo_link']) ?>"><button>Voir les détails</button></a>
                </div>
            </div>
        </div>
        <!-- end of card1 -->
<?php
    }
}
?>
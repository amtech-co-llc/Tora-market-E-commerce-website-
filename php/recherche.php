<?php
require_once("./config.php");

$product_name = htmlspecialchars($_GET['prod']);

$sql = "SELECT * FROM produit WHERE titre LIKE '%$product_name%' ORDER BY (RAND() + IF(promotion = 'enabled', 0.5, 0)) DESC";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($result) > 0) {
    foreach ($result as $row) {

        $sql_image = "SELECT * FROM imagess WHERE product_unique_id = ? LIMIT 1";
        $query_image = $pdo->prepare($sql_image);
        $query_image->execute([$row['unique_id']]);
        $result_image = $query_image->fetchAll(PDO::FETCH_ASSOC);

        if (count($result_image) > 0) {
            foreach ($result_image as $row_image) {

                $title = ((strlen($row['titre']) > 20) ? substr($row['titre'], 0, 20) . "..." : $row['titre']);
                $desc = ((strlen($row['description']) > 25) ? substr($row['description'], 0, 25) . "..." : $row['description']);
                if ($row['promotion'] == "Enabled") {
                    echo '
                        <ul>
                            <!-- beginning of result-article1 -->
                                <a href="./' . $row_image['seo_link'] . '">
                                <li>
                                    <img src="' . $row_image['image_link'] . '" alt="">
                                    <div class="res-details">
                                    <div style="display:flex;justify-content:space-between;align-items:center;"><h4>' . $title . ' </h4> <span style="font-size:10px;color:rgb(0, 176, 158);"><i class="ri-verified-badge-fill"></i></span></div>
                                    <p>' . $desc . '</p>
                                    </div>
                                </li>
                                </a>
                            <!-- end of result-article1 -->
                        </ul><br>
                    ';
                } else {
                    echo '
                        <ul>
                            <!-- beginning of result-article1 -->
                                <a href="./' . $row_image['seo_link'] . '">
                                <li>
                                    <img src="' . $row_image['image_link'] . '" alt="">
                                    <div class="res-details">
                                    <h4>' . $title . '</h4>
                                    <p>' . $desc . '</p>
                                    </div>
                                </li>
                                </a>
                            <!-- end of result-article1 -->
                        </ul><br>
                    ';
                }
            }
        }
    }
} else {
    echo "<h4 style='color:gray;text-align:center;'>Aucun produit ne correspond</h4>";
}

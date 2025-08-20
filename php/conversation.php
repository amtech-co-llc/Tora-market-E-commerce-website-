<?php
session_start();
require_once("./config.php");
require_once("./view_format.php");

// Helper function to fetch OG data safely
// Helper function to fetch OG data safely
function getOpenGraph($text)
{
    if (preg_match('/\b((https?:\/\/|www\.)[^\s]+)/i', $text, $matches)) {
        $url = $matches[0];
        if (!preg_match('/^https?:\/\//', $url)) {
            $url = "http://" . $url; // ensure valid URL
        }

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $html = curl_exec($ch);
        curl_close($ch);

        if (!$html) return [];

        $ogData = [];

        if (preg_match('/<meta property="og:title" content="([^"]+)"/i', $html, $m)) {
            $ogData['title'] = html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }
        if (preg_match('/<meta property="og:description" content="([^"]+)"/i', $html, $m)) {
            $ogData['description'] = html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }
        if (preg_match('/<meta property="og:image" content="([^"]+)"/i', $html, $m)) {
            $ogData['image'] = $m[1];
        }

        return $ogData;
    }
    return [];
}



$receiver_unique_id = $_POST['sender_id'];
$sender_unique_id = $_SESSION['user_unique_id_session'] ?? $_COOKIE['user_unique_id_session'];
$message = nl2br(trim($_POST['message']));
$image_dir = $_FILES['sent_image']['tmp_name'];
$sent_image = $_FILES['sent_image']['name'];
$fileSize = $_FILES['sent_image']['size'];

// Check file size (max 5MB)
if ($fileSize > 5 * 1024 * 1024) {
    die('Error: File size should be less than 5MB.');
}

$path = "../uploaded_sent_images/";
$new_imageName = "sent_image_" . rand(10000, 1000000) . ".jpeg";
$outputfile = $path . $new_imageName;
$image_to_save = !empty($sent_image) ? '<img src="./uploaded_sent_images/' . $new_imageName . '" alt="" style="margin-bottom:5px;">' : "";

// Move uploaded file if exists
if (!empty($sent_image)) {
    move_uploaded_file($image_dir, $outputfile);
}

// Fetch OG data safely
$ogData = getOpenGraph($message);
$og_title = $ogData['title'] ?? '';
$og_description = $ogData['description'] ?? '';
$og_image = $ogData['image'] ?? '';

// Insert into DB
$sql_conversation = "INSERT INTO conversation 
    (`sender_unique_id`, `receiver_unique_id`, `message`, `image_sent`, `og_title`, `og_description`, `og_image`)
    VALUES (?, ?, ?, ?, ?, ?, ?)";
$query_conversation = $pdo->prepare($sql_conversation);
$ex = $query_conversation->execute([
    $sender_unique_id,
    $receiver_unique_id,
    $message,
    $image_to_save,
    $og_title,
    $og_description,
    $og_image
]);

if ($ex) {
    echo "sent";
}

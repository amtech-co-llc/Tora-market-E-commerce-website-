<?php
session_start();
require_once("./config.php");

$receiver_unique_id = $_POST['sender_id'];
$sender_unique_id = isset($_SESSION['user_unique_id_session']) ? $_SESSION['user_unique_id_session'] : $_COOKIE['user_unique_id_session'];
$outputMessage = "";

// Original query preserved
$sql = "SELECT * FROM conversation 
        LEFT JOIN user_accounts ON user_accounts.user_unique_id = conversation.sender_unique_id
        WHERE (sender_unique_id = {$sender_unique_id} AND receiver_unique_id = {$receiver_unique_id})
           OR (receiver_unique_id = {$sender_unique_id} AND sender_unique_id = {$receiver_unique_id})
        ORDER BY msg_id";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
    foreach ($result as $row) {

        $message = makeLinksClickable($row['message']);

        // Open Graph preview if any OG fields exist
        $ogPreviewHtml = '';
        if (!empty($row['og_title']) || !empty($row['og_description']) || !empty($row['og_image'])) {
            $ogPreviewHtml = '<div class="og-preview" style="border:1px solid #ddd;padding:5px;margin-top:5px;border-radius:9px;background:rgba(119, 192, 184, 1);">';
            if (!empty($row['og_image'])) {
                $ogPreviewHtml .= '<img src="' . htmlspecialchars($row['og_image']) . '" alt="Preview Image" style="max-width:100%;height:auto;"><br>';
            }
            if (!empty($row['og_title'])) {
                $ogPreviewHtml .= '<strong>' . htmlspecialchars($row['og_title']) . '</strong>';
            }
            if (!empty($row['og_description'])) {
                $ogPreviewHtml .= '<p style="color:rgba(60, 60, 60, 1);">' . htmlspecialchars($row['og_description']) . '</p>';
            }
            $ogPreviewHtml .= '</div>';
        }


        if ($row['receiver_unique_id'] == $receiver_unique_id) {
            $outputMessage .= '
                <div class="msg me">
                    <div class="conversation-box">
                        <a href="#" type="name">' . $row['image_sent'] . '</a>
                        ' . $ogPreviewHtml . '
                        ' . $message . '
                    </div>
                    <span class="quick-action" data-id=' . $row['msg_id'] . '><i class="ri-delete-bin-line"></i></span>
                </div>
            ';
        } else {
            $outputMessage .= '
                <div class="msg other">
                    <div class="conversation-box">
                        <a href="#" type="name">' . $row['image_sent'] . '</a>
                        ' . $ogPreviewHtml . '
                        ' . $message . '
                    </div>
                </div>
            ';
        }
    }
    echo $outputMessage;
} else {
    echo "<h3 style='display:flex;justify-content:center;align-items:center;margin:auto;color:gray;'>Pas de message disponible</h3>";
}

// Function to make links clickable
function makeLinksClickable($text)
{
    $pattern = '/\b((https?:\/\/|www\.)?([a-z0-9-]+\.)+[a-z]{2,}(\S*)?)/i';
    return preg_replace_callback($pattern, function ($matches) {
        $url = $matches[0];
        if (!preg_match('/^https?:\/\//i', $url)) $url = 'http://' . $url;
        return '<a href="' . htmlspecialchars($url) . '" target="_blank" style="color:blue;" rel="noopener noreferrer">' . htmlspecialchars($matches[0]) . '</a>';
    }, $text);
}

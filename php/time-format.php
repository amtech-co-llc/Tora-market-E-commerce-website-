<?php
class passedTime
{
    function timeAgo($timestamp)
    {
        $timeAgo = strtotime($timestamp); // convert to Unix timestamp if needed
        $currentTime = time();
        $timeDifference = $currentTime - $timeAgo;

        $seconds = $timeDifference;
        $minutes = floor($seconds / 60);
        $hours   = floor($seconds / 3600);
        $days    = floor($seconds / 86400);
        $weeks   = floor($seconds / 604800);
        $months  = floor($seconds / 2629440); // average month = 30.44 days
        $years   = floor($seconds / 31553280); // average year = 365.24 days

        if ($seconds < 60) {
            return "just now";
        } elseif ($minutes < 60) {
            $unit = ($minutes <= 1) ? "m" : "m";
            return "$minutes $unit";
        } elseif ($hours < 24) {
            $unit = ($hours <= 1) ? "h" : "h";
            return "$hours $unit";
        } elseif ($days < 7) {
            $unit = ($days <= 1) ? "j" : "jrs";
            return "$days $unit";
        } elseif ($weeks < 4.3) { // approx 1 month
            $unit = ($weeks <= 1) ? "sem" : "sem";
            return "$weeks $unit";
        } elseif ($months < 12) {
            $unit = ($months <= 1) ? "m" : "m";
            return "$months $unit";
        } else {
            $unit = ($years <= 1) ? "an" : "ans";
            return "$years $unit";
        }
    }
}

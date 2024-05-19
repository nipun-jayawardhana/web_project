<?php
function getClientIp() {
    $ipAddress = '';

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    }

    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $ipArray = explode(',', $ipAddress);
        $ipAddress = trim($ipArray[0]); 
    }
 
    elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }

    else {
        $ipAddress = 'UNKNOWN';
    }

    return $ipAddress;
}

?>

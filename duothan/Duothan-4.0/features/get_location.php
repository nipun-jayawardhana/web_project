

<?php
include_once "get_ip.php";


    $apiKey = "12e9ebc4afba4013b6ea08a53b59de63";
    $ip = getClientIp();
    $location = get_geolocation($apiKey, $ip);
    $decodedLocation = json_decode($location, true);
    
    echo "Client IP Address: " . $ip;
    echo "<pre>";
    print_r($decodedLocation);
    echo "</pre>";

    function get_geolocation($apiKey, $ip, $lang = "en", $fields = "*", $excludes = "") {
        $url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$apiKey."&ip=".$ip."&lang=".$lang."&fields=".$fields."&excludes=".$excludes;
        $cURL = curl_init();

        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPGET, true);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json',
            'User-Agent: '.$_SERVER['HTTP_USER_AGENT']
        ));

        return curl_exec($cURL);
    }
?>

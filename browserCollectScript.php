<?php
    include("checkTerms.php");

    //PHP Server Variables
    $_SESSION["userAgent"] = $_SERVER["HTTP_USER_AGENT"]; 

    //PHP Cloudflare Server Variables
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $_SESSION['userIP'] = $_SERVER["REMOTE_ADDR"];
    $_SESSION['userIPCountry'] = $_SERVER["HTTP_CF_IPCOUNTRY"];

    //HTML redirect to results page
    echo('<meta http-equiv="Refresh" content="2; url=../browserCollectResults.php">');
?>
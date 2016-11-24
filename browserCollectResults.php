<?php
    include("header.php");
    include("checkTerms.php");
?>

<h2 align="center">Here are the results we were able to collect:</h2>

<?php 
    $userAgent = $_SESSION['userAgent'];
    echo("<p><b>UserAgent:</b> $userAgent</p>");

    $userIP = $_SESSION['userIP'];
    echo("<p><b>User IP Address:</b> $userIP</p>");

    $userIPCountry = $_SESSION['userIPCountry'];
    echo("<p><b>User IP Address Country:</b> $userIPCountry</p>");
?>
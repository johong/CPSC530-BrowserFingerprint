<?php include 'header.php' ?>
<html>

<head>
    <title>Browser Fingerprint Collector</title>
</head>

<body>
    <h1 align="Center">This website is intended to collect information from your browser to create a unique fingerprint.  If you did not intend to come here and do not want us to collect this information, please close the page.</h1>
    <!--If you know what you are doing and would like to submit your browser information, use this code: "BW63b6NCBSXaZ2z4"-->

    <?php
        if($_SESSION['passcodeIncorrect'] == true){
            echo '<p align="center">Passcode Incorrect</p>';
        }$_SESSION['passcodeIncorrect'] = false;
    ?>

    <form action="acceptTerms.php" method="post" align="center">
        <input type="submit" value="Start">
    </form>
</body>
</html>

<?php 
    if($_SESSION["termsAccepted"] == false){
        header('Location: index.php');
		exit;
    }
?>
<?php 
    include("header.php");

    $passcode = "BW63b6NCBSXaZ2z4";
    $passcodeGiven = $_POST['passcode'];

    if($passcode == $passcodeGiven){
        $_SESSION['termsAccepted'] = true;
        header('Location: browserCollectStart.php');
		exit;
    }else{
        $_SESSION['passcodeIncorrect'] = true;
        header('Location: index.php');
		exit;
    }
?>
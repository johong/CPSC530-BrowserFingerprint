 <?php
   session_start();

   if (!isset($_SESSION['initiated'])){
		session_regenerate_id(true);
		$_SESSION['initiated'] = true;
		$_SESSION['termsAccepted'] = false;
		$_SESSION['passcodeIncorrect'] = false;
		$_SESSION['lastSESSIDUpdate'] = time();
	}else if((time() - $_SESSION['lastSESSIDUpdate']) > 1800){
		session_regenerate_id(true);
		$_SESSION['lastSESSIDUpdate'] = time();
	}
?>

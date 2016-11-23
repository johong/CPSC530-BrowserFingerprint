<?php
   session_start();

   if (!isset($_SESSION['initiated'])){
		session_regenerate_id(true);
		$_SESSION['initiated'] = true;
		$_SESSION['lastSESSIDUpdate'] = time();
	}else if((time() - $_SESSION['lastSESSIDUpdate']) > 1800){
		session_regenerate_id(true);	//Create new session ID and delete the old one
		$_SESSION['lastSESSIDUpdate'] = time();
	}
?>

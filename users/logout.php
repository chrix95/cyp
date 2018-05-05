<?php

	session_start();

	if("email"){
		// unset($_SESSION['details']);
		// unset($_SESSION['email']);
		header("location: ../index.php");
		session_destroy();
	}

?>

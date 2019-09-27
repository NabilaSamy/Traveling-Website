<?php
	session_start();
	session_unset();
	session_destroy();
	header('Location: php-WelcomePage.php');
	exit();
?>

<?php
	session_start();
	if(isset($_SESSION['confirm-login'])){
		unset($_SESSION['username']);
		unset($_SESSION['confirm-login']);
		unset($_SESSION['hoten']);
		header('Location: ../../index.php');
	}
	else
	{
		header('Location: ../../index.php');
	}
?>
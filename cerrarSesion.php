<?php 
	session_start();
	$_SESSION['usuario'] = array();
	session_destroy();
	header("Location: index.php");
 ?>

<?php
	include_once('conexion.php');

	$usuario = $_POST['usuario'];
	$contra = $_POST['contra'];

	$sql = "SELECT COUNT(*) FROM usuario where(usuario='$usuario' and contra='$contra' and estado=1)";
	$res = mysql_query($sql);

	$row = mysql_fetch_array($res);

	if($row[0] > 0 ){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header( 'Location: principal.php' );
	}
	else{
		header( 'Location: index.php' );		
	}
?>

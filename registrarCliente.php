<?php 
	include_once('conexion.php');
	
	$nombre = $_POST['nombre'];
	$ape_paterno = $_POST['ape_paterno'];
	$ape_materno = $_POST['ape_materno'];
	$edad = $_POST['edad'];
	$dni = $_POST['dni'];
	$direccion = $_POST['direccion'];

	$sql = "INSERT INTO cliente (nombre, ape_paterno, ape_materno, edad, direccion, dni, estado) 
				VALUES ('$nombre', '$ape_paterno', '$ape_materno', $edad, '$direccion', '$dni', 1);";
	$res = mysql_query($sql);
	if ( isset( $res ) )
		echo "correcto";
	else
		echo "error";	

?>

<?php  
	include_once('conexion.php');
	$ideditar = $_POST['ideditar'];
	$nom_edit = $_POST['nom_edit'];
	$ape_pedit = $_POST['ape_pedit'];
	$ape_medit = $_POST['ape_medit'];
	$edad_edit = $_POST['edad_edit'];
	$dir_edit = $_POST['dir_edit'];
	$dni_edit = $_POST['dni_edit'];
	$sql= "UPDATE cliente SET nombre = '$nom_edit', ape_paterno='$ape_pedit', ape_materno='$ape_medit', 
			edad=$edad_edit, direccion='$dir_edit', dni=$dni_edit WHERE idcliente =$ideditar;";
	$res = mysql_query($sql);

	if ( isset($res) )
		echo "Correcto";
	else
		echo "Incorrecto";	
?>


<?php  
	include_once('conexion.php');
	$idcli=$_POST['idcli'];
	$sql = "UPDATE cliente SET estado=0  WHERE idcliente = $idcli;";// eliminamos cambiando el estado
	$res = mysql_query($sql);

	if ( isset($res) )
		echo "Correcto";
	else
		echo "Incorrecto";
?>

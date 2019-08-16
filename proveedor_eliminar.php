<?php
	include "funciones.php";
	$proveedor_id=$_GET['mi_id'];
	$consulta='select proveedor_id, nombre, rfc, telefono, correo, giro_id from proveedor
		
		WHERE proveedor_id='.$proveedor_id;
	//$result=bd_consulta($consulta);
	//while($row = mysqli_fetch_assoc($result)) 
	//{						
	//
	$consulta2='DELETE FROM proveedor WHERE proveedor_id='.$proveedor_id;
	bd_consulta($consulta2);
	
	
	header('Location: index.php?op=20');
?>


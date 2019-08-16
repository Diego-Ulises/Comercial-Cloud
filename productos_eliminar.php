<?php
	include "funciones.php";
	$producto_id=$_GET['mi_id'];
	$consulta='SELECT producto_id, nombre, precio, cantidad from producto
		WHERE producto_id='.$producto_id;
	//$result=bd_consulta($consulta);
	//while($row = mysqli_fetch_assoc($result)) 
	//{						
	//
	$consulta2='DELETE FROM producto WHERE producto_id='.$producto_id;
	bd_consulta($consulta2);
	
	
	header('Location: index.php?op=30');
?>

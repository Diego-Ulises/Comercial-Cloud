<?php
	include "funciones.php";
	$giro_id=$_GET['mi_id'];
	$consulta='SELECT giro_id, descripcion from giro
		WHERE giro_id='.$giro_id;
	//$result=bd_consulta($consulta);
	//while($row = mysqli_fetch_assoc($result)) 
	//{						
	//
	$consulta2='DELETE FROM giro WHERE giro_id='.$giro_id;
	bd_consulta($consulta2);
	
	
	header('Location: index.php?op=60');
?>
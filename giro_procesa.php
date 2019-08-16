<?php 
include "funciones.php";
$descripcion=$_GET['descripcion'];
	
	$consulta='INSERT INTO giro VALUES(DEFAULT,"'.$descripcion.'")';
	if(bd_consulta($consulta))
		echo "Se insertaron datos exitosamente ";
	else
		echo "Error en la operación de insercion";

	
	header('Location: index.php?op=60');
	?>

<?php 
include "funciones.php";
$nombre=$_GET['nombre'];
	$precio=$_GET['precio'];
	$cantidad=$_GET['cantidad'];
	
	$consulta='INSERT INTO producto VALUES(DEFAULT,"'.$nombre.'",'.$precio.
										','.$cantidad.')';
	if(bd_consulta($consulta))
		echo "Se insertaron datos exitosamente ";
	else
		echo "Error en la operación de insercion";

	
	header('Location: index.php?op=30');
	?>

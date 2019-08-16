<?php 
include "funciones.php";
$nombre=$_GET['nombre'];
	$rfc=$_GET['rfc'];
	$telefono=$_GET['telefono'];
	$correo=$_GET['correo'];
	$giro=$_GET['giro'];
	$consulta='INSERT INTO proveedor VALUES(DEFAULT,"'.$nombre.'","'.$rfc.'",'.$telefono.',"'.$correo.'",'.$giro.')';

	/*$id='SELECT MAX(`proveedor_id`) FROM `proveedor`';
	$consulta2='DELETE FROM proveedor WHERE proveedor_id='.$id;
	bd_consulta($consulta2);*/

	if(bd_consulta($consulta))

		echo "Se insertaron datos exitosamente ";
	else
		echo "Error en la operación de insercion";


	header('Location: index.php?op=20');
	?>
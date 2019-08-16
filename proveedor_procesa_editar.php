<?php 
include "funciones.php";
	$proveedor_id=$_GET['proveedor_id'];
	$nombre=$_GET['nombre'];
	$rfc=$_GET['rfc'];
	$telefono=$_GET['telefono'];
	$correo=$_GET['correo'];
	$giro_id=$_GET['giro'];


	$consulta='UPDATE proveedor SET proveedor_id='.$proveedor_id.', nombre="'.$nombre.'", rfc="'.$rfc.'", telefono="'.$telefono.'", correo="'.$correo.'", giro_id='.$giro_id.' WHERE proveedor_id='.$proveedor_id.';';
	

	if(bd_consulta($consulta))

		echo "Se insertaron datos exitosamente ";
	else
		echo "Error en la operación de insercion";


	header('Location: index.php?op=20');
	?>
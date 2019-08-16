<?php 
include "funciones.php";
$producto_id=$_GET['producto_id'];
$nombre=$_GET['nombre'];
$precio=$_GET['precio'];
$cantidad=$_GET['cantidad'];

$consulta='UPDATE producto SET producto_id='.$producto_id.', nombre="'.$nombre.'", precio='.$precio.', cantidad='.$cantidad.' WHERE producto_id='.$producto_id.';';

$bandera=bd_consulta($consulta);

if($bandera){
	echo "Se modificaron los datos exitosamente";
}else{
	echo "Error en la operación de insercion";
}

header('Location: index.php?op=30');
?>

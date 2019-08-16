
<?php 
include "funciones.php";
$giro_id=$_GET['giro_id'];
$descripcion=$_GET['descripcion'];

$consulta='UPDATE giro SET giro_id='.$giro_id.',descripcion="'.$descripcion.'" WHERE giro_id='.$giro_id.';';

$bandera=bd_consulta($consulta);

if($bandera){
	echo "Se modificaron los datos exitosamente";
}else{
	echo "Error en la operación de insercion";
}

header('Location: index.php?op=60');
?>

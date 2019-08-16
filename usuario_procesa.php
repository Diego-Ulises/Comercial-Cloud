<?php 
include "funciones.php";
$nombre=$_GET['nombre'];
$password=$_GET['password'];
$nombre_completo=$_GET['nombre_completo'];
$tipo=$_GET['group1'];

$consulta='INSERT INTO usuario VALUES(DEFAULT,"'.$nombre.'","'.$password.'","'.$nombre_completo.'","'.$tipo.'")';
if(bd_consulta($consulta)){
	echo "Se insertaron datos exitosamente ";

}else{
	echo "Error en la operación de insercion";
}

header('Location: index.php?op=50');
?>
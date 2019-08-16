<?php 
include "funciones.php";

	$usuario_id=$_GET['usuario_id'];
	$nombre=$_GET['nombre'];
	$password=$_GET['password'];
	$nombre_completo=$_GET['nombre_completo'];
	$tipo=$_GET['group1'];
	
	$consulta='UPDATE usuario SET usuario_id='.$usuario_id.', nombre="'.$nombre.'", password="'.$password.'", nombre_completo="'.$nombre_completo.'", tipo="'.$tipo.'" WHERE usuario_id='.$usuario_id.';';

	if(bd_consulta($consulta)){
		echo "Se insertaron datos exitosamente ";
	
	}else{
		echo "Error en la operación de insercion";
	}

	header('Location: index.php?op=50');
	?>
<?php
	include "funciones.php";
	$usuario_id=$_GET['mi_id'];
	$consulta='select usuario_id, nombre, password, nombre_completo from usuario
		
		WHERE usuario_id='.$usuario_id;
	//$result=bd_consulta($consulta);
	//while($row = mysqli_fetch_assoc($result)) 
	//{						
	//
	$consulta2='DELETE FROM usuario WHERE usuario_id='.$usuario_id;
	bd_consulta($consulta2);
	
	
	header('Location: index.php?op=50');
?>


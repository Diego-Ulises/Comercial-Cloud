<script>
	function alerta() {
  		alert("BIENVENIDO");
	}
</script>
<?php 
	include "funciones.php";
	$myUser=$_POST['nombre'];
	$myPassword=$_POST['password'];

	$consulta= 'Select nombre_completo as name, usuario_id, tipo FROM usuario 
				WHERE usuario.nombre="'.$myUser.'" AND usuario.password="'.$myPassword.'"';	
	
	$result = bd_consulta($consulta);
	$row = mysqli_fetch_assoc($result);
	if($row)
	{
		SESSION_START(); 
		$_SESSION['USER']=$myUser;
		$_SESSION['USER_NOMBRE']=$row['name'];
		$_SESSION['USER_ID']=$row['usuario_id'];
		$_SESSION['TIPO']=$row['tipo'];
	}
	echo "<script>"
	."alerta();"
	."window.location.href='index.php'"
	."</script>";
	echo " Se incremento inventario";
	//header('Location: index.php');
?>


<?php 

	SESSION_START(); 
	
	if(isset($_SESSION['USER']))
	{	
		$user=$_SESSION['USER'];
		$user_nombre=$_SESSION['USER_NOMBRE'];
	}
	else 
	{	
		$user=false;
		$user_nombre="No ha iniciado sesión";
	}		
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Formulario con HTML5">
		<meta name="keywords" content="HTML5, CSS3, Javascript">
		<title>Comercial Cloud</title>
		<link rel="stylesheet" href="mis_estilos.css">	
<script src="mis_scripts.js">
</script>		
	</head>
	<body> 
		<div id="documento">
			 <nav id="menu_box">  
				<ul>
					<li><a href="index.php?op=10">Compras</a></li>
					<li><a href="index.php?op=20">Proveedores</a></li>
					<li><a href="index.php?op=60">Giros</a></li>
					<li><a href="index.php?op=30">Productos</a></li>
					<li><a href="index.php?op=40">Ventas</a></li>
					<li><a href="index.php?op=50">Usuarios</a></li>
					<li><a href="index.php?op=0">Salir</a></li>
				</ul>
			</nav> 
			<?php echo $user_nombre; ?>
			
			
			
			
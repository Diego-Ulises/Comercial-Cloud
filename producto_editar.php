<?php

$mi_id=$_GET['mi_id'];

$mi_consulta='SELECT producto_id, nombre, precio, cantidad from producto WHERE producto_id='.$mi_id.';';
				
$result=bd_consulta($mi_consulta);

$row = mysqli_fetch_assoc($result);

?>

<head>
    
    <link type="text/css" rel="stylesheet" href="materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>

	<section id="form_box">	
		<header id="header_form"> Agregar producto</header>   		 
		<form action="producto_procesa_editar.php" name="miformulario" id="miformulario" method="get">  
			<main class="valign-wrapper">
	       	<div class="container">
	            <div class="row">
	                <div class="col s12 m6 offset-m3">
	                    <div class="card-panel">
	                        <div class="row">
	                            <div class="col s12">
	                                <div class="center">
	                                    <h3>Editar producto</h3>
	                                </div>
	                                <div class="input-field">				
										<input type="number" class="corto" name="producto_id" placeholder="producto_id" id="producto_id" value="<?php echo $mi_id ?>" readonly> 							  			  
									</div>	
									<div class="input-field">
										<input type="text" class="largo" name="nombre" id="nombre"  placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required> 
									</div>	
									<div class="input-field">
										<input type="number" class="extracorto"  name="precio" id="precio"	placeholder="Precio" value="<?php echo $row['precio']; ?>"	required> 
									</div>	
									<div class="input-field">				
										<input type="number" class="corto" name="cantidad" placeholder="Cantidad" id="cantidad" value="<?php echo $row['cantidad']; ?>" > 							  			  
									</div>	
									
									<div class="input-field">	
									<input type="submit" id="btnLogin" class="waves-effect waves-light btn right indigo darken-2" value="Enviar" autofocus> 
									
									<input type="reset" id="btnLogin" class="waves-effect waves-light btn right indigo darken-2" value="Cancelar" autofocus> 
								</div>
								</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </main>
</form>				
</section>
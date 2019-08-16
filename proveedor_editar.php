<?php

$mi_id=$_GET['mi_id'];

$mi_consulta='SELECT proveedor_id,nombre,rfc,telefono,correo,descripcion FROM proveedor, giro WHERE proveedor.giro_id=giro.giro_id AND proveedor_id='.$mi_id.';';				

$result=bd_consulta($mi_consulta);

$row = mysqli_fetch_assoc($result);

$mi_consulta2="SELECT giro_id,descripcion FROM giro";				
$result2=bd_consulta($mi_consulta2);
?>

<section id="form_box">	
		<header id="header_form"> Editar proveedor</header>   		 
		<form action="proveedor_procesa_editar.php" name="miformulario" id="miformulario" method="get">  
			<div class="myField">				
				<label for="proveedor_id"> ID: </label>
				<input type="number" class="corto" name="proveedor_id" id="proveedor_id" value="<?php echo $mi_id ?>"  readonly > 
				
			</div>
			<div class="myField">
				<label for="nombre"> Nombre Completo: </label>
				<input type="text" class="Largo" name="nombre" id="nombre"  title="Ingrese solo letras" value="<?php echo $row['nombre']; ?>" required> 
			</div>	
			<div class="myField">
				<label for="RFC"> RFC: </label>
				<input type="text" class="corto"  name="rfc" id="rfc"	value="<?php echo $row['rfc']; ?>"	required> 
			</div>	
			<div class="myField">				
				<label for="telefono"> Telefono: </label>
				<input type="text" class="corto" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>"  title="inserte 10 digitos" required> 
				
			</div>	
			<div class="myField">
				<label for="Correo"> Correo: </label>
				<input type="text" class="corto" name="correo" id="correo" value="<?php echo $row['correo']; ?>" placeholder="correo" required> 
			</div>	
			<div class="myField">
				<label for="giro"> Giro: </label>
				<select id="giro" name="giro" class="largo"> 
					<option value="-1"></option>
				<?php while($row2 = mysqli_fetch_assoc($result2)) 
				{		echo '<option mi_giro= "'.$row2["descripcion"].'" value="'.
										$row2["giro_id"].'">';	
					echo $row2["descripcion"];
					echo '</option>';
				}?>
				</select>
				
			</div>
			
			<div class="myField">	
				<input form="miformulario" type="submit" class="formButton" value="Enviar" autofocus> 
				<input type="reset" class="formButton" name="Cancelar" value="Cancelar" >			
			</div>	
</form>				
</section>



<?php

$mi_consulta="SELECT giro_id,descripcion
				FROM giro";				
$result=bd_consulta($mi_consulta);
//$result2=bd_consulta($consulta2);

?>

	<section id="form_box">	
		<header id="header_form"> Agregar proveedor</header>   		 
		<form action="proveedor_procesa.php" name="miformulario" id="miformulario" method="get">  
			
			<div class="myField">
				<label for="nombre"> Nombre Completo: </label>
				<input type="text" class="Largo" name="nombre" id="nombre"  title="Ingrese solo letras" required> 
			</div>	
			<div class="myField">
				<label for="RFC"> RFC: </label>
				<input type="text" class="corto"  name="rfc" id="rfc"		required> 
			</div>	
			<div class="myField">				
				<label for="telefono"> Telefono: </label>
				<input pattern="[0-9]{10}" type="number" class="corto" name="telefono" id="telefono"  title="inserte 10 digitos" required> 
				
			</div>	
			<div class="myField">
				<label for="Correo"> Correo: </label>
				<input type="text" class="corto" name="correo" id="correo"  placeholder="correo" required> 
			</div>	
			<div class="myField">
				<label for="giro"> Giro: </label>
				<select id="giro" name="giro" class="largo"> 
					<option value="-1"></option>
				<?php while($row = mysqli_fetch_assoc($result)) 
				{		echo '<option mi_giro= "'.$row["descripcion"].'" value="'.
										$row["giro_id"].'">';	
					echo $row["descripcion"];
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



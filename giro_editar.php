<?php

$mi_id=$_GET['mi_id'];

$mi_consulta='SELECT giro_id, descripcion FROM giro WHERE giro_id='.$mi_id.';';
				
$result=bd_consulta($mi_consulta);

$row = mysqli_fetch_assoc($result);

?>

<section id="form_box">	
		<header id="header_form"> Editar giro</header>   		 
		
		<form action="giro_procesa_editar.php" name="miformulario" id="miformulario" method="get">  

			<div class="myField">
				<label for="giro_id"> ID Giro: </label>
				<input type="text" class="largo" name="giro_id" id="giro_id" 
				value=<?php echo $row['giro_id']; ?>
				"placeholder="Descripcion" readonly> 
			</div>	

			<div class="myField">
				<label for="descripcion"> Descripción: </label>
				<input type="text" class="largo" name="descripcion" id="descripcion" 
				value=<?php echo $row['descripcion']; ?>
				"placeholder="Descripcion" required> 
			</div>	
			
			<div class="myField">	
				<input form="miformulario" type="submit" class="formButton" value="Enviar" autofocus> 
				<input type="reset" class="formButton" name="Cancelar" value="Cancelar" >			
			</div>	
		</form>				
</section>
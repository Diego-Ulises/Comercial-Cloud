<?php

	$mi_consulta="SELECT usuario_id, nombre FROM usuario";	
	$result=bd_consulta($mi_consulta);

	$consulta2="SELECT nombre, producto_id, precio, cantidad  FROM PRODUCTO ORDER BY nombre";
	$result2=bd_consulta($consulta2);


	if(isset($_SESSION['USER']))
	{	
		$user=$_SESSION['USER'];
		$user_nombre=$_SESSION['USER_NOMBRE'];
	    $usuario_id=$_SESSION['USER_ID'];
	}	
?>
	<section id="form_box">	
		<header id="header_form"> Agregar una venta</header>
		<form action="ventas_procesa.php" name="miformulario" id="miformulario" method="get">   		 
	
			<div class="myField">
				<label for="usuario_id"> Usuario: </label>
				<input type="number" class="corto"  name="usuario_id" id="usuario_id" value="<?php echo $usuario_id ?>" readonly> 
			</div>	
			
			<div class="myField">
				<label for="fecha"> Fecha local: </label>
				<input type="date" class="corto" name="fecha" id="fecha"  placeholder="Fecha" required> 
			</div>	
			<div class="myField">
				<label for="folio"> Folio: </label>
				<input pattern="[0-9]{4}" type="number" class="extracorto"  name="folio" id="folio" title="ingresa 4 digitos"
																					required> 
			</div>	
					
			<table id="tabla" > 
				<thead id="encabezado_tabla">
					<tr>
						<td>#</td>
						<td>Cant</td>
						<td >Artículo/Servicio</td>
						<td>Precio Unitario</td>
						<td>SubTotal</td>								
					</tr>
				</thead>	

				<?php  
				for($i=1;$i<=5;$i++)  { 
				
				echo '<tr>';
				echo '<td> <input type="text" value="'.$i.'" readonly /> </td>';
				echo '<td> <input type="number" min="1"  value="1" name="cantidad'.$i.'" 
							id="cantidad'.$i.'" onchange="actualiza('.$i.');"/>	</td> ';




				echo '<td> <select name="producto'.$i.'" id="producto'.$i.'" onchange="actualizaPrecio('.$i.');"/> ';
				echo '<option mi_precio="0" value="-1"></option>';
				mysqli_data_seek($result2, 0);
				while($row = mysqli_fetch_assoc($result2)) 
				{					
					$precioUtilidad=($row["precio"])+(($row["precio"])*10/100);
					echo '<option mi_precio= "'.$precioUtilidad.'" value="'.$row["producto_id"].'">';
					echo $row["nombre"];
					echo '</option>';
				}						
				echo '</select>	</td>';	 
				echo '<td> <input type="number" min="0" value="0.00"  id="precio'.$i.'" 
							name="precio'.$i.'"  onchange="actualiza('.$i.');"/> </td>';
				echo '<td> <input type="text"  readonly value="0.00"  id="subtotal'.$i.'" /> </td>';					
				echo '</tr>';
				
				 } ?>

				<tr>
					<td> </td>
					<td> </td>   
					<td> </td>	 
					<td> <input type="text" value="Sub Total:" readonly class="totales"/> </td>
					<td> <input type="text"  readonly value="0.00"  id="subtotal" /> </td>					
				</tr>	
				<tr>
					<td> </td>
					<td> </td>   
					<td> </td>	 
					<td> <input type="text" value="Impuestos:" readonly class="totales"/> </td>
					<td> <input type="text"  readonly value="0.00"  id="impuesto" /> </td>					
				</tr>		
				<tr>
					<td> </td>
					<td> </td>   
					<td> </td>	 
					<td> <input type="text" value="Total:" readonly class="totales"/> </td>
					<td> <input type="text"  readonly value="0.00"  id="total" /> </td>					
				</tr>						
			</table>	
			<div class="myField">	
				<input form="miformulario" type="submit" class="formButton" value="Enviar" autofocus> 
				<input type="reset" class="formButton" name="Cancelar" value="Cancelar" >			
			</div>				
		</form>		
	</section>

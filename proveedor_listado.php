<script>
	function eliminar(proveedor_id) {
  		var opcion = confirm("¿Está seguro que desea eliminar?");
  		if (opcion == true) {
  			location.href = 'proveedor_eliminar.php?mi_id='+proveedor_id;
		} 	
	}
</script>
<?php

$mi_consulta='select proveedor_id,nombre,rfc,
telefono,correo,descripcion from proveedor, 
giro where proveedor.giro_id=giro.giro_id ORDER BY proveedor_id DESC';				

$result=bd_consulta($mi_consulta);
?>

<section id="listado">	
	<header id="header_form"> Proveedores</header>
		<table id="tabla" > 
			<thead id="encabezado_tabla">
				<tr>
					<td># Id</td>
					<td>Nombre </td>
					<td >RFC</td>
					<td>Telefono</td>
					<td>Correo</td>	
					<td>Giro</td>	
					<td><a href="index.php?op=13" class="agregar"> Agregar</a></td>					
				</tr>
			</thead>	

			<?php  
			while($row = mysqli_fetch_assoc($result)) 
			{					
				echo '<tr>';
					echo '<td>'.$row["proveedor_id"].' </td>';
					echo '<td>'.$row["nombre"].' </td>';
					echo '<td>'.$row["rfc"].' </td>';
					echo '<td>'.$row["telefono"].' </td>';
					echo '<td>'.$row["correo"].' </td>';					
					echo '<td>'.$row["descripcion"].' </td>';		
					echo '<td>
							<button onclick="eliminar('.$row["proveedor_id"].')" class="buttonEliminar">Eliminar</button>
							<a href="index.php?op=21&mi_id='.$row["proveedor_id"].'">      Modificar</a>
							</td>';						
				echo '</tr>';
				
			} 
			?>
				
		</table>	
</section>



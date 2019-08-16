<script>
	function eliminar(giro_id) {
  		var opcion = confirm("¿Está seguro que desea eliminar?");
  		if (opcion == true) {
  			location.href = 'giro_eliminar.php?mi_id='+giro_id;
		} 	
	}
</script>

<?php

$mi_consulta='SELECT giro_id, descripcion from giro ORDER BY giro_id DESC;';				

$result=bd_consulta($mi_consulta);
?>

<section id="listado">	
	<header id="header_form">Giro</header>
		<table id="tabla" > 
			<thead id="encabezado_tabla">
				<tr>
					<td># Id</td>
					<td>Descripción</td>
					<td><a href="index.php?op=61" class="agregar"> Agregar</a></td>					
				</tr>
			</thead>	

			<?php  
			while($row = mysqli_fetch_assoc($result)) 
			{					
				echo '<tr>';
					echo '<td>'.$row["giro_id"].' </td>';
					echo '<td>'.$row["descripcion"].' </td>';		
					echo '<td>
							<button onclick="eliminar('.$row["giro_id"].')" class="buttonEliminar">Eliminar</button>
							<a href="index.php?op=62&mi_id='.$row["giro_id"].'">      Modificar</a>
							</td>';						
				echo '</tr>';	
			} 
			?>
				
		</table>	
</section>
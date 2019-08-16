<script>
	function eliminar(producto_id) {
  		var opcion = confirm("¿Está seguro que desea eliminar?");
  		if (opcion == true) {
  			location.href = 'productos_eliminar.php?mi_id='+producto_id;
		} 	
	}
</script>

<?php

$mi_consulta='SELECT producto_id, nombre, precio, cantidad from producto ORDER BY producto_id DESC;';				

$result=bd_consulta($mi_consulta);
?>

<section id="listado">	
	<header id="header_form">Productos</header>
		<table id="tabla" > 
			<thead id="encabezado_tabla">
				<tr>
					<td># Id</td>
					<td>Nombre </td>
					<td >Precio</td>
					<td>Cantidad</td>	
					<td><a href="index.php?op=14"class="agregar"> Agregar</a></td>					
				</tr>
			</thead>	

			<?php  
			while($row = mysqli_fetch_assoc($result)) 
			{					
				echo '<tr>';
					echo '<td>'.$row["producto_id"].' </td>';
					echo '<td>'.$row["nombre"].' </td>';
					echo '<td>'.$row["precio"].' </td>';
					echo '<td>'.$row["cantidad"].' </td>';		
					echo '<td>
							<button onclick="eliminar('.$row["producto_id"].')" class="buttonEliminar">Eliminar</button>
							<a href="index.php?op=31&mi_id='.$row["producto_id"].'">      Modificar</a>
							</td>';						
				echo '</tr>';	
			} 
			?>
				
		</table>	
</section>



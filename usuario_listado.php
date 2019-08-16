<script>
	function eliminar(usuario_id) {
  		var opcion = confirm("¿Está seguro que desea eliminar?");
  		if (opcion == true) {
  			location.href = 'usuario_eliminar.php?mi_id='+usuario_id;
		} 	
	}
</script>

<?php

$mi_consulta='SELECT usuario_id, nombre, password, nombre_completo, tipo from usuario ORDER BY usuario_id DESC';				

$result=bd_consulta($mi_consulta);
?>

<section id="listado">	
	<header id="header_form">Usuarios</header>
		<table id="tabla" > 
			<thead id="encabezado_tabla">
				<tr>
					<td># Id</td>
					<td>Nombre </td>
					<td>Nombre Completo</td>
					<td>Tipo</td>
					<td><a href="index.php?op=17" class="agregar"> Agregar</a></td>					
				</tr>
			</thead>	

			<?php  
			while($row = mysqli_fetch_assoc($result)) 
			{					
				echo '<tr>';
					echo '<td>'.$row["usuario_id"].' </td>';
					echo '<td>'.$row["nombre"].' </td>';
					//echo '<td>'.$row["password"].' </td>';
					echo '<td>'.$row["nombre_completo"].' </td>';	

					if ($row["tipo"]==1) {
						$tipo="Administrador";
					}else if ($row["tipo"]==2) {
						$tipo="Empleado";
					}else if ($row["tipo"]==3) {
						$tipo="Vendedor";
					}
					echo '<td>'.$tipo.' </td>';	
					echo '<td>
							<button onclick="eliminar('.$row["usuario_id"].')" class="buttonEliminar">Eliminar</button>
							<a href="index.php?op=51&mi_id='.$row["usuario_id"].'">      Modificar</a>
							</td>';			
					echo '</tr>';
				
			} 
			?>
				
		</table>	
</section>




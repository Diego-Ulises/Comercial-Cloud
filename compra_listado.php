<script>
	function eliminar(compra_id) {
  		var opcion = confirm("¿Está seguro que desea eliminar?");
  		if (opcion == true) {
  			location.href = 'compra_eliminar.php?mi_id='+compra_id;
		} 	
	}
</script>

<?php

$mi_consulta='SELECT c.compra_id,c.fecha_registro,
				c.folio,p.nombre AS Proveedor, c.fecha_factura,
					(SELECT SUM(cantidad*precio) AS mi_total
					FROM detalle
					WHERE compra_id=c.compra_id) AS total
			FROM compra c
			INNER JOIN proveedor p ON c.proveedor_id=p.proveedor_id
			ORDER BY c.compra_id DESC';				
$result=bd_consulta($mi_consulta);
?>

<section id="listado">	
	<style>
		#tabla {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#tabla td, #tabla th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#tabla tr:nth-child(even){background-color: #f2f2f2;}

		#tabla tr:hover {background-color: #ddd;}

		#tabla th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
		}
	</style>
	<header id="header_form"> Lista de facturas</header>
		<table id="tabla" > 
			<thead id="encabezado_tabla">
				<tr>
					<td># Id</td>
					<td>Fecha </td>
					<td >Folio</td>
					<td>Proveedor</td>
					<td>Captura</td>	
					<td>Total</td>	
					<td><a href="index.php?op=11" class="agregar"> Agregar</a></td>					
				</tr>
			</thead>	

			<?php  
			while($row = mysqli_fetch_assoc($result)) 
			{					
				echo '<tr>';
					echo '<td>'.$row["compra_id"].' </td>';
					echo '<td>'.$row["fecha_factura"].' </td>';
					echo '<td>'.$row["folio"].' </td>';
					echo '<td>'.$row["Proveedor"].' </td>';
					echo '<td>'.$row["fecha_registro"].' </td>';					
					echo '<td>'.$row["total"].' </td>';		
					echo '<td>
							<button onclick="eliminar('.$row["compra_id"].')" class="buttonEliminar">Eliminar</button>
							<a href="index.php?op=12&mi_id='.$row["compra_id"].'">      Modificar</a>
							</td>';						
				echo '</tr>';
			} ?>
				
		</table>	
</section>



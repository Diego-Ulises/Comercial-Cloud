<?php

$mi_consulta='SELECT c.venta_id,c.fecha_registro,
				c.folio,p.nombre AS usuario,
					(SELECT SUM(cantidad*precio) AS mi_total
					FROM detallev
					WHERE venta_id=c.venta_id) AS total
			FROM venta c
			INNER JOIN usuario p ON c.usuario_id=p.usuario_id
			ORDER BY c.venta_id DESC';				
$result=bd_consulta($mi_consulta);
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section id="listado">	
	<header id="header_form"> Lista de ventas</header>
	<div class="agregarventa"><br><a class="boton_personalizado" href="index.php?op=15"> Agregar una Nueva Venta</a><br><br></div>
		<table id="tabla" > 

			

			<thead id="encabezado_tabla">
				<tr>
					<td># Id</td>
					<td>Fecha </td>	
					<td>Usuario </td>
					<td>Detalle de venta 1</td>	
					<td>Detalle de venta 2</td>	
					<td>Detalle de venta 3</td>	
					<td>Detalle de venta 4</td>	
					<td>Detalle de venta 5</td>			
				</tr>
			</thead>	

			<?php  
			while($row = mysqli_fetch_assoc($result)) 
			{					
				echo '<tr>';
				echo '<td>'.$row["venta_id"].' </td>';
				echo '<td>'.$row["fecha_registro"].' </td>';
				echo '<td>'.$row["usuario"].' </td>';	
				$detalleventa='SELECT detallev_id, det.cantidad, det.precio, venta_id, det.producto_id, p.nombre FROM detallev AS det INNER JOIN producto AS p ON det.producto_id=p.producto_id WHERE det.venta_id='.$row["venta_id"];		
				$resultdetalle=bd_consulta($detalleventa);
				$cont=0;
				while($rowdetalle = mysqli_fetch_assoc($resultdetalle)){

					$cont=$cont+1;
				echo '<td>
						<div class="w3-container">
						<button onclick="document.getElementById(\'id01\').style.display=\'block\'">'.$rowdetalle["nombre"].'</button>
						<div id="id01" class="w3-modal">
					    <div class="w3-modal-content">
					      <header class="w3-container w3-teal"> 
					        <span onclick="document.getElementById(\'id01\').style.display=\'none\'" 
					        class="w3-button w3-display-topright">&times;</span>
					        <h2>Detalle de Venta</h2>
					      </header>
					      <div class="w3-container">


						      <table id="tabla" > 
								<thead id="encabezado_tabla">
									<tr>
										<td>Venta ID</td>
										<td>Detalle ID</td>
										<td>Cantidad</td>	
										<td>Precio </td>
										<td>Producto</td>			
									</tr>
								</thead>
								<tr>




									<td>'.$rowdetalle["venta_id"].' </td>
									<td>'.$rowdetalle["detallev_id"].' </td>
									<td>'.$rowdetalle["cantidad"].' </td>
									<td>'.$rowdetalle["precio"].' </td>
									<td>'.$rowdetalle["nombre"].' </td>



									 
								</tr>
								</table>
					      </div>
					      <footer class="w3-container w3-teal a">
					      </footer>
					    </div>
					  </div>
						</div>
					</td>';
					}
					$cont=0;
				echo '</tr>';
			} ?>	
		</table>	
</section>



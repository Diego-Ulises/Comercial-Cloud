<script>
	function alerta() {
  		alert("Venta realizada exitosamente");
	}
</script>
<?php
	include "funciones.php";
	$usuario_id=$_GET['usuario_id'];
	$fecha=$_GET['fecha'];
	$folio=$_GET['folio'];
	
	$consulta='INSERT INTO venta VALUES(DEFAULT,'.$folio.',"'.$fecha.'",'.$usuario_id.')';
	
	if(bd_consulta($consulta)){
    for($partida=1;$partida<=5;$partida++)
  	{
  		$articulo=$_GET['producto'.$partida];
  		$precio=$_GET['precio'.$partida];
  		$cantidad=$_GET['cantidad'.$partida];
  		echo $articulo."<br>";
  		echo $precio."<br>";
  		echo $cantidad."<br>";
  		if($articulo!=-1)
  		{

		        $con = 'select cantidad from producto where producto_id = '.$articulo;
		        $cant = bd_consulta($con);
		        $row = mysqli_fetch_assoc($cant);
						//aqui comparo que no compre más de lo que no tengo
		        if ($cantidad <= $row['cantidad']) {

		  $consulta='INSERT INTO detallev VALUES(DEFAULT,'.$cantidad.','.$precio.',(SELECT MAX(venta_id) FROM venta),'.$articulo.');';

		  			if(bd_consulta($consulta)){
		  				echo "<br>Se inserto partida ".$partida." exitosamente";
		  			}else{
		  				echo "Error en la operación de insercion insrt";
		        	}

		  				$consulta='UPDATE producto SET cantidad=(cantidad-'.$cantidad.') WHERE producto_id='.$articulo;
		              if(bd_consulta($consulta))
		                echo " Se incremento inventario";
		              else
		                echo "Error en la operación de insercion upda";
		  				}else{echo "             \tNo puedes  comprar más del stock";}
  		}
  	}
		echo "<script>"
	."alerta();"
	."window.location.href='index.php?op=40'"
	."</script>";
	}else{
		echo "  Error en la operación de insercion ".$idusr." ".$folio." ".$cliente;

		

}
//header('Location: index.php?op=40');
?>

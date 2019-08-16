<?php	
include "funciones.php";
include "cabecera.php";


if(!$user) include('autenticar.php');
else if(isset($_GET['op']))
		switch ($_GET['op']) 
		{
			case "0":  include('salir.php');break; 

			//case "10": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('compra_listado.php');break;

			case "10": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('compra_listado.php'); break;		
			case "11": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('compra_nuevo.php');break;		
			case "12": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('compra_editar.php');break;

			case "14": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('productos_nuevo.php');break;
			case "30": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('productos_listado.php');break;
			case "31": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('producto_editar.php');break;


			case "40": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) || ($_SESSION['TIPO']==3) )include('ventas_listado.php');break;
			case "15": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) || ($_SESSION['TIPO']==3) )include('ventas_nuevo.php');break;
			case "16": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) || ($_SESSION['TIPO']==3) )include('ventas_editar.php');break;

			case "50": if($_SESSION['TIPO']==1) include('usuario_listado.php');break;
			case "17": if($_SESSION['TIPO']==1) include('usuario_nuevo.php');break;
			case "51": if($_SESSION['TIPO']==1) include('usuario_editar.php');break;

			case "13": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('proveedor_nuevo.php');break;
			case "20": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('proveedor_listado.php');break;
			case "21": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('proveedor_editar.php');break;

			case "60": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('giro_listado.php');break;
			case "61": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('giro_nuevo.php');break;
			case "62": if(($_SESSION['TIPO']==1) || ($_SESSION['TIPO']==2) )include('giro_editar.php');break;

			
			
			
		}
include "pie.php";			
?>
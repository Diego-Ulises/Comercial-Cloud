<head>
    
    <link type="text/css" rel="stylesheet" href="materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<?php

$mi_consulta="SELECT giro_id, descripcion from giro;";				
$result=bd_consulta($mi_consulta);

?>

	<section id="form_box">	
		<header id="header_form"> Agregar nuevo giro</header>   		 
		<form action="giro_procesa.php" name="miformulario" id="miformulario" method="get">  
			<main class="valign-wrapper">
       	<div class="container">
            <div class="row">
                <div class="col s12 m6 offset-m3">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12">
                                <div class="center">
                                    <h3>Agregar giro</h3>
                                </div>
								<div class="input-field">
									<input type="text" class="largo" name="descripcion" id="descripcion"  placeholder="Descripcion" required> 
								</div>	
								
								<div class="input-field">	
									<input type="submit" id="btnLogin" class="waves-effect waves-light btn right indigo darken-2" value="Enviar" autofocus> 
									
									<input type="reset" id="btnLogin" class="waves-effect waves-light btn right indigo darken-2" value="Cancelar" autofocus> 
								</div>
								</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </main>
		</form>				
	</section>
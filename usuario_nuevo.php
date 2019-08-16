<?php

$mi_consulta="SELECT usuario_id, nombre, password, nombre_completo from usuario";	
			
$result=bd_consulta($mi_consulta);

?>
<head>
    
    <link type="text/css" rel="stylesheet" href="materialize.min.css" media="screen,projection" />

	</head>

	<section id="form_box">	
		<header id="header_form"> Agregar usuario</header>   		 
		<form action="usuario_procesa.php" name="miformulario" id="miformulario" method="get">  
			<main class="valign-wrapper">
       	<div class="container">
            <div class="row">
                <div class="col s12 m6 offset-m3">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12">
                                <div class="center">
                                    <h3>Agregar usuario</h3>
                                </div>
								<div class="input-field">
									<input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario" title="Ingrese solo letras" required> 
								</div>

								<div class="input-field">
									<input type="password" name="password" id="password" placeholder="Contraseña" size="10"  title="ingresa 10 caracteres" required>
								</div>
								<div class="input-field">
									<input type="text" class="Largo" name="nombre_completo" id="nombre_completo"  title="Ingrese solo letras" placeholder="Nombre completo" required> 
								</div>	
								<div>
								    <p>
								      <label>
								        <input class="with-gap" name="group1" type="radio" value="1" checked />
								        <span>Administrador</span>
								      </label>
								    </p>
								    <p>
								      <label>
								        <input class="with-gap" name="group1" type="radio" value="2" />
								        <span>Empleado</span>
								      </label>
								    </p>
								    <p>
								      <label>
								        <input class="with-gap" name="group1" type="radio" value="3" />
								        <span>Vendedor</span>
								      </label>
								    </p>
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



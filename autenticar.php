<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link type="text/css" rel="stylesheet" href="materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<section id="form_box">
	<header id="header_form"> Introduce usuario y Contraseña</header>
	<form action="valida_usuario.php" name="miformulario" id="miformulario" method="post">   		 
			
		<main class="valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 m6 offset-m3">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12">
                                <div class="center">
                                    <h3>Iniciar sesión</h3>
                                </div>
                                <div class="input-field">
									<input type="text" name="nombre" id="nombre" placeholder="Usuario" required> 
								</div>
									<br>
								<div class="input-field">
									<input type="password" name="password" id="password" placeholder="Contraseña"  required>
								</div>
								<br>
								<div class="input-field">	
									<input type="submit" id="btnLogin" class="waves-effect waves-light btn right indigo darken-2" value="Enviar" autofocus> 
								</div>
								<!--
                                <div class="input-field">
                                    <h6 class="font-size-5">Si aun no tienes cuenta puedes <br><a href="/registro">registrarte aqui</a></h6>
                                </div>
								-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>






	</form>  
</section>




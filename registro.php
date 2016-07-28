<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Phobet</title>
	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>


	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
	</script>


	<style>
		*{
			box-sizing:border-box !important; 
		}

		.link{
			text-decoration: none !important;
			color: #31B0D5;
			font-size: 12px;
		}
		.icoMedium{
			width: 60px;		
			height:60px;
		}

		.icoLarge{
			width: 260px;		
			height:260px;
		}

		.form-control{
			font-size: 18px !important;
			padding: 8px !important;
			background: #FFFFFF !important;
			padding: 10px !important;
			border-color: rgba(0,0,0,0.2);
			border-radius: 2px !important;
			box-sizing:border-box;
			
		}
		.form-control:focus{
			box-shadow: none !important;
		}

		footer{
		width: 100%;
		height: 30px;	
		position:absolute;
		bottom:0;
		left:0;
		text-align: center;
		border-top: solid;
		border-width: 1px;
		border-color: rgba(0,0,0,0.08);
		padding: 5px;
		}
	</style>
    
</head>
<body>
	<div class="row-fluid">
		<div class="row-fluid">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<center><img src="./img/icon.png" class="icoLarge visible-xs"  alt=""></center>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="row-fluid">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<center><img src="./img/icon.png" class="icoMedium visible-sm"  alt=""></center>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>


	<div class="row-fluid">
		<div class="row-fluid"></div>
		<div class="row-fluid">
			<div class="col-md-3  text-right visible-lg visible-md"><br><br><img src="./img/icon.png" class="icoMedium" alt=""></div>
			
			<div class="col-md-9 text-left"><br><h2>Mejora tus fotos en todo momento.</h2>
				Rápido & sencillo.
			</div>
		</div>
	</div>	
	
	<div class="row-fluid">

		<div class="col-md-12 text-center">
			<hr>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h3>Registro</h3><br>

			<form action="iregistro.php" method="post">
				
				<input type="text" name="nombre" class="form-control"  autocomplete="off"  placeholder="Nombre completo" Autofocus><br>
				<input type="text" name="telefono" class="form-control"  autocomplete="off"  placeholder="Teléfono o correo electrónico" Autofocus><br>
				<input type="text" name="nickname" class="form-control"  autocomplete="off"  placeholder="Nombre de usuario" Autofocus><br>
				<input type="password" name="pass" class="form-control" autocomplete="off"   placeholder="Contraseña" Autofocus><br>
				<button class="btn btn-info btn-lg btn-block" data-toggle="tooltip" title="Al registrarte, aceptas las Condiciones de Servicio y la Política de Privacidad, incluyendo el Uso de Cookies. Otros podrán encontrarte por correo electrónico o por número de teléfono cuando sea proporcionado." data-placement="bottom">Regístrate</button>
			</form>
			<br>
			<hr>
			¿Tienes cuenta en Phobet?<br><a href="login.php">Inicia sesión</a>

			
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	

	<footer class="visible-lg">
		<div class="row-fluid ">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="col-md-3"><a class="link" href="login.php">Inicio</a></div>
				<div class="col-md-3"><a class="link" href="#">Trabajo</a></div>
				<div class="col-md-3"><a class="link" href="#">Blog</a></div>
				<div class="col-md-3"><a class="link" href="#">Contacto</a></div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</footer>

</body>
</html>
<?php 
session_start();
if ($_SESSION['permiso']==2) {
header("Location: index.php");
}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Phobet</title>
	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style>
		.icoMedium{
			width: 60px;		
			height:60px;
		}

		.icoLarge{
			width: 260px;		
			height:260px;
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
		<div class="col-md-12">
			<div class="col-md-6 visible-lg visible-md" >
				<img src="./img/g.gif"alt="">
			</div>
			<div class="col-md-6">
				<br><br>
				<div class="row-fluid">
					<div class="col-md-12 text-left">
						<div class="col-md-4 text-left">
							<h5>Inicio Sesión</h5>
						</div>
						
						
					</div>
				</div>
				<hr>
				<div class="row-fluid">
					
					<div class="col-md-4">
						<form action="inicio_sesion.php" method="post">
							<input type="text" class="form-control" name="username" placeholder='Usuario o e-mail'><br>
							<input type="password" class="form-control" name="pass" placeholder='Contraseña'>
							<br>
							<button type="submit" class="btn btn-success" aria-label="Left Align">
							  <span class="glyphicon glyphicon-flash glyphicon-align-left" aria-hidden="true"></span>Iniciar
							</button>


						</form>

					</div>

					<br><div class="col-md-8 text-center">
					<hr class="visible-xs">
							<h5>¿Eres nuevo en Phobet?</h5>
					<h4>¡Regístrate para empezar a mejorar tus fotos!</h4><br>
							<a href="registro.php" class="btn btn-info" aria-label="Left Align" >
							  <span class="glyphicon glyphicon-flash glyphicon-align-left" aria-hidden="true" ></span>Regístrate 
							</a>
							
							

					</div>
				</div>
				<div class="row-fluid">
					
				</div>
				<br><br><br>
			</div>
		</div>
	</div>
	
</body>
</html>

<?php 
	}
 ?>
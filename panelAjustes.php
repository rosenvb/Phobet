<?php
	session_start();
	if ($_SESSION['permiso']==2) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajustes generales.</title>
	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<style>
		.icoMedium{
			width: 60px;		
			height:60px;
		}

		.icoLarge{
			width: 260px;		
			height:260px;
		}

		.datos_ajuste{
			font-family: sans-serif;
			font-weight: 900;

		}
		.amarilla{
			color: #FBD42E;
		}

		.separator_V{
			width: 100%;
			height: 90px;
		}
		.separator_V1{
			width: 100%;
			height: 10px;
		}
		.mostra{
			background: rgba(0,0,0,0);
			padding: 10px;
			box-sizing:border-box;
			color: #5CB85C;
		}

		.mostra:hover{
			background: rgba(0,0,0,0);
			padding: 10px;
			opacity: 0.8;
			cursor: pointer;
			box-sizing:border-box;
			color: #337AB7;
		}

		.stxt{
			font-size: 10px;
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
	<div class="separator_V visible-lg visible-md"></div>
	<div class="separator_V1 visible-xs"></div>

	
	<hr>
	<?php 
		
	 ?>
	<div class="row-fluid">
		<div class="col-md-1"></div>
		<div class="col-md-10">
				<div class="row-fluid">
					<div class="col-md-12">
						<?php 
							if ($_SESSION['permiso']==2) {
								$plan = "Golden";
							}
						 echo "<h4>Bienvenido: ".utf8_encode($_SESSION['nombre'])."</h4>"; 
						 echo "<span class='datos_ajuste'>Tipo de usuario: ".utf8_encode($_SESSION['permiso'])."</span><br>"; 
						 echo "<span class='datos_ajuste'>Plan contratado: ".utf8_encode($plan)."</span> <i class='fa fa-star amarilla' aria-hidden='true'></i><br>"; 
						 echo "<span class='datos_ajuste'>E-mail: ".utf8_encode($_SESSION['usuario'])."@gmail.com</span><br>"; 
						 ?>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="col-md-12"><br>
						<div class="row-fluid">
							<div class="col-md-4 mostra text-center" onClick="action_1()">
								<i class="fa fa-upload fa-3x" aria-hidden="true"></i><br>
								<span class="stxt">Nuevo</span>
							</div>
							<div class="col-md-4 mostra text-center" onClick="action_2()">
								<i class="fa fa-3x fa-star" aria-hidden="true"></i><br>
								<span class="stxt">Calificación</span>
							</div>
							<div class="col-md-4 mostra text-center" onClick="action_3()">
								<i class="fa fa-3x fa-area-chart" aria-hidden="true"></i><br>
								<span class="stxt">Estadisticas</span>
							</div>
						</div>
						<div class="row-fluid">
							<div class="col-md-4 mostra text-center" onClick="action_4()">
								<i class="fa fa-3x fa-cog" aria-hidden="true"></i><br>
								<span class="stxt">Configuración Logo</span>
							</div>
							<div class="col-md-4 mostra text-center" onClick="action_5()">
								<i class="fa fa-3x fa-life-ring" aria-hidden="true"></i><br>
								<span class="stxt">Tutoriales</span>
							</div>
							<div class="col-md-4 mostra text-center" onClick="action_6	()">
								<i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i><br>
								<span class="stxt">Cambiar Plan</span>
							</div>
						</div>


					</div>
				</div>

		</div>
		<div class="col-md-1"></div>
	</div>
	<br><br><br><br><br>
	<div class="row-fluid">
		<div class="col-md-12"><br><br><hr>
			<div class="row-fluid">
	            <div class="col-md-2 lf lf"></div>
	            <div class="col-md-2 lf"></div>
	            <div class="col-md-2 lf">
	                <div class="row-fluid"></div>
	                <div class="row-fluid">
	                    <center>
	                        <a class="liga" href="javascript:history.back(1)"><i class="fa fa fa-arrow-left fa-2x verde" aria-hidden="true"></i><span class="back">&nbspRegresar</span></a>
	                    </center>
	                </div>
	                <div class="row-fluid"></div>
	            </div>
	            <div class="col-md-2 lf">
	                <div class="row-fluid"></div>
	                <div class="row-fluid" >
	                    <center>
	                        <a class="liga" href="csesion.php"><i class="fa fa-sign-out fa-2x red" aria-hidden="true"></i><span class="out">
	                            &nbspSalir</span></a>
	                    </center>
	                </div>
	                <div class="row-fluid"></div>
	            </div>
	            <div class="col-md-2 lf"></div>
	            <div class="col-md-2 lf"></div>
	            
	        </div>
		</div>
	</div>
	<hr>

	<script>
		function action_1 () {
			window.location="index.php";
		}

		function action_2 () {
			window.location="index.php";
		}

		function action_3 () {
			window.location="index.php";
		}

		function action_4() {
			window.location="clogo.php";
		}

		function action_5 () {
			window.location="index.php";
		}

		function action_6 () {
			window.location="index.php";
		}

	</script>
		
</body>
</html>


<?php 
        
        }else{
            include("login.php");
        }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<style>
			.text_1{
				font-family: sans-serif;
				padding: 0px;
				font-size: 10px;
				text-align: center;				
			}
			.heigtVariation{
				line-height:1 !important;
				font-family: sans-serif;
				padding: 4px;
				font-size: 10px;
				text-align: center;
			}
			a{
				text-decoration: none !important;
			}

			.borde-gris{
				border-left: solid;
				border-top: solid;
				border-bottom: solid;
				border-width: 1px;
				border-color: rgba(0,0,0,0.1);
				border-radius: 5px;
			}

			.borde-gris1{
				border-right: solid;
				border-width: 1px;
				border-color: rgba(0,0,0,0.1);
				border-radius: 5px;
			}
			.hovButton{}
			.hovButton:hover{
				background: rgba(0,0,0,0.02);
			}
			.hovButton:active{
				background: rgba(0,0,0,0.05);
			}

			.activo{
				background: rgba(0,0,0,0.05);
			}
			
			.panelEdition{
				height: 200px;
				border:solid;
				border-color: rgba(0,0,0,0.1);
				border-width: 1px;
				visibility: hidden;
			}

			.panelEdition1{
				height: 200px;

			}
			.zi1{
				position: absolute;
				z-index: 3;
				margin-top:-217px;
				width: 100%;
				max-width: 100%;
				min-width: 100%;
				height: 300px;
				max-height: 300px;
				min-height: 300px;
				background: rgba(0,0,0,0.03);
				padding: 30px;
				text-align: justify!important;

			}
			.zi2{
				position: absolute;
				z-index: 4;
				margin-top:-217px;
				width: 100%;
				max-width: 100%;
				min-width: 100%;
				height: 300px;
				max-height: 300px;
				min-height: 300px;
				background: rgba(0,0,0,0.03);
				padding: 30px;
				text-align: justify!important;

			}
			.zi3{
				position: absolute;
				z-index: 5;
				margin-top:-217px;
				width: 100%;
				max-width: 100%;
				min-width: 100%;
				height: 300px;
				max-height: 300px;
				min-height: 300px;
				background: rgba(0,0,0,0.03);
				padding: 30px;
				text-align: justify!important;

			}
			.zi4{
				position: absolute;
				z-index: 6;
				margin-top:-217px;
				width: 100%;
				max-width: 100%;
				min-width: 100%;
				height: 300px;
				max-height: 300px;
				min-height: 300px;
				background: rgba(0,0,0,0.03);
				padding: 30px;
				text-align: justify!important;

			}
			.zi5{
				position: absolute;
				z-index: 7;
				margin-top:-217px;
				width: 100%;
				max-width: 100%;
				min-width: 100%;
				height: 300px;
				max-height: 300px;
				min-height: 300px;
				background: rgba(0,0,0,0.03);
				padding: 30px;
				text-align: justify!important;

			}
			.zi6{
				position: absolute;
				z-index: 8;
				margin-top:-217px;
				width: 100%;
				max-width: 100%;
				min-width: 100%;
				height: 300px;
				max-height: 300px;
				min-height: 300px;
				background: rgba(0,0,0,0.03);
				padding: 30px;
				text-align: justify!important;

			}

			.azul{
				color: #23527C;
			}

			.inL{
				position: absolute;
				z-index: 8;
				display: inline-block !important;
				width: 100%;
				padding-left: 4%;
				background: rgba(0,0,0,0.0);
				;
			}
			.lf{
				float: left !important;
				position: relative;
				width: 16%;
				padding-top: 9px !important;
				padding-left: 1px !important;
				padding-right: 1px !important;
				padding-bottom: 1px !important;
			}




			input[type=range] {
			  -webkit-appearance: none;
			  width: 100%;
			  margin: 19.15px 0;
			}
			input[type=range]:focus {
			  outline: none;
			}
			input[type=range]::-webkit-slider-runnable-track {
			  width: 100%;
			  height: 9.7px;
			  cursor: pointer;
			  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0), 0px 0px 0px rgba(13, 13, 13, 0);
			  background: rgba(35, 82, 124, 0.78);
			  border-radius: 25px;
			  border: 0px solid #000101;
			}
			input[type=range]::-webkit-slider-thumb {
			  box-shadow: 0px 0px 1px #000031, 0px 0px 0px #00004b;
			  border: 0px solid #ffffff;
			  height: 48px;
			  width: 50px;
			  border-radius: 50px;
			  background: #ffffff;
			  cursor: pointer;
			  -webkit-appearance: none;
			  margin-top: -19.15px;
			}
			input[type=range]:focus::-webkit-slider-runnable-track {
			  background: rgba(52, 121, 184, 0.78);
			}
			input[type=range]::-moz-range-track {
			  width: 100%;
			  height: 9.7px;
			  cursor: pointer;
			  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0), 0px 0px 0px rgba(13, 13, 13, 0);
			  background: rgba(35, 82, 124, 0.78);
			  border-radius: 25px;
			  border: 0px solid #000101;
			}
			input[type=range]::-moz-range-thumb {
			  box-shadow: 0px 0px 1px #000031, 0px 0px 0px #00004b;
			  border: 0px solid #ffffff;
			  height: 48px;
			  width: 50px;
			  border-radius: 50px;
			  background: #ffffff;
			  cursor: pointer;
			}
			input[type=range]::-ms-track {
			  width: 100%;
			  height: 9.7px;
			  cursor: pointer;
			  background: transparent;
			  border-color: transparent;
			  color: transparent;
			}
			input[type=range]::-ms-fill-lower {
			  background: rgba(18, 43, 64, 0.78);
			  border: 0px solid #000101;
			  border-radius: 50px;
			  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0), 0px 0px 0px rgba(13, 13, 13, 0);
			}
			input[type=range]::-ms-fill-upper {
			  background: rgba(35, 82, 124, 0.78);
			  border: 0px solid #000101;
			  border-radius: 50px;
			  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0), 0px 0px 0px rgba(13, 13, 13, 0);
			}
			input[type=range]::-ms-thumb {
			  box-shadow: 0px 0px 1px #000031, 0px 0px 0px #00004b;
			  border: 0px solid #ffffff;
			  height: 48px;
			  width: 50px;
			  border-radius: 50px;
			  background: #ffffff;
			  cursor: pointer;
			  height: 9.7px;
			}
			input[type=range]:focus::-ms-fill-lower {
			  background: rgba(35, 82, 124, 0.78);
			}
			input[type=range]:focus::-ms-fill-upper {
			  background: rgba(52, 121, 184, 0.78);
			}
			.form-control{
				font-family: sans-serif;
				font-size: 18px;
			}

			.txtEleg{
				font-size: 10px !important;
			}
		</style>

</head>
<body>

	<div class="row-fluid" id="panelPrincipal">
		<div class="row-fluid">
			<br>
			<div class="col-md-12 inL">
				<!--Botón Edición-->
				<div class="col-md-2 borde-gris text-center hovButton lf" onClick="cambiarActivo(1)" id="btn_1">
					<p class="heigtVariation">
						<a href="#">
							<i class="fa fa-pencil fa-3x" aria-hidden="true"></i>
						</a>
					</p>
				</div>

				<!--Botón Edición-->
				<div class="col-md-2 borde-gris text-center hovButton  lf" onClick="cambiarActivo(2)" id="btn_2">
					<p class="heigtVariation">
						<a href="#">
							<i class="fa fa-align-justify fa-3x" aria-hidden="true"></i>
						</a>
					</p>
				</div>

				<!--Botón Edición-->
				<div class="col-md-2 borde-gris text-center hovButton lf" onClick="cambiarActivo(3)" id="btn_3">
					<p class="heigtVariation">
						<a href="#">
							<i class="fa fa-arrows-alt fa-3x" aria-hidden="true"></i>

						</a>
					</p>
				</div>

				<!--Botón Edición-->
				<div class="col-md-2 borde-gris text-center hovButton lf" onClick="cambiarActivo(4)" id="btn_4">
					<p class="heigtVariation">
						<a href="#">
							<i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i>

						</a>
					</p>
				</div>

				<!--Botón Edición-->
				<div class="col-md-2 borde-gris text-center hovButton lf" onClick="cambiarActivo(5)" id="btn_5">
					<p class="heigtVariation">
						<a href="#">
							<i class="fa fa-hand-pointer-o fa-3x" aria-hidden="true"></i>

						</a>
					</p>
				</div>

				<!--Botón Edición-->
				<div class="col-md-2 borde-gris borde-gris1 text-center hovButton lf" onClick="cambiarActivo(6)" id="btn_6">
					<p class="heigtVariation">
						<a href="#">
							<i class="fa fa-check-square fa-3x" aria-hidden="true"></i>
						</a>
					</p>
				</div>
				
			</div>
		</div>
		<div class="row-fluid">
			<div class="row-fluid text-center">
				<div class="zi0 panelEdition1" id="panel_0">
					<p class="azul "><h2 class="azul">¿Qué deseas hacer?</h2></p>
					<i class="fa fa-cogs fa-3x azul"  aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
					<i class="fa fa-users fa-3x azul"  aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
					<i class="fa fa-bolt fa-3x azul"  aria-hidden="true"></i>

				</div>
				<div class="zi1 panelEdition" id="panel_1">
					<center>
                    Configuración del texto
	                </center>
	                <label class="txtEleg">Texto primera linea:</label><br>
	                <input type="text" class="form-control" id="mainText" size="40" onkeyup="cambiarTexto()" value="" autofocus><br>
	                
	                <label class="txtEleg">Texto segunda linea:</label><br>
	                <input type="text" class="form-control" id="lineadosText" size="40" onkeyup="cambiarTexto()" value="" ><br>

	                <label class="txtEleg">Texto tercera linea:</label><br>
	                <input type="text" class="form-control" id="lineatresText" size="40" onkeyup="cambiarTexto()" value="">
	                
				</div>


				<div class="zi2 panelEdition" id="panel_2">
					<center>Alineación del texto<hr>	
                    <div class="contenedorRadio lf "><i class="fa fa-align-left fa-2x hovButton" onclick="changeAlign('left')"  aria-hidden="true"></i></div>
                    <div class="contenedorRadio lf"><i class="fa fa-align-center fa-2x hovButton" onclick="changeAlign('center')"  aria-hidden="true"></i> </input></div>
                    <div class="contenedorRadio lf"><i class="fa fa-align-right fa-2x hovButton" onclick="changeAlign('right')"  aria-hidden="true"></i></div></center>

		

				</div>
				
				<div class="zi3 panelEdition" id="panel_3">
					<label class="txtEleg">Nivel del texto en vertical</label><br>
	                <input type="range" name="points" min="0" max="100" value="100" onInput="valueRange()" id="rangeV"> <label id="valorRange" class="txtEleg">100</label><br>

	                <label class="txtEleg">Nivel del texto en horizontal</label><br>
	                <input type="range" name="points" min="0" max="100" value="0" onInput="valueRangeH()" id="rangeH"> 
	                <label id="valorRangeT" class="txtEleg">0</label>



				</div>
				
				<div class="zi4 panelEdition" id="panel_4">
					<input type="checkbox" id="logoVerde" value="0" onchange="logoVerdestatus()"/> <label class="txtEleg">Logo</label>
	                <br>
	                <label class="txtEleg">Logo V</label>
	                <input type="range" name="points" min="0" max="100" value="0" onInput="valueLRange()" id="rangeLV"> <label id="valorLV" class="txtEleg">0</label><br>

	                <label class="txtEleg">Logo H</label>
	                <input type="range" name="points" min="0" max="100" value="0" onInput="valueLRange()" id="rangeLH"> <label id="valorLH" class="txtEleg">0</label><br>

	                <label class="txtEleg">Tamaño</label>
	                <input type="range" name="points" min="160" max="1000" value="160" onInput="valueLRange()" id="sizeL"> <label id="valorSize" class="txtEleg">0</label>

	

				</div>
				
				<div class="zi5 panelEdition" id="panel_5">
					<input type="checkbox" id="sombraCheck" value="0" onchange="sombra()"/> <label class="txtEleg">Sombra</label>
	                <br>
	                <label class="txtEleg">Sombra V</label>
	                <input type="range" name="points" min="0" max="100" value="0" onInput="valueSombra()" id="rangeSV"> <label id="valorSV" class="txtEleg">0</label><br>

	                <label class="txtEleg">Sombra H</label>
	                <input type="range" name="points" min="0" max="100" value="0" onInput="valueSombra()" id="rangeSH"> <label id="valorSH" class="txtEleg">0</label>



				</div>
				
				<div class="zi6 panelEdition" id="panel_6">
					<button class="ok" onclick="aplicar()"><i class="fa fa-check-circle greenbtn fa-5x" aria-hidden="true"></i></button>



				</div>
			</div>
		</div>
		<div class="col-md-12">
			<?php 
				include 'panelSalida.php';
			 ?>
		</div>
	</div>


	<script>
		function cambiarActivo (value) {
			var elemento1 = document.getElementById('btn_1');
			var elemento2 = document.getElementById('btn_2');
			var elemento3 = document.getElementById('btn_3');
			var elemento4 = document.getElementById('btn_4');
			var elemento5 = document.getElementById('btn_5');
			var elemento6 = document.getElementById('btn_6');
			var valor = value;

			var panel0 = document.getElementById('panel_0');
			var panel1 = document.getElementById('panel_1');
			var panel2 = document.getElementById('panel_2');
			var panel3 = document.getElementById('panel_3');
			var panel4 = document.getElementById('panel_4');
			var panel5 = document.getElementById('panel_5');
			var panel6 = document.getElementById('panel_6');

			switch (valor){
				case 1:
					if (elemento1.classList.contains("activo")) {

					}else{
						elemento1.classList.add("activo");
						elemento2.classList.remove("activo");
						elemento3.classList.remove("activo");
						elemento4.classList.remove("activo");
						elemento5.classList.remove("activo");
						elemento6.classList.remove("activo");

						panel0.style.visibility = "hidden" ;
						panel1.style.visibility = "visible" ;
						panel2.style.visibility = "hidden" ;
						panel3.style.visibility = "hidden" ;
						panel4.style.visibility = "hidden" ;
						panel5.style.visibility = "hidden" ;
						panel6.style.visibility = "hidden" ;

					}
				break;
				case 2:
					if (elemento2.classList.contains("activo")) {

					}else{
						elemento1.classList.remove("activo");
						elemento2.classList.add("activo");
						elemento3.classList.remove("activo");
						elemento4.classList.remove("activo");
						elemento5.classList.remove("activo");
						elemento6.classList.remove("activo");

						panel0.style.visibility = "hidden" ;
						panel1.style.visibility = "hidden" ;
						panel2.style.visibility = "visible" ;
						panel3.style.visibility = "hidden" ;
						panel4.style.visibility = "hidden" ;
						panel5.style.visibility = "hidden" ;
						panel6.style.visibility = "hidden" ;

						
					}

				break;
				case 3:
					if (elemento3.classList.contains("activo")) {

					}else{
						elemento1.classList.remove("activo");
						elemento2.classList.remove("activo");
						elemento3.classList.add("activo");
						elemento4.classList.remove("activo");
						elemento5.classList.remove("activo");
						elemento6.classList.remove("activo");

						panel0.style.visibility = "hidden" ;
						panel1.style.visibility = "hidden" ;
						panel2.style.visibility = "hidden" ;
						panel3.style.visibility = "visible" ;
						panel4.style.visibility = "hidden" ;
						panel5.style.visibility = "hidden" ;
						panel6.style.visibility = "hidden" ;
					}

				break;
				case 4:
					if (elemento4.classList.contains("activo")) {

					}else{
						elemento1.classList.remove("activo");
						elemento2.classList.remove("activo");
						elemento3.classList.remove("activo");
						elemento4.classList.add("activo");
						elemento5.classList.remove("activo");
						elemento6.classList.remove("activo");

						panel0.style.visibility = "hidden" ;
						panel1.style.visibility = "hidden" ;
						panel2.style.visibility = "hidden" ;
						panel3.style.visibility = "hidden" ;
						panel4.style.visibility = "visible" ;
						panel5.style.visibility = "hidden" ;
						panel6.style.visibility = "hidden" ;
					}

				break;
				case 5:
					if (elemento5.classList.contains("activo")) {

					}else{
						elemento1.classList.remove("activo");
						elemento2.classList.remove("activo");
						elemento3.classList.remove("activo");
						elemento4.classList.remove("activo");
						elemento5.classList.add("activo");
						elemento6.classList.remove("activo");

						panel0.style.visibility = "hidden" ;
						panel1.style.visibility = "hidden" ;
						panel2.style.visibility = "hidden" ;
						panel3.style.visibility = "hidden" ;
						panel4.style.visibility = "hidden" ;
						panel5.style.visibility = "visible" ;
						panel6.style.visibility = "hidden" ;
					}

				break;
				case 6:
					if (elemento6.classList.contains("activo")) {

					}else{
						elemento1.classList.remove("activo");
						elemento2.classList.remove("activo");
						elemento3.classList.remove("activo");
						elemento4.classList.remove("activo");
						elemento5.classList.remove("activo");
						elemento6.classList.add("activo");

						panel0.style.visibility = "hidden" ;
						panel1.style.visibility = "hidden" ;
						panel2.style.visibility = "hidden" ;
						panel3.style.visibility = "hidden" ;
						panel4.style.visibility = "hidden" ;
						panel5.style.visibility = "hidden" ;
						panel6.style.visibility = "visible" ;
					}

				break;
			}
		}

	</script>
	
</body>
</html>
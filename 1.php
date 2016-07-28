<html>
<head>
	<title>Inicio</title>
	<script type="text/javascript" src="html2canvas.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


	<style type="text/css">
		canvas{
			width: 640px;
			height: 640px;
			max-width: 640px;
			max-height: 640px;
			background: rgba(0,0,0,1);

		}

		.img1{
			width: 640px;
			height: 640px;
			max-width: 640px;
			max-height: 640px;
		}



		.boton{
			padding: 3px;
			border-radius: 3px;
			border:solid;
			border-width: 1px;
			text-align: center;
			vertical-align: middle;
			text-transform: uppercase;
		}

		.boton:active{
			padding: 3px;
			border-radius: 3px;
			border:solid;
			border-width: 1px;
			text-align: center;
			vertical-align: middle;
			text-transform: uppercase;
			background: rgba(0,0,0,0.1);
		}

		.conjunto{
			width: 630px;
			height: auto;
			text-align: left;
		}


	</style>
</head>

<body>

	<canvas id="genial">

	</canvas>



	<div class="conjunto">
		<br>
		<button class="boton" id="filtro1" onclick="aplicarFiltro1" >Filtro 1</button>
		<button class="boton" id="filtro2" onclick="aplicarFiltro2" >Filtro 2</button>
		<button class="boton" id="filtro3" onclick="aplicarFiltro3" >Filtro 3</button>
		<button class="boton" id="filtro4" onclick="aplicarFiltro4" >Filtro 4</button>
		<button class="boton" id="filtro5" onclick="aplicarFiltro5" >Filtro 5</button>
		<button class="boton" id="filtro6" onclick="aplicarFiltro6" >Filtro 6</button>
		<button class="boton" id="filtro7" onclick="aplicarFiltro7" >Filtro 7</button>
		<button class="boton" id="filtro8" onclick="aplicarFiltro8" >Filtro 8</button>
		<button class="boton" id="filtro9" onclick="aplicarFiltro9" >Filtro 9</button>
		<br><br>
		<button class="boton" id="filtro10" onclick="aplicarFiltro10" >Filtro 10</button>
		<button class="boton" id="filtro11" onclick="aplicarFiltro11" >Filtro 11</button>
		<button class="boton" id="filtro12" onclick="aplicarFiltro12" >Filtro 12</button>
		<button class="boton" id="filtro13" onclick="aplicarFiltro13" >Filtro 13</button>
		<button class="boton" id="filtro14" onclick="aplicarFiltro14" >Filtro 14</button>
		<button class="boton" id="filtro15" onclick="aplicarFiltro15" >Filtro 15</button>
		<button class="boton" id="filtro16" onclick="aplicarFiltro16" >Filtro 16</button>
		<button class="boton" id="filtro17" onclick="aplicarFiltro17" >Filtro 17</button>
		<button class="boton" id="filtro18" onclick="aplicarFiltro18" >Filtro 18</button>
		<br><br>
		<button class="boton" id="filtro19" onclick="aplicarFiltro19" >Filtro 19</button>
		<button class="boton" id="filtro20" onclick="aplicarFiltro20" >Filtro 20</button>
		<button class="boton" id="filtro21" onclick="aplicarFiltro21" >Filtro 21</button>
		<button class="boton" id="filtro22" onclick="aplicarFiltro22" >Filtro 22</button>
		<button class="boton" id="filtro23" onclick="aplicarFiltro23" >Filtro 23</button>
		<button class="boton" id="filtro24" onclick="aplicarFiltro24" >Filtro 24</button>
		<button class="boton" id="filtro25" onclick="aplicarFiltro25" >Filtro 25</button>
		<button class="boton" id="filtro26" onclick="aplicarFiltro26" >Filtro 26</button>
		<button class="boton" id="filtro27" onclick="aplicarFiltro27" >Filtro 27</button>
	</div>

	<br><br><br>
	<img id="foto" src="./fotos/1.jpg" class="img1">
	<br><br><br>

	<script type="text/javascript">
		
	
    var c=document.getElementById("genial");
    var ctx=c.getContext("2d");
	
	var cx=0;
	imagenFondo();
	cx+=0;
	ctx.globalCompositeOperation='source-over';	

	$("#filtro1").click(function(){
		  imagenFondo();
		  cx+=0;
		});
	
		function imagenFondo() {
			var img=document.getElementById("foto");		 
    		ctx.drawImage(img,0,0,350,2N00);
		}

		function filtro () {
			
		}

	</script>



</body>
</html>
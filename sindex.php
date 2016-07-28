<?php

?>

<html>
<head>
	<title>Inicio</title>

	<script type="text/javascript" src="html2canvas.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



	<style type="text/css">
		#contenedor{
			text-align: center;
			vertical-align: middle;
			width: 640px;
			max-width: 640px;
			height: 640px;
			max-height: 640px;
			background-color: rgba(0,0,0,0);
			box-sizing: border-box;
		}

		#imagenPrincipal{
			text-align: center;
			vertical-align: middle;
			width: 630px;
			max-width: 640px;
			height: 630px;
			max-height: 640px;
			background-color: rgba(0,233,212,0.3);
			background: url('fotos/1.jpg');
			background-size: 640px 640px;
			box-sizing: border-box;
			-webkit-filter: contrast(102%) hue-rotate(355deg) brightness(110%) saturate(120%);
			filter: contrast(102%) hue-rotate(355deg) brightness(110%) saturate(120%);
		}



		#filtro{
			position: absolute;
			z-index: 1;
			text-align: center;
			width: 630px;
			max-width: 640px;
			height: 630px;
			max-height: 640px;
			background-color: rgba(0,0,0,0);
			background: url('filtros/filtro1.png');
			box-sizing: border-box;
		}

		#color{
			margin-left: -5px;
			text-align: center;
			vertical-align: middle;
			width: 630px;
			max-width: 640px;
			height: 630px;
			max-height: 640px;
			background-color: rgba(248,80,50,0);
			box-sizing: border-box;
		}

		#color1{
			
			margin-top: -5px;
			width: 630px;
			max-width: 640px;
			height: 630px;
			max-height: 640px;
			background-color: rgba(126,132,242,0);
			box-sizing: border-box;
		}

		.f1{
			width: 50px;
			height: 50px;
			background: url('./img/f1.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f2{
			width: 50px;
			height: 50px;
			background: url('./img/f2.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f3{
			width: 50px;
			height: 50px;
			background: url('./img/f3.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f4{
			width: 50px;
			height: 50px;
			background: url('./img/f4.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f5{
			width: 50px;
			height: 50px;
			background: url('./img/f5.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f6{
			width: 50px;
			height: 50px;
			background: url('./img/f6.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f7{
			width: 50px;
			height: 50px;
			background: url('./img/f7.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f8{
			width: 50px;
			height: 50px;
			background: url('./img/f8.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f9{
			width: 50px;
			height: 50px;
			background: url('./img/f9.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f10{
			width: 50px;
			height: 50px;
			background: url('./img/f10.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f11{
			width: 50px;
			height: 50px;
			background: url('./img/f11.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		.f12{
			width: 50px;
			height: 50px;
			background: url('./img/f12.jpg') rgba(0,0,0,0.2);
			border:solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.9);
			border-radius: 3px;
		}

		canvas{border:1px solid red;}

	</style>
</head>
<body>


	<div id= "filtro">
	</div>
	<div id="contenedor">
		<div id="imagenPrincipal">
				<div id= "color">
					<div id= "color1">
					</div>
				</div>
		</div>
	</div>


	<img src="./filtros/filtro2.png" id="scream">


	<div clas="botones">
		<button type="button" class="f1" onClick="filtroN1()"> Filtro #1 </button>
		<button type="button" class="f2" onClick="filtroN2()"> Filtro #2 </button>
		<button type="button" class="f3" onClick="filtroN3()"> Filtro #3 </button>
		<button type="button" class="f4" onClick="filtroN4()"> Filtro #4 </button>
		<button type="button" class="f5" onClick="filtroN5()"> Filtro #5 </button>
		<button type="button" class="f6" onClick="filtroN6()"> Filtro #6 </button>
		<button type="button" class="f7" onClick="filtroN7()"> Filtro #7 </button>
		<button type="button" class="f8" onClick="filtroN8()"> Filtro #8 </button>
		<button type="button" class="f9" onClick="filtroN9()"> Filtro #9 </button>
		<button type="button" class="f10" onClick="filtroN10()"> Filtro #10 </button>
		<button type="button" class="f11" onClick="filtroN11()"> Filtro #11</button>
		<button type="button" class="f12" onClick="save()"> Filtro #12</button>
		
	</div>

 




	<br>
	<br>
	<br>
	<button id="test">Draw new circle behind.</button><br>
	<canvas id="canvas" width=300 height=300></canvas>	


	<script type="text/javascript">
			
		var canvas=document.getElementById("canvas");
		var ctx=canvas.getContext("2d");

		var cx=10;

		drawCircle()
		cx+=35;
		ctx.globalCompositeOperation='source-over';

		$("#test").click(function(){
		  drawCircle();
		  cx+=35;
		});

		function drawCircle(){
  		 var img=document.getElementById("scream");
    	 ctx.drawImage(img,cx,10,190,190);

		}



				

		




	</script>
</body>
</html>
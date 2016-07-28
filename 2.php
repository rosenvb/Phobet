<!DOCTYPE html>
<html lang="es">
<head>
    <title>home</title>
    <script src="./html2canvas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    canvas{border:none; }
    body{
    	background:url('./fotos/bg.png') #e5f1ff;
        min-height: 100%;
        min-width: 100%;
        max-width: 100%;
        max-height: 100%;
    	background-size: 200px 217px;

    }

  

    .logo{
    	width: 200px;
    	height:100px;
    	max-width: 200px;
    	max-height:  200px;
    	background: url('./fotos/logo.png') rgba(0,0,0,0);
    	background-size: 200px	100px;
    	background-repeat: no-repeat;


    }

    .a{
    	background: url('./fotos/1.jpg');
    	width: 100%;
        height: 100%; 

    }

   


    .b{
    	background: url('./filtros/filtro1.png');
    	width: 100%;
        height: 100%;

    }

   

    .cabezal{
    	width: 100%;
    	padding: none;
    	background:rgba(0,0,0,0.014);
    	vertical-align: middle;
    	box-sizing: border-box;

    }
    .botones{
    	padding: 10px;
        max-width: 640px;
        
        min-width: 640px;
        
        max-width: 640px;

    	text-align: center;
    	vertical-align: middle;
        
    	box-sizing: border-box;

    }

    .txtEleg{
    	font-size: 15px;
    	font-family: sans-serif;
    	text-transform: uppercase;
    	color: #9b9b9b;
    }

    .container{
        float: left;
    	max-width: 640px;
    	height: 640px;
    	min-width: 640px;
    	min-height: 640px;
    	max-width: 640px;
    	max-height: 640px;
    	border:solid;
    	border-width: 9px;
    	border-color: #ff3141;
        

    }

    .twitter{
  		margin-left: 507px;
    	width:150px;
    	height:40px;
    	background:url('./fotos/tt.png') rgba(0,0,0,0);
    	background-repeat: no-repeat;
    	background-size: 150px 40px;
    }
    .f{
    	width: 50px;
    	height: 50px;
    	min-height: 50px;
    	min-width: 50px;
    	max-height: 50px;
    	max-width: 50px;
    	border-width: 3px;
    	border:solid;
    	border-color: #2c506c;
    	border-radius: 4px;
    	margin: 3px;
    	background: #1d2e3c;
    	color: #FFFFFF;
    	text-transform: uppercase;
    	padding: 3px;
    	text-align: center;
    	box-sizing: border-box;

    }

    .ok{
    	width: 100%;
    	min-width: 100%;
    	max-width: 100%;
    	background:#ff3141;
    	color: #FFF;
    	border-radius: 5px;
    	border:solid;
    	border-width: 2px;
    	border-color: #a9202b;
    	text-transform: uppercase;
    	font-size: 19px;
    	font-family: sans-serif;
    	padding: 5px;
    	box-sizing: border-box;
    }

    footer{
    	width: 100%;
    	max-width: 100%;
    	min-width: 100%;
    	padding: 10px;
    	border-top:solid;
    	border-left: none;
    	border-right: none;
    	border-bottom: solid;
    	position: absolute;
    	border-width: 1px;
    	border-color: rgba(0,0,0,0.1);
    	text-transform: uppercase;
    	font-family: sans-serif;
    	color: #8fbbf1;
    	text-align: center;
    	font-size: 12px;
    	float: left;
    	z-index: 5;
    	margin-left:-7px;
    	box-sizing: border-box;


    }

    .Panel{
        float: left;
        text-transform: uppercase;
        text-align: justify;
        font-family: sans-serif;
        color: #232e5b;
        font-size: 12px;
        text-shadow:0 0 3px rgba(0,0,0,0.6);
        width: 500px;
        padding: 9px;
        height: 640px;
        max-height: 640px;
        background: rgba(255,255,255,0.31);
        border:solid;
        border-color: rgba(0,0,0,0);
        border-width: 0px;
    }





    </style>
</head>
<body>
    	<div class="cabezal">
    		<div class="logo"></div>
    		<div class="twitter"></div>
    	</div><br>
<div id="general">
    	<div class="container">
	    	<div id="div1" class="a">
	    		<div id="filtro" class="b"></div>
	    	</div>
    	</div> 

        <div class="Panel">
                <p>
                        Aquí puedes modificar las caracteristicas de la fotográfia, recuerda regalarnos un follow en twitter o un like en facebook.
                </p>
                <br>
                <br>
                <br>
                <label>Blur: </label><input class="slider" type="range" value="0" name="blurValor" min="0" max="100">
                <br>
                <br>
                <br>
                <label>Brigness: </label><input class="slider" type="range" value="0" name="blurValor" min="0" max="100">
                <br>
                <br>
                <br>
                <label>Contrast: </label><input class="slider" type="range" value="0" name="blurValor" min="0" max="100">
                <br>
                <br>
                <br>
                <label>Hue/Sat: </label><input class="slider" type="range" value="0" name="blurValor" min="0" max="100">
                

        </div>

    	<br><br>
    		<div class="botones">
    			<label class="txtEleg">Filtros:</label><br>
				<button type="button" class="f" onClick="filtroN1()"> Filtro OFF </button>
				<button type="button" class="f" onClick="filtroN2()"> Filtro #2 </button>
				<button type="button" class="f" onClick="filtroN3()"> Filtro #3 </button>
				<button type="button" class="f" onClick="filtroN4()"> Filtro #4 </button>
				<button type="button" class="f" onClick="filtroN5()"> Filtro #5 </button>
				<button type="button" class="f" onClick="filtroN6()"> Filtro #6 </button>
				<button type="button" class="f" onClick="filtroN7()"> Filtro #7 </button>
				<button type="button" class="f" onClick="filtroN8()"> Filtro #8 </button>
				<button type="button" class="f" onClick="filtroN9()"> Filtro #9 </button>
				<button type="button" class="f" onClick="filtroN10()"> Filtro #10 </button>
				<button type="button" class="f" onClick="filtroN11()"> Filtro #11</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button type="button" class="f" onClick="filtroN12()"> Filtro #12</button>
				<button class="ok" onclick="aplicar()">Generar :)</button>
			</div>

    	
    	<br><br><br>
</div>

<div id="otro">
    <button type="button" class="f" onClick="otro()"> Nueva Imagen</button>
</div>
    <script type="text/javascript">
     
/*      setTimeout(function(){
        html2canvas( [ document.getElementById('div1') ], {
          onrendered: function(canvas) {
            document.body.appendChild(canvas);
          }
        });
      },1500)
*/
		function aplicar() {
			        setTimeout(function(){
			        html2canvas( [ document.getElementById('div1') ], {
			          onrendered: function(canvas) {
			            document.body.appendChild(canvas);
                        var f = document.getElementById('general');
                        $(f).fadeOut();

                        var footer = document.getElementById('foot');
                        $(footer).fadeOut();


                        var otro = document.getElementById('otro');
                        $(otro).fadeIn();
			          }
			        });
			      },100);     


		}

		function filtroN1() {
			document.getElementById("filtro").style.background = "url('filtros/filtro1.png')";
		}

		function filtroN2() {
			document.getElementById("filtro").style.background = "url('filtros/filtro2.png')";
		}

		function filtroN3() {
			document.getElementById("filtro").style.background = "url('filtros/filtro3.png')";
		}

		function filtroN4() {
			document.getElementById("filtro").style.background = "url('filtros/filtro4.png')";
		}

		function filtroN5() {
			document.getElementById("filtro").style.background = "url('filtros/filtro5.png')";
		}

		function filtroN6() {
			document.getElementById("filtro").style.background = "url('filtros/filtro6.png')";
		}

		function filtroN7() {
			document.getElementById("filtro").style.background = "url('filtros/filtro7.png')";
		}

		function filtroN8() {
			document.getElementById("filtro").style.background = "url('filtros/filtro8.png')";
		}

		function filtroN9() {
			document.getElementById("filtro").style.background = "url('filtros/filtro9.png')";
		}

		
		function filtroN10() {
			document.getElementById("filtro").style.background = "url('filtros/filtro10.png')";
		}

		
		function filtroN11() {
			document.getElementById("filtro").style.background = "url('filtros/filtro11.png')";
		}

		function filtroN12() {
			document.getElementById("filtro").style.background = "url('filtros/filtro12.png')";
		}

        $(document).ready(function(){
            var ot = document.getElementById('otro');
            $(ot).hide();

        });

        function otro () {
            var f = document.getElementById('general');
            $(f).fadeIn(); 
            var footer = document.getElementById('foot');
            $(footer).fadeIn();

            var otro = document.getElementById('otro');
            $(otro).fadeOut();     

                    
            $("canvas").remove();
            document.getElementById("filtro").style.background = "url('filtros/filtro1.png')";

            
        }


    </script>


    <footer id="foot">Contacto | faq | ayuda | empleos | </footer><br><br>
</body>
</html>


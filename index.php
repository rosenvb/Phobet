<?php
    session_start();            
    if ($_SESSION['permiso']==2) {
?>
<html>
<head>
	
	<script src="http://code.jquery.com/jquery-1.11.3.js"></script>
	<title>Phobet - By Rosenvb</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="./js/html2canvas.js"></script>
    <script src="./js/zero.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./js/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <meta charset="utf-8">
	<style type="text/css">
		body{
			background: #FAFAFA;
			margin: 0 auto;
			font-family: sans-serif;
			color: #0C2A3A;
		}

		.Contenedor_Img{
			margin: 0 auto;
			width: 60%;
			background: rgba(0,0,0,0);
			padding: 10px;
			box-sizing:border-box;
		}

		.Contenedor_Img img{
			margin: 0 auto;
			width: 100%;
		}

		.protacion{
			box-sizing:border-box;
			margin: 0 auto;
			text-align: center;
			width: 100%;
			background: rgba(0,0,0,0);
			padding: 20px;
			box-sizing:border-box;
		}

		.btn{
			padding: 5px;
			border-radius: 5px;
			font-family: sans-serif;
			font-size: 20px !important;
			background:#FF3141;
			border: solid;
			border-width: 3px;
			border-color: #921C25;
			color:#FFF;
 
		}

		.btn:active{
			font-size: 23px !important;
		}


		.btnCont:active{
			font-size: 23px !important;
		}

		.btnCont{
			padding: 5px;
			border-radius: 5px;
			font-family: sans-serif;
			font-size: 20px !important;
			background:#052838;
			border: solid;
			border-width: 3px;
			border-color: #132d4c;
			color:#FFF;
		}




    .fmr1{
        width: 100%;
        max-width: 100%;
        min-width: 100%;
        background-color: rgba(235, 235, 235, 0);
        text-transform: uppercase;
        border:none;
        border-width: 1px;
        border-color: rgba(210,210, 210, 1);
        box-sizing: border-box;
    }

    .ile {
        background: url('./img/ficon.png') ;
        background-size: 150px;
        background-repeat: no-repeat;
        width: 150px;
        height: 160px;
        color: #FFF;
        font-family: sans-serif;
        font-size: 14px;
        padding-top: 140px;
        border-radius: 10px;
        text-transform: uppercase;
        box-sizing: border-box;

    }

    .fil3{
        position: absolute;
        z-index: 3;
        background: rgba(0,0,0,0.06);
        margin-top: -120px;
        margin-left: 0%;
        width: 150px;
        height: 120px;
        opacity: 0;

           
        
    }

    .ico_small{
        width: 120px;
        height: 120px;
    }

    .gray50{
        color: #989898;
    }

    .ile:active {
        background: url('./img/ficon.png') ;
        background-size: 150px;
        background-repeat: no-repeat;
        width: 150px;
        height: 160px;
        color: #FFF;
        font-family: sans-serif;
        font-size: 14px;
        padding-top: 140px;
        border-radius: 10px;
        text-transform: uppercase;
        opacity: 0.8;
        box-sizing: border-box;
    }

    .titulo{
        font-size: 30px;
        border-radius: 10px;
        font-family: sans-serif;
        color: #ebebeb;
        background-color: #ff3141;
        width: 40%;
        margin-left: 30%;
        box-sizing: border-box;

    }

    .oksarc{
        border:solid;
        border-width: 2px;
        border-radius: 4px;
        padding: 5px;
        font-family: sans-serif;
        font-size: 20px;
        background-color: #a9202b;
        border-color: #ff3141;
        color: #FFF;
        box-sizing: border-box;
    }
    .loar{
        font-family: sans-serif;
        font-size: 20px;
        color: #989898;
        text-align: center;
        text-transform: capitalize !important;
    }

    .loar img{
        width: 20%
    }

    .oculto{
    	display: none;
    }

    .blank_btn{
        background: rgba(0,0,0,0);
        border:none;
    }

    .blank_btn:hover{
        opacity: 0.5;
    }

    .tnone{
        text-decoration: none !important;
        color: #989898;
    }
    .gris{
        color: #989898;
    }

    .gris1{
        font-size: 10px;
        color: #989898;
    }
	</style>



		<!--Inicia subida-->

        <script type="text/javascript">

                     $(document).ready(function(){
                        var ot = document.getElementById('load');
                        $(ot).hide();

                        //ocultar panel de rotacion
                        var panelRotacion = document.getElementById('phRotacion');
                        $(panelRotacion).hide();

                    });

                    $(function () {
                        $("input[name='file']").on("change",function() {

                            var f = document.getElementById('load');
                            $(f).fadeIn(); 

                            var formData =  new FormData($("#formulario")[0]);
                            var ruta = "./uploader.php";
                            

                            $.ajax({
                                url: ruta,
                                type: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                
                                success: function(datos){
                                    $("#respuesta").html(datos);    
                                    var f = document.getElementById('load');
                                    $(f).fadeOut(); 
                                    cargarPanelRotacion();

                                     //ocultar panel de Subida
			                        var panelSubida = document.getElementById('formSubida1');
			                        $(panelSubida).hide();
                                    
                                    //Mostrar panel de rotacion
			                        var panelRotacionMostrado = document.getElementById('phRotacion');
			                        $(panelRotacionMostrado).fadeIn();
                                }
                            });
                        });
                    });
                </script>
                <!--Termina Subida-->


</head>
<body>
 
		    
            <div class="col-md-12 text-center">
                <img src="./img/icon.png" class="ico_small" alt="">
            </div>
    		<!--Comienza Formulario de Subida-->
    			<div class="col-md-12" id="formSubida1">
                    <br>    
                        <div class="text-center gray50"> Subir Imagen  </div>
                    
                    <form  id="formulario" method="post" enctype="multipart/form-data">
                            <center>
                        <div class="ile">
                            <input type="file" name="file" class="fil3 col-md-2" />
                        </div>
                        <a class="tnone" href="panelAjustes.php">
                            <i class="fa fa-cog fa-2x gris" aria-hidden="true"></i><br><span class="gris1">&nbspAjustes</span>
                        </a>
                    </form></center><br>
                        
                    <br>

                    <div id="respuesta" class="oculto">
                    </div>

                <center>
                    <div class="row-fluid">
            <div class="col-md-2 lf lf"></div>
            <div class="col-md-2 lf">
                
            </div>
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
                </center>
                </div>

                <!--Termina Formulario de Subida-->
                	<div class="fmr1" >
                		<div id="load" class="loar">
                            Subiendo...<br>
                            <img src="img/loader.gif">
                        </div>
                   	</div>


	<br><br>
	<div id = "phRotacion" class="col-md-12"><!-- Inicio - Rotar Imagen-->
		<div class="Contenedor_Img">
			<div class="int_Img" id="d3">

				<!--Inicio Cargar imagen en panel de rotación-->
				<script type="text/javascript">
					function cargarPanelRotacion () {

						var result001 = $('#respuesta').html();
						$('#foto').attr('src',result001);

					}
                                    
				</script>
				<!--Fin Cargar imagen en panel de rotación-->
				

				<img id="foto" src="./img/1.jpg?d=1298632">
				<div id="foto1"></div>
			</div>
		<br>
			<div class="protacion">
				<span></span><br> 
				<button  onclick="rotar()" class="blank_btn"><i class="fa fa-repeat bluebtn fa-3x"  aria-hidden="true"></i></button>
				<button  onclick="avanzar()" class="blank_btn"> <i class="fa fa-check-circle-o greenbtn fa-3x"  aria-hidden="true"></i></button>
			</div>
            <div>
            </div>
		</div>
		<div id ="result"></div>

	</div>
	<script type="text/javascript">
		function rotar () {
			var img_123 = document.getElementById('foto');
			var result099 = $('#respuesta').html();
				


			$.ajax({
			    // la URL para la petición
			    url : 'rotarImg.php',
			 
			    // la información a enviar
			    // (también es posible utilizar una cadena de datos)
			    data : { 
			    			degrees : 270,
			    			archivo : result099
			    		},
			 
			    // especifica si será una petición POST o GET
			    type : 'POST',
			 
			    // el tipo de información que se espera de respuesta
			    dataType : 'text',
			 
			    // código a ejecutar si la petición es satisfactoria;
			    // la respuesta es pasada como argumento a la función
			    success : function(dato) {

			        var nameImg1 = result099+"?d=";
			        var imgrnd12 = Math.floor((Math.random() * 1231230) + 123423432);
			        var imgrnd1 = nameImg1+imgrnd12;

			        $('#foto').attr('src',imgrnd1);/*
			        $('#foto').remove();
			        var nameImg = "./img/1.jpg?d=";
			        var imgrnd0 = Math.floor((Math.random() * 1231230) + 123423432);
			        var imgrnd = nameImg+imgrnd0;

			        $('#foto1').html('<img id="foto" src="'+imgrnd+'">');
			        
//			       */
			    },
			 
			    // código a ejecutar si la petición falla;
			    // son pasados como argumentos a la función
			    // el objeto de la petición en crudo y código de estatus de la petición
			    error : function(xhr, status) {
			        alert('Disculpe, existió un problema');
			    },
			 
			     
			});


		}
		<!-- Fin - Rotar Imagen-->
		function mostrat () {
			var fght = document.getElementById('foto');
			fght.src="";
			fght.src="./img/1.jpg";

		}
	</script>



		<script type="text/javascript">
			function avanzar() {
				var fotoFlotanteNombre1 = $('#respuesta').html();

                var imagen = $('#foto');
                  imagen.removeAttr("width"); // quitamos el atributo width 
                  imagen.removeAttr("height"); // quitamos el atributo height 
                  var w = imagen.width();
                  var h = imagen.height();

				window.location="crop.php?f="+fotoFlotanteNombre1+"&w="+w+"&h="+h;

			}

		</script>



</body>
</html>


<?php 
        
        }else{
            include("login.php");
        }
 ?>
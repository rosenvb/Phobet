<!DOCTYPE html>
<html lang="es">
<head>
    <title>WOTA - By Rosenvb</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="./js/html2canvas.js"></script>
    <script src="./js/zero.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <style>
        .Error{
            padding: 20px;
            border:solid;
            border-radius: 10px;
            border-width: 3px;
            border-color:#C71A27;
            background: #FF2D3F;
            color:#FFF;
            font-family: sans-serif;
            font-size: 20px;
            width: 40%;

        }

        .Error a{
            text-decoration: none;
            color:#424242;
            font-size: 24px !important;
        }
    </style>
</head>
<body>
    	<div class="cabezal">
    		<div class="logo"></div>
    		<div class="twitter"></div>
    	</div><br>

        <?php 
            if(isset($_GET['f'])){

                $img_fondo = $_GET['f'];

                ?>


<script type="text/javascript">
    $( document ).ready(function() {
            var fofotofo= document.getElementById('div1');
            document.getElementById("div1").style.background = "url('<?php echo $img_fondo; ?>')";

     });
</script>

<div id="general" class="Gral1">
        <div class="container">
            <div id="div1" class="a">
                <div id="filtro" class="b"></div>
            </div>
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
                <button type="button" class="f" onClick="filtroN13()"> Filtro #13</button>
                <button type="button" class="f" onClick="filtroN14()"> Filtro #14</button>
                <button type="button" class="f" onClick="filtroN15()"> Filtro #15</button>
                <button type="button" class="f" onClick="filtroN16()"> Filtro #16</button>
                <button type="button" class="f" onClick="filtroN17()"> Filtro #17</button>
                <button type="button" class="f" onClick="filtroN18()"> Filtro #18</button>
                <button type="button" class="f" onClick="filtroN19()"> Filtro #19</button>
                <button type="button" class="f" onClick="filtroN20()"> Filtro #20</button>
                <button class="ok" onclick="aplicar()">Generar :)</button>
            </div>

        
        <br><br><br>

  <div class="Panel">
                <p>
                        <div class="social">
                            <p>Redes Sociales</p>
                            <a href="#"><img class="sn" src="./img/logofb.png"></a>
                            <a href="#"><img class="sn" src="./img/logott.png"></a>
                            <a href="#"><img class="sn" src="./img/logoig.png"></a>
                        </div>
                </p>
                <br>
                <br>

                <div class="tags" id="tg">
                    <p>WOTAGS</p>
                        <p id="tags1">#PendónChilpo #WOTAPP #2015 #WOTAPP #Rosenvb #Chilpancingo #Tradición #VamosALasBarras #InHome #InstaPendón #ViveLaTradición #Enfiestados #Chilpotown #Chilpo @Rosenvb #México #Tlacololero #PDN2015 #EnElPendón #NoTeAcabes #Paps #PendónPaps 
                        </p>
                </div>

        </div>

</div>

<div id="otro">
    <button type="button" class="new" onClick="otro()"> Nueva Imagen</button>
</div>
<br><br>
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
                        //document.body.appendChild(canvas);

                        var dato = canvas.toDataURL("image/png");
                        dato = dato.replace("image/jpeg", "image/octet-stream");   
                        document.location.href = dato;

                        

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

        function filtroN13() {
            document.getElementById("filtro").style.background = "url('filtros/filtro13.png')";
        }

        function filtroN14() {
            document.getElementById("filtro").style.background = "url('filtros/filtro14.png')";
        }

        function filtroN15() {
            document.getElementById("filtro").style.background = "url('filtros/filtro15.png')";
        }

        function filtroN16() {
            document.getElementById("filtro").style.background = "url('filtros/filtro16.png')";
        }

        function filtroN17() {
            document.getElementById("filtro").style.background = "url('filtros/filtro17.png')";
        }

        function filtroN18() {
            document.getElementById("filtro").style.background = "url('filtros/filtro18.png')";
        }

        function filtroN19() {
            document.getElementById("filtro").style.background = "url('filtros/filtro19.png')";
        }

        function filtroN20() {
            document.getElementById("filtro").style.background = "url('filtros/filtro20.png')";
        }

        $(document).ready(function(){
            var ot = document.getElementById('otro');
            $(ot).hide();
            var t= document.getElementById('tags1').innerHTML;
            

            

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




                <?php
            }else{
                ?>

                    <center>
                        <div class="Error">
                            ¡Lo Siento!
                            No se puede procesar la petición

                            <a href="index.php"><br> Regresar😎</a>
                        </div>
                    </center>


                <?php
            }

         ?>

</body>
</html>


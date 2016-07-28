<?php 
session_start();

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Phobet </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="./js/html2canvas.js"></script>
    <script src="./js/zero.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">

    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

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

        .etiqueta{
            position: absolute;
            z-index: 9;
            width: 640px;
            height: 640px;
            
            background: rgba(0,0,0,0);
            padding-top: 285px;
            /*font-family: 'Questrial', sans-serif;*/
            font-family: 'Poppins', sans-serif;
            color: #FFF;
            font-size: 30px;
            word-wrap:break-word;
            font-weight: 666;
            text-transform: uppercase;
            text-shadow: 0 0 30px black;
            letter-spacing: 8px;
            box-sizing:border-box;

        }

        .sombra{
            position: absolute;
            z-index: 0;
            width: 100%;
            height: 100px !important;
            visibility: hidden;
            background: rgba(0,0,0,0.6);

        }

        .controles{
            box-sizing: border-box;
            width: 450px;
            padding: 30px;
            background: #fff;
            position: absolute;
            z-index: 999;
            margin-left: 49%;
        }
        .hid{
            visibility: hidden;
            -webkit-user-select: auto;
        }
        .icoVerde{
            position: absolute;
            z-index: 100;
            background: url("<?php echo $_SESSION['logo'] ?>") rgba(0,0,0,0);
            background-size: 90px;
            background-repeat: no-repeat;
            width: 90px ;
            height: 90px;
            visibility: hidden;


        }

        .txtEnc{
            font-family: 'Questrial', sans-serif;
            font-size: 20px;
            text-transform: uppercase;
        }

        

        hr{
            border: solid;
            border-width: 1px;
            border-color: rgba(0,0,0,0.3);
        }
        
        .contenedorRadio{
            float: left;
            text-align: center;
            vertical-align: middle;
            background: rgba(0,0,0,0);
            width: 100px;
        }

        .contbtn{
            text-align: center;
        }
        
        .activo{
            margin-left: 0px;
            background: rgba(0,0,0,0.05);
        }

        .container{
            padding: 0 !important;
        }

        .fullHD{
            width: 100%;
            height: 3px;
            background:rgba(0,0,0,0);
        }

        .heigtVariation{
                line-height:1 !important;
                font-family: sans-serif;
                padding: 4px;
                font-size: 10px;
                text-align: center;
            }
        
    </style>
</head>
<body>

        <?php 
            if(isset($_GET['f'])){

                $img_fondo = $_GET['f'];

                ?>


<script type="text/javascript">
    $( document ).ready(function() {
            var fofotofo = document.getElementById('div1');
            //document.getElementById("div1").style.background = "url('<?php echo $img_fondo; ?>')";
            var anchon = $("#dimension").width();
            var alto = $("#dimension").width();
            //document.getElementById("div1").style.backgroundSize = '"'+anchon+"px "+alto+'px"';
            
            document.getElementById("div1").style.background = "url('<?php echo $img_fondo; ?>')";
            
            document.getElementById("div1").style.width = anchon +"px";
            document.getElementById("div1").style.height = anchon +"px";
            
            document.getElementById("div1").style.marginLeft = "-30px";
            
            document.getElementById("container").style.width = anchon +"px";
            document.getElementById("container").style.height = anchon +"px";
            
            document.getElementById("etiqueta").style.width = anchon +"px";
            document.getElementById("etiqueta").style.height = anchon +"px";
            
            document.getElementById("sombra").style.width = anchon +"px";
            document.getElementById("sombra").style.height = anchon +"px";
            
            document.getElementById("general").style.width = anchon +"px";
            document.getElementById("general").style.height = anchon +"px";

            document.getElementById("container").style.width = anchon +"px";
            
            document.getElementById("div1").style.backgroundSize = anchon +"px "+anchon +"px";
                                           //style.backgroundSize =  "230pxpx !important";

            
            

     });


    function calcDim () {
        var div_ancho = $("#etiqueta").height();
        alert(div_ancho);
    }
</script>
<?php 
if ($_SESSION['permiso']==2) {
?>
<div class="fullHD" id="dimension"></div>

<center class="col-md-12">
    <div id="general" class="Gral1">
        <div class="container" id="container">
            <div id="div1" class="a">
                <div class="etiqueta" id="etiqueta"></div>
                <div class="sombra" id="sombra"></div>
                <div class="icoVerde" id="icoVerde"></div>
            </div>
        </div> 
</div>
</center>



        <?php 

                include 'panel.php';

                
        ?>

        <center>
     <center>
                <img src="" class="hid" id="view" alt="">
                        <br>
                       <p class="heigtVariation">
                            <a href="./img/blank.png" class="hid" id="g2" download></a><br>
                            <a href="index.php" id="newImg" class="greenbtn hid"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                       </p>
                </center>
</center>

</div>
<?php 
    }else{
        include 'denegate.php';
    } 
?>

        
    



                




<script type="text/javascript">
     


        function valueRange() {
            var c = document.getElementById('rangeV').value;
            document.getElementById('etiqueta').style.paddingTop= c+"px";
            document.getElementById('valorRange').innerHTML=c;
        }
        function aplicar() {
                    setTimeout(function(){
                    html2canvas( [ document.getElementById('div1') ], {
                      onrendered: function(canvas) {
                        //document.body.appendChild(canvas);

                        var dato = canvas.toDataURL("image/png");
                       dato = dato.replace("image/jpeg", "image/octet-stream");   
                        //document.location.href = dato;

                        $("#space").remove();
                        $("#panelPrincipal").remove();
                        

                        document.getElementById('view').style.visibility="visible";
                        document.getElementById('g2').style.visibility="visible";
                        document.getElementById('newImg').style.visibility="visible";


                        document.getElementById('view').src=""+dato+"";
                        document.getElementById('g2').href=""+dato+"";


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

        function cambiarTexto () {
            var txt1 = document.getElementById('mainText').value;
            var txt2 = document.getElementById('lineadosText').value;
            var txt3 = document.getElementById('lineatresText').value;
            var txt = txt1+"<p style='font-size:20px; margin-top:-12px'>"+txt2+"</p><p style='font-size:10px; margin-top:-14px'>"+txt3+"</p>";
            document.getElementById('etiqueta').innerHTML=txt;
        }

        function logoVerdestatus () {
            var x = document.getElementById('logoVerde').value;
            if (x==1) {
                document.getElementById('icoVerde').style.visibility="hidden";
                document.getElementById('logoVerde').value=0;
            }else{
                document.getElementById('icoVerde').style.visibility="visible";
                document.getElementById('logoVerde').value=1;

                document.getElementById('rangeLV').max = 280;
                document.getElementById('rangeLV').min = -100;
                document.getElementById('rangeLH').max = 290;
                document.getElementById('rangeLH').min = 0;

            }
        }

        function valueLRange () {
            var logoV = document.getElementById('rangeLV').value +"px";
            var logoH = document.getElementById('rangeLH').value +"px";
            var logoSize = document.getElementById('sizeL').value;
            var logoSizef = document.getElementById('sizeL').value +"px";

            document.getElementById('valorLH').innerHTML=logoH; 
            document.getElementById('valorLV').innerHTML=logoV;
            
            document.getElementById('icoVerde').style.marginLeft=logoH;
            document.getElementById('icoVerde').style.marginTop=logoV;

            document.getElementById('icoVerde').style.width = (logoSize*0.8)+"px";
            document.getElementById('icoVerde').style.height = (logoSize*0.8)+"px";
            document.getElementById('icoVerde').style.backgroundSize = (logoSize*0.8)+"px";
            document.getElementById('valorSize').innerHTML=logoSize*0.8;


        }

        function changeAlign (alin) {
                var w = $("#dimension").width();
                var h = $("#div1").height();
                

            if (alin == "left") {                                       
                document.getElementById('etiqueta').style.textAlign="left";
                document.getElementById('etiqueta').style.marginLeft="0px";
                document.getElementById('rangeH').max=w;
                document.getElementById('rangeH').min=0;


                document.getElementById('rangeV').max=h-70;


            }else if (alin == "center") {
                document.getElementById('etiqueta').style.textAlign="center";
                document.getElementById('etiqueta').style.marginLeft="0px";
                document.getElementById('rangeH').max=(w/2)-70;
                document.getElementById('rangeH').min=-(230/2);

                document.getElementById('rangeV').max=h-70;
            }else if (alin == "right") {
                document.getElementById('etiqueta').style.textAlign="right";
                document.getElementById('etiqueta').style.marginLeft="0px";
                document.getElementById('rangeH').max=0;
                document.getElementById('rangeH').min=-w;
                document.getElementById('valorT').innerHTML=document.getElementById('rangeH').value;
                document.getElementById('rangeV').max=h-70;



            }else{
                document.getElementById('rangeH').min = 0;
                document.getElementById('rangeH').max=w;
                document.getElementById('rangeV').max=w;
            }
        }        

        function valueRangeH () {
            var c = document.getElementById('rangeH').value;
            document.getElementById('etiqueta').style.marginLeft=c+"px";
           document.getElementById('valorRangeT').innerHTML=document.getElementById('rangeH').value;
       }        


       function sombra () {
            var x = document.getElementById('sombraCheck').value;
            if (x==1) {
                document.getElementById('sombra').style.visibility="hidden";
                document.getElementById('sombraCheck').value=0;
            }else{
                document.getElementById('sombra').style.visibility="visible";
                document.getElementById('sombraCheck').value=1;


                document.getElementById('rangeSH').max = 275;
                document.getElementById('rangeSH').min = 0;
                document.getElementById('rangeSV').max = 275;
                document.getElementById('rangeSV').min = 0;
           }
        }    

        function valueSombra () {
            var logoV = document.getElementById('rangeSV').value +"px";
            var logoH = document.getElementById('rangeSH').value +"px";

            document.getElementById('valorSH').innerHTML=logoH; 
            document.getElementById('valorSV').innerHTML=logoV;
                        
            document.getElementById('sombra').style.marginLeft=logoH;
            document.getElementById('sombra').style.marginTop=logoV;

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


<?php
session_start();
$fotoLlegada = "./".$_GET['f'];
$fotoLlegada1 = "/".$_GET['f'];
$nombre_archivo = "fotos/upload/nuevo.jpg";
$widthO=$_GET['w'];
$heigthO=$_GET['h'];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{   
    
    $targ_w = $targ_h = 640;
    $jpeg_quality = 100;
    $src = '.'.$_POST['nombreFoto'];
    $img_r = imagecreatefromjpeg($src);
    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
    imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
    $targ_w,$targ_h,$_POST['w'],$_POST['h']);
    header('Location: proceso.php?f='.$src);
    imagejpeg($dst_r,$src,$jpeg_quality);
    
}else{

}

// If not a POST request, display page below:

?>


<?php 
    $file = ".$fotoLlegada1";  // Dirección de la imagen
    $imagen = getimagesize($file);    //Sacamos la información
    $ancho = $imagen[0];              //Ancho
    $alto = $imagen[1];               //Alto
?>
<html>
<head>
    <title>Crop Image - Phobet</title>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.Jcrop.js"></script>

    <script type="text/javascript">
      jQuery(function($){
            
            
        // How easy is this??
        $('#target').Jcrop({
            bgColor:     '#575757',
            bgOpacity:   0.04,
            setSelect:   [ 0, 0,500,500],
            aspectRatio: 1/1,
            addClass: 'jcrop-light',
            onSelect: updateCoords
        });
      });



      function updateCoords(c){

        var imagen = $('#target');
            imagen.removeAttr("width"); // quitamos el atributo width 
            imagen.removeAttr("height"); // quitamos el atributo height 
            var w1 = imagen.width();
            var h1 = imagen.height();
            var ancho = <?php echo $ancho; ?>;
            var alto = <?php echo $alto; ?>;
            //alert("width: "+imagen.width()+" Height: "+imagen.height()); // ancho original. Ej. 800

            var c1 = (ancho * Number(c.w))/w1;
            var c2 = (alto * Number(c.h))/h1;

            var x1 = (ancho * Number(c.x))/w1;//Number(c.x);
            var y1 = (alto * Number(c.y))/h1;//Number(c.y);


        $('#x').val(x1);
        $('#y').val(y1);
        $('#w').val(c1);
        $('#h').val(c2);   
        $('#nombreFoto').val('<?php echo $fotoLlegada1 ?>');
      };

      function checkCoords(){
        if (parseInt($('#w').val())) return true;
        alert('Por favor serleccione una region de la imagen a recortar y presione ok.');
        return false;
      };


      function mk () {
              var imagen = $('#target');
              imagen.removeAttr("width"); // quitamos el atributo width 
              imagen.removeAttr("height"); // quitamos el atributo height 
              alert("width: "+imagen.width()+" Height: "+imagen.height()); // ancho original. Ej. 800
              
      }
    </script>
    <link rel="stylesheet" href="./css/jquery.Jcrop.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">

    <style>
        .ico_small{
        width: 120px;
        height: 120px;
    }
    .blank_btn{
        background: rgba(0,0,0,0);
        border:none;
    }

    .blank_btn:hover{
        opacity: 0.5;
    }

    .fit{
        width: 100%;
    }

    </style>
</head>
<body>

    <?php 
        if ($_SESSION['permiso']==2) {
            ?>
    <div class="col-md-12">
        <center><img src="./img/icon_1.png" class="ico_small" alt=""></center>
    </div>

    <div class="blank_s visible-lg"></div>
    
  <div class="imgCropContenedor">
        
            <img src="<?php echo '.'.$fotoLlegada1; ?>" id="target"  class="fit"/>
            <br>
        
  </div>

    <br><div>
        

    </div>


    <div>
        
        

    </div>
<div class="col-md-12 text-center">
    
  <!-- This is the form that our event handler fills -->
        <form action="crop.php" method="post" onsubmit="return checkCoords();" >
            <input type="hidden" id="x" name="x" />
            <input type="hidden" id="y" name="y" />
            <input type="hidden" id="w" name="w" />
            <input type="hidden" id="h" name="h" />
            <input type="hidden" id="nombreFoto" name="nombreFoto" value="<?php echo $fotoLlegada1; ?>"/>
            
            <button type="submit"  class="blank_btn "><i class="fa fa-check-circle greenbtn fa-3x" aria-hidden="true"></i></button>

        </form>
</div>
 <?php
        }else{
            include 'denegate.php';
        }
     ?>
</body>
</html>
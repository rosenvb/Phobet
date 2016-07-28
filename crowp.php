<?php

/**
 * Jcrop image cropping plugin for jQuery
 * Example cropping script
 * @copyright 2008-2009 Kelly Hallman
 * More info: http://deepliquid.com/content/Jcrop_Implementation_Theory.html
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $targ_w = $targ_h = 640;
    $jpeg_quality = 100;
    $src = './fotos/21.jpg';//ubicacion de la imagen a cortar
    $img_r = imagecreatefromjpeg($src);
    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
    imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
    $targ_w,$targ_h,$_POST['w'],$_POST['h']);
    header('Content-type: image/jpeg');
    imagejpeg($dst_r,null,$jpeg_quality);
    exit;
}

// If not a POST request, display page below:

?>

<html>
<head>
    <title>Crop Image - WOTA By Rosenvb</title>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.Jcrop.js"></script>
    <script type="text/javascript">
      jQuery(function($){

        // How easy is this??
        $('#target').Jcrop({
            bgColor:     '#ff3141',
            bgOpacity:   0.2,
            setSelect:   [ 20, 20, 120, 120 ],
            aspectRatio: 1/1,
            addClass: 'jcrop-light',
            onSelect: updateCoords
        });
      });



      function updateCoords(c){
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
      };

      function checkCoords(){
        if (parseInt($('#w').val())) return true;
        alert('Please select a crop region then press submit.');
        return false;
      };

    </script>
    <link rel="stylesheet" href="./css/jquery.Jcrop.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
</head>
<body>
    <div class="cabezal">
        <div class="logo"></div>
        <div class="twitter"></div>
    </div>
    <br>
        <div class="cropImg_">
                
                <span class="activo">2- Recorta tu imagen. 👇🛠</span>
                
        </div>
    <br>

  <div class="imgCropContenedor">
        
            <img src="./fotos/21.jpg" id="target" />
            <br>
        
  </div>


  <br>

  <!-- This is the form that our event handler fills -->
        <form action="crop.php" method="post" onsubmit="return checkCoords();">
            <input type="hidden" id="x" name="x" />
            <input type="hidden" id="y" name="y" />
            <input type="hidden" id="w" name="w" />
            <input type="hidden" id="h" name="h" />
            <input type="submit" value="Recortar" class="fn" />
        </form>


</body>
</html>
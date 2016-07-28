<?php


$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrcdefghijklmnopqrcdefghijklmnopqrstuvwxyz1234567890";
$cadena = utf8_encode($caracteres);
$desordenada = str_shuffle($cadena);


	if (isset($_FILES['file'])) {
		$file = $_FILES["file"];
		$nombre = $file["name"];
		$tipo = $file["type"];
		$ruta_provisional = $file["tmp_name"];
		$size = $file["size"];
		$dimensiones = getimagesize($ruta_provisional);
		$carpeta = 'fotos/upload/';
		if ($tipo != 'image/png' && $tipo != 'image/jpeg' && $tipo != 'image/jpg') {
			echo "Error, se debe subir una imagen.";
		}elseif ($size > 2000*2000) {
			echo "Error la resolucion de la imagen es demasiado grande.";
		}else{
			$src = $carpeta.$desordenada.".jpg";
			
			move_uploaded_file($ruta_provisional,$src);

			
			echo $src;
		}





	}else{
		echo "Hola mama";
	}

?>
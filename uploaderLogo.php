<?php
session_start();


$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrcdefghijklmnopqrcdefghijklmnopqrstuvwxyz1234567890";
$cadena = utf8_encode($caracteres);
$desordenada = str_shuffle($cadena);
date_default_timezone_set('America/Mexico_City');


	if (isset($_FILES['file'])) {
		$file = $_FILES["file"];
		$nombre = $file["name"];
		$tipo = $file["type"];
		$ruta_provisional = $file["tmp_name"];
		$size = $file["size"];
		$dimensiones = getimagesize($ruta_provisional);
		$carpeta = 'logos/upload/';
		if ($tipo != 'image/png' && $tipo != 'image/jpeg' && $tipo != 'image/jpg') {
			echo "Error, se debe subir una imagen.";
		}elseif ($size > 2000*2000) {
			echo "Error la resolucion de la imagen es demasiado grande.";
		}else{
			$srcC = "./".$carpeta.$desordenada.".jpg";
			$src = $carpeta.$desordenada.".jpg";
			$desordenada1='./logos/upload/'.$desordenada.".jpg";
			$userId = $_SESSION['id'];
			move_uploaded_file($ruta_provisional,$src);
			$date = date("Y-m-d H:i:s");
			
			//UPDATE `phobet`.`usuario` SET `usuario_logo` = './logos/upload/img1.png' WHERE `usuario`.`usuario_id` = 16

			include ("con_phobet.php");
			$sql = "UPDATE usuario SET usuario_logo = '$desordenada1' WHERE usuario_id = $userId";
			$sql1 = "UPDATE usuario SET usuario_fml = '$date' WHERE usuario_id = $userId";


			//"UPDATE usuario SET `usuario`.`usuario_logo` = '$desordenada1' WHERE `usuario_id` = $userId";
			//"INSERT INTO usuario (`usuario_id`, `usuario_nombre`, `usuario_nickname`, `usuario_pass`, `usuario_permiso`, `usuario_email`) VALUES (NULL, '$nombreUsuario', '$nicknameUsuario', '$passUsuario', '2', '$telefonoUsuario')";
			
			$userLg = $_SESSION['logo'];
			$_SESSION['logo'] = $srcC;
			$_SESSION['fechaMod'] = date('l jS \of F Y h:i:s A');

				mysqli_query($mysqli,$sql);
				mysqli_query($mysqli,$sql1);
				
				mysqli_close($mysqli);


			echo $srcC;
		}





	}else{
		echo "Hola mama";
	}

?>
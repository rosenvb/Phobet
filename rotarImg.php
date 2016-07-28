<?php 
	$valor = $_POST["degrees"];
	$file_1 = $_POST["archivo"];

	// Archivo y rotación

	$nombre_archivo = $file_1;
	$grados = 270;

	// Tipo de contenido
	header('Content-type: image/jpeg');

	// Cargar
	$origen = imagecreatefromjpeg($nombre_archivo);

	// Rotar
	$rotar = imagerotate($origen, $grados, 0);
	$uploadfile_nombre = $nombre_archivo;

	move_uploaded_file($origen,$nombre_archivo); 

	// Imprimir
	imagejpeg($rotar, $nombre_archivo);
	


	// Liberar la memoria
	imagedestroy($origen);
	imagedestroy($rotar);
 ?>
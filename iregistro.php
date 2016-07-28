<?php
	include ("con_phobet.php");
	
	$nombreUsuario = utf8_decode ($_POST['nombre']);
	$telefonoUsuario = utf8_decode ($_POST['telefono']);
	$passUsuario = utf8_decode ($_POST['pass']);
	$nicknameUsuario = utf8_decode ($_POST['nickname']);


	$sql = "INSERT INTO usuario (`usuario_id`, `usuario_nombre`, `usuario_nickname`, `usuario_pass`, `usuario_permiso`, `usuario_email`) VALUES (NULL, '$nombreUsuario', '$nicknameUsuario', '$passUsuario', '2', '$telefonoUsuario')";
	
	if ($nombreUsuario != NULL && $telefonoUsuario != NULL && $passUsuario != NULL && $nicknameUsuario != NULL) {
		mysqli_query($mysqli,$sql);
		mysqli_close($mysqli);


		header("Location: login.php");
	}else{
		header("Location: registro.php");
	}
	

?>
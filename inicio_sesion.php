<?php
	include 'con_phobet.php';
	$nombre = $_POST["username"];
	$pass = $_POST["pass"];
	

	if ($nombre != null && $pass != null) {
		
	$sql = "SELECT * FROM usuario WHERE usuario_nickname='$nombre' AND usuario_pass = '$pass'";

	$result = mysqli_query($mysqli, $sql) or die('Consulta fallida: ' . mysql_error());

			while($row = mysqli_fetch_array($result)) {
				$idC = $row['usuario_id'];
				$logoC = $row['usuario_logo'];
				$fechaC = $row['usuario_fml'];
				$nombreC = $row['usuario_nickname'];
				$password = $row['usuario_pass'];
				$nombreReal = $row['usuario_nombre'];
				$permisoReal = $row['usuario_permiso'];
				
				//echo "$nombreC $password $nombreReal $permisoReal";
			}

			if ($nombre==$nombreC && $password == $pass) {
				header('Location: index.php');
			}else{
				header('Location: login.php');
			}

				session_start();
				$_SESSION['usuario']=$nombreC;
				$_SESSION['nombre']=$nombreReal;
				$_SESSION['permiso']=$permisoReal;
				$_SESSION['id']=$idC;
				$_SESSION['logo']=$logoC;
				$_SESSION['fechaMod']=$fechaC;

			// Liberar resultados
	}else{
		header('Location: login.php');
	}





	mysqli_free_result($result);
?>
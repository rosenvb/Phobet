<?
session_start();

				
				$_SESSION['permiso']=2999;
session_unset();
session_destroy();

header("location:login.php");
ob_end_flush(); 
exit();
?>
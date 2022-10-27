<?php
/*mantener la sesion activa nota:pegar en cada pagina que este dentro del inicio de sesion*/
session_start();
error_reporting(E_ALL);
$_SESSION['Nombre'];
$vsesion = $_SESSION['Nombre'];
if ($vsesion == null || $vsesion = '') {
	/*alerta de no inicio de sesion*/
	echo '<script language="javascript">alert("Debes iniciar sesion");window.location.href=""</script>';
	
}
?>

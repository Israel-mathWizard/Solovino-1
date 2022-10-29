<?php
//Se incluye la conexion a la base de datos

use LDAP\Result;

include_once('Conexion.php');

//Recibe los datos del formulario.
        $Nombre = $_POST['Nombre'];
        $Direccion = $_POST['Direccion'];
        $Telefono = $_POST['Telefono'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

//
$conexion=mysqli_connect("localhost", "root", "", "solovino");
$sql="INSERT INTO usuarios(Nombre, Direccion, Telefono, Email, Password)
VALUES('$Nombre', '$Direccion', '$Telefono', '$Email', '$Password')";

$Result=mysqli_query($conexion, $sql);

if ($Result== true) {
      // inicio de sesion..
     header("location:../Login.html");
 } else {
       // alerta de usuario ou contraseña no valido
      echo '<script language="javascript">alert("Error de registro");window.location.href="../Login.html"</script>';
 }

?>
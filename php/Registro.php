<?php
error_reporting(0);
header('content-type: application/json; charset=utf-8');
        include "conexion.php";
        
        $ejecutar = $conexion -> query($sql);
        
        $Nombre = $_REQUEST['Usuario'];
        $Direccion = $_REQUEST['Direccion'];
        $Telefono = $_REQUEST['Telefono'];
        $Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];

        $sql = "INSERT INTO usuarios VALUES (default, '$Nombre','$Direccion','$Telefono','$Email','$Password')";
        $data["sql"] = $sql;
        $ejecutar = $conexion -> query($sql);

        if ($ejecutar) {
			// redirecionara a pagina..
            header("location:../Login.html"); 
        } else {
            $data["resultado"] = "Error";
        }

print $_GET['callback'] . '('.json_encode($data).')';
?>
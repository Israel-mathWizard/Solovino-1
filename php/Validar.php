<?php
    
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    //conectar a base de datos
    $conexion=mysqli_connect("localhost", "root", "", "solovino");
    $consulta="SELECT * FROM usuarios WHERE Email='$Email' and Password ='$Password'";
 
    $Result=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($Result);

        if ($filas>0) {
             // inicio de sesion..
             session_start();
            $_SESSION['Email']=$Email;
            // redirecionara a pagina..
            header("location:../Adoptar.php");
        } else {
              // alerta de usuario ou contraseña no valido
             echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../Login.html"</script>';
        }

    mysqli_free_result($Result);
    mysqli_close($conexion);

?>	                    
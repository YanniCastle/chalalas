<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];

    include('conexion.php');
$queryusuario 	= mysqli_query($conn,"SELECT * FROM usuarios_pass2 WHERE MAIL = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
    $_SESSION["correo"] = $correo;

$mostrar		= mysqli_fetch_array($queryusuario);
$enviarlink ="http://chalalas.com/generar_enlace2.php";
$paracorreo 		= $correo;
$titulo				= "Cambia tu contraseña";
$mensaje			="Haz clic en el enlace para restablecer tu contraseña:  " . $enviarlink;
$tucorreo			= "From: chalalasmx@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviada');window.location= 'login.php' </script>";
}
else{
	echo "<script> alert('Error');window.location= 'login.php' </script>";
    }
}

else{
	echo "<script> alert('Este correo no existe');window.location= 'recopilar_correo2.php' </script>";
    }
}
else{
    echo "<script> alert('Este correo no existe');window.location= 'recopilar_correo2.php' </script>";
}
?>

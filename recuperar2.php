<?php
include('conexion.php');

$correo = $_POST['txtcorreo'];
$queryusuario 	= mysqli_query($conn,"SELECT * FROM USUARIOS_PASS2 WHERE MAIL = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$correo = $_POST["txtcorreo"];
	
			$_SESSION["txtcorreo"] = $correo;
	
$mostrar		= mysqli_fetch_array($queryusuario); /*consulta de BD */
$enviarlink = "http://localhost/curso_php/crud7.php?correo=$correo";/*link de enlace */
$paracorreo 		= $correo;/*Destinatario*/
$titulo				= "Cambia tu contraseña";/*Encabezado*/
$mensaje			="Haz clic en el enlace para restablecer tu contraseña:  " . $enviarlink;/*Mensaje*/
$tucorreo			= "From: xxxx@gmail.com";/* esta en localhost con chalalasmx@gmail.com */

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviada');window.location= 'login.php' </script>";
}
else{
	echo "<script> alert('Error');window.location= 'login.php' </script>";
    }
}

else{
	echo "<script> alert('Este correo no existe');window.location= 'recuperacion2.php' </script>";
    }
	}		
else{
		echo "<script> alert('Este correo no existe');window.location= 'recuperacion2.php' </script>";
    }
	
?>
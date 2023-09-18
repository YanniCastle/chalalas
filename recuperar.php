<?php
include('conexion.php');

$correo = $_POST['txtcorreo'];
                              //?                    //login              correo
$queryusuario 	= mysqli_query($conn,"SELECT * FROM USUARIOS_PASS2 WHERE MAIL = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarpass 	= $mostrar['PASSWORD'];
//probado enviar link de actualizacion de contraseña
$enviarlink = "http://localhost/curso_php/crud4.php";
                          //pass
$paracorreo 		= $correo;
$titulo				= "Cambia tu contraseña";
/*$mensaje			= $enviarpass. $enviarlink;*/
$mensaje			="Haz clic en el enlace para restablecer tu contraseña:  " . $enviarlink;
$tucorreo			= "From: xxxx@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviada');window.location= 'login.php' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'login.php' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'recuperacion.php' </script>";
}

?>
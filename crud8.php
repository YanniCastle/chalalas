<?php
  session_start();

  if(isset($_SESSION["correo"])){
    include("conexion.php");
  $email_sesion = $_SESSION["correo"];
  $query_sesion = $base->prepare("SELECT * FROM usuarios_pass2 WHERE MAIL = '$email_sesion' ");
  $query_sesion->execute();
  $sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
  foreach($sesion_usuarios as $sesion_usuario){

   $id_sesion = $sesion_usuario['ID'];
   $usuarios_sesion = $sesion_usuario['USUARIOS'];
   $mail_sesion = $sesion_usuario['MAIL'];
   $password_sesion = $sesion_usuario['PASSWORD'];
  }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nueva contraseña</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="stylefoto2.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>
<body>
<nav>
    <ul>    
      <li>
        <a href="#"><img src="imagenes/chalalas4.png"></a>
      </li>
 
    </ul>
  </nav>
  <h1>Escribe tu nueva contraseña</h1>
<?php  echo "<h2>¡Hola, " . $_SESSION["correo"] . "!<br></h2>"; 

if (!isset($_POST["bot_actualizar"])) {

} else {
  $Id = $_POST["id"];
  $usu = $_POST["usu"];
  $mai = $_POST["mai"];
  $pas = $_POST["pas"];
  
  $pass_cifrado = password_hash($pas, PASSWORD_DEFAULT, array("cost" => 12));    
$sql = "UPDATE usuarios_pass2 SET USUARIOS=:miUsu, MAIL=:miMai, PASSWORD=:miPas WHERE Id=:miId";
  $resultado = $base->prepare($sql);
  $resultado->execute(array(":miId" => $Id, ":miUsu" => $usu, ":miMai" => $mai, ":miPas" => $pass_cifrado));
  header("Location:login.php");
}
?>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

  <table width="20%" border="1" align="center">
      <tr>
          <input type="hidden" name="id" id="id" value="<?php echo $id_sesion ?>" >
      </tr>
      
      <tr>
<!--NO cambiar, deja de funcionar SESSION-->
          <input type="hidden" name="usu" id="usu" value="<?php echo $usuarios_sesion ?>">
      </tr>

      <tr>
          <input type="hidden" name="mai" id="mai" value="<?php echo $mail_sesion ?>">   
      </tr>
           
      <tr>
        <td>Contraseña</td>
        <td><label for="pas"></label>
          <input type="text" name="pas" id="pas" value="" placeholder="Nueva contraseña">
        </td>
      </tr>
     
      <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>
    </table>
  </form>
  
</body>
</html>

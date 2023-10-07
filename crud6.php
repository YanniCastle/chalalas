<?php

  include("conexion.php");

  session_start();

  if(isset($_SESSION["usuario"])){

  $email_sesion = $_SESSION["usuario"];
  $query_sesion = $base->prepare("SELECT * FROM usuarios_pass2 WHERE USUARIOS = '$email_sesion' OR MAIL = '$email_sesion' ");
  $query_sesion->execute();
  $sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
  foreach($sesion_usuarios as $sesion_usuario){

   $id_sesion = $sesion_usuario['ID'];
   $nombre_sesion = $sesion_usuario['NOMBRE'];
   $usuarios_sesion = $sesion_usuario['USUARIOS'];
   $mail_sesion = $sesion_usuario['MAIL'];
   $telefono_sesion = $sesion_usuario['TELEFONO'];
   $password_sesion = $sesion_usuario['PASSWORD'];
  }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATOS SESSION</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="stylefoto2.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>
<body>
<nav>
    <ul>    
      <li>
        <a href="usuarios_registrados1.php"><img src="imagenes/chalalas4.png"></a>
      </li>
      <li><a href="cierre.php">cerrar sesion</a></li>
    </ul>
  </nav>
  <h1>Cambia datos de usuario</h1>
  <h3>Funciona bien, muestra y cambia datos de usuario en sessión 
    (No cambiar Usuario, con ese inicia session)</h3>

<?php  echo "<h2>¡Hola, " . $_SESSION["usuario"] . "!<br></h2>"; 

if (!isset($_POST["bot_actualizar"])) {

} else {
  $Id = $_POST["id"];
  $nom = $_POST["nom"];
  $usu = $_POST["usu"];
  $mai = $_POST["mai"];
  $tel = $_POST["tel"];
  $pas = $_POST["pas"];   
$sql = "UPDATE usuarios_pass2 SET NOMBRE=:miNom, USUARIOS=:miUsu, MAIL=:miMai, TELEFONO=:miTel, PASSWORD=:miPas WHERE Id=:miId";
  $resultado = $base->prepare($sql);
  $resultado->execute(array(":miId" => $Id, ":miNom" => $nom, ":miUsu" => $usu, ":miMai" => $mai, ":miTel" => $tel, ":miPas" => $pas));
  header("Location:crud6.php");
}


?>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table>
          <tr>
            <td>                   
          <?php echo $id_sesion ?>
          <?php echo $nombre_sesion ?>
          <?php echo $usuarios_sesion ?>
          <?php echo $mail_sesion ?>
          <?php echo $telefono_sesion ?>
          <?php echo $password_sesion ?>
            </td>
          </tr>
         </table>  
  <table width="20%" border="1" align="center">
      <tr>
        <td>Id: <?php echo $id_sesion ?></td>
        <td><label for="id"></label>
          <input type="hidden" name="id" id="id" value="<?php echo $id_sesion ?>" >
        </td><!--type="hidden"-->
      </tr>
      <tr>
        <td>Nombre</td>
        <td><label for="nom"></label>
          <input type="text" name="nom" id="nom" value="<?php echo $nombre_sesion ?>" >
        </td>
      </tr>
      <tr>
        <td>Usuario</td>
        <td><label for="ape"></label><!--NO cambiar nombre porque deja de funcionar SESSION-->
          <input type="text" name="usu" id="usu" value="<?php echo $usuarios_sesion ?>">
        </td>
      </tr>
      <tr>
        <td>Mail</td>
        <td><label for="dir"></label>
          <input type="text" name="mai" id="mai" value="<?php echo $mail_sesion ?>">
        </td>
      </tr>
      <tr>
        <td>Telefono</td>
        <td><label for="dir"></label>
          <input type="text" name="tel" id="tel" value="<?php echo $telefono_sesion ?>">
        </td>
      </tr>
      <tr>
        <td>Contraseña</td>
        <td><label for="dir"></label>
          <input type="text" name="pas" id="pas" value="<?php echo $password_sesion ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>
    </table>
  </form>
  
</body>
</html>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Actualizar</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="stylefoto2.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <h1>ACTUALIZAR datos de fotos</h1>
  <?php
  session_start();
  /*if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }*/
  ?>
  <?php
  /*conexion.php */
  try {
    $base = new PDO('mysql:host=localhost; dbname=u909812438_chalalas2', 'u909812438_root2', 'QWERTYu55442');
    /*Para poder ver los errores y tipos */
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
  } catch (Exception $e) {
    die('Error' . $e->getMessage()); //acabe conexion y cual es//
    echo "Linea de error" . $e->getLine(); //esto da la linea del error//
  }
  /*archivo de conexion */

  if (!isset($_POST["bot_actualizar"])) {

    $Id = $_GET["Id"];
    $nom = $_GET["Tit"];
    $usu = $_GET["Fec"];
    $mai = $_GET["Com"];
    $tel = $_GET["Ima"];
    $pas = $_GET["Pre"];
  } else {
    $Id = $_POST["id"];
    $nom = $_POST["tit"];
    $usu = $_POST["fec"];
    $mai = $_POST["com"];
    $tel = $_POST["ima"];
    $pas = $_POST["pre"];

    $sql = "UPDATE contenido SET Titulo=:miTit, Fecha=:miFec, Comentario=:miCom, Imagen=:miIma, precio=:miPre WHERE Id=:miId";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":miId" => $Id, ":miTit" => $nom, ":miFec" => $usu, ":miCom" => $mai, ":miIma" => $tel, ":miPre" => $pas));

    header("Location:crud11.php");
  }
  ?>

  <p>

  </p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="25%" border="0" align="center">
      <tr>
        <td></td>
        <td><label for="id"></label>
          <input type="hidden" name="id" id="id" value="<?php echo $Id ?>">
        </td> <!--oculte id-->
      </tr>
      <tr>
        <td>Titulo</td>
        <td><label for="tit"></label>
          <input type="text" name="tit" id="tit" value="<?php echo $nom ?>">
        </td>
      </tr>
      <tr>
        <td>Fecha</td>
        <td><label for="fec"></label>
          <input type="text" name="fec" id="fec" value="<?php echo $usu ?>">
        </td>
      </tr>
      <tr>
        <td>Comentario</td>
        <td><label for="com"></label>
          <input type="text" name="com" id="com" value="<?php echo $mai ?>">
        </td>
      </tr>
      <tr>
        <td>Imagen</td>
        <td><label for="ima"></label>
          <input type="hidden" name="ima" id="ima" value="<?php echo $tel ?>">
        </td> <!--oculte imagen-->
      </tr>
      <tr>
        <td>Precio</td>
        <td><label for="pre"></label>
          <input type="text" name="pre" id="pre" value="<?php echo $pas ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>
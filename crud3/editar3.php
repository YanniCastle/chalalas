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
<article id="position">
   <nav>
    <ul>
      <li>
        <a href="usuarios_registrados1.php"><img src="imagenes/chalalas4.png"></a>
      </li>
      <li>
        <a href="#">Productos</a>
        <ul>
          <li><a href="comprar.php">Comprar</a></li>
          <li><a href="vender.php">Vender</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Servicios</a>
        <ul>
          <li><a href="buscar.php">buscar</a></li>
          <li><a href="ofrecer.php">ofrecer</a></li>
        </ul>
      </li>

      <li><a href="#">Categorias</a>
        <ul>
          <li><a href="#">categoria 1</a></li>
          <li><a href="#">categoria 2</a></li>
          <li><a href="#">categoria 3</a></li>
          <li><a href="#">categoria 4</a></li>
        </ul>
      </li>

      <li><a href="Formulario.php">Comentarios</a></li>
      <li><a href="fotos.php">Fotos</a></li>
      <li><a href="videos.php">videos</a></li>
      <li><a href="crud2.php">CRUD2</a></li>

      <li><a href="#">Contactos</a>
        <ul>
          <li><a href="#">Whats App</a></li>
          <li><a href="email.php">Email</a></li>
        </ul>
      </li>
      <li><a href="muro.php">Muro</a></li>
      <li><a href="cierre.php">cerrar sesion</a></li>
    </ul>
  </nav>
   </article><br><br>
  <h1>ACTUALIZAR</h1>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }
  ?>
  <?php

  include("conexion.php");

  if (!isset($_POST["bot_actualizar"])) {

    $Id = $_GET["Id"];
    $nom = $_GET["nom"];
    $usu = $_GET["usu"];
    $mai = $_GET["mai"];
    $tel = $_GET["tel"];
    $pas = $_GET["pas"];
  } else {
    $Id = $_POST["id"];
    $nom = $_POST["nom"];
    $usu = $_POST["usu"];
    $mai = $_POST["mai"];
    $tel = $_POST["tel"];
    $pas = $_POST["pas"];

    $sql = "UPDATE usuarios_pass2 SET Nombre=:miNom, Usuarios=:miUsu, Mail=:miMai, Telefono=:miTel, Password=:miPas WHERE Id=:miId";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":miId" => $Id, ":miNom" => $nom, ":miUsu" => $usu, ":miMai" => $mai, ":miTel" => $tel, ":miPas" => $pas));

    header("Location:crud3.php");
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
        </td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><label for="nom"></label>
          <input type="text" name="nom" id="nom" value="<?php echo $nom ?>">
        </td>
      </tr>
      <tr>
        <td>Usuario</td>
        <td><label for="usu"></label>
          <input type="text" name="usu" id="usu" value="<?php echo $usu ?>">
        </td>
      </tr>
      <tr>
        <td>Mail</td>
        <td><label for="mai"></label>
          <input type="text" name="mai" id="mai" value="<?php echo $mai ?>">
        </td>
      </tr>
      <tr>
        <td>Telefono</td>
        <td><label for="tel"></label>
          <input type="text" name="tel" id="tel" value="<?php echo $tel ?>">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label for="pas"></label>
          <input type="text" name="pas" id="pas" value="<?php echo $pas ?>">
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
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD usuarios_pass2</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
<h2>Debe funcionar con tabla:usuarios_pass2<br>Insertar funciona</h2>
  <img class="marca" src="chalalas2.png" aling="middle" alt="Sitio de comercio electronico">
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
  }
  ?>
  <?php
  include("conexion.php");
  //$conexion=$base->query("SELECT * FROM DATOS_USUARIOS");//
  //$registros=$conexion->fetchAll(PDO::FETCH_OBJ);//
  $registros = $base->query("SELECT * FROM USUARIOS_PASS2")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    $nombre = $_POST["Nom"];
    $usuarios = $_POST["Usu"];
    $email = $_POST["Email"];
    $telefono = $_POST["Tel"];
    $password = $_POST["Pass"];

    $sql = "INSERT INTO USUARIOS_PASS2 (NOMBRE, USUARIOS, MAIL, TELEFONO, PASSWORD) VALUES(:nom, :usu, :email, :tel, :pass)";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom" => $nombre, ":usu" => $usuarios, ":email" => $email, ":tel" => $telefono, ":pass" => $password));
    header("Location:index2.php");
  }
  ?>

  <h1>Usuarios de Chalalas<span class="subtitulo">usuarios_pass2</span></h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Usuarios</td>
        <td class="primera_fila">Email</td>
        <td class="primera_fila">Telefono</td>
        <td class="primera_fila">Password</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>


      <?php   //bucle//
      foreach ($registros as $persona) : ?>
        <tr>
          <td><?php echo $persona->Id ?></td>
          <td><?php echo $persona->Nombre ?></td>
          <td><?php echo $persona->Usuarios ?></td>
          <td><?php echo $persona->Email ?></td>
          <td><?php echo $persona->Telefono ?></td>
          <td><?php echo $persona->Password ?></td>

          <td class="bot"><a href="borrar2.php?Id=<?php echo $persona->Id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>


          <td class='bot'><a href="editar2.php?Id=<?php echo $persona->Id ?> & nom=<?php echo $persona->Nombre ?> & usu=<?php echo $persona->Usuarios ?> & email=<?php echo $persona->Email ?> & tel=<?php echo $persona->Telefono ?> & pass=<?php echo $persona->Password ?>">

              <input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr>


      <?php endforeach; ?>

      <tr>
        <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Usu' size='10' class='centrado'></td>
        <td><input type='text' name='Email' size='10' class='centrado'></td>
        <td><input type='text' name='Tel' size='10' class='centrado'></td>
        <td><input type='text' name='Pass' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>
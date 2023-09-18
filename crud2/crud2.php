<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD2</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <h2>funciona con tabla:datos_usuarios2</h2>
  <h2>Realizar CRUD3 para tabla USUARIOS_PASS2.. crud3, editar3, borrar3</h2>
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
  $registros = $base->query("SELECT * FROM datos_usuarios2")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    $nombre = $_POST["Nom"];
    $usuario = $_POST["Usu"];
    $mail = $_POST["Mai"];
    $telefono = $_POST["Tel"];
    $password = $_POST["Pas"];
                  //HACER "CRUD3"PARA TABLA USUARIOS_PASS2 CUIDADO CON id y ID
    $sql = "INSERT INTO DATOS_USUARIOS2 (NOMBRE, USUARIOS, MAIL, TELEFONO, PASSWORD) VALUES(:nom, :usu, :mai, :tel, :pas)";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom" => $nombre, ":usu" => $usuario, ":mai" => $mail, ":tel" => $telefono, ":pas" => $password));
    header("Location:crud2.php");
  }
  ?>

  <h1>CRUD2</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Usuarios</td>
        <td class="primera_fila">Mail</td>
        <td class="primera_fila">Telefono</td>
        <td class="primera_fila">Password</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>


      <?php   //bucle//
      foreach ($registros as $persona) : ?>
        <tr>                  <!--cuidado con Id y ID-->
          <td><?php echo $persona->Id ?></td><!--Lado derecha, es dato de columna rn BD-->
          <td><?php echo $persona->Nombre ?></td>
          <td><?php echo $persona->Usuarios ?></td>
          <td><?php echo $persona->Mail ?></td>
          <td><?php echo $persona->Telefono ?></td>
          <td><?php echo $persona->Password ?></td>

          <td class="bot"><a href="borrar2.php?Id=<?php echo $persona->Id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>


          <td class='bot'><a href="editar2.php?Id=<?php echo $persona->Id ?> & nom=<?php echo $persona->Nombre ?> & usu=<?php echo $persona->Usuarios ?> & mai=<?php echo $persona->Mail ?> & tel=<?php echo $persona->Telefono ?> & pas=<?php echo $persona->Password ?>">

              <input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr>


      <?php endforeach; ?>

      <tr>
        <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Usu' size='10' class='centrado'></td>
        <td><input type='text' name='Mai' size='10' class='centrado'></td>
        <td><input type='text' name='Tel' size='10' class='centrado'></td>
        <td><input type='text' name='Pas' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>
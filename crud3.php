<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD3</title>
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
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
  }
  ?>
  <?php
  include("conexion.php");
  $registros = $base->query("SELECT * FROM usuarios_pass2")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    $nombre = $_POST["Nom"];
    $usuario = $_POST["Usu"];
    $mail = $_POST["Mai"];
    $telefono = $_POST["Tel"];
    $password = $_POST["Pas"];

    $sql = "INSERT INTO usuarios_pass2 (NOMBRE, USUARIOS, MAIL, TELEFONO, PASSWORD) VALUES(:nom, :usu, :mai, :tel, :pas)";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom" => $nombre, ":usu" => $usuario, ":mai" => $mail, ":tel" => $telefono, ":pas" => $password));
    header("Location:crud3.php");
  }
  ?>

  <h1>CRUD3    tabla:usuarios_pass2</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">ID</td>
        <td class="primera_fila">NOMBRE</td>
        <td class="primera_fila">USUARIOS</td>
        <td class="primera_fila">MAIL</td>
        <td class="primera_fila">TELEFONO</td>
        <td class="primera_fila">PASSWORD</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>


      <?php   //bucle//
      foreach ($registros as $persona) : ?>
        <tr>                 
          <td><?php echo $persona->ID ?></td>
          <td><?php echo $persona->NOMBRE ?></td>
          <td><?php echo $persona->USUARIOS ?></td>
          <td><?php echo $persona->MAIL ?></td>
          <td><?php echo $persona->TELEFONO ?></td>
          <td><?php echo $persona->PASSWORD ?></td>

          <td class="bot"><a href="borrar3.php?Id=<?php echo $persona->ID ?>">
          <input type='button' name='del' id='del' value='Borrar'></a></td>


<td class='bot'><a href="editar3.php?Id=<?php echo $persona->ID ?> & nom=<?php echo $persona->NOMBRE ?> & usu=<?php echo $persona->USUARIOS ?> & mai=<?php echo $persona->MAIL ?> & tel=<?php echo $persona->TELEFONO ?> & pas=<?php echo $persona->PASSWORD ?>">
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
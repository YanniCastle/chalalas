<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Cambiar contraseña</title>
  <link rel="stylesheet" href="style8.css" />
  <link rel="stylesheet" href="stylefoto2.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
<article id="position">
   <nav>
    <ul>
      <li>
        <a href="#"><img src="imagenes/chalalas4.png"></a>
      </li>
      <li>
        <a href="#">Productos</a>
        <ul>
          <li><a href="comprar.php">Comprar</a></li>
          <li><a href="vender.php">Vender</a></li>
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

      <li><a href="cierre.php">cerrar sesion</a></li>
    </ul>
  </nav>
   </article><br><br>
  <?php  /* suspendi session para probar cambio de contraseña
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
  }*/
  ?>
  <?php
  include("conexion.php");
  $registros = $base->query("SELECT * FROM usuarios_pass2")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    
    $password = $_POST["Pas"];

    $sql = "INSERT INTO usuarios_pass2 (PASSWORD) VALUES(:pas)";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":pas" => $password));
    header("Location:crud4.php");
  }
  ?>

  <h1>Cambia Contraseña    tabla:usuarios_pass2</h1>
  <h2>Quitar el bucle de lista</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">ID</td>     
        <td class="primera_fila">PASSWORD</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <?php   //bucle//
      foreach ($registros as $persona) : ?>
        <tr>                 
          <td><?php echo $persona->ID ?></td>         
          <td><?php echo $persona->PASSWORD ?></td>

          <td class="bot"><a href="borrar4.php?Id=<?php echo $persona->ID ?>">
          <input type='button' name='del' id='del' value='Borrar'></a></td>


<td class='bot'><a href="editar4.php?Id=<?php echo $persona->ID ?> & pas=<?php echo $persona->PASSWORD ?>">
<input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr>


      <?php endforeach; ?>

      <tr>
        <td><input type='text' name='Pas' size='10' class='centrado'></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>
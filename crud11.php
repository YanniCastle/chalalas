<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD11 para BD:imagenes tabla:contenido</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="stylefoto2.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
  }
  ?>
  <?php
  /*conexion.php */
  try {
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
    /*Para poder ver los errores y tipos */
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
  } catch (Exception $e) {
    die('Error' . $e->getMessage()); //acabe conexion y cual es//
    echo "Linea de error" . $e->getLine(); //esto da la linea del error//
  }
  /*archivo de conexion */

  $registros = $base->query("SELECT * FROM contenido ORDER BY FECHA DESC")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    $nombre = $_POST["Tit"];
    $usuario = $_POST["Fec"];
    $mail = $_POST["Com"];
    $telefono = $_POST["Ima"];
    $password = $_POST["Pre"];

    $sql = "INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen, precio) VALUES(:tit, :fec, :com, :ima, :pre)";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":tit" => $nombre, ":fec" => $usuario, ":com" => $mail, ":ima" => $telefono, ":pre" => $password));
    header("Location:crud11.php");
  }
  ?>
  <a href="cierre.php">cerrar sesion</a>
  <h1>Imagenes en catalogo</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Titulo</td>
        <td class="primera_fila">Fecha</td>
        <td class="primera_fila">Comentario</td>
        <td class="primera_fila">Imagen</td>
        <td class="primera_fila">ruta</td>
        <td class="primera_fila">Precio</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <?php   //bucle//
      foreach ($registros as $persona) : ?>
        <tr>
          <td><?php echo $persona->Id ?></td>
          <td><?php echo $persona->Titulo ?></td>
          <td><?php echo $persona->Fecha ?></td>
          <td><?php echo $persona->Comentario ?></td>
          <td><?php echo "<img src='imagenes/productos/" . $persona->Imagen . "' width='100px'/>"; ?></td>
          <td><?php echo $persona->ruta ?></td><!--para la ruta-->
          <td><?php echo $persona->precio ?></td>

          <td class="bot"><a href="borrar11.php?Id=<?php echo $persona->Id ?> & ruta=<?php echo $persona->ruta ?>">
              <input type='button' name='del' id='del' value='Borrar'></a></td>

          <td class='bot'><a href="editar11.php?Id=<?php echo $persona->Id ?> & Tit=<?php echo $persona->Titulo ?> & Fec=<?php echo $persona->Fecha ?> & Com=<?php echo $persona->Comentario ?> & Ima=<?php echo $persona->Imagen ?> & Pre=<?php echo $persona->precio ?>">
              <input type='button' name='up' id='up' value='Actualizar datos'></a></td>
        </tr>
        <!--ACOMODAR DATOS PARA VERSE BIEN EN TABLA ,  ORDENAR QUE NO SE VEA RUTA-->

      <?php endforeach; ?>


    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>
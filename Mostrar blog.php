<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Mostrar blog</title>
  <link rel="shortcut icon" href="/imagenes/letraCfondonegro.png">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <img class="marca" src="/imagenes/chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
  <h1>Blog</h1>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:index.php");
  }
  ?>

  <hr>
  <?php
  $miconexion = mysqli_connect("localhost", "root", "", "pruebas");
  /*Comprobar conexion*/
  if (!$miconexion) {                /*mysqli_error()*/
    echo "La conexión ha fallado: " . mysqli_connect_error();/*¿falta algo?*/
    exit();
  }
  /*Instruccion de rescatar informacion de tabla contenido */
  $miconsulta = "SELECT * FROM contenido ORDER BY FECHA DESC";

  if ($resultado = mysqli_query($miconexion, $miconsulta)) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
      echo "<h3>" . $registro['Titulo'] . "</h3>";
      echo "<h4>" . $registro['Fecha'] . "</h4>";
      echo "<div style='width:400px'>" . $registro['Comentario'] . "</div><br/>";
      /*Lo relacionado a imagen /*video 92  13:33*/
      if ($registro['Imagen'] != "") {
        echo "<img src='imagenes/" . $registro['Imagen'] . "' width='300px'/>";
      }
      echo "<hr/>";/*Linea divisoria para capturas*/
    }
  }
  ?>
</body>

</html>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Fotos</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="stylefoto2.css" /><!--menu-->
</head>

<body>
<article id="position">
   <nav>
    <ul>
      <li>
        <a href="inicio.html"><img src="imagenes/chalalas4.png"></a>
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

      <li><a href="#">Contactos</a>
        <ul>
          <li><a href="#">Whats App</a></li>
          <li><a href="email.php">Email</a></li>
        </ul>
      </li>
      <li><a href="muro.php">Muro</a></li>
    </ul>
  </nav>
   </article>

  <h1>Fotos</h1>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
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
      if ($registro['Imagen'] != "") {
        echo "<img src='imagenes/" . $registro['Imagen'] . "' width='180px'/>";
      }
      echo  " <h3>Precio : $" . $registro['precio'] . " pesos MX</h3>";
      echo "<hr/>";/*Linea divisoria para capturas*/
    }
  }
  ?>

</body>

</html>
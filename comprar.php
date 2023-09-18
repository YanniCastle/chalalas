<?php
include 'config.php';
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Comprar</title>
  <link rel="stylesheet" href="stylefoto2.css" /><!--menu-->
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
   </article>
<br><br>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }
  ?>
  <h1>Aqui puedes comprar los articulos de tu interes</h1>
  <?php
  echo "<h2>¡Hola, " . $_SESSION["usuario"] . "!<br></h2>";
  ?>
  
  <form action="" method="get">
  <input type="text" name="busqueda" required placeholder="Agrega tu busqueda"><br>
  <input type="submit" name="enviar" value="Buscar"> 
  </form>

  <?php

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];

  $consulta = $con->query("SELECT * FROM contenido WHERE Titulo LIKE '%$busqueda%'");

  
  while($row = $consulta->fetch_array()){
    echo "<h3>" . $row['Titulo'] . "</h3>";
    echo "<h5>" . $row['Fecha'] . "</h5>";
      echo "<div style='width:400px'>" . $row['Comentario'] . "</div><br/>";
      if ($row['Imagen'] != "") {
        echo "<img src='imagenes/" . $row['Imagen'] . "' width='180px'/>";
      }
      echo  " <h3>Precio : $" . $row['precio'] . " pesos MX</h3>";
      echo "<hr/>";
  }
}
?>


</body>

</html>
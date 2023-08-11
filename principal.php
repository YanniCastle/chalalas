<?php
include 'config/config.php';
?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="style.css"/>
  <link rel="shortcut icon" href="/imagenes/letraCfondonegro.png">
</head>

<body>
  <header>
    <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li>
          <a href="#">Productos</a>
          <ul>
            <li><a href="comprar.php">Comprar</a></li>
            <li><a href="vender.php">Vender</a></li>
          </ul>
        </li>

        <li><a href="#">CRUD</a></li>
        <li><a href="comentarios.php">Comentarios</a></li>
        <li><a href="fotos.php">Fotos</a></li>
        <li><a href="videos.php">videos</a></li>

        <li><a href="#">Contactos</a>
          <ul>
            <li><a href="#">Whats App</a></li>
            <li><a href="new 1.php">Email</a></li>
          </ul>
        </li>
        <li><a href="muro.php">Muro</a></li>
        <li><a href="cierre.php">cerrar sesión</a></li>
      </ul>
    </nav>
  </header>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:index.php");
  }
  ?>
  <h1>Bienvenid@</h1>
  <?php
  echo "<h2>¡Hola, " . $_SESSION["usuario"] . "!<br></h2>";
  ?>



<form action="" method="get">
  <input type="text" name="busqueda" required placeholder="Agrega tu busqueda"><br>
  <input type="submit" name="enviar" value="Buscar"> 
</form>

<br><br><br>
  
<?php

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];

  $consulta = $con->query("SELECT * FROM contenido WHERE articulo LIKE '%$busqueda%'");

  while($row = $consulta->fetch_array()){
    echo $row['articulo']. '<br>';
    echo $row['precio']. '<br>';
    echo "<h4>" . $row['Fecha'] . "</h4>";
      echo "<div style='width:400px'>" . $row['descripcion'] . "</div><br/>";
      if ($row['Imagen'] != "") {
        echo "<img src='imagenes/" . $row['Imagen'] . "' width='300px'/>";
      }
      echo "<hr/>";
  }
}
?>
<br><br>
</body>

</html>
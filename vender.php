<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Vender</title>
  <link rel="stylesheet" href="style.css"/>
  <link rel="shortcut icon" href="/imagenes/letraCfondonegro.png">
</head>

<body>
  <header>
    <img src="/imagenes/chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li>
          <a href="#">Productos</a>
          <ul>
            <li><a href="#">Comprar</a></li>
            <li><a href="#">Vender</a></li>
          </ul>
        </li>

        <li><a href="#">CRUD</a></li>
        <li><a href="#">Comentarios</a></li>
        <li><a href="#">Fotos</a></li>
        <li><a href="#">videos</a></li>

        <li><a href="#">Contactos</a>
          <ul>
            <li><a href="#">Whats App</a></li>
            <li><a href="#">Email</a></li>
          </ul>
        </li>
        <li><a href="#">Muro</a></li>
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
  <h1>Aqui estan articulos que quieras vender</h1>
  <?php
  echo "<h2>¡Hola, " . $_SESSION["usuario"] . "!<br></h2>";
  ?>
  
</body>

</html>
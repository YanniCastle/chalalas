<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>muro</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style4.css" />
  <link rel="stylesheet" href="style5.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <header>
    <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li>
          <a href="#">Productos</a>
          <ul>
            <li><a href="#">Comprar</a></li>
            <li><a href="#">Vender</a></li>
          </ul>
        </li>

        <li><a href="index.php">CRUD</a></li>
        <li><a href="Formulario.php">Comentarios</a></li>
        <li><a href="#">Fotos</a></li>
        <li><a href="#">videos</a></li>

        <li><a href="#">Contactos</a>
          <ul>
            <li><a href="#">Whats App</a></li>
            <li><a href="#">Email</a></li>
          </ul>
        </li>
        <li><a href="cierre.php">cerrar sesión</a></li>
      </ul>
    </nav>
  </header>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }
  ?>
  <h1>tu muro</h1>
  <?php
  echo "<h2>¡Hola " . $_SESSION["usuario"] . "!<br></h2>";
  ?>

  <form action="comentar.php" method="post">
    <textarea name="comentario"></textarea><br>
    <input type="submit" value="comentar" />

    <?php include("data.data"); ?>
  </form>
</body>

</html>
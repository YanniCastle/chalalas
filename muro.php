<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>muro</title>
  <link rel="stylesheet" href="style1d.css" /><!--barra de menu plegable-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos -->
  <link rel="stylesheet" type="text/css" href="style4a.css"><!--diseño de c
  <link rel="stylesheet" href="style3.css" />
   <!<link rel="stylesheet" href="stylefoto2.css" />Barra azul-->
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <article id="position">
    <header>
      <div class="ocultar-div">
        <a><img src="chalalas2.png"></a>
      </div>
      <div class="ocultar-div2">
        <a><img src="imagenes/chalalas4.png"></a>
      </div>
      <a>
        <form action="" method="get">
          <input type="search" id="busqueda" name="busqueda" required placeholder="¿Que artículo buscas?">
          <input type="submit" id="enviar" name="enviar" value="Buscar"><br><br>
        </form>
      </a>
      <input type="checkbox" id="check">
      <label for="check" class="mostrar-menu">
        &#8801<!--hamburguesa-->
      </label>
      <nav class="menu">
        <a href=""><i class="fa-solid fa-shop"></i></a>
        <a href="Formulario.php"><i class="fa-regular fa-comment"></i></a>
        <a href=""><i class="fa-regular fa-image"></i></a>
        <a href="videos.php"><i class="fa-solid fa-video"></i></a>
        <a href="muro.php">Muro</a>
        <a href="cierre.php">cerrar sesion</a>
        <label for="check" class="esconder-menu">
          &#215 <!--la x-->
        </label>
      </nav>
    </header>
  </article>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }
  include 'config.php';

  echo "<br/><br/><br/><h2>¡Bienvenid@, Usuari@ " . $_SESSION["usuario"] . "!<br></h2>";

  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta = $con->query("SELECT * FROM contenido WHERE Titulo LIKE '%$busqueda%'");

    while ($row = $consulta->fetch_array()) {
      echo "<br/><h3>" . $row['Titulo'] . "</h3>";
      echo "<h5>" . $row['Fecha'] . "</h5>";
      echo "<div style='width:400px'>" . $row['Comentario'] . "</div><br/>";
      if ($row['Imagen'] != "") {
        echo "<img src='imagenes/productos/" . $row['Imagen'] . "' width='150px'/>";
      }
      echo  " <h3>Precio : $" . $row['precio'] . " pesos MX</h3>";
      echo "<hr/>";
    }
  }
  ?>
  <br><br>
  <h1>Bienvenid@ a tu muro</h1>

  <form action="comentar.php" method="post">
    <textarea name="comentario"></textarea><br>
    <input type="submit" value="comentar" />

    <?php include("data.data"); ?>
  </form>
</body>

</html>
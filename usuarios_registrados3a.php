<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" href="style1b.css" /><!--barra de menu plegable-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos -->
  <link rel="stylesheet" type="text/css" href="style4b.css"><!--diseño de columnas-fotos-->
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
      <input type="checkbox" id="check">
      <label for="check" class="mostrar-menu">
        &#8801<!--hamburguesa-->
      </label>
      <nav class="menu">
        <a href="usuarios_registrados3.php"><i class="fa-solid fa-shop"></i></a>
        <a href="Formulario.php"><i class="fa-regular fa-comment"></i></a>
        <a href="videos.php"><i class="fa-solid fa-video"></i></a>
        <a href="muro.php">Muro</a>
        <a href="Formulario_fotos.php">Fotos</a>
        <a href="Formulario_fotos2.php">Fotos2</a>
        <a href="ajustes.php">Ajustes</a>
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

  echo "<br/><br/><br/><h1>Usuario: " . $_SESSION["usuario"] . "<br></h1>";

  /*Aqui mostrar imagenes de usuario*/
  $login = $_SESSION['usuario'];
  $consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'");
  $valores = mysqli_fetch_array($consulta);
  $id = $valores['ID'];
  $WhatsApp = $valores['TELEFONO'];/*tratando de usar whats */
  $nombre = $valores['NOMBRE'];
  $email1 = $valores['MAIL'];
  $email2 = $valores['MAIL'];
  $email3 = $valores['MAIL'];
  $email4 = $valores['MAIL'];

  $titulo1   = $valores['titulofoto1'];
  $descripcion1 = $valores['descripcionfoto1'];
  $rutafoto1 = $valores['rutafoto1'];
  $precio1   = $valores['preciofoto1'];

  $titulo2   = $valores['titulofoto2'];
  $descripcion2 = $valores['descripcionfoto2'];
  $rutafoto2 = $valores['rutafoto2'];
  $precio2   = $valores['preciofoto2'];

  $titulo3   = $valores['titulofoto3'];
  $descripcion3 = $valores['descripcionfoto3'];
  $rutafoto3 = $valores['rutafoto3'];
  $precio3   = $valores['preciofoto3'];

  $titulo4   = $valores['titulofoto4'];
  $descripcion4 = $valores['descripcionfoto4'];
  $rutafoto4 = $valores['rutafoto4'];
  $precio4   = $valores['preciofoto4'];
  ?>

  <h2>Ingresa tus imagenes y redacta tus anuncios</h2>

  <!--  <a aria-label="Chat on WhatsApp" href="https://wa.me/5517602354"><img alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" width="200px" />
  </a>-->

  <div class="row">
    <div class="column">
      <p class="articulo">Articulo: <?php echo $titulo1; ?></p><br>
      <p class="descripcion">Descripción: <?php echo $descripcion1; ?></p>
      <img src="<?php echo $rutafoto1; ?>" width='150px'>
      <p class="precio">Precio: <?php echo $precio1; ?> pesos MX</p><br>
      <a href="cambiarfoto7.php">foto 1</a><br><br>
      <form method="post" action="eliminar_imagenb1.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto1; ?>">
        <table><button type="submit" name="eliminar_imagen">Eliminar foto</button></table>
      </form>
    </div>

    <div class="column">
      <p class="articulo">Articulo: <?php echo $titulo2; ?></p><br>
      <p class="descripcion">Descripción: <?php echo $descripcion2; ?></p>
      <img src="<?php echo $rutafoto2; ?>" width='150px'>
      <p class="precio">Precio: <?php echo $precio2; ?> pesos MX</p><br>
      <a href="cambiarfoto7.php">foto 2</a><br><br>
      <form method="post" action="eliminar_imagenb1.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto2; ?>">
        <table><button type="submit" name="eliminar_imagen">Eliminar foto</button></table>
      </form>
    </div>

    <div class="column">
      <p class="articulo">Articulo: <?php echo $titulo3; ?></p><br>
      <p class="descripcion">Descripción: <?php echo $descripcion3; ?></p>
      <img src="<?php echo $rutafoto3; ?>" width='150px'>
      <p class="precio">Precio: <?php echo $precio3; ?> pesos MX</p><br>
      <a href="cambiarfoto7.php">foto 3</a><br><br>
      <form method="post" action="eliminar_imagenb1.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto3; ?>">
        <table><button type="submit" name="eliminar_imagen">Eliminar foto</button></table>
      </form>
    </div>

    <div class="column">
      <p class="articulo">Articulo: <?php echo $titulo4; ?></p><br>
      <p class="descripcion">Descripción: <?php echo $descripcion4; ?></p>
      <img src="<?php echo $rutafoto4; ?>" width='150px'>
      <p class="precio">Precio: <?php echo $precio4; ?> pesos MX</p><br>
      <a href="cambiarfoto7.php">foto 4</a><br><br>
      <form method="post" action="eliminar_imagenb1.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto4; ?>">
        <table><button type="submit" name="eliminar_imagen">Eliminar foto</button></table>
      </form>
    </div>



</body>

</html>
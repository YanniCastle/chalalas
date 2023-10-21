<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" href="style1b.css" /><!--barra de menu plegable-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos -->
  <link rel="stylesheet" type="text/css" href="style4a.css"><!--diseño de columnas-fotos-->
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
        <a href="">ggg<i class="fa-solid fa-shop"></i></a>
        <a href="">ggg<i class="fa-regular fa-comment"></i></a>
        <a href="">hhh<i class="fa-regular fa-image"></i></a>
        <a href="">videos<i class="fa-solid fa-video"></i></a>
        <a href="crud4.php">cambiar contraseña<i class="fa-solid fa-key"></i></a>
        <a href="">Datos personales</a>
        <a href="reiniciar_cuenta.php">reiniciar cuenta</a>
        <a href="borrar_permanente.php">borrar cuenta</a>
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
  ?>


</body>

</html>
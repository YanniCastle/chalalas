<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>subir_imagenes</title>
  <link rel="stylesheet" href="stylevender2.css" />
  <link rel="stylesheet" href="style1b.css" /><!--barra de menu plegable-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos-->
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
        <a href="Formulario.php"><i class="fa-regular fa-comment"></i></a>
        <a href="crud11.php"><i class="fa-regular fa-image"></i></a>
        <a href="videos.php"><i class="fa-solid fa-video"></i></a>
        <a href="crud3.php">usuarios</a><!--privada online-->
        <a href="crud6.php"><i class="fa-solid fa-user"></i></a>
        <a href="crud4.php"><i class="fa-solid fa-key"></i></a>
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
  ?>
<br><br>
  <!--url`s--> <!--en donde ver-->
  <a href="vender1a.php" target="iframe0"></a>
  <a href="crud11.php" target="iframe1"></a>

  <!--class para css, nombre de ventanas y vista default-->
  <iframe class="iframe0" name="iframe0" src="vender1a.php"></iframe>
  <iframe class="iframe1" name="iframe1" src="crud11.php"></iframe>

</body>

</html>
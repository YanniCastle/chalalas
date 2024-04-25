<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" href="style1bbb.css" />
  <!--barra de menu plegable-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script>
  <!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <!--Iconos -->
  <!--<link rel="stylesheet" type="text/css" href="style4a.css">-->
  <!--diseño de columnas-fotos-->
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
          <!--<i class="fa-solid fa-magnifying-glass"></i>-->
        </form>
      </a>
      <input type="checkbox" id="check">
      <label for="check" class="mostrar-menu">
        &#8801
        <!--hamburguesa-->
      </label>
      <nav class="menu">
        <a href="administrador/seccion/productos.php">artículos<i class="fa-solid fa-shop"></i></a>
        <a href="Formulario.php">Comentarios<i class="fa-regular fa-comment"></i></a>
        <a href="usuarios_registrados3a.php">4 fotos<i class="fa-regular fa-image"></i></a>
        <a href="videos.php">videos<i class="fa-solid fa-video"></i></a>
        <a href="muro.php">Muro<i class="fa-solid fa-person-through-window"></i></a>
        <!-- <a href="caracteres.php">Caracteres</a>-->
        <!-- <a href="Formulario_fotos.php">Fotos</a>-->
        <!--  <a href="Formulario_fotos2.php">Fotos2</a>-->
        <!--  <a href="usuarios_registrados5.php">REGISTADOS 5</a>-->
        <a href="ajustes.php">Ajustes<i class="fa-solid fa-gear"></i></a>
        <a href="cierre.php">cerrar sesion</a>
        <label for="check" class="esconder-menu">
          &#215
          <!--la x-->
        </label>
      </nav>
    </header>
  </article>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:../../index.php");
  }
  include 'config.php';

  echo "<br/><br/><br/><h2>Usuario: " . $_SESSION["usuario"] . "<br></h2>";

  //BUSCADOR COMPLETO
  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    /*////Para tabla libros////////////////////////////// */
    $search = $con->query("SELECT * FROM libros WHERE nombre LIKE '%$busqueda%'");/*tabla:libros*/

    if ($search->num_rows > 0) {

      while ($row = $search->fetch_array()) {
        //search en libros
        echo "<h1>"                         . $row['nombre'] . "</h1>";
        echo "<h2><div style='width:200px'>" . $row['descripcion'] . "</div></h2><br/>";
        echo "<img src='img/"               . $row['imagen'] . "' width='150px'/>";
        echo  "<h3>Precio : $"              . $row['precio'] . " pesos MX</h3>";
        $ID_USER = $row['ID_USER'];

        if ($ID_USER) {
          $user_data = $con->query("SELECT * FROM usuarios_pass2 WHERE ID = '$ID_USER' ");

          while ($data = $user_data->fetch_array()) {
            //user_data en usuarios_pass2
            "<br/><h2>" .                  $ID = $data['ID']      . "</h2>";
            "<br/><h2>" .              $NOMBRE = $data['NOMBRE']  . "</h2>";
            echo "<br/>Vendedor:<h2>" . $USUARIOS = $data['USUARIOS'] . "</h2>";
            "<br/><h2>" .                $MAIL = $data['MAIL']    . "</h2>";
            $TELEFONO = $data['TELEFONO'];
            echo "<br/><h3>Ubicacion:" . $UBICACION = $data['UBICACION'] . "</h3>";
          }
        }
  ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $TELEFONO; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="120px" />
  </a>
  <br>
  <hr width="300" color="green"><br>
  <?php
        echo "<hr/>";
      } //fin de $row
    } //fin de $search
    else {
      echo '<td colspan=3><h2>No se encontro ningun registro en tabla:libros.</h2></td>';
      echo '<hr width="400" color="blue"><br>';
    }
  } //fin de $_GET['enviar']

  //FIN DEL BUSCADOR COMPLETO 2.0
  ?>
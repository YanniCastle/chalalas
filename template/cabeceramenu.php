<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <!--barra de menu plegable-->
  <link rel="stylesheet" href="template/cabeceramenu1.css" />
  <!--iconos-->
  <!--Este funciona con el template fuera de users
  <link rel="stylesheet" type="text/css" href="template/galeria1.css" media="screen">-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <article id="position">
    <header>

      <div>
        <a href="login.php">
          <img class="chalalas4" src="imagenes/imagenes_chalalas/chalalas3.png" alt="chalalas.com">
        </a>
      </div>

      <a>
        <form action="" method="get">
          <input type="search" id="busqueda" name="busqueda" required placeholder="¿Que artículo buscas?">
          <input type="submit" id="enviar" name="enviar" value="Buscar"><br><br>
        </form>
      </a>
      <input type="checkbox" id="check">
      <label for="check" class="mostrar-menu">
        &#8801
        <!--hamburguesa-->
      </label>
      <nav class="menu">
        <a href="ofertas.php">Ofertas<i class="fa-regular fa-image"></i></a>
        <a href="">videos<i class="fa-solid fa-video"></i></a>
        <a href="">Lo nuevo<i class="fa-solid fa-person-through-window"></i></a>
        <a href="Formulario_Insertar_Usuarios3.php">Registrate</a>
        <a href="login.php">iniciar sesión</a>
        <label for="check" class="esconder-menu">
          &#215
          <!--la x-->
        </label>
      </nav>
    </header>
  </article>
  <br /><br /><br />
  <?php
  include 'config.php';

  //BUSCADOR COMPLETO
  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    /*////Para tabla libros////////////////////////////// */
    $search = $con->query("SELECT * FROM libros WHERE nombre LIKE '%$busqueda%'");/*tabla:libros*/

    if ($search->num_rows > 0) {

      while ($row = $search->fetch_array()) {
        //search en libros
        echo "<div class='titulo'>"         . $row['nombre'] . "</div>";
        echo "<img class='imagen' src='img/"  . $row['imagen'] . "'/>";
        echo "<div class='descripcion'>" . $row['descripcion'] . "</div>";
        echo "<div class='precio'>$"   . $row['precio'] . " pesos MX</div>";
        $ID_USER = $row['ID_USER'];

        if ($ID_USER) {
          $user_data = $con->query("SELECT * FROM usuarios_pass2 WHERE ID = '$ID_USER' ");

          while ($data = $user_data->fetch_array()) {
            //user_data en usuarios_pass2
            $ID = $data['ID'];
            $NOMBRE = $data['NOMBRE'];
            $MAIL = $data['MAIL'];
            $TELEFONO = $data['TELEFONO'];
            echo "<div class='vendedor'>Vendedor:" . $USUARIOS = $data['USUARIOS'] . "</div>";
            echo "<div class='ubicacion'>Ubicacion:" . $UBICACION = $data['UBICACION'] . "</div>";
          }
        }
  ?>
  <a aria-label="Chat en WhatsApp" href="https://wa.me/<?php echo $TELEFONO; ?>"><img alt="Chat en WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="120px" />
  </a>
  <br>
  <hr width="300" color="green" align="left"><br>
  <?php
      } //fin de $row
    } //fin de $search
    else {
      echo '<h2>No se encontro ningún registro.</h2>';
      echo '<hr width="300" color="red" align="left"><br>';
    }
  } //fin de $_GET['enviar']

  //FIN DEL BUSCADOR COMPLETO 2.0
  ?>
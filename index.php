<!DOCTYPE html>
<html lang="es">
<!--Trabajar con index2 para mejorar el resposive moto C -->

<head>
  <meta charset="UTF-8"><!--Así se evita que la ñ o las tildes no se muestren correctamente-->
  <meta charset="ISO-8859-1"><!--caracteres para el alfabeto latino-->
  <meta name="description" content="Sitio web de comercio electrónico, compra/venta de artículos de ocasión">
  <meta name="keywords" content="articulo usado, compra ocasional, seminuevo"><!--palabras clave-->
  <meta name="author" content="Chalalas.com">
  <meta name="date" content="2023-02-20">
  <meta name="robots" content="index, follow"><!-- sigan los enlaces de una página-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="shortcut icon" href="letraCfondonegro.png"><!--icono-navegador-->
  <link rel="stylesheet" type="text/css" href="style13b.css"><!--galeria-->
  <link rel="stylesheet" type="text/css" href="mobile_index4.css" media="screen">
  <link rel="stylesheet" type="text/css" href="index2b.css" media="screen">
</head>

<body>
  <header id="position1"><!--desktop-->
    <div class="chalalas2">
      <a><img src="chalalas2.png"></a>
    </div>
    <a>
      <form action="" method="get">
        <input type="search" id="busqueda1" name="busqueda" required placeholder="¿Que artículo buscas?">
        <input type="submit" id="enviar1" name="enviar" value="Buscar"><br><br>
      </form>
    </a>
    <a><!--Formulario_Insertar_Usuarios3.php-->
      <form action="">
        <input type="submit" id="registrate1" name="registrate" value="Registrate"><br><br>
      </form>
    </a>
    <a>
      <form action="login.php">
        <input type="submit" id="login1" name="login" value="Iniciar Sesión"><br><br>
      </form>
    </a>
  </header>
  <!--/////////////////////////////////////////////////////////-->
  <header id="position2"><!--moto C, en vertical-->
    <tr>
      <td>
        <div class="chalalas4">
          <img src="imagenes/chalalas4.png">
        </div>
      </td>
      <td><!--Formulario_Insertar_Usuarios3.php-->
        <form action="">
          <input type="submit" id="registrate2" name="registrate" value="Registrate">
        </form>
      </td>
      <td>
        <form action="login.php">
          <input type="submit" id="login2" name="login" value="Iniciar Sesión">
        </form>
      </td>
    </tr>
  </header>
  <header id="position3"><!--moto C, en vertical-->
    <form action="" method="get">
      <input type="search" id="busqueda3" name="busqueda" required placeholder="¿Que artículo buscas?">
      <input type="submit" id="enviar3" name="enviar" value="Buscar">
    </form>
  </header>
  <br><br><br>
  <!--Aqui esta la presentacion-->
  <!--<div class="logo"><img src="imagenes/imagenes_chalalas/chalalas2.gif" alt="chalalas.com"></div>-->
  <main class="contenido-principal">
    <h1 class="construccion">Sitio en construcción, proximamente...</h1>
    <p class="contenido_resumen">
      Sitio web de comercio electronico, aqui podras encontrar o vender ese articulo que necesitas ya sea nuevo o usado y cerca de ti de persona a persona.

      Registrate para recibir notificaciones de lo que llegues estar buscando que no existe o para esa compra/venta de oportunidad.

  </main>

  <!--BUSCADOR COMPLETO-->
  <?php
  include 'config.php';

  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta1 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto1 LIKE '%$busqueda%'");
    $consulta2 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto2 LIKE '%$busqueda%'");
    $consulta3 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto3 LIKE '%$busqueda%'");
    $consulta4 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto4 LIKE '%$busqueda%'");

    //juntar las consultas 
    if ($consulta1->num_rows > 0 or $consulta2->num_rows > 0 or $consulta3->num_rows > 0 or $consulta4->num_rows > 0) {
      //CONSULTA 1
      if ($consulta1->num_rows > 0) {
        while ($row = $consulta1->fetch_array()) {
          echo "<br/><h1>" . $row['titulofoto1'] . "</h1>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto1'] . "</h2></div><br/>";
          if ($row['nombrefoto1'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto1'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto1'] . " pesos MX</h3>";
        }
  ?>
        <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" width="100px" />
        </a>
        <br>
        <hr width="1000" color="black"><br>
      <?php
      }
      //CONSULTA 2
      if ($consulta2->num_rows > 0) {
        while ($row = $consulta2->fetch_array()) {
          echo "<br/><h1>" . $row['titulofoto2'] . "</h1>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto2'] . "</h2></div><br/>";
          if ($row['nombrefoto2'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto2'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto2'] . " pesos MX</h3>";
        }
      ?>
        <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" width="100px" />
        </a>
        <br>
        <hr width="1000" color="black"><br>
      <?php
      }
      //CONSULTA 3
      if ($consulta3->num_rows > 0) {
        while ($row = $consulta3->fetch_array()) {
          echo "<br/><h1>" . $row['titulofoto3'] . "</h1>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto3'] . "</h2></div><br/>";
          if ($row['nombrefoto3'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto3'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto3'] . " pesos MX</h3>";
        }
      ?>
        <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" width="100px" />
        </a>
        <br>
        <hr width="1000" color="black"><br>
      <?php
      }
      //CONSULTA 4
      if ($consulta4->num_rows > 0) {
        while ($row = $consulta4->fetch_array()) {
          echo "<br/><h1>" . $row['titulofoto4'] . "</h1>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto4'] . "</h2></div><br/>";
          if ($row['nombrefoto4'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto4'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto4'] . " pesos MX</h3>";
        }
      ?>
        <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" width="100px" />
        </a>
        <br>
        <hr width="1000" color="black"><br>
      <?php
      }
    } //FIN DE JUNTAR CONSULTAS
    else {
      echo '<tr>';
      echo '<td colspan=3><h2>No se ha encontrado ningun registro.</h2></td>';
      echo '</tr>';
    }
  }
  //FIN DE ESTRUCTURA DE BUSCADOR//

  ?>
  <!--Galeria-->
  <div class="row">
    <div class="column">
      <a href="proximamente.php"><img class="galeria" alt="photo 1" src="img/audifonos bluetooh.jpg" />
        <a href="proximamente.php"> <img class="galeria" alt="photo 2" src="img/cargador_sony_1.jpg" />
          <a href="proximamente.php"> <img class="galeria" alt="photo 3" src="img/IMG_20221112_111654_742.jpg" />
            <a href="proximamente.php"> <img class="galeria" alt="photo 4" src="img/IMG_20230404_173830_587.jpg" />
              <a href="proximamente.php"> <img class="galeria" alt="photo 5" src="img/IMG_20230411_020301_788.jpg" />
    </div>

    <div class="column">
      <a href="proximamente.php"> <img class="galeria" alt="photo 6" src="img/IMG_20230417_002758_978.jpg" />
        <a href="proximamente.php"> <img class="galeria" alt="photo 7" src="img/IMG_20230417_003024_468.jpg" />
          <a href="proximamente.php"> <img class="galeria" alt="photo 8" src="img/IMG_20230421_170947_190.jpg" />
            <a href="proximamente.php"> <img class="galeria" alt="photo 9" src="img/IMG_20230423_175747_290.jpg" />
              <a href="proximamente.php"> <img class="galeria" alt="photo 10" src="img/IMG_20230429_123940_723.jpg" />
    </div>

    <div class="column">
      <a href="proximamente.php"> <img class="galeria" alt="photo 11" src="img/IMG_20230523_170746_823.jpg" />
        <a href="proximamente.php"> <img class="galeria" alt="photo 12" src="img/IMG_20230531_003537_082.jpg" />
          <a href="proximamente.php"> <img class="galeria" alt="photo 13" src="img/IMG_20230603_023752_895.jpg" />
            <a href="proximamente.php"> <img class="galeria" alt="photo 14" src="img/IMG_20230626_201617_060.jpg" />
              <a href="proximamente.php"> <img class="galeria" alt="photo 15" src="img/lampara_amarilla_3.jpg" />
    </div>

    <div class="column">
      <a href="proximamente.php"> <img class="galeria" alt="photo 16" src="img/marcador_verde.jpg" />
        <a href="proximamente.php"> <img class="galeria" alt="photo 17" src="img/Marzo 2023 Zona de trabajo Yanni.jpg" />
          <a href="proximamente.php"> <img class="galeria" alt="photo 18" src="img/Screenshot_20230305-153431.png" />
            <a href="proximamente.php"> <img class="galeria" alt="photo 19" src="img/Screenshot_20230324-190323.png" />
              <a href="proximamente.php"><img class="galeria" alt="photo 20" src="img/vasos de cafe desechables.jpg" /></a>
    </div>
  </div>

  <br>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/5517602354"><img class="whatsapp" alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" />
  </a>
</body>

</html>
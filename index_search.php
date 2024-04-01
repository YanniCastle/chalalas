<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <!--Así se evita que la ñ o las tildes no se muestren correctamente-->
  <meta charset="ISO-8859-1">
  <!--caracteres para el alfabeto latino-->
  <meta name="description" content="Sitio web de comercio electrónico, compra/venta de artículos de ocasión">
  <meta name="keywords" content="articulo usado, compra ocasional, seminuevo">
  <!--palabras clave-->
  <meta name="author" content="Chalalas.com">
  <meta name="date" content="2023-02-20">
  <meta name="robots" content="index, follow"><!-- sigan los enlaces de una página-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <!--icono-navegador-->
  <link rel="stylesheet" type="text/css" href="style13c.css">
  <!--galeria-->
  <link rel="stylesheet" type="text/css" href="mobile_index4a.css" media="screen">
  <link rel="stylesheet" type="text/css" href="index2c.css" media="screen">
</head>

<body>
  <header id="position1">
    <!--desktop-->
    <div class="chalalas2">
      <a><img src="chalalas2.png"></a>
    </div>
    <a>
      <form action="index_search.php" method="get">
        <input type="search" id="busqueda1" name="busqueda" required placeholder="¿Que artículo buscas?">
        <input type="submit" id="enviar1" name="enviar" value="Buscar"><br><br>
      </form>
    </a>
    <a>
      <!--Formulario_Insertar_Usuarios3.php-->
      <form action="Formulario_Insertar_Usuarios3.php">
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
  <header id="position2">
    <!--moto C, en vertical-->
    <tr>
      <td>
        <div class="chalalas4">
          <img src="imagenes/chalalas4.png">
        </div>
      </td>
      <td>
        <!--Formulario_Insertar_Usuarios3.php-->
        <form action="Formulario_Insertar_Usuarios3.php">
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
  <header id="position3">
    <!--moto C, en vertical-->
    <form action="index_search.php" method="get">
      <input type="search" id="busqueda3" name="busqueda" required placeholder="¿Que artículo buscas?">
      <input type="submit" id="enviar3" name="enviar" value="Buscar">
    </form>
  </header>
  <br><br><br>
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
          echo "<h1>" . $row['titulofoto1'] . "</h1>";
          echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto1'] . "</h2></div><br/>";
          if ($row['nombrefoto1'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto1'] . "' width='150px'/>";
          }
          echo "<h2>Ubicacion: " . $row['UBICACION'] . "</h2><br/>";
          echo  " <h3>Precio : $" . $row['preciofoto1'] . " pesos MX</h3>";
       ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="100px" />
  </a>
  <br>
  <hr width="300" color="green"><br>
  <?php
      }
      }
      //CONSULTA 2
      if ($consulta2->num_rows > 0) {
        while ($row = $consulta2->fetch_array()) {
          echo "<h1>" . $row['titulofoto2'] . "</h1>";
          echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto2'] . "</h2></div><br/>";
          if ($row['nombrefoto2'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto2'] . "' width='150px'/>";
          }
          echo "<h2>Ubicacion: " . $row['UBICACION'] . "</h2><br/>";
          echo  " <h3>Precio : $" . $row['preciofoto2'] . " pesos MX</h3>";
        }
      ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="100px" />
  </a>
  <br>
  <hr width="300" color="green"><br>
  <?php
      }
      //CONSULTA 3
      if ($consulta3->num_rows > 0) {
        while ($row = $consulta3->fetch_array()) {
          echo "<h1>" . $row['titulofoto3'] . "</h1>";
          echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto3'] . "</h2></div><br/>";
          if ($row['nombrefoto3'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto3'] . "' width='150px'/>";
          }
          echo "<h2>Ubicacion: " . $row['UBICACION'] . "</h2><br/>";
          echo  " <h3>Precio : $" . $row['preciofoto3'] . " pesos MX</h3>";
      ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="100px" />
  </a>
  <br>
  <hr width="300" color="green"><br>
  <?php
      }
      }
      //CONSULTA 4
      if ($consulta4->num_rows > 0) {
        while ($row = $consulta4->fetch_array()) {
          echo "<h1>" . $row['titulofoto4'] . "</h1>";
          echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          $whats = $row['TELEFONO'];
          echo "<h2><div style='width:400px'>" . $row['descripcionfoto4'] . "</h2></div><br/>";
          if ($row['nombrefoto4'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto4'] . "' width='150px'/>";
          }
          echo "<h2>Ubicacion: " . $row['UBICACION'] . "</h2><br/>";
          echo  " <h3>Precio : $" . $row['preciofoto4'] . " pesos MX</h3>";
        }
      ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="100px" />
  </a>
  <br>
  <hr width="300" color="green"><br>
  <?php
      }
    } //FIN DE JUNTAR CONSULTAS
    else {
      echo '<td colspan=3><h2>No se ha encontrado ningun registro.</h2></td>';
      echo '<br>
        <hr width="1000" color="black"><br>';
    }
  }
  //FIN DE ESTRUCTURA DE BUSCADOR//

  ?>


</body>

</html>
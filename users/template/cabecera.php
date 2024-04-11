<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" href="style1b.css" />
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
    header("location:login.php");
  }
  include 'config.php';

  echo "<br/><br/><br/><h2>Usuario: " . $_SESSION["usuario"] . "<br></h2>";

  //ESTRUCTURA DE BUSCADOR (titulofoto1, titulofoto2, titulofoto3, titulofoto4)//
  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta1 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto1 LIKE '%$busqueda%'");
    $consulta2 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto2 LIKE '%$busqueda%'");
    $consulta3 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto3 LIKE '%$busqueda%'");
    $consulta4 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto4 LIKE '%$busqueda%'");

    /*////Para tabla libros////////////////////////////// */
    $consulta5 = $con->query("SELECT * FROM libros WHERE nombre LIKE '%$busqueda%'");/*tabla:fotos*/

    while ($row = $consulta5->fetch_array()) {
      //$id = $row['id_usuarios_pass2'];/* Para el contacto*/
      //$whats = $row['TELEFONO'];
      echo "<br/><h3>" . $row['nombre'] . "</h3>";
      //echo "<h5>" . $row['fecha'] . "</h5>"; //fecha ?
      echo "<div style='width:200px'>" . $row['descripcion'] . "</div><br/>";
      //if ($row['nombre'] != "") {
      echo "<img src='img/" . $row['imagen'] . "' width='150px'/>";
      // }
      echo  " <h3>Precio : $" . $row['precio'] . " pesos MX</h3>";
      echo  " <h3>Vendedor: " . $row['ID_USER'] . "</h3>"; //Este id es de tabla:libros, colocar el de usuario

  ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="150px" />
  </a>
  <?php
      echo "<hr/>";
    }
    /* FIN de codigo agregado para consulta5 tabla: libros */

    //para titulofoto1//
    while ($row = $consulta1->fetch_array()) {
      $id = $row['ID'];/* Para el contacto*/
      $whats = $row['TELEFONO'];
      echo "<br/><h3>" . $row['titulofoto1'] . "</h3>";
      //echo "<h5>" . $row['ID'] . "</h5>"; //fecha ?
      echo "<div style='width:400px'>" . $row['descripcionfoto1'] . "</div><br/>";
      if ($row['nombrefoto1'] != "") {
        echo "<img src='imagenes/productos/" . $row['nombrefoto1'] . "' width='150px'/>";
      }
      echo  " <h3>Precio : $" . $row['preciofoto1'] . " pesos MX</h3>";
      echo  " <h3>Vendedor: " . $row['USUARIOS'] . "</h3>";

    ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="150px" />
  </a>
  <?php
      echo "<hr/>";
      echo "<hr/>";
    }

    ?>
  <!--NOTA: Cerre y abri php para agregar codigos de html y sea repetido por cada consulta..Pendiente-->
  <!--Enlace para whats App-->

  <!--  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" width="200px" />
    </a>-->
  <!--Enlace para datos de Vendedor-->
  <!--  <form method="post" action="contacto.php?id=<?php echo $id; ?>;">
      <table>
        <tr>
          <td>
            <button type="submit" name="contacto">Contacto</button>
          </td>
        </tr>
      </table>
    </form>-->

  <?php
    echo "<hr/><hr/><hr/><hr/><hr/>";
    //para titulofoto2//
    while ($row = $consulta2->fetch_array()) {
      $id = $row['ID'];/* Para el contacto*/
      $whats = $row['TELEFONO'];
      echo "<br/><h3>" . $row['titulofoto2'] . "</h3>";
      //echo "<h5>" . $row['Fecha'] . "</h5>";
      echo "<div style='width:400px'>" . $row['descripcionfoto2'] . "</div><br/>";
      if ($row['nombrefoto2'] != "") {
        echo "<img src='imagenes/productos/" . $row['nombrefoto2'] . "' width='150px'/>";
      }
      echo  " <h3>Precio : $" . $row['preciofoto2'] . " pesos MX</h3>";
      echo  " <h3>Vendedor: " . $row['USUARIOS'] . "</h3>";
    ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="150px" />
  </a>
  <?php
      echo "<hr/>";
      echo "<hr/>";
    }
    //para titulofoto3//
    while ($row = $consulta3->fetch_array()) {
      $id = $row['ID'];/* Para el contacto*/
      $whats = $row['TELEFONO'];
      echo "<br/><h3>" . $row['titulofoto3'] . "</h3>";
      //echo "<h5>" . $row['Fecha'] . "</h5>";
      echo "<div style='width:400px'>" . $row['descripcionfoto3'] . "</div><br/>";
      if ($row['nombrefoto3'] != "") {
        echo "<img src='imagenes/productos/" . $row['nombrefoto3'] . "' width='150px'/>";
      }
      echo  " <h3>Precio : $" . $row['preciofoto3'] . " pesos MX</h3>";
      echo  " <h3>Vendedor: " . $row['USUARIOS'] . "</h3>";
    ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="150px" />
  </a>
  <?php
      echo "<hr/>";
      echo "<hr/>";
    }
    //para titulofoto4//
    while ($row = $consulta4->fetch_array()) {
      $id = $row['ID'];/* Para el contacto*/
      $whats = $row['TELEFONO'];
      echo "<br/><h3>" . $row['titulofoto4'] . "</h3>";
      //echo "<h5>" . $row['Fecha'] . "</h5>";
      echo "<div style='width:400px'>" . $row['descripcionfoto4'] . "</div><br/>";
      if ($row['nombrefoto4'] != "") {
        echo "<img src='imagenes/productos/" . $row['nombrefoto4'] . "' width='150px'/>";
      }
      echo  " <h3>Precio : $" . $row['preciofoto4'] . " pesos MX</h3>";
      echo  " <h3>Vendedor: " . $row['USUARIOS'] . "</h3>";
    ?>
  <a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
      src="WhatsAppButtonGreenSmall.png" width="150px" />
  </a>
  <?php
      echo "<hr/>";
      echo "<hr/>";
    }
  }
  //FIN DE ESTRUCTURA DE BUSCADOR//

  ?>
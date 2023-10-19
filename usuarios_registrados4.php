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
        <a href="subir_imagenes.php"><i class="fa-solid fa-shop"></i></a>
        <a href="Formulario.php"><i class="fa-regular fa-comment"></i></a>
        <a href="crud11.php"><i class="fa-regular fa-image"></i></a>
        <a href="videos.php"><i class="fa-solid fa-video"></i></a>
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
  include 'config.php';
  echo "<br/><br/><br/><h2>¡Bienvenid@, " . $_SESSION["usuario"] . "!<br></h2>";

//ESTRUCTURA DE BUSCADOR 
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
          echo "<br/><h3>" . $row['titulofoto1'] . "</h3>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          echo "<div style='width:400px'>" . $row['descripcionfoto1'] . "</div><br/>";
          if ($row['nombrefoto1'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto1'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto1'] . " pesos MX</h3>";
          echo "<hr/>";
        }
      }
      //CONSULTA 2
      if ($consulta2->num_rows > 0) {
        while ($row = $consulta2->fetch_array()) {
          echo "<br/><h3>" . $row['titulofoto2'] . "</h3>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          echo "<div style='width:400px'>" . $row['descripcionfoto2'] . "</div><br/>";
          if ($row['nombrefoto2'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto2'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto2'] . " pesos MX</h3>";
          echo "<hr/>";
        }
      }
      //CONSULTA 3
      if ($consulta3->num_rows > 0) {
        while ($row = $consulta3->fetch_array()) {
          echo "<br/><h3>" . $row['titulofoto3'] . "</h3>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          echo "<div style='width:400px'>" . $row['descripcionfoto3'] . "</div><br/>";
          if ($row['nombrefoto3'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto3'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto3'] . " pesos MX</h3>";
          echo "<hr/>";
        }
      }
      //CONSULTA 4
      if ($consulta4->num_rows > 0) {
        while ($row = $consulta4->fetch_array()) {
          echo "<br/><h3>" . $row['titulofoto4'] . "</h3>";
          //echo "<h5>" . $row['Fecha'] . "</h5>";
          echo "<div style='width:400px'>" . $row['descripcionfoto4'] . "</div><br/>";
          if ($row['nombrefoto4'] != "") {
            echo "<img src='imagenes/productos/" . $row['nombrefoto4'] . "' width='150px'/>";
          }
          echo  " <h3>Precio : $" . $row['preciofoto4'] . " pesos MX</h3>";
          echo "<hr/>";
        }
      }
    } //FIN DE JUNTAR CONSULTAS
    else {
      echo '<tr>';
      echo '<td colspan=3>No se ha encontrado ningun registro</td>';
      echo '</tr>';
    }
   


  }
  //FIN DE ESTRUCTURA DE BUSCADOR//
  
  ?>

  <!--Aqui mostrar imagenes de usuario-->
  <?php
  $login = $_SESSION['usuario'];
  $consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'");
  $valores = mysqli_fetch_array($consulta);
  $nombre = $valores['NOMBRE'];
  $email1 = $valores['MAIL'];
  $email2 = $valores['MAIL'];
  $email3 = $valores['MAIL'];
  $email4 = $valores['MAIL'];
  
  $rutafoto1 = $valores['rutafoto1'];
  $rutafoto2 = $valores['rutafoto2'];
  $rutafoto3 = $valores['rutafoto3'];
  $rutafoto4 = $valores['rutafoto4'];
  ?>
  <h1>usuarios registrados 4 formularios de imagenes</h1>
  <div class="row">
    <div class="column">
      <img src="<?php echo $rutafoto1; ?>">
      <a href="cambiarfoto5.php">foto 1</a>
    </div>

    <div class="column">
      <img src="<?php echo $rutafoto2; ?>">
      <a href="cambiarfoto5.php">foto 2</a>
    </div>

    <div class="column">
      <img src="<?php echo $rutafoto3; ?>">
      <a href="cambiarfoto5.php">foto 3</a>
    </div>

    <div class="column">
      <img src="<?php echo $rutafoto4; ?>">
      <a href="cambiarfoto5.php">foto 4</a>
    </div>


</body>

</html>
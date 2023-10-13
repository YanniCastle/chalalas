<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" href="style1b.css" /><!--barra de menu plegable-->
  <script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="style12.css"><!--galeria-->
  <link rel="shortcut icon" href="letraCfondonegro.png"><!--icono-navegador-->
</head>

<body>
  <br><br>
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
        <a href="Formulario_Insertar_Usuarios3.php">Registrate<i class="fa-solid fa-address-card"></i></a>
        <a href=""><i class="fa-solid fa-video"></i></a>
        <a href="login.php">Iniciar Sesión<i class="fa-solid fa-user"></i></a>
        <label for="check" class="esconder-menu">
          &#215 <!--la x-->
        </label>
      </nav>
    </header>
  </article>

  <!--Aqui esta la presentacion-->
  <div class="contenedor">
    <main class="contenido-principal">
      <img src="imagenes/chalalas.png" height="180px" alt="chalalas.com" class="contenido-principal__imagen">
      <div class="contenido-principal__contenedor"><br><br>
        <h1 class="contenido-principal__titulo">Sitio en construcción... proximamente</h1>
        <p class="contenido-principal__resumen">
          Sitio web de comercio electronico, aqui podras encontrar o vender ese articulo que necesitas ya sea nuevo o usado y cerca de ti de persona a persona.
        </p>
        <p class="contenido-principal__resumen">
          Registrate para recibir notificaciones de lo que llegues estar buscando que no existe o para esa compra/venta de oportunidad.
        </p>
      </div>
    </main>

    <!--Aqui esta el resultado de buscador-->
    <?php
    include 'config.php';
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];

      $consulta = $con->query("SELECT * FROM contenido WHERE Titulo LIKE '%$busqueda%'");

      while ($row = $consulta->fetch_array()) {
        echo "<h3>" . $row['Titulo'] . "</h3>";
        /* echo "<h5>" . $row['Fecha'] . "</h5>";*/
        echo "<div style='width:400px'>" . $row['Comentario'] . "</div><br/>";
        if ($row['Imagen'] != "") {
          echo "<img src='imagenes/productos/" . $row['Imagen'] . "' width='140px'/>";
        }
        echo  " <h3>Precio : $" . $row['precio'] . " pesos MX</h3>";
        echo "<hr/>";
      }
    }
    ?>
    <!--Galeria-->
    <div class="row">
      <div class="column">
        <img alt="photo 1" src="img/audifonos bluetooh.jpg" />
        <img alt="photo 2" src="img/cargador_sony_1.jpg" />
        <img alt="photo 3" src="img/IMG_20221112_111654_742.jpg" />
        <img alt="photo 4" src="img/IMG_20230404_173830_587.jpg" />
        <img alt="photo 5" src="img/IMG_20230411_020301_788.jpg" />
      </div>

      <div class="column">
        <img alt="photo 6" src="img/IMG_20230417_002758_978.jpg" />
        <img alt="photo 7" src="img/IMG_20230417_003024_468.jpg" />
        <img alt="photo 8" src="img/IMG_20230421_170947_190.jpg" />
        <img alt="photo 9" src="img/IMG_20230423_175747_290.jpg" />
        <img alt="photo 10" src="img/IMG_20230429_123940_723.jpg" />
      </div>

      <div class="column">
        <img alt="photo 11" src="img/IMG_20230523_170746_823.jpg" />
        <img alt="photo 12" src="img/IMG_20230531_003537_082.jpg" />
        <img alt="photo 13" src="img/IMG_20230603_023752_895.jpg" />
        <img alt="photo 14" src="img/IMG_20230626_201617_060.jpg" />
        <img alt="photo 15" src="img/lampara_amarilla_3.jpg" />
      </div>

      <div class="column">
        <img alt="photo 16" src="img/marcador_verde.jpg" />
        <img alt="photo 17" src="img/Marzo 2023 Zona de trabajo Yanni.jpg" />
        <img alt="photo 18" src="img/Screenshot_20230305-153431.png" />
        <img alt="photo 19" src="img/Screenshot_20230324-190323.png" />
        <img alt="photo 20" src="img/vasos de cafe desechables.jpg" />
      </div>
    </div>
</body>

</html>
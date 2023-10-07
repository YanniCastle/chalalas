<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" media="screen and (color)" href="style7.css" /><!--menu plegable-->
  <!--<link rel="stylesheet" media="screen and (color)" href="portada.css" />menu plegable-->
  <link rel="shortcut icon" href="letraCfondonegro.png"><!--icono-navegador-->

  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <br><br>

  <header id="position">
    <div class="wrapper">
      <nav>
        <a href="" class="logo"><img src="imagenes/chalalas4.png"></a>
        <a>
          <form action="" method="get">
            <input type="text" name="busqueda" required placeholder="Agrega tu busqueda">
            <input type="submit" name="enviar" value="Buscar"><br><br>
          </form>
        </a>
        <input type="checkbox" name="" id="toggle">
        <label for="toggle"><i class="material-icons">menu</i></label>
        <div class="menu">
          <ul>
            <li><a href="Formulario_Insertar_Usuarios3.php">Registrate</a></li>
            <li><a href="">Acerca de </a></li>
            <li><a href="">Contact</a></li>
            <li><a href="login.php">Iniciar Sesión</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!--Aqui esta la presentacion-->
  <div class="contenedor">
    <main class="contenido-principal">
      <img src="imagenes/chalalas.png" height="150px" alt="chalalas.com" class="contenido-principal__imagen">
      <div class="contenido-principal__contenedor">
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
          echo "<img src='imagenes/productos/" . $row['Imagen'] . "' width='180px'/>";
        }
        echo  " <h3>Precio : $" . $row['precio'] . " pesos MX</h3>";
        echo "<hr/>";
      }
    }
    ?>

    <!--Aqui esta la marquesina-->
    <div class="carousel">
      <div class="carousel__contenedor">
        <button aria-label="Anterior" class="carousel__anterior">
          <i class="fas fa-chevron-left"></i>
        </button>

        <div class="carousel__lista">
          <div class="carousel__elemento"><!--1-->
            <img src="imagenes/galeria/audifonos bluetooh2.jpg" alt="Audifonos Bluetooth">
            <p><a href="proximamente.php">Audifonos bluetooth</a></p>
          </div>
          <div class="carousel__elemento"><!--2-->
            <img src="imagenes/galeria/IMG_20230523_173837_627.jpg" alt="Laptop Hp">
            <p><a href="proximamente.php">Laptop Hp, 14" blanca</a></p>
          </div>
          <div class="carousel__elemento"><!--3-->
            <img src="imagenes/galeria/lampara_amarilla_1.jpg" alt="Lampara recargable">
            <p><a href="proximamente.php">Lampara recargable</a></p>
          </div>
          <div class="carousel__elemento"><!--4-->
            <img src="imagenes/galeria/velocimetro.jpg" alt="Velocimetro de Scooter">
            <p><a href="proximamente.php">Velocimetro de scooter</a></p>
          </div>

          <div class="carousel__elemento"><!--5-->
            <img src="imagenes/galeria/bicicleta.jpg" alt="Bicicleta de montaña rig 26">
            <p><a href="proximamente.php">Bicicleta de montaña</a></p>
          </div>
          <div class="carousel__elemento"><!--6-->
            <img src="imagenes/galeria/multimetro de bolsillo.jpg" alt="multimetro">
            <p><a href="proximamente.php">multimetro</a></p>
          </div>
          <div class="carousel__elemento"><!--7-->
            <img src="imagenes/galeria/Screenshot_20230307-144103.png" alt="Sellador de fugas">
            <p><a href="proximamente.php">Sellador de fugas</a></p>
          </div>
          <div class="carousel__elemento"><!--8-->
            <img src="imagenes/galeria/FB_IMG_1678416564690.jpg" alt="Bafle de audio">
            <p><a href="proximamente.php">Bafle de audio</a></p>
          </div>

          <div class="carousel__elemento"><!--9-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">A</a></p>
          </div>
          <div class="carousel__elemento"><!--10-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">L</a></p>
          </div>
          <div class="carousel__elemento"><!--11-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">La</a></p>
          </div>
          <div class="carousel__elemento"><!--12-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">Ve</a></p>
          </div>

          <div class="carousel__elemento"><!--13-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">Au</a></p>
          </div>
          <div class="carousel__elemento"><!--14-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">L</a></p>
          </div>
          <div class="carousel__elemento"><!--15-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">Lam</a></p>
          </div>
          <div class="carousel__elemento"><!--16-->
            <img src="imagenes/galeria/" alt="">
            <p><a href="proximamente.php">Vel</a></p>
          </div>
        </div>

        <button aria-label="Siguiente" class="carousel__siguiente">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

      <div role="tablist" class="carousel__indicadores"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>

</body>

</html>
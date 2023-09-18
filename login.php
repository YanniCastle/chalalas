<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Chalalas.com</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="style3.css" /><!--fondo-->
  <link rel="stylesheet" href="stylefoto2.css" /><!--menu-->
</head>

<body><!--INTRODUCE DATOS-->
  <header>
   <!-- <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">-->
    <nav>
      <ul>
      <li>
        <a href="#"><img src="imagenes/chalalas4.png" alt="Sitio de comercio electronico"></a>
      </li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="Formulario_Insertar_Usuarios3.php">Registrate</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
 <!-- <h3>Usuario de prueba:Guadalupe  Contraseña:123456</h3>-->
  <!--<h3>Usuarios con "ñ" no funciona..(Pendiente)<br>login2 PENDIENTE</h3>-->
  <H2>Iniciar Sesión</H2>
  <H2>Sitio en Construcción...</H2>

  <form action="comprueba_login3.php" method="post">
  <?php
    if (isset($_POST['login'])) {
      $nombre = $_POST['login'];
      $password = $_POST['password'];

      $campos = array();

      if ($nombre == "") {
        array_push($campos, "El nombre no puede estar vacio");
      }
      if ($password == "" || strlen($password) < 6) {
        array_push($campos, "La contraseña no puede estar vacia, ni menor de 6 caracteres");
      }
      if (count($campos) > 0) {
        echo "<div class='error'>";
        for ($i = 0; $i < count($campos); $i++) {
          echo "<li>" . $campos[$i] . "</i>";
        }
      } else {
        echo "<div class='correcto'>
      Datos correctos";
      }
      echo "</div>";
    }
    ?>

    <label for="username">Usuario:</label>
    <input type="text" id="username" name="login" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Iniciar Sesión">
    <tr>
      <td>
        <a href="recuperacion.php">¿Olvidaste tu contraseña?</a>
      </td>
    </tr>
  </form>

  <marquee bgcolor="#AAEEEE" behavior="alternate" direction="right">
<b><font color="#green" size="22"><img src="imagenes/chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">En Linea</font></b>
</marquee>
</body>

</html>
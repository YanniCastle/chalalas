<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Chalalas.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <link rel="shortcut icon" href="letraCfondonegro.png">

  <link rel="stylesheet" href="mobile.css" media="(max-width: 640px)">

  <link rel="stylesheet" href="tablet.css" media="(min-width: 640px) and (max-width: 1280px)">

  <link rel="stylesheet" href="desktop.css" media="(min-width: 1280px)">

</head>

<body>
  <div class="ocultar-div">
    <h3>¡Felicidades, ya estas registrad@!, inicia sesión</h3>
  </div>
  <form action="comprueba_login4.php" method="post">
    <img src="chalalas6.png">
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

    <label for="username">
      <h2>Inicia sesión:</h2>
    </label>
    <input type="text" id="username" name="login" placeholder="usuario, email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" placeholder="Escribe contraseña" required>

    <input type="submit" value="Iniciar Sesión">
    <tr>
      <td>
        <a href="recuperar_password.php">
          <h3>¿Olvidaste tu contraseña?</h3>
        </a>
      </td>
    </tr>
  </form>

  <div class="ocultar-div">
    <marquee bgcolor="#AAEEEE" behavior="alternate" direction="right">
      <b>
        <font color="#green" size="22"><img src="imagenes/chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">En Linea</font>
      </b>
    </marquee>
  </div>
</body>

</html>
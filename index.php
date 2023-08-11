<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Chalalas.com</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="style.css"/>
  
</head>

<body>
  <header><!--REVISAR PORQUE SOLO ABRE EN DIRECTO SIN CARPETA imagenes-->
    <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="registrate.php">Registrate</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <h1>prueba: maria1   contraseña: 123456</h1>
  <h2>Usuarios con "ñ" no funciona..(Pendiente)</h2>

  <form action="comprobar_usuario.php" method="post">
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
    <input type="text" id="username" name="login" required placeholder="Ingresa usuario">

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Iniciar Sesión">
    <tr>
      <td>
        <a href="recuperacion.php">¿Olvidaste tu contraseña?</a>
      </td>
    </tr>
  </form>
</body>

</html>
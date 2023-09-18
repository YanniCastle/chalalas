<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login2</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="style3.css"/>
  <link rel="stylesheet" href="style4.css"/>
  <link rel="stylesheet" href="style6.css"/>
</head>

<body>
<header>
    <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="Formulario_Insertar_Usuarios3.php">Registrate</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <h3>Usuario de prueba:Guadalupe Contraseña:123456</h3>
  <h3>Usuarios con "ñ" no funciona..(Pendiente)</h3>
  <H2>PENDIENTE:login2 No revisa que exista usuario en Base de datos...Corregir</H2>
    <!--usando login2.php si funciona avisos pero no checa base de datos
  y con comprueba_login3.php si funciona correcto pero sin avisos -->
  <form action="login2.php" method="post">
    <?php
    if (isset($_POST['login'])) {
      $nombre = $_POST['login'];
      $password = $_POST['password'];

      $campos = array();

      if ($nombre == "") {
        array_push($campos, "El usuario no puede estar vacio");
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
        session_start(); //Agregamos inicio de sesion
      $_SESSION["usuario"] = $_POST["login"];
      header("location:usuarios_registrados1.php");
      }
      echo "</div>";
    }
    ?>
    <p>Usuario<br />
      <input type="text" name="login" placeholder="Escribe tu usuario" maxlength="35">
    </p>
    <p>Password:<br />
      <input type="password" name="password" placeholder="Escribe tu contraseña" maxlength="30">
    </p>
    <p>
      <input type="submit" value="enviar datos">
    </p>
    <tr>
      <td>
        <a href="recuperacion.php">¿Olvidaste tu contraseña?</a>
      </td>
    </tr>
  </form>
</body>

</html>
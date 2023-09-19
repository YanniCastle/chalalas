<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Confirmación</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="style3.css" />
  <link rel="stylesheet" href="style4.css" />
</head>

<body>
  <header>
    <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li><a href="login.php">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="recuperacion.php">¿Olvidaste tu contraseña?</a></li>
      </ul>
    </nav>
  </header>
  
  <H2>¡Felicidades, ya estas registrad@!, inicia sesión con tu nueva contraseña</H2>

  <form action="comprueba_login3.php" method="post">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="login" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Iniciar Sesión">
  
  </form>


</body>

</html>
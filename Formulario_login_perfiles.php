<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Formulario_login_perfiles</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="style3.css" />
  <link rel="stylesheet" href="style4.css" />
</head>

<body>
  <header>
    <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <H2>Iniciar Sesión</H2>

  <form action="pagina_datos_perfiles2.php" method="get">
  
    <label>Usuario:</label>
    <input type="text" id="usu" name="usu" required>

    <label>Contraseña:</label>
    <input type="text" id="con" name="con" required>

    <input type="submit" name="enviando"   value="Login">
  </form>
</body>

</html>
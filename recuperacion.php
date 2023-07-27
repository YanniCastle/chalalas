<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>recuperacion</title>
  <link rel="shortcut icon" href="/imagenes/letraCfondonegro.png">
  <link rel="stylesheet" href="style.css"/>
</head>

<body>
  
  <header>
    <img src="/imagenes/chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <h2>¿Olvidaste tu contraseña?, tenemos dos opciones</h2>

  <form action="#.php" method="post">
  <?php
    
    ?>
    <label for="username">(Recupera) escribe Email:</label>
    <input type="text" id="email" name="email" required>
    <input type="submit" value="Recuperar">
  </form>

  <form action="#.php" method="post">
  <?php
    
    ?>
    <label for="username">(Cambiar) escribe tu Email:</label>
    <input type="text" id="email" name="email" required>
    <input type="submit" value="Cambiar">
  </form>
</body>

</html>
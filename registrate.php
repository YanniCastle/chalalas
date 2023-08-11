<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>registrate</title>
  <link rel="shortcut icon" href="/imagenes/letraCfondonegro.png">
  <link rel="stylesheet" href="style.css"/>
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
 
  <form action="insertar_usuarios.php" method="post">

    <label for="">Nombre:</label>
    <input type="text" id="nom" name="nom" required maxlength="35" placeholder="Escribe tu nombre">

    <label for="username">Usuario:</label>
    <input type="text" id="usu" name="usu" required maxlength="20" placeholder="¿Como quieres ser conocido?">

    <label for="username">Email:</label>
    <input type="text" id="mail" name="mail" required maxlength="40" placeholder="No olvides el @">

    <label for="username">Telefono:</label>
    <input type="tel" id="number" name="number" pattern="[0-9]{10}" required maxlength="10" placeholder="ingresa tus 10 numeros">

    <label for="password">Contraseña:</label>
    <input type="password" id="contra" name="contra" required maxlength="30" placeholder="minimo 6 caracteres">

    <label for="password2">confirma Contraseña:</label>
    <input type="password" id="contra2" name="contra2" required maxlength="30" placeholder="Debes repetirla para confirmar">

    <input type="submit" name="enviando" value="Registrarme">
  
  </form>
</body>

</html>
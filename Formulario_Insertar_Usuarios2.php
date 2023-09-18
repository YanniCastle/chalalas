<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registrate</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="style.css" />
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
  <h1>Registrate</h1>

  <form action="pagina_insertar_usuarios2.php" method="post">

    <table>
      <tr>
        <td>Nombre:</td>
        <td><input type='text' name='usu' id='usu'></td>
      </tr>

      <tr>
        <td>Correo:</td>
        <td><input type='mail' name='mail' id='mail'></td>
      </tr>

      <tr>
        <td>Telefono:</td>
        <td><input type='tel' name='number' id='number'></td>
      </tr>

      <td> Contraseña:</td>
      <td><input type='text' name='contra' id='contra'></td>
      </tr>
      <tr>

        <td colspan="2"><input type='submit' name='enviando' value='¡Dale!'></td>
      </tr>
    </table>
  </form>
</body>

</html>
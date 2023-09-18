<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Formulario_inserta_perfiles</title>
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

  <form action="insertar_registros_perfiles.php" method="get">

    <table>
      <tr>
        <td>Usuario:</td>
        <td><input type='text' name='usu' id='usu'></td>
      </tr>
      
      <td>Contraseña:</td>
      <td><input type='text' name='con' id='con'></td>
      </tr>

      <tr>
      <td>Perfil:</td>
      <td><label for="perfil"></label>
        <select name="perfil" id="perfil">
          <option>administrador</option>
          <option>usuario</option>
        </select></td>
      </tr>

        <td colspan="2"><input type='submit' name='enviando' value='Registro'></td>
      </tr>
    </table>
  </form>
</body>

</html>
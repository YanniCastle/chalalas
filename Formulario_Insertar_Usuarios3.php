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
    <h2>Registrate</h2>
  </header>
  <br>
  <form action="pagina_insertar_usuarios3.php" method="post">

    <table>
      <tr>
        <td>Nombre:</td>
        <td><input type='text' name='nom' id='nom' required maxlength="35" placeholder="Escribe tu nombre"></td>
      </tr>
      <tr>
        <td>Usuario:</td>
        <td><input type='text' name='usu' id='usu' required maxlength="20" placeholder="¿Como quieres ser conocido?"></td>
      </tr>

      <tr>
        <td>Email:</td>
        <td><input type='mail' name='mail' id='mail' required maxlength="40" placeholder="No olvides el @"></td>
      </tr>

      <tr>
        <td>Telefono:</td>
        <td><input type='tel' name='number' pattern="[0-9]{10}" maxlength="10" id='number' required placeholder="ingresa tus 10 numeros"></td>
      </tr>

      <td> Contraseña:</td>
      <td><input type='text' name='contra' id='contra' required maxlength="30" placeholder="minimo 6 caracteres"></td>
      </tr>
      <tr>
        <td> Confirmar contraseña:</td>
        <td><input type='text' name='contra2' id='contra2' required maxlength="30" placeholder="Debes repetirla para confirmar"></td>
      </tr>
      <tr>

        <td colspan="2"><input type='submit' name='enviando' value='¡Dale!'></td>
      </tr>
    </table>
  </form>
</body>

</html>
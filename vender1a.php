<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Vender2</title>
  <link rel="stylesheet" href="stylevender2.css" />
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>
<h1>Agrega tus imagenes</h1>
<body>
<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }
  ?>  
<br><br>
    <form action="Insertar_Contenido2.php" method="post" enctype="multipart/form-data" name="form1">
      <table>
        <tr>
          <td>Articulo:
            <label for="campo_titulo"></label>
          </td>
          <td><input type='text' name='campo_titulo' id='campo_titulo'></td>
        </tr>

        <tr>
          <td>Descripción:
            <label for="area_comentarios"></label>
          </td>
          <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="30"></textarea></td>
          <input type='hidden' name='MAX_TAM' value="5097152">
        <tr>
          <td colspan="2" align="center">Seleccione imagen con tamaño inferior a 5 MB</td>
        </tr> <!--Aqui abre captura de camara directo, checar sintaxis de Formulario.php-->
        <td colspan="2" align="left"><input type="file" accept="imagen/*" capture="camera" name="imagen" id="imagen"></td>
        </tr>

        <tr>
          <td>Precio:
            <label for="campo_precio"></label>
          </td>
          <td>
            <br><br>
            <input type='number_format' name='campo_precio' id='campo_precio'>
          </td>
        </tr>

        <tr>
          <td colspan="2" align="center"><br><br>
            <input type='submit' name='btn_enviar' id="btn_enviar" value='Enviar'>
          </td>
        </tr>
      </table>
    </form>

</body>

</html>
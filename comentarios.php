<!doctype html>
<html>
<!--FORMULARIO PARA COMENTARIOS GUARDANDO EN BASE DE DATOS:chalalas -->
<head>
  <meta charset="utf-8">
  <title>comentarios</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
<header>
    <img src="chalalas.png" width="212" height="75" alt="Sitio de comercio electronico">
    <nav>
      <ul>
        <li>
          <a href="#">Productos</a>
          <ul>
            <li><a href="comprar.php">Comprar</a></li>
            <li><a href="vender.php">Vender</a></li>
          </ul>
        </li>

        <li><a href="#">CRUD</a></li>
        <li><a href="comentarios.php">Comentarios</a></li>
        <li><a href="fotos.php">Fotos</a></li>
        <li><a href="videos.php">videos</a></li>

        <li><a href="#">Contactos</a>
          <ul>
            <li><a href="#">Whats App</a></li>
            <li><a href="new 1.php">Email</a></li>
          </ul>
        </li>
        <li><a href="muro.php">Muro</a></li>
        <li><a href="cierre.php">cerrar sesión</a></li>
      </ul>
    </nav>
  </header>
  <h1>Blog de comentarios</h1>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:index.php");
  }
  ?>

  <form action="Insertar_Contenido.php" method="post" enctype="multipart/form-data" name="form1">
    <table>
      <tr>
        <td>Titulo:
          <label for="campo_titulo"></label>
        </td>
        <td><input type='text' name='campo_titulo' id='campo_titulo'></td>
      </tr>

      <tr>
        <td>Comentarios:
          <label for="area_comentarios"></label>
        </td>
        <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
        <input type='hidden' name='MAX_TAM' value="2097152">
      <tr>
        <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td>
      </tr>
      <td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type='submit' name='btn_enviar' id="btn_enviar" value='Enviar'>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><a href="Mostrar blog.php">Página de visualización del blog</a></td>
      </tr>
    </table>
  </form>


</body>
</html>
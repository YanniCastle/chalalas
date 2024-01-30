<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Tus comentarios</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="" />
  <link rel="stylesheet" href="style1d.css" /><!--barra de menu plegable-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos-->

</head>

<body>
  <article id="position">
    <header>
      <div class="ocultar-div">
        <a><img src="chalalas2.png"></a>
      </div>
      <div class="ocultar-div2">
        <a><img src="imagenes/chalalas4.png"></a>
      </div>
      <input type="checkbox" id="check">
      <label for="check" class="mostrar-menu">
        &#8801<!--hamburguesa-->
      </label>
      <nav class="menu">
        <a href=""><i class="fa-solid fa-shop"></i></a>
  
        <a href=""><i class="fa-regular fa-image"></i></a>
        <a href="videos.php"><i class="fa-solid fa-video"></i></a>
<!--        <a href="crud6.php"><i class="fa-solid fa-user"></i></a>-->
        <a href="muro.php">Muro</a>
        <a href="cierre.php">cerrar sesion</a>
        <label for="check" class="esconder-menu">
          &#215 <!--la x-->
        </label>
      </nav>
    </header>
  </article>
  <br><br>
  <h1>envia tus comentarios</h1>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
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

   <!--   <tr>
        <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td>-->
    <!--  </tr>--> <!--Aqui abre las opciones de captura DE FORMA OPCIONES: ojo camara, video o archivo-->
  <!--    <td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
      </tr>--> 
      <!--ESTAS CONDICIONES EN INPUT SE HACE DIRECTO  accept="imagen/*" capture="camera"-->

    <!--  <tr>
        <td>Precio:
          <label for="campo_precio"></label>
        </td>
        <td>
          <br><br>
          <input type='number_format' name='campo_precio' id='campo_precio'>
        </td>
      </tr>-->



      <tr>
        <td colspan="2" align="center">
          <input type='submit' name='btn_enviar' id="btn_enviar" value='Enviar'>
        </td>
      </tr>


  <!--    <tr>
        <td colspan="2" align="center"><a href="Mostrar blog.php">Página de visualización del blog</a></td>
      </tr>-->
    </table>
  </form>
</body>

</html>
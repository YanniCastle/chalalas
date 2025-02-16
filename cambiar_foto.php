<!DOCTYPE html>
<html>
<!--Trajabar con cambiarfoto6 para comprimir No usar versiones 5-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" href="style1b.css" />
  <!--barra de menu plegable-->
  <script src="a2dd6045c4.js" crossorigin="anonymous"></script>
  <!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <!--Iconos -->
  <link rel="stylesheet" type="text/css" href="formulario_imagenes.css">
  <!--formulario Imagenes-->
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <article id="position">
    <header>
      <div class="ocultar-div2">
        <a><img src="imagenes/chalalas4.png"></a>
      </div>

      <nav class="menu">
        <a href="cierre.php">cerrar sesion</a>
      </nav>
    </header>
  </article>
  <?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
		header("location:login.php");
	}
	include 'config.php';

	echo "<br/><h2>¡Cambiar foto , " . $_SESSION["usuario"] . "!<br></h2>";

	$foto = $_SESSION['usuario'];
	//$foto1 = $_SESSION['id'];//ADAPTANDO 
	$id = $_SESSION['usuario'];
	include 'cone2.php';
	$consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$id' OR MAIL= '$id'");
	$valores = mysqli_fetch_array($consulta);
	$id = $valores['ID'];
	$nombre = $valores['NOMBRE'];
	$email1 = $valores['MAIL'];
	$rutafoto1 = $valores['rutafoto1'];
	$nombrefoto1 = $valores['nombrefoto1'];

	?>

  <form action="upload_photo.php" method="post" enctype="multipart/form-data">
    <input type="text" name="email1" value="<?php echo $email1; ?>" style="display: none;">
    <table>
      <tr>
        <td>Imagen:<label for="ventana_imagen"></label></td>
        <td><img src="<?php echo $rutafoto1; ?>" width="200px" name='ventana_imagen' id="ventana_imagen">
          <input type="file" name="image" id="imagen">
          <input type='submit' name='submit' id="btn_enviar" value='Subir'>
        </td>
      </tr>
    </table>
  </form>
  <form method="post" action="eliminar_imagenb1.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto1; ?>">
    <table class="uno">
      <tr>
        <td>
          <button type="submit" name="eliminar_imagen">Eliminar foto</button>
        </td>
      </tr>
    </table>
  </form>


</body>

</html>
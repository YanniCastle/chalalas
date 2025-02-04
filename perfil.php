<!--Disenio de perfil -->

<head>
  <link rel="stylesheet" type="text/css" href="perfil.css">
</head>

<?php include("users/template/cabecera.php"); ?>

<?php
include 'config.php';
$login = $_SESSION['usuario'];
$consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'");
$valores = mysqli_fetch_array($consulta);
$ID = $valores['ID'];
$NOMBRE = $valores['NOMBRE'];
$USUARIOS = $valores['USUARIOS'];
$MAIL = $valores['MAIL'];
$TELEFONO = $valores['TELEFONO'];
$UBICACION = $valores['UBICACION'];
$MI_IMAGEN = $valores['rutafoto1'];
?>
<br>

<!--Usando crud5, style.css, para construir perfil -->
<table>
  <td><a>Usuario: <?php echo $USUARIOS; ?></a></td>
  <tr>
    <td>
      <a href="cambiar_foto.php"><img class="my_photo" src="<?php echo $MI_IMAGEN; ?>" alt="mi foto"></a>

      <p class="izq">Id: <?php echo $ID; ?></p>
      <p class="izq">Nombre: <?php echo $NOMBRE; ?></p>
      <p class="izq">e-mail: <?php echo $MAIL; ?></p>
      <p class="izq">Tel: <?php echo $TELEFONO; ?></p>
      <p class="izq">Ubicacion: <?php echo $UBICACION; ?></p>
    </td>
  </tr>
</table>


<?php include("users/template/pie.php"); ?>
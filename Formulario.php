<?php include("users/template/cabecera.php"); ?>
  <h1>envia tus comentarios</h1>
  
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
        <td colspan="2" align="center">
          <input type='submit' name='btn_enviar' id="btn_enviar" value='Enviar'>
        </td>
      </tr>
      
    </table>
  </form>
  <br><br>


  <?php
include 'config.php';
if($con->connect_errno){
  die("Ha ocurrido un error");
}
?>

<?php
include 'config.php';

$login = $_SESSION['usuario'];
$consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'");
$valores = mysqli_fetch_array($consulta);
$id = $valores['ID'];

$tus_articulos = mysqli_query($con, "SELECT * FROM comentarios WHERE ID_USER ='$id'");
?>
<br>
<?php
//CONSULTA/// detallando con style1cabecera.css
if ($tus_articulos->num_rows > 0) {
  while ($articulo = $tus_articulos->fetch_array()) {
    $titulo = $articulo['Titulo'];
    $comentario = $articulo['Comentario'];
    $ID_TEXTO = $articulo['Id'];
    echo "<h1>" . $titulo . "</h1>";
    echo "<h2><div style='width:300px'>" . $comentario . "</h2></div><br/>";
?>
<br>
<form method="post" action="eliminar_texto.php?id=<?php echo $id; ?>&id_texto=<?php echo $ID_TEXTO; ?>">
        <table><button type="submit" name="eliminar_texto">Eliminar texto</button></table>
      </form>

<hr width="300" color="green"><br>
<?php
  }
}
?>

  <?php include("users/template/pie.php"); ?>
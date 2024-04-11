<?php include("../template/cabecera.php"); ?>

<?php
/*SI EXISTE UN VALOR en txtID sera=$txtID, SI NO, SERA VACIO*/
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtDescripcion = (isset($_POST['txtDescripcion'])) ? $_POST['txtDescripcion'] : "";
$txtPrecio = (isset($_POST['txtPrecio'])) ? $_POST['txtPrecio'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
include("../config/bd.php");

switch ($accion) {

  case "Agregar":
    if ($_FILES['txtImagen']['name'] != "") {

      // Permitimos solo unas extensiones
      $allowTypes = array('image/jpg', 'image/png', 'image/jpeg', 'image/gif');
      $fileType = $_FILES['txtImagen']['type'];
      if (in_array($fileType, $allowTypes)) {


        if ($_FILES['txtImagen']['size'] <= 5120000) {
          $sentenciaSQL = $conexion->prepare("INSERT INTO libros (nombre, descripcion, precio, imagen) VALUES (:nombre, :descripcion, :precio, :imagen);");
          $sentenciaSQL->bindParam(':nombre', $txtNombre);
          $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);
          $sentenciaSQL->bindParam(':precio', $txtPrecio);

          $fecha = new DateTime();
          $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "sin_imagen.jpg";

          if ($txtImagen != "") {
            function compressImage($source, $destination, $quality)
            {
              // Obtenemos la información de la imagen
              $imgInfo = getimagesize($source);
              $mime = $imgInfo['mime'];

              // Creamos una imagen
              switch ($mime) {
                case 'image/jpeg':
                  $image = imagecreatefromjpeg($source);
                  break;
                case 'image/png':
                  $image = imagecreatefrompng($source);
                  break;
                case 'image/gif':
                  $image = imagecreatefromgif($source);
                  break;
                default:
                  $image = imagecreatefromjpeg($source);
              }

              // Guardamos la imagen
              imagejpeg($image, $destination, $quality);

              // Devolvemos la imagen comprimida
              return $destination;
            }
            // Ruta subida
            $uploadPath = "../../img/";

            if (isset($_POST["accion"])) {

              if ($_FILES["txtImagen"]["name"] != "null") {

                $fecha = new DateTime();
                $nombreArchivoo = ($_FILES["txtImagen"]["name"] != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "sin_imagen.jpg";

                $fileName = basename($_FILES["txtImagen"]["name"]);
                $imageUploadPath = $uploadPath . $nombreArchivoo;
                $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

                // Permitimos solo unas extensiones
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                  // Image temp source 
                  $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

                  // Comprimos el fichero
                  $compressedImage = compressImage($tmpImagen, $imageUploadPath, 12);

                  if ($compressedImage) {
                    $mensaje = "La imagen se ha subido correctamente.";
                  } else {
                    $mensaje = "La compresion de la imagen ha fallado";
                  }
                } else {
                  $mensaje = 'Lo sentimos, solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.';
                }
              } else {
                $mensaje = 'Poor favor, selecciona una imagen.';
              }
            } //fin del post
          }

          $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
          $sentenciaSQL->execute();
        } //fin de [size] 
        else {
          $mensaje = "El archivo es demasiado grande, tamaño máximo permitido es de 5 MB.";
        }
      } //fin de las extensiones

      else {
        $mensaje = 'Solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.';
      }
    } //fin de  $_FILES['txtImagen']['name'] != ""
    else {
      $mensaje = 'Por favor, selecciona una imagen.';
    }
    break;


  case "Modificar": //AQUI TAMBIEN AGREGAR size Y COMPRIMIR
    //Aqui solo modificamos el registro
    $sentenciaSQL = $conexion->prepare("UPDATE libros SET nombre=:nombre, descripcion=:descripcion, precio=:precio WHERE id=:id");
    $sentenciaSQL->bindParam(':nombre', $txtNombre);
    $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);
    $sentenciaSQL->bindParam(':precio', $txtPrecio);
    $sentenciaSQL->bindParam(':id', $txtID);
    $sentenciaSQL->execute();

    //Agregaremos la condicion para la imagen---su registro
    if ($txtImagen != "") {
      //Este dato es importante para modificar la imagen
      $fecha = new DateTime();
      $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "sin_imagen.jpg";
      $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

      move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
      //Buscamos la imagen
      $sentenciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE id=:id");
      $sentenciaSQL->bindParam(':id', $txtID);
      $sentenciaSQL->execute();
      $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
      //Borramos imagen vieja
      if (isset($libro["imagen"]) && $libro["imagen"] != "sin_imagen.jpg") {
        if (file_exists("../../img/" . $libro["imagen"])) {
          unlink("../../img/" . $libro["imagen"]);
        }
      } //Actualizamos
      $sentenciaSQL = $conexion->prepare("UPDATE libros SET imagen=:imagen WHERE id=:id");
      $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
      $sentenciaSQL->bindParam(':id', $txtID);
      $sentenciaSQL->execute();
    }
    header("Location:productos.php");
    break;

  case "Cancelar":
    header("Location:productos.php");
    break;

  case "Seleccionar":
    $sentenciaSQL = $conexion->prepare("SELECT * FROM libros WHERE id=:id");
    $sentenciaSQL->bindParam(':id', $txtID);
    $sentenciaSQL->execute();
    $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

    $txtNombre = $libro['nombre'];
    $txtDescripcion = $libro['descripcion'];
    $txtPrecio = $libro['precio'];
    $txtImagen = $libro['imagen'];
    break;

  case "Borrar":
    //ahora agregaremos el borrar archivo
    $sentenciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE id=:id");
    $sentenciaSQL->bindParam(':id', $txtID);
    $sentenciaSQL->execute();
    $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

    if (isset($libro["imagen"]) && $libro["imagen"] != "sin_imagen.jpg") {
      if (file_exists("../../img/" . $libro["imagen"])) {
        unlink("../../img/" . $libro["imagen"]);
      }
    }
    //Esto solo borra el registro en BD
    $sentenciaSQL = $conexion->prepare("DELETE FROM libros WHERE id=:id");
    $sentenciaSQL->bindParam(':id', $txtID);
    $sentenciaSQL->execute();
    header("Location:productos.php");
    break;
}

//Mostrar todos los registros en tabla
$sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<!--Formulario de Captura de libros -->
<div class="col-md-5">

  <div class="card">
    <div class="card-header">
      Datos de libro
    </div>

    <div class="card-body">

      <?php if (isset($mensaje)) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $mensaje; ?>
      </div>
      <?php } ?>

      <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="txtID">ID:</label>
          <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID"
            id="txtID" placeholder="ID">
        </div>

        <div class="form-group">
          <label for="txtNombre">Titulo:</label>
          <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre"
            id="txtNombre" placeholder="Titulo de articulo">
        </div>

        <!--Agregue Descripcion-->
        <div class="form-group">
          <label for="txtDescripcion">Descripcion:</label>
          <input type="text" required class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion"
            id="txtDescripcion" placeholder="Describe tu articulo">
        </div>

        <!--Agregue Precio-->
        <div class="form-group">
          <label for="txtPrecio">Precio:</label>
          <input type="number_format" class="form-control" value="<?php echo $txtPrecio; ?>" name="txtPrecio"
            id="txtPrecio" placeholder="Precio en $ mx">
        </div>

        <div class="form-group">
          <label for="txtImagen">Imagen:</label>
          <br>
          <!--<?php echo $txtImagen;
              ?>-->

          <?php //Ahora preguntamos
          if ($txtImagen != "") { ?>
          <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen;
                                                              ?>" width="50px" alt="" srcset="">
          <?php } ?>

          <input type="hidden" name="getimagesize" value="5120000">
          <input type="file" accept="image/*" class=" form-control" name="txtImagen" id="txtImagen">
        </div>

        <div class=" btn-group" role="group" aria-label="">
          <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?>
            value="Agregar" class="btn btn-success">Agregar</button>
          <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?>
            value="Modificar" class="btn btn-warning">Modificar</button>
          <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?>
            value="Cancelar" class="btn btn-info">Cancelar</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!--tABLA DONDE SE MUESTRAN LOS LIBROS: Lista-->
<div class="col-md-7">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($listaLibros as $libro) { ?>
      <tr>
        <td><?php echo $libro['id']; ?></td>
        <td><?php echo $libro['nombre']; ?></td>
        <td><?php echo $libro['descripcion']; ?></td>
        <td><?php echo $libro['precio']; ?></td>
        <td>
          <img class="img-thumbnail rounded" src="../../img/<?php echo $libro['imagen'];
                                                              ?>" width="50px" alt="" srcset="">
        </td>

        <td>
          <form method="post">
            <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id']; ?>" />

            <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
            <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
          </form>
        </td>

      </tr>
      <?php } ?>

    </tbody>
  </table>

</div>

<?php include("../template/pie.php"); ?>
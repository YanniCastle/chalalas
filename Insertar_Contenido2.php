<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Insertar Contenido2</title>
</head>

<body>
  <?php     /*Diferente forma de conexion a base de datos */
  include("conexion.php");
  /*Comprobar conexion*/
  if (!$miconexion) {                /*mysqli_error()*/
    echo "La conexión ha fallado: " . mysqli_connect_error();/*¿falta algo?*/
    exit();
  }
  
  $eltitulo = $_POST['campo_titulo'];
  $lafecha = date("Y-m-d H:i:s");
  $elcomentario = $_POST['area_comentarios'];
  $laimagen = $_FILES['imagen']['name']; //aqui esta la imagen y el nombre de ella
  $tipo_imagen = $_FILES['imagen']['type']; //tipo de imagen jpg, gif, etc.
  $tamaño_imagen = $_FILES['imagen']['size']; //tamaño de la imagen
  
  $ruta = $_FILES['imagen']['tmp_name']; //para la ruta
  $destino = "imagenes/productos/" . $laimagen;
  
  $elprecio = $_POST['campo_precio'];
   
if ($tamaño_imagen<=5120000) {


  if($tipo_imagen=="image/jpeg" OR $tipo_imagen=="image/jpg" OR $tipo_imagen=="image/png" OR $tipo_imagen=="image/gif"){
      
      $destino_de_ruta = "imagenes/productos/";
      move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
      
       "El archivo: " . $_FILES['imagen']['name'] . "<br> 
      Se ha copiado en directorio:. $destino  <br>";

    
  $miconsulta = "INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen, ruta, precio) VALUES 
 
('" . $eltitulo . "' , '" . $lafecha . "' , '" . $elcomentario . "' , '" . $laimagen . "' ,'" . $destino . "', '" . $elprecio . "')";
  
  $resultado = mysqli_query($miconexion, $miconsulta);
  /*Cerramos conexion*/
  mysqli_close($miconexion);
      echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="vender1a.php";</script>';

      }  //PARENTESIS DE FORMATOS//
      else{
        echo "Solo se pueden subir imagenes en formato: .jpg, .jpeg, .png y .gif";
      }

} else {
    echo "NO se ha subido el archivo, es mayor de 5MB, o no es imagen";
  }

  ?>
</body>

</html>
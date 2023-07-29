<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Insertar Contenido</title>
</head>

<body>
  <?php     /*Diferente forma de conexion a base de datos */
  $miconexion = mysqli_connect("localhost", "root", "", "chalalas");
  /*Comprobar conexion*/
  if (!$miconexion) {                /*mysqli_error()*/
    echo "La conexión ha fallado: " . mysqli_connect_error();/*¿falta algo?*/
    exit();
  }
  /*Aqui consideraremos alguno tipod de error en $_FILES*/
  if ($_FILES['imagen']['error']) {
    switch ($_FILES['imagen']['error']) {
      case 1: //Error exceso de tamaño de archivo en php.ini
        echo "El tamaño del archivo excede lo permitido por el servidor";
        break;
      case 2: //Error tamaño archivo marcado desde formulario
        echo "El tamaño de archivo excede 2 MB";
        break;
      case 3: //corrupcion de archivo
        echo "El envío de archivo se interrumpio";
        break;
      case 4: //No ahy fichero
        echo "No se ha enviado ningún archivo";
        break;
    }
  } else {
    echo "Entrada subida correctamente</br>";
    if (isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)) {
      $destino_de_ruta = "imagenes/";
      move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
      echo "El archivo: " . $_FILES['imagen']['name'] . "<br/> Se ha copiado en directorio de imagenes";
    } else {
      echo "El archivo no se ha copiado en el directorio de imágenes";
    }
  }

  $eltitulo = $_POST['campo_titulo'];
  $lafecha = date("Y-m-d H:i:s");
  $elcomentario = $_POST['area_comentarios'];
  $laimagen = $_FILES['imagen']['name'];

  /*Video 90  20:19, continua video 91*/
  $miconsulta = "INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen) VALUES 
/*Sustituir inf de Formulario('Titulo', 'Fecha', 'Comentario', 'Imagen')*/ 
('" . $eltitulo . "' , '" . $lafecha . "' , '" . $elcomentario . "' , '" . $laimagen . "')";
  //Super cuidado en comillas sencillas y dobles y puntos para concatenar//
  $resultado = mysqli_query($miconexion, $miconsulta);
  /*Cerramos conexion*/
  mysqli_close($miconexion);
  echo "<br/>Se ha agregado el comentario con exito. <br/><br/>";

  ?>
</body>

</html>
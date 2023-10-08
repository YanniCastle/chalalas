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
  /*Aqui consideraremos alguno tipos de error en $_FILES*/
  // if ($_FILES['imagen']['error']) {
  //  switch ($_FILES['imagen']['error']) {
  //    case 1: //Error exceso de tamaño de archivo en php.ini
  //     echo "El tamaño del archivo excede lo permitido por el servidor";
  //     break;
  //   case 2: //Error tamaño archivo marcado desde formulario
  //     echo "El tamaño de archivo excede 2 MB";
  //     break;
  //  case 3: //corrupcion de archivo
  //     echo "El envío de archivo se interrumpio";
  //     break;
  //   case 4: //No ahy fichero
  //     echo "No se ha enviado ningún archivo";
  //     break;
  // }
  // } else {//video 83 Curso PHP mySql. Subir imagenes   08:20//
  //  echo "Entrada subida correctamente</br>";
  // if (isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)) {
  $eltitulo = $_POST['campo_titulo'];
  $lafecha = date("Y-m-d H:i:s");
  $elcomentario = $_POST['area_comentarios'];
  $laimagen = $_FILES['imagen']['name']; //aqui esta la imagen y el nombre de ella
  $tipo_imagen = $_FILES['imagen']['type']; //tipo de imagen jpg, gif, etc.
  $tamaño_imagen = $_FILES['imagen']['size']; //tamaño de la imagen
  
  $ruta = $_FILES['imagen']['tmp_name']; //para la ruta
  $destino = "imagenes/productos/" . $laimagen;
  
  $elprecio = $_POST['campo_precio'];
   
if ($tamaño_imagen<=5000000) {

      // $cn = mysqli_connect("localhost", "root", "", "imagenes") or die("Error");
   // if (copy($ruta, $destino)) {
      //$sql = "INSERT INTO contenido (Imagen,ruta) VALUES ('$laimagen','$destino')";
    //  $res = mysqli_query($cn, $sql);
    //  if ($res) {
     //   echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="vender1a.php";</script>';}
                        //  }
/*INTEGRAR LOS DATOS PARA QUE EN BASE SALGAN JUNTO COSA DE ORDENAR PARENTESIS */

  if($tipo_imagen=="image/jpeg" OR $tipo_imagen=="image/jpg" OR $tipo_imagen=="image/png" OR $tipo_imagen=="image/gif"){
      
      $destino_de_ruta = "imagenes/productos/";
      move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
      
       "El archivo: " . $_FILES['imagen']['name'] . "<br> 
      Se ha copiado en directorio:. $destino  <br>";

     // echo "tiene un tamaño de : " . $_FILES['imagen']['size'] . " bytes <br>";
    //  echo "tipo de formato : " . $_FILES['imagen']['type'] . "<br>";
    
//  }
  /*Video 90  20:19, continua video 91*/
  $miconsulta = "INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen, ruta, precio) VALUES 
/*Sustituir inf de Formulario('Titulo', 'Fecha', 'Comentario', 'Imagen')*/ 
('" . $eltitulo . "' , '" . $lafecha . "' , '" . $elcomentario . "' , '" . $laimagen . "' ,'" . $destino . "', '" . $elprecio . "')";
  //Super cuidado en comillas sencillas y dobles y puntos para concatenar//
  $resultado = mysqli_query($miconexion, $miconsulta);
  /*Cerramos conexion*/
  mysqli_close($miconexion);
      echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="vender1a.php";</script>';
//  echo "<br/>Se ha agregado información con exito. <br/><br/>";
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
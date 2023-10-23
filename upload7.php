<?php
include 'cone2.php';
if (isset($_POST["email1"])) {/*Datos pata foto 1*/
$email1 = $_POST['email1'];
$articulo1 = $_POST['campo_titulo1'];//articulo
$descripcion1 = $_POST['campo_descripcion1']; //Descripcion
$precio1 = $_POST['campo_precio1']; //Precio
$directorio_destino1 = "imagenes/productos";//lugar donde se guardara
$img_file1 = $_FILES["image"]["name"]; //Nombre del archivo
$destino1 = $directorio_destino1 . '/' .  $img_file1;
mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto1 = '$img_file1', rutafoto1 = '$destino1', titulofoto1 = '$articulo1', descripcionfoto1 = '$descripcion1', preciofoto1 = '$precio1' WHERE USUARIOS= '$email1' OR MAIL= '$email1'");             
function compressImage($source, $destination, $quality) { 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
    // Creamos una imagen
    switch($mime){ 
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
    imagejpeg($image, $destination, $quality); 
    return $destination; 
} 
$uploadPath = "imagenes/productos/";
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){
    if ($_FILES["image"]["size"] <= 5120000) {

    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // File info 
        $fileName = basename($_FILES["image"]["name"]); 
        $imageUploadPath = $uploadPath . $fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
        // Permitimos solo unas extensiones
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["image"]["tmp_name"];
            // Comprimos el fichero/*                             
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 12);

            if($compressedImage){
echo '<script>alert("Se ha subido satisfactoriamente."); window.location="usuarios_registrados3.php";</script>';
            }else{ 
                $statusMsg = "La compresion de la imagen ha fallado"; 
            } 
        }else{ 
            $statusMsg = 'Lo sentimos, solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.'; 
        } 
    }else{ 
        $statusMsg = 'Por favor, selecciona una imagen.'; 
    } 

    }/*fin de tamaño */
    else {
        echo "Demasiado grande la imagen";
    }
} 
}/*fin de email post *//*Fin para datos de foto 1 */

/*/////////////////////////////////////////////////////////////////////////// */

if (isset($_POST["email2"])) {/*Datos para foto 2 */
    $email2 = $_POST['email2'];
    $articulo2 = $_POST['campo_titulo2']; //articulo
    $descripcion2 = $_POST['campo_descripcion2']; //Descripcion
    $precio2 = $_POST['campo_precio2']; //Precio
    $directorio_destino2 = "imagenes/productos"; //lugar donde se guardara
    $img_file2 = $_FILES["image2"]["name"]; //Nombre del archivo
    $destino2 = $directorio_destino2 . '/' .  $img_file2;
    mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto2 = '$img_file2', rutafoto2 = '$destino2', titulofoto2 = '$articulo2', descripcionfoto2 = '$descripcion2', preciofoto2 = '$precio2' WHERE USUARIOS= '$email2' OR MAIL= '$email2'");
    function compressImage($source, $destination, $quality)
    {
        $imgInfo = getimagesize($source);
        $mime = $imgInfo['mime'];
        // Creamos una imagen
        switch ($mime) {
            case 'image2/jpeg':
                $image = imagecreatefromjpeg($source);
                break;
            case 'image2/png':
                $image = imagecreatefrompng($source);
                break;
            case 'image2/gif':
                $image = imagecreatefromgif($source);
                break;
            default:
                $image = imagecreatefromjpeg($source);
        }
        imagejpeg($image, $destination, $quality);
        return $destination;
    }
    $uploadPath = "imagenes/productos/";
    $status = $statusMsg = '';
    if (isset($_POST["submit"])) {
        if ($_FILES["image2"]["size"] <= 5120000) {

            $status = 'error';
            if (!empty($_FILES["image2"]["name"])) {
                // File info 
                $fileName = basename($_FILES["image2"]["name"]);
                $imageUploadPath = $uploadPath . $fileName;
                $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
                // Permitimos solo unas extensiones
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    // Image temp source 
                    $imageTemp = $_FILES["image2"]["tmp_name"];
                    // Comprimos el fichero/*                             
                    $compressedImage = compressImage($imageTemp, $imageUploadPath, 12);

                    if ($compressedImage) {
                        echo '<script>alert("Se ha subido satisfactoriamente."); window.location="usuarios_registrados3.php";</script>';
                    } else {
                        $statusMsg = "La compresion de la imagen ha fallado";
                    }
                } else {
                    $statusMsg = 'Lo sentimos, solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.';
                }
            } else {
                $statusMsg = 'Por favor, selecciona una imagen.';
            }
        }/*fin de tamaño */ else {
            echo "Demasiado grande la imagen";
        }
    }
}/*fin de email post *//*fi de datos de foto 2 */


/*/////////////////////////////////////////////////////////////////////////// */

if (isset($_POST["email3"])) {/*Datos para foto 3 */
    $email3 = $_POST['email3'];
    $articulo3 = $_POST['campo_titulo3']; //articulo
    $descripcion3 = $_POST['campo_descripcion3']; //Descripcion
    $precio3 = $_POST['campo_precio3']; //Precio
    $directorio_destino3 = "imagenes/productos"; //lugar donde se guardara
    $img_file3 = $_FILES["image3"]["name"]; //Nombre del archivo
    $destino3 = $directorio_destino3 . '/' .  $img_file3;
    mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto3 = '$img_file3', rutafoto3 = '$destino3', titulofoto3 = '$articulo3', descripcionfoto3 = '$descripcion3', preciofoto3 = '$precio3' WHERE USUARIOS= '$email3' OR MAIL= '$email3'");
    function compressImage($source, $destination, $quality)
    {
        $imgInfo = getimagesize($source);
        $mime = $imgInfo['mime'];
        // Creamos una imagen
        switch ($mime) {
            case 'image3/jpeg':
                $image = imagecreatefromjpeg($source);
                break;
            case 'image3/png':
                $image = imagecreatefrompng($source);
                break;
            case 'image3/gif':
                $image = imagecreatefromgif($source);
                break;
            default:
                $image = imagecreatefromjpeg($source);
        }
        imagejpeg($image, $destination, $quality);
        return $destination;
    }
    $uploadPath = "imagenes/productos/";
    $status = $statusMsg = '';
    if (isset($_POST["submit"])) {
        if ($_FILES["image3"]["size"] <= 5120000) {

            $status = 'error';
            if (!empty($_FILES["image3"]["name"])) {
                // File info 
                $fileName = basename($_FILES["image3"]["name"]);
                $imageUploadPath = $uploadPath . $fileName;
                $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
                // Permitimos solo unas extensiones
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    // Image temp source 
                    $imageTemp = $_FILES["image3"]["tmp_name"];
                    // Comprimos el fichero/*                             
                    $compressedImage = compressImage($imageTemp, $imageUploadPath, 12);

                    if ($compressedImage) {
                        echo '<script>alert("Se ha subido satisfactoriamente."); window.location="usuarios_registrados3.php";</script>';
                    } else {
                        $statusMsg = "La compresion de la imagen ha fallado";
                    }
                } else {
                    $statusMsg = 'Lo sentimos, solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.';
                }
            } else {
                $statusMsg = 'Por favor, selecciona una imagen.';
            }
        }/*fin de tamaño */ else {
            echo "Demasiado grande la imagen";
        }
    }
}/*fin de email post *//*fi de datos de foto 3 */


/*/////////////////////////////////////////////////////////////////////////// */

if (isset($_POST["email4"])) {/*Datos para foto 4 */
    $email4 = $_POST['email4'];
    $articulo4 = $_POST['campo_titulo4']; //articulo
    $descripcion4 = $_POST['campo_descripcion4']; //Descripcion
    $precio4 = $_POST['campo_precio4']; //Precio
    $directorio_destino4 = "imagenes/productos"; //lugar donde se guardara
    $img_file4 = $_FILES["image4"]["name"]; //Nombre del archivo
    $destino4 = $directorio_destino4 . '/' .  $img_file4;
    mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto4 = '$img_file4', rutafoto4 = '$destino4', titulofoto4 = '$articulo4', descripcionfoto4 = '$descripcion4', preciofoto4 = '$precio4' WHERE USUARIOS= '$email4' OR MAIL= '$email4'");
    function compressImage($source, $destination, $quality)
    {
        $imgInfo = getimagesize($source);
        $mime = $imgInfo['mime'];
        // Creamos una imagen
        switch ($mime) {
            case 'image4/jpeg':
                $image = imagecreatefromjpeg($source);
                break;
            case 'image4/png':
                $image = imagecreatefrompng($source);
                break;
            case 'image4/gif':
                $image = imagecreatefromgif($source);
                break;
            default:
                $image = imagecreatefromjpeg($source);
        }
        imagejpeg($image, $destination, $quality);
        return $destination;
    }
    $uploadPath = "imagenes/productos/";
    $status = $statusMsg = '';
    if (isset($_POST["submit"])) {
        if ($_FILES["image4"]["size"] <= 5120000) {

            $status = 'error';
            if (!empty($_FILES["image4"]["name"])) {
                // File info 
                $fileName = basename($_FILES["image4"]["name"]);
                $imageUploadPath = $uploadPath . $fileName;
                $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
                // Permitimos solo unas extensiones
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    // Image temp source 
                    $imageTemp = $_FILES["image4"]["tmp_name"];
                    // Comprimos el fichero/*                             
                    $compressedImage = compressImage($imageTemp, $imageUploadPath, 12);

                    if ($compressedImage) {
                        echo '<script>alert("Se ha subido satisfactoriamente."); window.location="usuarios_registrados3.php";</script>';
                    } else {
                        $statusMsg = "La compresion de la imagen ha fallado";
                    }
                } else {
                    $statusMsg = 'Lo sentimos, solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.';
                }
            } else {
                $statusMsg = 'Por favor, selecciona una imagen.';
            }
        }/*fin de tamaño */ else {
            echo "Demasiado grande la imagen";
        }
    }
}/*fin de email post *//*fi de datos de foto 4 */


// Mostrar el estado de la imagen 
echo $statusMsg; 
 
?>

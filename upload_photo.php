<?php
include 'cone2.php';
if (isset($_POST["email1"])) {/*Datos pata foto 1*/
$email1 = $_POST['email1'];
//$articulo1 = $_POST['campo_titulo1'];//articulo
//$descripcion1 = $_POST['campo_descripcion1']; //Descripcion
//$precio1 = $_POST['campo_precio1']; //Precio
$directorio_destino1 = "imagenes/productos";//lugar donde se guardara
$img_file1 = $_FILES["image"]["name"]; //Nombre del archivo
$destino1 = $directorio_destino1 . '/' .  $img_file1;
mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto1 = '$img_file1', rutafoto1 = '$destino1' WHERE USUARIOS= '$email1' OR MAIL= '$email1'");             
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
echo '<script>alert("Se ha subido satisfactoriamente."); window.location="perfil.php";</script>';
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

// Mostrar el estado de la imagen 
echo $statusMsg; 
 
?>
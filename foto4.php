<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
}
include 'cone2.php';
//foto de perfil Aqui haciendolo de 4 fotos OK.//
if (isset($_POST["email"])) {
$email = $_POST['email'];
$foto = $_FILES['nfoto'];//El archivo
echo $foto['tmp_name'];
$directorio_destino = "imagenes";//lugar donde se guardara
$tmp_name = $foto['tmp_name'];//almacen temporal
$img_file = $foto['name'];//Nombre del archivo
$img_type = $foto['type'];//Formato del archivo
$img_size = $foto['size']; //tamaño
$img_size = $foto['size'];
if ($img_size <= 5120000) {
    //Indicaciones para foto de perfil//
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
        strpos($img_type, "jpg")) || strpos($img_type, "png"))) {

        //¿Tenemos permisos para subir la imágen?
        $destino = $directorio_destino . '/' .  $img_file;
        mysqli_query($con, "UPDATE usuarios_pass2 SET foto = '$destino', nombrefoto = '$img_file' WHERE USUARIOS= '$email' OR MAIL= '$email'");
        (move_uploaded_file($tmp_name, $destino));
        header("location:usuarios_registrados3.php");
    }else {
        echo "<br>No tiene el formato adecuado";
    }
} else {
        echo "<br>Es demasiado grande tu imagen";
    }
}
//foto 1//
if (isset($_POST["email1"])) {
$email1 = $_POST['email1'];
$foto1 = $_FILES['nfoto1'];
echo $foto1['tmp_name'];
$directorio_destino1 = "imagenes";
$tmp_name1 = $foto1['tmp_name'];
$img_file1 = $foto1['name'];
$img_type1 = $foto1['type'];
$img_size1 = $foto1['size'];
if($img_size1<= 5120000){
    //indicaciones para foto 1//
    if (((strpos($img_type1, "gif") || strpos($img_type1, "jpeg") ||
        strpos($img_type1, "jpg")) || strpos($img_type1, "png"))) {
        //¿Tenemos permisos para subir la imágen?
        $destino1 = $directorio_destino1 . '/' .  $img_file1;
        mysqli_query($con, "UPDATE usuarios_pass2 SET foto1 = '$destino1', nombrefoto1 = '$img_file1' WHERE USUARIOS= '$email1' OR MAIL= '$email1'");
        (move_uploaded_file($tmp_name1, $destino1));
        header("location:usuarios_registrados3.php");
    } else {
        echo "<br>No tiene el formato adecuado";
    }
} else {
        echo "<br>Es demasiado grande tu imagen";
    }

}
//foto 2//
if (isset($_POST["email2"])) {
$email2 = $_POST['email2'];
$foto2 = $_FILES['nfoto2'];
echo $foto2['tmp_name'];
$directorio_destino2 = "imagenes";
$tmp_name2 = $foto2['tmp_name'];
$img_file2 = $foto2['name'];
$img_type2 = $foto2['type'];
$img_size2 = $foto2['size'];
if ($img_size2 <= 5120000) {
    //indicaciones para foto 2//
    if (((strpos($img_type2, "gif") || strpos($img_type2, "jpeg") ||
        strpos($img_type2, "jpg")) || strpos($img_type2, "png"))) {
        //¿Tenemos permisos para subir la imágen?
        $destino2 = $directorio_destino2 . '/' .  $img_file2;
        mysqli_query($con, "UPDATE usuarios_pass2 SET foto2 = '$destino2', nombrefoto2 = '$img_file2' WHERE USUARIOS= '$email2' OR MAIL= '$email2'");
        (move_uploaded_file($tmp_name2, $destino2));
        header("location:usuarios_registrados3.php");
    }else {
        echo "<br>No tiene el formato adecuado";
    }
} else {
        echo "<br>Es demasiado grande tu imagen";
    }
}
//foto 3//
if (isset($_POST["email3"])) {
$email3 = $_POST['email3'];
$foto3 = $_FILES['nfoto3'];
echo $foto3['tmp_name'];
$directorio_destino3 = "imagenes";
$tmp_name3 = $foto3['tmp_name'];
$img_file3 = $foto3['name'];
$img_type3 = $foto3['type'];
$img_size3 = $foto3['size'];
if ($img_size3 <= 5120000) {
    //indicaciones para foto 3//
    if (((strpos($img_type3, "gif") || strpos($img_type3, "jpeg") ||
        strpos($img_type3, "jpg")) || strpos($img_type3, "png"))) {
        //¿Tenemos permisos para subir la imágen?
        $destino3 = $directorio_destino3 . '/' .  $img_file3;
        mysqli_query($con, "UPDATE usuarios_pass2 SET foto3 = '$destino3', nombrefoto3 = '$img_file3' WHERE USUARIOS= '$email3' OR MAIL= '$email3'");
        (move_uploaded_file($tmp_name3, $destino3));
        header("location:usuarios_registrados3.php");
    } else {
        echo "<br>No tiene el formato adecuado";
    }
} else {
        echo "<br>Es demasiado grande tu imagen";
    }
}

?>
<!--
<script type="text/javascript">
    window.location = "usuarios_registrados3.php";
</script>-->
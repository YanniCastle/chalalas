<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
}
include 'cone2.php';
//foto 1//
if (isset($_POST["email1"])) {
$email1 = $_POST['email1'];
$articulo1 = $_POST['campo_titulo1'];//Articulo
$descripcion1 = $_POST['campo_descripcion1'];//Descripcion
$precio1 = $_POST['campo_precio1'];//Precio
$foto1 = $_FILES['nfoto1'];//El archivo
//echo $foto['tmp_name'];
$directorio_destino1 = "imagenes/productos";//lugar donde se guardara
$tmp_name1 = $foto1['tmp_name'];//almacen temporal
$img_file1 = $foto1['name'];//Nombre del archivo
$img_type1 = $foto1['type'];//Formato del archivo
$img_size1 = $foto1['size']; //tamaño
$img_size1 = $foto1['size'];
if ($img_size1 <= 5120000) {
    //Indicaciones para foto de perfil//
    if (((strpos($img_type1, "gif") || strpos($img_type1, "jpeg") ||
        strpos($img_type1, "jpg")) || strpos($img_type1, "png"))) {

        //¿Tenemos permisos para subir la imágen?
        $destino1 = $directorio_destino1 . '/' .  $img_file1;
        mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto1 = '$img_file1', rutafoto1 = '$destino1', titulofoto1 = '$articulo1', descripcionfoto1 = '$descripcion1', preciofoto1 = '$precio1' WHERE USUARIOS= '$email1' OR MAIL= '$email1'");
        (move_uploaded_file($tmp_name1, $destino1));
        header("location:usuarios_registrados3.php");
    }else {
        echo "<br>No tiene el formato adecuado";
    }
} else {
        echo "<br>Es demasiado grande tu imagen";
    }
}
//foto 2//
if (isset($_POST["email2"])) {
$email2 = $_POST['email2'];
$articulo2 = $_POST['campo_titulo2']; //Articulo
$descripcion2 = $_POST['campo_descripcion2']; //Descripcion
$precio2 = $_POST['campo_precio2'];//Precio
$foto2 = $_FILES['nfoto2'];
echo $foto2['tmp_name'];
$directorio_destino2 = "imagenes/productos";
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
        mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto2 = '$img_file2', rutafoto2 = '$destino2', titulofoto2 = '$articulo2', descripcionfoto2 = '$descripcion2', preciofoto2 = '$precio2' WHERE USUARIOS= '$email2' OR MAIL= '$email2'");
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
$articulo3 = $_POST['campo_titulo3']; //Articulo
$descripcion3 = $_POST['campo_descripcion3']; //Descripcion
$precio3 = $_POST['campo_precio3'];//Precio
$foto3 = $_FILES['nfoto3'];
echo $foto3['tmp_name'];
$directorio_destino3 = "imagenes/productos";
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
        mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto3 = '$img_file3', rutafoto3 = '$destino3', titulofoto3 = '$articulo3', descripcionfoto3 = '$descripcion3', preciofoto3 = '$precio3' WHERE USUARIOS= '$email3' OR MAIL= '$email3'");
        (move_uploaded_file($tmp_name3, $destino3));
        header("location:usuarios_registrados3.php");
    } else {
        echo "<br>No tiene el formato adecuado";
    }
} else {
        echo "<br>Es demasiado grande tu imagen";
    }
}


//foto 4//
if (isset($_POST["email4"])) {
    $email4 = $_POST['email4'];
    $articulo4 = $_POST['campo_titulo4']; //Articulo
    $descripcion4 = $_POST['campo_descripcion4']; //Descripcion
    $precio4 = $_POST['campo_precio4']; //Precio
    $foto4 = $_FILES['nfoto4'];
    echo $foto4['tmp_name'];
    $directorio_destino4 = "imagenes/productos";
    $tmp_name4 = $foto4['tmp_name'];
    $img_file4 = $foto4['name'];
    $img_type4 = $foto4['type'];
    $img_size4 = $foto4['size'];
    if ($img_size4 <= 5120000) {
        //indicaciones para foto 3//
        if (((strpos($img_type4, "gif") || strpos($img_type4, "jpeg") ||
            strpos($img_type4, "jpg")) || strpos($img_type4, "png"))) {
            //¿Tenemos permisos para subir la imágen?
            $destino4 = $directorio_destino4 . '/' .  $img_file4;
            mysqli_query($con, "UPDATE usuarios_pass2 SET nombrefoto4 = '$img_file4', rutafoto4 = '$destino4', titulofoto4 = '$articulo4', descripcionfoto4 = '$descripcion4', preciofoto4 = '$precio4' WHERE USUARIOS= '$email4' OR MAIL= '$email4'");
            (move_uploaded_file($tmp_name4, $destino4));
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
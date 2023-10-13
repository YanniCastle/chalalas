<?php
session_start();
include 'cone2.php';
//foto de perfil Aqui haciendolo de 4 fotos OK.//
$email = $_POST['email'];
$foto = $_FILES['nfoto'];
echo $foto['tmp_name'];
$directorio_destino = "images";
$tmp_name = $foto['tmp_name'];
$img_file = $foto['name'];
$img_type = $foto['type'];
//foto 1//
$email1 = $_POST['email1'];
$foto1 = $_FILES['nfoto1'];
echo $foto1['tmp_name'];
$directorio_destino1 = "images";
$tmp_name1 = $foto1['tmp_name'];
$img_file1 = $foto1['name'];
$img_type1 = $foto1['type'];
//foto 2//
$email2 = $_POST['email2'];
$foto2 = $_FILES['nfoto2'];
echo $foto2['tmp_name'];
$directorio_destino2 = "images";
$tmp_name2 = $foto2['tmp_name'];
$img_file2 = $foto2['name'];
$img_type2 = $foto2['type'];
//foto 3//
$email3 = $_POST['email3'];
$foto3 = $_FILES['nfoto3'];
echo $foto3['tmp_name'];
$directorio_destino3 = "images";
$tmp_name3 = $foto3['tmp_name'];
$img_file3 = $foto3['name'];
$img_type3 = $foto3['type'];

//Indicaciones para foto de perfil//
if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
    strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
    //¿Tenemos permisos para subir la imágen?
    $destino = $directorio_destino . '/' .  $img_file;
    mysqli_query($con, "UPDATE usuarios SET foto = '$destino' WHERE email = '$email';");
    (move_uploaded_file($tmp_name, $destino));
    header("location:perfil4.php");
}
//indicaciones para foto 1//
if (((strpos($img_type1, "gif") || strpos($img_type1, "jpeg") ||
    strpos($img_type1, "jpg")) || strpos($img_type1, "png"))) {
    //¿Tenemos permisos para subir la imágen?
    $destino1 = $directorio_destino1 . '/' .  $img_file1;
    mysqli_query($con, "UPDATE usuarios SET foto1 = '$destino1' WHERE email = '$email1';");
    (move_uploaded_file($tmp_name1, $destino1));
    header("location:perfil4.php");
}
//indicaciones para foto 2//
if (((strpos($img_type2, "gif") || strpos($img_type2, "jpeg") ||
    strpos($img_type2, "jpg")) || strpos($img_type2, "png"))) {
    //¿Tenemos permisos para subir la imágen?
    $destino2 = $directorio_destino2 . '/' .  $img_file2;
    mysqli_query($con, "UPDATE usuarios SET foto2 = '$destino2' WHERE email = '$email2';");
    (move_uploaded_file($tmp_name2, $destino2));
    header("location:perfil4.php");
}
//indicaciones para foto 3//
if (((strpos($img_type3, "gif") || strpos($img_type3, "jpeg") ||
    strpos($img_type3, "jpg")) || strpos($img_type3, "png"))) {
    //¿Tenemos permisos para subir la imágen?
    $destino3 = $directorio_destino3 . '/' .  $img_file3;
    mysqli_query($con, "UPDATE usuarios SET foto3 = '$destino3' WHERE email = '$email3';");
    (move_uploaded_file($tmp_name3, $destino3));
    header("location:perfil4.php");
}
?>
<script type="text/javascript">
    window.location = "perfil4.php";
</script>
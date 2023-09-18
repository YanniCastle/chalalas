<!doctype html>

<head>
    <meta charset="utf-8">
    <tile>Documento sin titulo</title>
</head>

<body>
    <?php
    include("conexion.php"); //conectar//
    $Id = $_GET["Id"];
    $base->query("DELETE FROM DATOS_USUARIOS WHERE ID='$Id' ");
    header("Location:index.php"); //Redirige a inicio//
    ?>
</body>

</html>
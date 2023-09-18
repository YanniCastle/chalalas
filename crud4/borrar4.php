<!doctype html>

<head>
    <meta charset="utf-8">
    <tile>Documento sin titulo</title>
</head>

<body>
    <?php
    include("conexion.php"); //conectar//
    $ID = $_GET["Id"];
    $base->query("DELETE FROM usuarios_pass2 WHERE Id='$ID' ");
    header("Location:crud3.php"); //Redirige a inicio//
    ?>
</body>

</html>
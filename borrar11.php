<!doctype html>

<head>
    <meta charset="utf-8">
    <tile>Documento sin titulo</title>
</head>

<body>
    <?php
    include("conexion.php");
    if (isset($_GET)) {
        $id = 0;
        $ruta = '';
        $id = $_GET['Id'];
        $ruta = $_GET['ruta'];
        $sql = "DELETE FROM contenido WHERE Id='" . $id . "'";
        $res = mysqli_query($cn, $sql);
        if ($res) {
            unlink($ruta);
            echo '<script>alert("Eliminado Correctamente"); window.location="crud11.php";</script>';
        }
    }
    ?>
</body>

</html>
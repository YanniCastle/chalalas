<!doctype html>

<head>
    <meta charset="utf-8">
    <tile>Documento sin titulo</title>
</head>

<body>
    <?php
    /*conexion.php */
    try {
        $base = new PDO('mysql:host=localhost; dbname=u909812438_chalalas2', 'u909812438_root2', 'QWERTYu55442');
        /*Para poder ver los errores y tipos */
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
    } catch (Exception $e) {
        die('Error' . $e->getMessage()); //acabe conexion y cual es//
        echo "Linea de error" . $e->getLine(); //esto da la linea del error//
    }
    $cn = mysqli_connect("localhost", "u909812438_root2", "QWERTYu55442", "u909812438_chalalas2") or die("Error");
    /*archivo de conexion */
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
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>comprueba_login3</title>

</head>

<body>

  <?php
  try {
    $login = htmlentities(addslashes($_GET["usu"]));
    $password = htmlentities(addslashes($_GET["con"]));
    $contador = 0;
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 //REVISAR LA CONEXION A LA BASE DE DATOS
    $sql = "SELECT * FROM PERFILUSUARIOS WHERE USUARIO= :usu";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":usu" => $login));
// revisar proque no funciona la contraseña SINTAXIS//
    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
      if ($password == $registro['PASSWORD']) {
        $contador++;
      }
    }
    if ($contador > 0) {
      session_start(); //Agregamos inicio de sesion
      $_SESSION["usuario"] = $_POST["usu"];
      header("menu_administrador.html");
    } else {
      echo "Error, revisa tu usuario o contraseña ";
      //header("location:login.php");
    }

    $resultado->closeCursor();
  }
  //catch: en caso de que la coneccion no tenga exito//
  catch (Exception $e) {
    die("Error: " . $e->getMessage());
  } finally {
    $base = null;
  }
  ?>

</body>

</html>
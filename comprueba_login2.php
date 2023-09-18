<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin titulo</title>

</head>

<body>

  <?php
  //Funciona bien con USUARIOS_PASS y encriptacion y verifica password//
  //videos 68 y 69 e inicio de session// 
  try {
    $login = htmlentities(addslashes($_POST["login"]));
    $password = htmlentities(addslashes($_POST["password"]));
    $contador = 0;
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM USUARIOS_PASS2 WHERE USUARIOS= :login";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":login" => $login));

    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
      if (password_verify($password, $registro['PASSWORD'])) {
        $contador++;
      }
    }
    if ($contador > 0) {
      session_start(); //Agregamos inicio de sesion
      $_SESSION["usuario"] = $_POST["login"];
      header("location:usuarios_registrados1.php");
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
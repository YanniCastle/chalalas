<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin titulo</title>

</head>

<body>

  <?php //funciona solo con usuario y password sin encriptar//
  try {
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";
    $resultado = $base->prepare($sql);
    $login = htmlentities(addslashes($_POST["login"]));
    $password = htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login" , $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();

    if ($numero_registro!= 0) {
      session_start(); //Agregamos inicio de sesion
      $_SESSION["usuario"] = $_POST["login"];
      header("location:usuarios_registrados1.php");
    } else {
      echo "Error, revisa tu usuario o contraseña ";
    }

    $resultado->closeCursor();
  } 
  catch (Exception $e) {
    die("Error: " . $e->getMessage());
  } finally {
    $base = null;
  }
  ?>

</body>

</html>
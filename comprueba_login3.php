<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>comprueba_login3</title>

</head>

<body>

  <?php
  //Funciona bien con USUARIOS_PASS y encriptacion y verifica password//
  //videos 68 y 69 e inicio de session// 
  try {
    $login = htmlentities(addslashes($_POST["login"]));
    $password = htmlentities(addslashes($_POST["password"]));
    $contador = 0;//PARA SABER SI EL login esta o no esta en bd
    $base = new PDO("mysql:host=localhost; dbname=u909812438_chalalas", "u909812438_root", "QWERTYu5544");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios_pass2 WHERE USUARIOS= :login";//ENTREGA CONSULTA DE REGISTROS EN LOGIN
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":login" => $login));
     //bucle
    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
 //echo "Usuario: " . $registro['SUSUARIOS'] . "Contrasenia: " . $registro['PASSWORD'] . "<br>";
      if (password_verify($password, $registro['PASSWORD'])) {
        $contador++; //compara conta de usuario y el hash en BD
      }
    }
    if ($contador > 0) {
      session_start(); //Agregamos inicio de sesion
      $_SESSION["usuario"] = $_POST["login"];

      //$usuario = $_POST["username"];
      //  header("sitios_usuarios/teresa5.php");//que abra su archivo php
      header("location:usuarios_registrados1.php");
    } else {
      echo "Error, revisa tu usuario o contraseña ";
      //header("location:login.php");
    }

    $resultado->closeCursor();
  }
  //catch: en caso de que la conexion no tenga exito//
  catch (Exception $e) {
    die("Error: " . $e->getMessage());
  } finally {
    $base = null;
  }
  ?>

</body>

</html>
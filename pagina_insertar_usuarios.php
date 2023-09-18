<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>pagina_insertar_usuarios</title>
</head>

<body>
  <?php
  $usuario = $_POST["usu"];
  $contrasenia = $_POST["contra"];
                                             //DEFAULT es 10//
//Creamos variable para cifrar password//            //coste de encryptado//
$pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12));

  try {
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
                       //USUARIO//
    $sql = "INSERT INTO USUARIOS_PASS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";

    $resultado = $base->prepare($sql);                         //contrasenia//
    $resultado->execute(array(":usu" => $usuario, ":contra" => $pass_cifrado));
    echo "Registro insertado";
    $resultado->closeCursor();
  } catch (Exception $e) {
    echo "Linea de error: " . $e->getLine();
  } finally {
    $base = null;
  }
  ?>
</body>

</html>
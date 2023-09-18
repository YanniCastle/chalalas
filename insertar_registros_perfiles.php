<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>insertar_registros_perfiles</title>
  
</head>

<body>
  <?php
  if (isset($_GET['usu'])) {
    $usuario = $_GET["usu"];
    $contrasenia = $_GET["con"];
    $perfil = $_GET["perfil"];
  
    $campos = array();

    
    if ($usuario == "") {
      array_push($campos, "El campo usuario no puede estar vacio ni usar simbolos.");
    }

    if ($contrasenia == "" || strlen($contrasenia) < 6) {
      array_push($campos, "El campo contraseña no puede estar vacio, ni tener menos de 6 caracteres.");
    }
    if (count($campos) > 0) {
      echo "<div class='error'>";
      for ($i = 0; $i < count($campos); $i++) {
        echo "<li>" . $campos[$i] . "</div>";
      }
    } else {
      $pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);

      try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");

        $sql = "INSERT INTO PERFILUSUARIOS (USUARIO, PASSWORD, PERFIL) VALUES (:usu, :con, :perfil)";

        $resultado = $base->prepare($sql);
        $resultado->execute(array(":usu" => $usuario,  "con" => $contrasenia, ":perfil" => $perfil));
        echo "Registro insertado";
        //header("location:confirmacionderegistro.php");

        $resultado->closeCursor();
      } catch (Exception $e) {
        echo "Linea de error: " . $e->getLine();
      } finally {
        $base = null;
      }
    }
    echo "</div>";
  }
  ?>
</body>

</html>
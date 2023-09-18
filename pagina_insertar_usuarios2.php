<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>pagina_insertar_usuarios2</title>
  
</head>

<body>
  <?php
  if (isset($_POST['usu'])) {
    $usuario = $_POST["usu"];
    $mail = $_POST["mail"];
    $Telefono = $_POST["number"];
    $contrasenia = $_POST["contra"];
    $campos = array();

    if ($usuario == "") {
      array_push($campos, "El campo nombre no puede estar vacio.");
    }

    if ($mail == "" || strpos($mail, "@") === false) {
      array_push($campos, "El correo debe ser valido.");
    }

    if ($Telefono == "" || strlen($Telefono) < 10) {
      array_push($campos, "El telefono no puede estar vacio, ni tener menos de 10 numeros.");
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
      $pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT, array("cost" => 12));

      try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");

        $sql = "INSERT INTO USUARIOS_PASS2 (USUARIOS, MAIL, TELEFONO, PASSWORD) VALUES (:usu, :mail, :number, :contra)";

        $resultado = $base->prepare($sql);
        $resultado->execute(array(":usu" => $usuario, ":mail" => $mail, ":number" => $Telefono, ":contra" => $pass_cifrado));
        echo "Registro insertado";
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
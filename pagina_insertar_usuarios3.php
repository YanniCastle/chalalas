<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>pagina_insertar_usuarios3</title>
  
</head>

<body>
  <?php
  if (isset($_POST['usu'])) {
    $nombre = $_POST["nom"];
    $usuario = $_POST["usu"];
    $mail = $_POST["mail"];
    $Telefono = $_POST["number"];
    $contrasenia = $_POST["contra"];
    $contrasenia2 = $_POST["contra2"];
    $campos = array();

    if ($nombre == "") {
      array_push($campos, "El campo nombre no puede estar vacio.");
    }

    if ($usuario == "") {
      array_push($campos, "El campo usuario no puede estar vacio ni usar simbolos.");
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
    if ($contrasenia !== $contrasenia2) {
      array_push($campos, "Debe coincidir las contraseñas");
    }

    if (count($campos) > 0) {
      echo "<div class='error'>";
      for ($i = 0; $i < count($campos); $i++) {
        echo "<li>" . $campos[$i] . "</div>";
      }
    } else {           //la que queremos cifrar //modo de encripta automatica PASSWORD_DEFAULT);
      $pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT, array("cost" => 12));
                                                                //array default 10,
      try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");

        $sql = "INSERT INTO USUARIOS_PASS2 (USUARIOS, NOMBRE, MAIL, TELEFONO, PASSWORD) VALUES (:usu, :nom, :mail, :number, :contra)";

        $resultado = $base->prepare($sql);                                                                      //sin cifrar:  contrasenia
        $resultado->execute(array(":usu" => $usuario, ":nom" => $nombre, ":mail" => $mail, ":number" => $Telefono, ":contra" => $pass_cifrado));
        
        //prueba de generar archivos de nuevos usuarios
        $userFolderPath = "sitios_usuarios/$usuario";//crea una carpeta
        $newFileName = "sitios_usuarios/$usuario.php";//crea un archivo.php
        $content = "<?php\n// nuevo archivo \n\$mensaje = 'probando el nuevo archivo';\necho \$mensaje;\n?>";

        if (!is_dir($userFolderPath) && file_put_contents($newFileName, $content) !== false) {
          mkdir($userFolderPath);
          echo "El archivo $newFileName  y $userFolderPath se han creado con exito.";
      }

     // $_SESSION["username"] = $username;
      header("Location: sitios_usuarios/$usuario.php");

      //  echo "Registro insertado";
      //  header("location:confirmacionderegistro.php");

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
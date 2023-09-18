<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registrate</title>
  <style>
    table {
      width: 300px;
      margin: auto;
      background-color: #FFC;
      border: 2px solid #F00;
      padding: 5px;
    }

    td {
      text-align: center;
    }

    h1 {
      text-align: center
    }
  </style>
</head>

<body>

  <?php
  if (isset($_POST['mail'])) {
    $mail = $_POST["mail"];
    $campos = array();

    if ($mail == "" || strpos($mail, "@") === false) {
      array_push($campos, "Solicitud en blanco o el correo no es valido.");
    }
    if (count($campos) > 0) {
      echo "<div class='error'>";
      for ($i = 0; $i < count($campos); $i++) {
        echo "<li>" . $campos[$i] . "</div>";
      }
    } 
      
    else {
      echo "Solicitud recibida. revisa tu correo";
    }
      }    /* try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
                        //Duda:¿Sera necesario USUARIOS?//
        $sql = "como se consulta y compararINTO USUARIOS_PASS2 (MAIL, PASSWORD) VALUES (:mail, :contra)";

        $resultado = $base->prepare($sql);
        $resultado->execute(array(":mail" => $mail, ":contra" => $pass_cifrado));
        echo "Registro insertado";
        $resultado->closeCursor();
      } catch (Exception $e) {
        echo "Linea de error: " . $e->getLine();
      } finally {
        $base = null;
      }
    }
    echo "</div>";*/
  
  ?>
</body>

</html>
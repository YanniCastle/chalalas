<!DOCTYPE html>
<html>

<head>
  <title>Recuperar contraseña</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" href="recuperar_password.css" />
</head>

<body>
  <h2>Recomendación:Revisa tu email en el mismo navegador y haz clic en el enlace</h2>

  <form method="post" action="procesar_correo2.php">
    <label for="correo">
      <h3>Correo Electrónico:</h3>
    </label>
    <input type="email" id="correo" name="correo" placeholder="Escribe tu email" required>
    <button type="submit">Enviar</button>
  </form>

</body>

</html>
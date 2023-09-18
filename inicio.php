<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>inicio</title>
  <style>
    h1 {
      text-align: center;
    }

    table {
      width: 25%;
      background-color: #FFC;
      border: 2px dotted #F00;
      margin: auto;
    }

    .izq {
      text-align: right;
    }

    .der {
      text-align: left;
    }

    td {
      text-align: center;
      padding: 10px;
    }
  </style>
</head>

<body>
  <h1>chalalas.com</h1>

  <form action="login.php" method="post">
    <table>
      <tr style>
        <td class="izq">
          Bienvenido</td>
        <td colspan="2"><input type='submit' name='enviar' value='Entrar'></td>
      </tr>
    </table>
  </form>
  
  
  <form action="formulario_Insertar_Usuarios.php" method="post">
    <table>
      <tr style>
        <td class="izq">
          Registrate</td>
        <td colspan="2"><input type='submit' name='enviar' value='Registrar'></td>
      </tr>
    </table>
  </form>
</body>

</html>
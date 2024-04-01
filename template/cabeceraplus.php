<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <!--Así se evita que la ñ o las tildes no se muestren correctamente-->
  <meta charset="ISO-8859-1">
  <!--caracteres para el alfabeto latino-->
  <meta name="description" content="Sitio web de comercio electrónico, compra/venta de artículos de ocasión">
  <meta name="keywords" content="articulo usado, compra ocasional, seminuevo">
  <!--palabras clave-->
  <meta name="author" content="Chalalas.com">
  <meta name="date" content="2023-02-20">
  <meta name="robots" content="index, follow"><!-- sigan los enlaces de una página-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="shortcut icon" href="letraCfondonegro.png">
  <link rel="stylesheet" type="text/css" href="template/mobile_index1a.css" media="screen">
</head>

<body>

  <header id="position">

    <tr>
      <td>
        <!--Icono-->
        <img id="logo" src="imagenes/chalalas4.png">
      </td>

      <td>
        <!--buscador-->
        <form action="search.php" method="get">
          <input type="search" id="busqueda" name="busqueda" required placeholder="!busca aqui!">
          <input type="submit" id="enviar" name="enviar" value="Buscar">
        </form>
      </td>

      <td>
        <!--Registrate-->
        <form action="Formulario_Insertar_Usuarios3.php">
          <input type="submit" id="registrate" name="registrate" value="Registrar">
        </form>
      </td>

      <td>
        <!--Login-->
        <form action="login.php">
          <input type="submit" id="login" name="login" value="Iniciar.S">
        </form>
      </td>

    </tr>

  </header>
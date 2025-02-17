<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ofertas_horizontal2a.css" />
  <link rel="stylesheet" href="modal_horizontal2.css" />
  <title>Electronica</title>
</head>

<body>

</body>

</html>

<?php
include 'config.php';
include("template/cabeceramenufiltro.php"); //Buscador con filtros... ok
include("template/cabeceramenucat.php"); //cabecera con categorias.. ok
///////////////////CATEGORIA:Electronica/////////////////////////
$Categoria = "Electronica";//Probando muestreos
echo "<div class='tcategorias'>".htmlspecialchars($Categoria)."</div>";
$sentenciaSQL7 = mysqli_query($con, "SELECT * FROM libros WHERE categoria LIKE '%$Categoria%' ");

if ($sentenciaSQL7->num_rows > 0) {
  echo "<div class='productos-container'>"; // Contenedor general

  while ($row = $sentenciaSQL7->fetch_array()) {
    echo "<div class='producto'>"; // Contenedor individual de cada producto

    // Título
    echo "<div class='titulo_h'>" . htmlspecialchars($row['nombre']) . "</div>";

    // Imagen
    echo "<img class='imagen' src='img/" . htmlspecialchars($row['imagen']) . "' alt='Imagen del producto' onclick='openModal(this)'/>";

    // Descripción
    echo "<div class='descripcion_h'>" . htmlspecialchars($row['descripcion']) . "</div>";

    // Precio
    echo "<div class='precio_h'>$" . htmlspecialchars($row['precio']) . "</div>";

    //Categoria 
    //echo "<div class='categoria'>categoria:" . htmlspecialchars($row['categoria']) . "</div>";

    //Estado 
    echo "<div class='estado'>" . htmlspecialchars($row['estado']) . "</div>";

    // Información del vendedor
    $ID_USER = $row['ID_USER'];
    if ($ID_USER) {
      $user_data = $con->query("SELECT * FROM usuarios_pass2 WHERE ID = '$ID_USER'");

      while ($data = $user_data->fetch_array()) {
        $ID = htmlspecialchars($data['ID']);
        $NOMBRE = htmlspecialchars($data['NOMBRE']);
        $MAIL = htmlspecialchars($data['MAIL']);
        $TELEFONO = htmlspecialchars($data['TELEFONO']);
        $USUARIOS = htmlspecialchars($data['USUARIOS']);
        $UBICACION = htmlspecialchars($data['UBICACION']);

        echo "<div class='vendedor'>vende: $USUARIOS</div>";
        echo "<div class='ubicacion'>zona: $UBICACION</div>";
      }
    }
    // Botón de WhatsApp
    if (!empty($TELEFONO)) {
      echo "<a aria-label='Chat en WhatsApp' href='https://wa.me/$TELEFONO' target='_blank'>";
      echo "<img alt='Chat en WhatsApp' src='WhatsAppButtonGreenSmall.png' width='120px' />";
      echo "</a>";
    }
    echo "</div>"; // Fin del contenedor individual
   // echo "<hr class='separador'>"; // Separador opcional
  }
  echo "</div>"; // Fin del contenedor general
} else {
  echo "<p>No hay productos de esta categoria.</p>";
}

/////////////////////FIN DE CATEGORIA:Electronica//////////////////////////
?>
<!-- Modal para mostrar la imagen -->
<div id="imageModal2" class="modal2" onclick="closeModal()">
  <span class="close">&times;</span>
  <img class="modal2-content" id="modalImage2">
</div>

<script src="modal.js"></script>
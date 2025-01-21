
<?php include("template/cabeceramenu.php"); ?>

<link rel="stylesheet" href="ofertas.css" />
<link rel="stylesheet" href="modal.css" />

<?php
if ($con->connect_errno) {
  die("Ha ocurrido un error");
}
  include 'config.php';
  include 'conexion.php';
//Mostrar todos los registros en tabla en General
$sentenciaSQL = mysqli_query($con, "SELECT * FROM libros");

///////////////////////////////////////////////////////////////////
if ($sentenciaSQL->num_rows > 0) {
  echo "<div class='productos-container'>"; // Contenedor general

  while ($row = $sentenciaSQL->fetch_array()) {
    echo "<div class='producto'>"; // Contenedor individual de cada producto

    // Título
    echo "<div class='titulo'>" . htmlspecialchars($row['nombre']) . "</div>";
    
    // Imagen
    echo "<img class='imagen' src='img/" . htmlspecialchars($row['imagen']) . "' alt='Imagen del producto' onclick='openModal(this)'/>";

    // Descripción
    echo "<div class='descripcion'>" . htmlspecialchars($row['descripcion']) . "</div>";

    // Precio
    echo "<div class='precio'>$" . htmlspecialchars($row['precio']) . " pesos MX</div>";

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

        echo "<div class='vendedor'>Vendedor: $USUARIOS</div>";
        echo "<div class='ubicacion'>Ubicación: $UBICACION</div>";
      }
    }

    // Botón de WhatsApp
    if (!empty($TELEFONO)) {
      echo "<a aria-label='Chat en WhatsApp' href='https://wa.me/$TELEFONO' target='_blank'>";
      echo "<img alt='Chat en WhatsApp' src='WhatsAppButtonGreenSmall.png' width='120px' />";
      echo "</a>";
    }

    echo "</div>"; // Fin del contenedor individual
    echo "<hr class='separador'>"; // Separador opcional
  }

  echo "</div>"; // Fin del contenedor general
} 

else {
  echo "<p>No hay productos disponibles.</p>";
}
?>
<!-- Modal para mostrar la imagen -->
<div id="imageModal" class="modal" onclick="closeModal()">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImage">
</div>

<!-- JavaScript al final del body -->
<script>
  // Función para abrir el modal con la imagen seleccionada
  function openModal(image) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modalImage.src = image.src; // Usa la misma fuente de la imagen clickeada
    
    modal.style.display = 'block'; // Muestra el modal
  }

  // Función para cerrar el modal
  function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none'; // Oculta el modal
  }
</script>

<!-- Enlace al archivo JavaScript 
<script src="script.js"></script>-->
<?php include("template/piemenu.php"); //Pendiente:reglas i condicion ?>

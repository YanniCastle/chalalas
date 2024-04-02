<?php include("template/cabeceraplus.php"); ?>
<br />
<br />
<!--BUSCADOR COMPLETO-->
<?php
include 'config.php';

if (isset($_GET['enviar'])) {
  $busqueda = $_GET['busqueda'];

  $consulta1 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto1 LIKE '%$busqueda%'");
  $consulta2 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto2 LIKE '%$busqueda%'");
  $consulta3 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto3 LIKE '%$busqueda%'");
  $consulta4 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto4 LIKE '%$busqueda%'");

  //juntar las consultas 
  if ($consulta1->num_rows > 0 or $consulta2->num_rows > 0 or $consulta3->num_rows > 0 or $consulta4->num_rows > 0) {
    //CONSULTA 1
    if ($consulta1->num_rows > 0) {
      while ($row = $consulta1->fetch_array()) {
        echo "<h1>" . $row['titulofoto1'] . "</h1>";
        //echo "<h5>" . $row['Fecha'] . "</h5>";
        $whats = $row['TELEFONO'];
        echo "<h2><div style='width:300px'>" . $row['descripcionfoto1'] . "</h2></div><br/>";
        if ($row['nombrefoto1'] != "") {
          echo "<img src='imagenes/productos/" . $row['nombrefoto1'] . "' width='150px' />";
        }
        echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
        echo "<h3>Ubicacion: " . $row['UBICACION'] . "</h3>";
        echo  " <h4>Precio : $" . $row['preciofoto1'] . " pesos MX</h4>";
?>
<a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
    src="WhatsAppButtonGreenSmall.png" width="100px" />
</a>
<br>
<hr width="300" color="green"><br>
<?php
      }
    }
    
    //CONSULTA 2
    if ($consulta2->num_rows > 0) {
      while ($row = $consulta2->fetch_array()) {
        echo "<h1>" . $row['titulofoto2'] . "</h1>";
        //echo "<h5>" . $row['Fecha'] . "</h5>";
        $whats = $row['TELEFONO'];
        echo "<h2><div style='width:300px'>" . $row['descripcionfoto2'] . "</h2></div><br/>";
        if ($row['nombrefoto2'] != "") {
          echo "<img src='imagenes/productos/" . $row['nombrefoto2'] . "' width='150px'/>";
        }
        echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
        echo "<h3>Ubicacion: " . $row['UBICACION'] . "</h3>";
        echo  " <h4>Precio : $" . $row['preciofoto2'] . " pesos MX</h4>";
      }
      ?>
<a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
    src="WhatsAppButtonGreenSmall.png" width="100px" />
</a>
<br>
<hr width="300" color="green"><br>
<?php
    }
    
    //CONSULTA 3
    if ($consulta3->num_rows > 0) {
      while ($row = $consulta3->fetch_array()) {
        echo "<h1>" . $row['titulofoto3'] . "</h1>";
        //echo "<h5>" . $row['Fecha'] . "</h5>";
        $whats = $row['TELEFONO'];
        echo "<h2><div style='width:300px'>" . $row['descripcionfoto3'] . "</h2></div><br/>";
        if ($row['nombrefoto3'] != "") {
          echo "<img src='imagenes/productos/" . $row['nombrefoto3'] . "' width='150px'/>";
        }
        echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
        echo "<h3>Ubicacion: " . $row['UBICACION'] . "</h3>";
        echo  " <h4>Precio : $" . $row['preciofoto3'] . " pesos MX</h4>";
      ?>
<a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
    src="WhatsAppButtonGreenSmall.png" width="100px" />
</a>
<br>
<hr width="300" color="green"><br>
<?php
      }
    }
    
    //CONSULTA 4
    if ($consulta4->num_rows > 0) {
      while ($row = $consulta4->fetch_array()) {
        echo "<h1>" . $row['titulofoto4'] . "</h1>";
        //echo "<h5>" . $row['Fecha'] . "</h5>";
        $whats = $row['TELEFONO'];
        echo "<h2><div style='width:300px'>" . $row['descripcionfoto4'] . "</h2></div><br/>";
        if ($row['nombrefoto4'] != "") {
          echo "<img src='imagenes/productos/" . $row['nombrefoto4'] . "' width='150px'/>";
        }
        echo "<h5>Vendedor:" . $row['USUARIOS'] . "</h5>";
        echo "<h3>Ubicacion: " . $row['UBICACION'] . "</h3>";
        echo  " <h4>Precio : $" . $row['preciofoto4'] . " pesos MX</h4>";
      }
      ?>
<a aria-label="Chat on WhatsApp" href="https://wa.me/<?php echo $whats; ?>"><img alt="Chat on WhatsApp"
    src="WhatsAppButtonGreenSmall.png" width="100px" />
</a>
<br>
<hr width="300" color="green"><br>
<?php
    }
    
  } //FIN DE JUNTAR CONSULTAS
  
  else {
    echo '<td colspan=3><h2>No se encontro ningun registro.</h2></td>';
    echo '<hr width="420" color="red"><br>';
  }
}
//FIN DE ESTRUCTURA DE BUSCADOR//

?>

<br />

<?php include("template/pieplus.php"); ?>
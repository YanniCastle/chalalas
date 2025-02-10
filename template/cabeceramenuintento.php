<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalalas.com</title>
    <!--barra de menu plegable-->
    <link rel="stylesheet" href="template/cabeceramenuintento1.css" />
    <!--iconos-->
    <!--Este funciona con el template fuera de users
  <link rel="stylesheet" type="text/css" href="template/galeria1.css" media="screen">-->

    <script src="a2dd6045c4.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
    <article id="position">
        <header>

            <div>
                <a href="login.php">
                    <img class="chalalas4" src="imagenes/imagenes_chalalas/chalalas3.png" alt="chalalas.com">
                </a>
            </div>

            <a>
                <form action="" method="GET">
                    <select name="estado" id="estado">
                        <option value="">Todos</option>
                        <option value="Nuevo">Nuevo</option>
                        <option value="Seminuevo">Seminuevo</option>
                        <option value="Usado">Usado</option>
                    </select>
                    <select name="categoria">
            <option value="">Categorías</option>
            <option value="Antiguedades">Antiguedades</option>
            <option value="Articulos de coleccion">Articulos de coleccion</option>
            <option value="Arte y Manualidades">Arte y Manualidades</option>
            <option value="Articulos deportivos">Articulos deportivos</option>
            <option value="Autopartes-Motopartes">Autopartes-Motopartes</option>
            <option value="Computo y Tecnologia">Computo y Tecnologia</option>
            <option value="Electronica">Electronica</option>
            <option value="Equipaje y Viaje">Equipaje y Viaje</option>
            <option value="Hogar">Hogar</option>
            <option value="Herramientas">Herramientas</option>
            <option value="Instrumentos Musicales">Instrumentos Musicales</option>
            <option value="Joyas y Relojes">Joyas y Relojes</option>
            <option value="Juguetes y Juegos">Juguetes y Juegos</option>
            <option value="Libros, Peliculas y Musica">Libros, Peliculas y Musica</option>
            <option value="Muebles">Muebles</option>
            <option value="Jardineria">Jardineria</option>
            <option value="Productos de Mascotas">Prooductos de Mascotas</option>
            <option value="Remodelacion">Remoldelacion</option>
            <option value="Ropa-Mujer">Ropa-Mujer</option>
            <option value="Ropa-Hombre">Ropa-Hombre</option>
            <option value="Ropa-niños">Ropa-niños</option>
            <option value="Salud y Belleza">Salud y Belleza</option>
            <option value="Venta-Garage">Venta-Garage</option>
            <option value="Varios">Varios</option>
          </select>
                    <input type="search" id="busqueda" name="busqueda" required placeholder="¿Que artículo buscas?">
                    <input type="submit" id="enviar" name="enviar" value="Buscar"><br><br>
                </form>
            </a>
            <input type="checkbox" id="check">
            <label for="check" class="mostrar-menu">
                &#8801
                <!--hamburguesa-->
            </label>
            <nav class="menu">
                <a id="comentarios" href="ver_comentarios.php">Comentarios</a>
                <a href="ofertas.php">Ofertas<i class="fa-regular fa-image"></i></a>
                <a href="">Lo nuevo<i class="fa-solid fa-person-through-window"></i></a>
                <a href="Formulario_Insertar_Usuarios3.php">Registrate</a>
                <a href="login.php">iniciar sesión</a>
                <label for="check" class="esconder-menu">
                    &#215
                    <!--la x-->
                </label>
            </nav>
        </header>
    </article>
    <br /><br /><br />
    <?php
  include 'config.php';

  //BUSCADOR COMPLETO
  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];
    
    $estado = isset($_GET['estado']) ? $_GET['estado'] : ''; // Recibe el estado seleccionado
    $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
    
     // Construcción de la consulta con estado si se selecciona uno
     $sql = "SELECT * FROM libros WHERE nombre LIKE '%$busqueda%'";
    
     if (!empty($estado)) {
         $sql .= " AND estado = '$estado'"; // Filtrar por estado si está definido
     }
     if (!empty($categoria)) {
      $sql .= " AND categoria = '$categoria'";
  }
 
     $search = $con->query($sql); // Ejecuta la consulta
 
     if ($search->num_rows > 0) {
         while ($row = $search->fetch_array()) {
             echo "<div class='titulo'>" . $row['nombre'] . "</div>";
             echo "<img class='imagen' src='img/" . $row['imagen'] . "'/>";
             echo "<div class='descripcion'>" . $row['descripcion'] . "</div>";
             echo "<div class='precio'>$" . $row['precio'] . " pesos MX</div>";
             echo "<div class='estado'>Estado: " . ucfirst($row['estado']) . "</div>"; // Mostrar estado
             echo "<div class='categoria'>Categoría: " . ucfirst($row['categoria']) . "</div>"; // Mostrar categoría
             
             $ID_USER = $row['ID_USER'];
             if ($ID_USER) {
                 $user_data = $con->query("SELECT * FROM usuarios_pass2 WHERE ID = '$ID_USER'");
                 while ($data = $user_data->fetch_array()) {
                     echo "<div class='vendedor'>Vendedor: " . $data['USUARIOS'] . "</div>";
                     echo "<div class='ubicacion'>Ubicación: " . $data['UBICACION'] . "</div>";
                 }
             }
 ?>

    <a aria-label="Chat en WhatsApp" href="https://wa.me/<?php echo $TELEFONO; ?>">
        <img alt="Chat en WhatsApp" src="WhatsAppButtonGreenSmall.png" width="120px" />
    </a>
    <br>
    <hr width="300" color="green" align="left"><br>

    <?php
         }
     } else {
         echo '<h2>No se encontró ningún registro.</h2>';
         echo '<hr width="300" color="red" align="left"><br>';
     }
    
 }

  //FIN DEL BUSCADOR COMPLETO 2.0
  ?>
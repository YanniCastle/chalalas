<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chalalas.com</title>
	<link rel="stylesheet" href="style1b.css" /><!--barra de menu plegable-->
	<script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
	<link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos -->
	<link rel="stylesheet" type="text/css" href=""><!--diseño de columnas-fotos-->
	<link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
	<article id="position">
		<header>
			<div class="ocultar-div">
				<a><img src="chalalas2.png"></a>
			</div>
			<div class="ocultar-div2">
				<a><img src="imagenes/chalalas4.png"></a>
			</div>
			<a>
				<form action="" method="get">
					<input type="search" id="busqueda" name="busqueda" required placeholder="¿Que artículo buscas?">
					<input type="submit" id="enviar" name="enviar" value="Buscar"><br><br>
				</form>
			</a>
			<input type="checkbox" id="check">
			<label for="check" class="mostrar-menu">
				&#8801<!--hamburguesa-->
			</label>
			<nav class="menu">
				<a href="subir_imagenes.php"><i class="fa-solid fa-shop"></i></a>
				<a href="Formulario.php"><i class="fa-regular fa-comment"></i></a>
				<a href="crud11.php"><i class="fa-regular fa-image"></i></a>
				<a href="videos.php"><i class="fa-solid fa-video"></i></a>
				<a href="crud4.php"><i class="fa-solid fa-key"></i></a>
				<a href="muro.php">Muro</a>
				<a href="cierre.php">cerrar sesion</a>
				<label for="check" class="esconder-menu">
					&#215 <!--la x-->
				</label>
			</nav>
		</header>
	</article>
	<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
		header("location:login.php");
	}
	include 'config.php';

	echo "<br/><br/><br/><h2>¡Bienvenid@, Usuari@ " . $_SESSION["usuario"] . "!<br></h2>";

	if (isset($_GET['enviar'])) {
		$busqueda = $_GET['busqueda'];

		$consulta = $con->query("SELECT * FROM contenido WHERE Titulo LIKE '%$busqueda%'");

		while ($row = $consulta->fetch_array()) {
			echo "<br/><h3>" . $row['Titulo'] . "</h3>";
			echo "<h5>" . $row['Fecha'] . "</h5>";
			echo "<div style='width:400px'>" . $row['Comentario'] . "</div><br/>";
			if ($row['Imagen'] != "") {
				echo "<img src='imagenes/productos/" . $row['Imagen'] . "' width='150px'/>";
			}
			echo  " <h3>Precio : $" . $row['precio'] . " pesos MX</h3>";
			echo "<hr/>";
		}
	}

	$foto = $_SESSION['usuario'];
	//$foto1 = $_SESSION['id'];//ADAPTANDO 
	$id = $_SESSION['usuario'];
	include 'cone2.php';
	$consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$id' OR MAIL= '$id'");
	$valores = mysqli_fetch_array($consulta);
	$id = $valores['ID'];
	$nombre = $valores['NOMBRE'];
	$email = $valores['MAIL'];
	$email1 = $valores['MAIL'];
	$email2 = $valores['MAIL'];
	$email3 = $valores['MAIL'];
	$foto = $valores['foto'];
	$nombrefoto = $valores['nombrefoto'];
	$foto1 = $valores['foto1'];
	$foto2 = $valores['foto2'];
	$foto3 = $valores['foto3'];

	?>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->

	<img src="<?php echo $foto; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email" value="<?php echo $email; ?>" style="display: none;">
		foto de perfil
		<input type="file" name="nfoto" id="nfoto">
		<button type=" submit" class="btn btn-primary">Actualizar</button>
	</form>

	<form method="post" action="eliminar_imagen.php?id=<?php echo $id; ?>&ruta=<?php echo $foto; ?>">
		<button type="submit" name="eliminar_imagen">Eliminar foto</button>
	</form>

	<!--PROBANDO COMPARTIR 1 CHECAR DRECCIONES-->
<!--	<form method="post" action="compartir1.php" enctype="multipart/form-data">
		<input type="text" name="email" value="<?php echo $email; ?>" style="display: none;">
		<input type="file" name="nfoto">
		<button type="submit" name="compartir_imagen">Compartir1</button>
	</form>-->
	<!--funciona seleccionando la imagen y la envia a:imagenes/ofertas PENDIENTE-->
	<br>
	<hr width="1000" color="black">
	<br>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->

	<img src="<?php echo $foto1; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email1" value="<?php echo $email1; ?>" style="display: none;">
		nueva foto 1
		<input type="file" name="nfoto1">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
	<form method="post" action="eliminar_imagen1.php?id=<?php echo $id; ?>&ruta=<?php echo $foto1; ?>">
		<button type="submit" name="eliminar_imagen">Eliminar foto 1</button>
	</form>
	<br>
	<hr width="1000" color="black">
	<br>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->

	<img src="<?php echo $foto2; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email2" value="<?php echo $email2; ?>" style="display: none;">
		nueva foto 2
		<input type="file" name="nfoto2">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
	<form method="post" action="eliminar_imagen2.php?id=<?php echo $id; ?>&ruta=<?php echo $foto2; ?>">
		<button type="submit" name="eliminar_imagen">Eliminar foto 2</button>
	</form>
	<br>
	<hr width="1000" color="black">
	<br>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->

	<img src="<?php echo $foto3; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email3" value="<?php echo $email3; ?>" style="display: none;">
		nueva foto 3
		<input type="file" name="nfoto3">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
	<form method="post" action="eliminar_imagen3.php?id=<?php echo $id; ?>&ruta=<?php echo $foto3; ?>">
		<button type="submit" name="eliminar_imagen">Eliminar foto 3</button>
	</form>
	<br>
	<hr width="1000" color="black">
	<br>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->

</body>
</html>
<!DOCTYPE html>
<html>
<!--Trajabar con cambiarfoto6 para comprimir No usar versiones 5-->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chalalas.com</title>
	<link rel="stylesheet" href="style1c.css" /><!--barra de menu plegable-->
	<script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
	<link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos -->
	<link rel="stylesheet" type="text/css" href="formulario_imagenes2.css"><!--formulario Imagenes-->
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
				<a href=""><i class="fa-solid fa-shop"></i></a>
				<a href="Formulario.php"><i class="fa-regular fa-comment"></i></a>
				<a href=""><i class="fa-regular fa-image"></i></a>
				<a href=""><i class="fa-solid fa-video"></i></a>
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

	echo "<br/><br/><br/><h2>¡Bienvenido, " . $_SESSION["usuario"] . "!<br></h2>";

	//ESTRUCTURA DE BUSCADOR (titulofoto1, titulofoto2, titulofoto3, titulofoto4)//
	if (isset($_GET['enviar'])) {
		$busqueda = $_GET['busqueda'];

		$consulta1 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto1 LIKE '%$busqueda%'");
		$consulta2 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto2 LIKE '%$busqueda%'");
		$consulta3 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto3 LIKE '%$busqueda%'");
		$consulta4 = $con->query("SELECT * FROM usuarios_pass2 WHERE titulofoto4 LIKE '%$busqueda%'");

		//para titulofoto1//
		while ($row = $consulta1->fetch_array()) {
			echo "<br/><h3>" . $row['titulofoto1'] . "</h3>";
			//echo "<h5>" . $row['Fecha'] . "</h5>";
			echo "<div style='width:400px'>" . $row['descripcionfoto1'] . "</div><br/>";
			if ($row['nombrefoto1'] != "") {
				echo "<img src='imagenes/productos/" . $row['nombrefoto1'] . "' width='150px'/>";
			}
			echo  " <h3>Precio : $" . $row['preciofoto1'] . " pesos MX</h3>";
			echo "<hr/>";
		}
		//para titulofoto2//
		while ($row = $consulta2->fetch_array()) {
			echo "<br/><h3>" . $row['titulofoto2'] . "</h3>";
			//echo "<h5>" . $row['Fecha'] . "</h5>";
			echo "<div style='width:400px'>" . $row['descripcionfoto2'] . "</div><br/>";
			if ($row['nombrefoto2'] != "") {
				echo "<img src='imagenes/productos/" . $row['nombrefoto2'] . "' width='150px'/>";
			}
			echo  " <h3>Precio : $" . $row['preciofoto2'] . " pesos MX</h3>";
			echo "<hr/>";
		}
		//para titulofoto3//
		while ($row = $consulta3->fetch_array()) {
			echo "<br/><h3>" . $row['titulofoto3'] . "</h3>";
			//echo "<h5>" . $row['Fecha'] . "</h5>";
			echo "<div style='width:400px'>" . $row['descripcionfoto3'] . "</div><br/>";
			if ($row['nombrefoto3'] != "") {
				echo "<img src='imagenes/productos/" . $row['nombrefoto3'] . "' width='150px'/>";
			}
			echo  " <h3>Precio : $" . $row['preciofoto3'] . " pesos MX</h3>";
			echo "<hr/>";
		}
		//para titulofoto4//
		while ($row = $consulta4->fetch_array()) {
			echo "<br/><h3>" . $row['titulofoto4'] . "</h3>";
			//echo "<h5>" . $row['Fecha'] . "</h5>";
			echo "<div style='width:400px'>" . $row['descripcionfoto4'] . "</div><br/>";
			if ($row['nombrefoto4'] != "") {
				echo "<img src='imagenes/productos/" . $row['nombrefoto4'] . "' width='150px'/>";
			}
			echo  " <h3>Precio : $" . $row['preciofoto4'] . " pesos MX</h3>";
			echo "<hr/>";
		}
	}
	//FIN DE ESTRUCTURA DE BUSCADOR//

	$foto = $_SESSION['usuario'];
	//$foto1 = $_SESSION['id'];//ADAPTANDO 
	$id = $_SESSION['usuario'];
	include 'cone2.php';
	$consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$id' OR MAIL= '$id'");
	$valores = mysqli_fetch_array($consulta);
	$id = $valores['ID'];
	$nombre = $valores['NOMBRE'];
	$email1 = $valores['MAIL'];
	$email2 = $valores['MAIL'];
	$email3 = $valores['MAIL'];
	$email4 = $valores['MAIL'];
	$rutafoto1 = $valores['rutafoto1'];
	$rutafoto2 = $valores['rutafoto2'];
	$rutafoto3 = $valores['rutafoto3'];
	$rutafoto4 = $valores['rutafoto4'];
	$nombrefoto1 = $valores['nombrefoto1'];
	$nombrefoto2 = $valores['nombrefoto2'];
	$nombrefoto3 = $valores['nombrefoto3'];
	$nombrefoto4 = $valores['nombrefoto4'];

	?>
	
	<!--/ / / / / Formulario foto 1 / / / / / / / / / / / / / / / / / /-->
	<form action="upload7.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email1" value="<?php echo $email1; ?>" style="display: none;">
		<table>
			<tr>
				<td>Articulo:
					<label for="campo_titulo"></label>
				</td>
				<td><input type='text' name='campo_titulo1' id='campo_titulo' placeholder="Titulo de foto 1"></td>
			</tr>

			<tr>
				<td>Imagen:<label for="ventana_imagen"></label></td>
				<td><img src="<?php echo $rutafoto1; ?>" width="200px" name='ventana_imagen' id="ventana_imagen">
					<input type="file" accept="imagen/*" name="image" id="imagen">
				</td>
			</tr>

			<tr>
				<td>Descripción:</td>
				<td>
					<textarea name="campo_descripcion1" id='campo_descripcion1' rows="4" cols="25" placeholder="Escribe detalles de tu foto"></textarea>
				</td>

			<tr>
				<td>Precio:</td>
				<td>
					<input type='number_format' name='campo_precio1' id='campo_precio1' placeholder="$ xx.xpesos/mx">
					<input type='submit' name='submit' id="btn_enviar" value='Subir'>
				</td>
			</tr>
		</table>
	</form>
	<form method="post" action="eliminar_imagenb1.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto1; ?>">
		<table class="uno">
			<tr>
				<td>
					<button type="submit" name="eliminar_imagen">Eliminar foto</button>
				</td>
			</tr>
		</table>
	</form>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->
	<br>
	<hr width="1000" color="black">
	<br>
	<!--/ / / / / /Formulario foto 2 / / / / / / / / / / / / /-->
	<form action="upload7.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email2" value="<?php echo $email2; ?>" style="display: none;">
		<table>
			<tr>
				<td>Articulo:
					<label for="campo_titulo2"></label>
				</td>
				<td><input type='text' name='campo_titulo2' id='campo_titulo2' placeholder="Titulo de foto2"></td>
			</tr>

			<tr>
				<td>Imagen:<label for="ventana_imagen2"></label></td>
				<td><img src="<?php echo $rutafoto2; ?>" width="200px" name='ventana_imagen2' id="ventana_imagen2">
					<input type="file" accept="imagen/*" name="image2" id="imagen">
				</td>
			</tr>

			<tr>
				<td>Descripción:</td>
				<td>
					<textarea name="campo_descripcion2" id='campo_descripcion2' rows="4" cols="25" placeholder="Escribe detalles de tu foto"></textarea>
				</td>

			<tr>
				<td>Precio:</td>
				<td>
					<input type='number_format' name='campo_precio2' id='campo_precio2' placeholder="$ xx.xpesos/mx">
					<input type='submit' name='submit' id="btn_enviar" value='Subir'>
				</td>
			</tr>
		</table>
	</form>
	<form method="post" action="eliminar_imagenb2.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto2; ?>">
		<table class="uno">
			<tr>
				<td>
					<button type="submit" name="eliminar_imagen">Eliminar foto</button>
				</td>
			</tr>
		</table>
	</form>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->
	<br>
	<hr width="1000" color="black">
	<br>

	<!--/ / / / / /Formulario foto 3 / / / / / / / / / / / / /-->
	<form action="upload7.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email3" value="<?php echo $email3; ?>" style="display: none;">
		<table>
			<tr>
				<td>Articulo:
					<label for="campo_titulo3"></label>
				</td>
				<td><input type='text' name='campo_titulo3' id='campo_titulo3' placeholder="Titulo de foto 3"></td>
			</tr>

			<tr>
				<td>Imagen:<label for="ventana_imagen3"></label></td>
				<td><img src="<?php echo $rutafoto3; ?>" width="200px" name='ventana_imagen3' id="ventana_imagen3">
					<input type="file" accept="imagen/*" name="image3" id="imagen">
				</td>
			</tr>

			<tr>
				<td>Descripción:</td>
				<td>
					<textarea name="campo_descripcion3" id='campo_descripcion3' rows="4" cols="25" placeholder="Escribe detalles de tu foto"></textarea>
				</td>

			<tr>
				<td>Precio:</td>
				<td>
					<input type='number_format' name='campo_precio3' id='campo_precio3' placeholder="$ xx.xpesos/mx">
					<input type='submit' name='submit' id="btn_enviar" value='Subir'>
				</td>
			</tr>
		</table>
	</form>
	<form method="post" action="eliminar_imagenb3.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto3; ?>">
		<table class="uno">
			<tr>
				<td>
					<button type="submit" name="eliminar_imagen">Eliminar foto</button>
				</td>
			</tr>
		</table>
	</form>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->
	<br>
	<hr width="1000" color="black">
	<br>

	<!--/ / / / / /Formulario foto 4 / / / / / / / / / / / / /-->
	<form action="upload7.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email4" value="<?php echo $email4; ?>" style="display: none;">
		<table>
			<tr>
				<td>Articulo:
					<label for="campo_titulo4"></label>
				</td>
				<td><input type='text' name='campo_titulo4' id='campo_titulo2' placeholder="Titulo de foto 4"></td>
			</tr>

			<tr>
				<td>Imagen:<label for="ventana_imagenb4"></label></td>
				<td><img src="<?php echo $rutafoto4; ?>" width="200px" name='ventana_imagen4' id="ventana_imagen4">
					<input type="file" accept="imagen/*" name="image4" id="imagen">
				</td>
			</tr>

			<tr>
				<td>Descripción:</td>
				<td>
					<textarea name="campo_descripcion4" id='campo_descripcion4' rows="4" cols="25" placeholder="Escribe detalles de tu foto"></textarea>
				</td>

			<tr>
				<td>Precio:</td>
				<td>
					<input type='number_format' name='campo_precio4' id='campo_precio4' placeholder="$ xx.xpesos/mx">
					<input type='submit' name='submit' id="btn_enviar" value='Subir'>
				</td>
			</tr>
		</table>
	</form>
	<form method="post" action="eliminar_imagenb4.php?id=<?php echo $id; ?>&ruta=<?php echo $rutafoto4; ?>">
		<table class="uno">
			<tr>
				<td>
					<button type="submit" name="eliminar_imagen">Eliminar foto</button>
				</td>
			</tr>
		</table>
	</form>

	<br>
	<!--/ / / / / /  / / / / / / / / / / / / / / / / / / /-->

</body>

</html>
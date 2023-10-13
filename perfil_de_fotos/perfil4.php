<!DOCTYPE html>
<html>

<head>
	<title>Perfil4</title>
	<link rel="stylesheet" type="text/css" href="style4.css"><!---->
</head>

<body>
	<?php include 'cone2.php';
	session_start();
	if (isset($_SESSION['id'])) {
	} else {
	?>
		<script type="text/javascript">
			window.location = "./";
		</script>
	<?php
	}
	$id = $_SESSION['id'];
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$foto = $valores['foto'];
	$foto1 = $valores['foto1'];
	$foto2 = $valores['foto2'];
	$foto3 = $valores['foto3'];
	?>
	<a href="cierre.php">Cerrar sesión</a>
	<!--
	<div class="container">
		<div class="row">
			<div class="col-mg-4"></div>
			<div class="col-mg-4">-->
	<h1><?php echo $nombre; ?></h1>
	<!--			<h5><?php echo $email; ?></h5>
				<img src="<?php echo $foto; ?>" width="150px">
				<a href="cambiarfoto4.php">foto de perfil</a>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-mg-4"></div>
			<div class="col-mg-4">
				<h1><?php $nombre; ?></h1>
				<h5><?php $email; ?></h5>
				<img src="<?php echo $foto1; ?>" width="150px">
				<a href="cambiarfoto4.php">Articulo 1</a>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-mg-4"></div>
			<div class="col-mg-4">
				<h1><?php $nombre; ?></h1>
				<h5><?php $email; ?></h5>
				<img src="<?php echo $foto2; ?>" width="150px">
				<a href="cambiarfoto4.php">Articulo 2</a>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-mg-4"></div>
			<div class="col-mg-4">
				<h1><?php $nombre; ?></h1>
				<h5><?php $email; ?></h5>
				<img src="<?php echo $foto3; ?>" width="150px">
				<a href="cambiarfoto4.php">Articulo 3</a>
			</div>
		</div>
	</div>
	<br>-->
	<h1><?php echo $nombre; ?></h1>
	<div class="row">
		<div class="column">
			<img src="<?php echo $foto; ?>">
			<a href="cambiarfoto4.php">foto perfil</a>
		</div>

		<div class="column">
			<img src="<?php echo $foto1; ?>">
			<a href="cambiarfoto4.php">foto 1</a>
		</div>

		<div class="column">
			<img src="<?php echo $foto2; ?>">
			<a href="cambiarfoto4.php">foto 2</a>
		</div>

		<div class="column">
			<img src="<?php echo $foto3; ?>">
			<a href="cambiarfoto4.php">foto 3</a>
		</div>


</body>

</html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>

<head>
	<title>Perfil4</title>
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
	<div class="container">
		<div class="row">
			<div class="col-mg-4"></div>
			<div class="col-mg-4">
				<h1><?php echo $nombre; ?></h1>
				<h5><?php echo $email; ?></h5>
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
	<br>
</body>

</html>
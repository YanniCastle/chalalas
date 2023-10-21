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
	<title>Cambiar foto de perfil4</title>
</head>

<body>
	<?php session_start();
	$foto = $_SESSION['id'];
	//$foto1 = $_SESSION['id'];
	$id = $_SESSION['id'];
	include 'cone2.php';
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$email1 = $valores['email'];
	$email2 = $valores['email'];
	$email3 = $valores['email'];
	$foto = $valores['foto'];
	$foto1 = $valores['foto1'];
	$foto2 = $valores['foto2'];
	$foto3 = $valores['foto3'];
	?>
	<a href="cierre.php">Cerrar sesión</a><br>

	<img src="<?php echo $foto; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email" value="<?php echo $email; ?>" style="display: none;">
		foto de perfil
		<input type="file" name="nfoto">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>

	<img src="<?php echo $foto1; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email1" value="<?php echo $email1; ?>" style="display: none;">
		nueva foto 1
		<input type="file" name="nfoto1">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>

	<img src="<?php echo $foto2; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email2" value="<?php echo $email2; ?>" style="display: none;">
		nueva foto 2
		<input type="file" name="nfoto2">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>

	<img src="<?php echo $foto3; ?>" width="200px">
	<form action="foto4.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email3" value="<?php echo $email3; ?>" style="display: none;">
		nueva foto 3
		<input type="file" name="nfoto3">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>

</body>

</html>
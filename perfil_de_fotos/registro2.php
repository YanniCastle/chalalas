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
	<title>Regístrate</title>
</head>
<body>
	<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"><br><br>
				<center><h3>REGISTRO</h3></center><br><br>
				<form action="registrar2.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<span>Nombre</span>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<span>Email</span>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<span>Foto</span>
						<input type="file" name="foto" class="form-control">
					</div>
					<div class="form-group">
						<span>Contraseña</span>
						<input type="password" name="psw" class="form-control">
					</div><center>
					<button class="btn btn-primary" type="submit">Enviar</button></center>
				</form>
			</div>
		</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>practica</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"><br><br>
				<center><h3>Iniciar Sesión</h3></center><br><br>
				<form action="../perfil_de_fotos/login4.php" method="post">
					
					<div class="form-group">
						<span>Email</span>
						<input type="email" name="email" class="form-control">
					</div>
					
					<div class="form-group">
						<span>Contraseña</span>
						<input type="password" name="psw" class="form-control">
					</div><center>
					<button class="btn btn-primary" type="submit">Enviar</button></center>
				</form>
				<br><br>
				<div style="text-align: right;">¿No tienes cuenta?<br><a href="registro2.php" class="btn btn-primary">Registrarse</a></div>
			</div>
		</div>
	</div>
</body>
</html>
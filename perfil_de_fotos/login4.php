<?php 
$email = $_POST['email'];
$psw = $_POST['psw'];

include 'cone2.php';

$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email' AND psw = '$psw';");
if ($row = mysqli_fetch_array($consulta)) {
	session_start();
	$_SESSION['id'] = $row['email'];
	?>

	<script type="text/javascript">
		window.location = "perfil4.php";
	</script>
	<?php 
}
 ?>
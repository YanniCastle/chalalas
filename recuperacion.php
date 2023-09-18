<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Recuperacion</title>
     <link rel="stylesheet" href="style3.css" />
</head>
<body>
    <script>
    var x = document.getElementById("frmlogin");
    var y = document.getElementById("frmregistrar");
    var z = document.getElementById("btnvai");
	var textcolor1=document.getElementById("vaibtnlogin");
	var textcolor2=document.getElementById("vaibtnregistrar");
	textcolor1.style.color="white";
	textcolor2.style.color="black";

function cancelarform() {
  document.getElementById("formrecuperar").style.display = "none";
}
    </script>
<div class="caja_popup" id="formrecuperar">
  <form action="recuperar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Recuperar contraseña</th></tr>
            <tr> 
                <td><b>&#128231; Correo</b></td>
                <td><input type="email" name="txtcorreo" required class="cajaentradatexto"></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()" class="txtrecuperar">Cancelar</button>
				   <input class="txtrecuperar" type="submit" name="btnrecuperar" value="Enviar" onClick="javascript: return confirm('¿Deseas enviar tu contraseña a tu correo?');">
			</td>
            </tr>
        </table>
    </form>
	</div>
</body>
</html>
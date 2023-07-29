<?php

$comentario = $_POST['comentario'];

$leer =fopen("data.data", "r");
$aleer = fread($leer, filesize("data.data", ));

$escribir = fopen("data.data", "w");
fwrite($escribir,"<p>$comentario</p>$aleer");
fclose ($escribir);

header("location:muro.php");

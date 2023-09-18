<?php 
$conn = new mysqli(" ","root","QWERTYu5544","chalalas");//agrege de recuperar
//Usaremos libreria PDO
try{
    $base=new PDO('mysql:host= ; dbname=chalalas', 'root', 'QWERTYu5544');
                            
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");

}catch(Exception $e){
    die('Error' . $e->getMessage());//acabe conexion y cual es//
    echo "Linea de error" . $e->getLine();//esto da la linea del error//
}
?>
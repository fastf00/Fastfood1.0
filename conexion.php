<?php 
$conex=mysqli_connect('localhost', 'root', '', 'fastfood');

if(!$conex){
    echo"error de conexion de la base de datos";
    exit;
}
?>
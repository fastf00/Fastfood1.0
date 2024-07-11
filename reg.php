<?php
include('conexion.php');
$nomb = $_POST["nom"];
$apel = $_POST["ape"];
$corr = $_POST["cor"];
$con = $_POST["pas"];

$sql = "Insert into usuarios (nombre,apellidos,correo,contrasena) values('$nomb', '$apel', '$corr', '$con');";
if(mysqli_query($conex, $sql)){
	echo "<script>alert('Registro exitoso'); window.location='login.html';</script>";
}else{
	echo "<script>alert('Error en el registro'); window.location='registro.php';</script>";
}
?>
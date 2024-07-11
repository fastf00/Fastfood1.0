<?php
include( "conexion.php" );
$con = $_POST[ 'cont' ];
$cor = $_POST[ 'corr' ];

$sql = "select count(*) as resul from usuarios where correo='$cor' and contrasena='$con';";
$data = mysqli_fetch_array( mysqli_query( $conex, $sql ) );
if ( $data[ 'resul' ] > 0 ) {
	$consid="select id_user from usuarios where correo='$cor' and contrasena='$con';";
	$row = mysqli_fetch_array(mysqli_query($conex, $consid));
	session_start();
	$_SESSION['iduser'] = $row['id_user'];
    $_SESSION['correo'] = $cor;
    echo "<script>alert('Inicio de sesion correcto'); window.location='inicio.php';</script>";
} else {
    echo "<script>alert('Correo o contraseña incorrecto'); window.location='login.html';</script>";
}
?>
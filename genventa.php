<?php
include( 'conexion.php' );
$plat1 = $_POST[ 'prod1' ];
$plat2 = $_POST[ 'prod2' ];
$pre1 = $_POST[ 'prec1' ];
$pre2 = $_POST[ 'prec2' ];
$to = $_POST[ 'total' ];
$fecha_actual = date('Y-m-d');
$sql = "";
session_start();
if ( isset( $_SESSION[ 'iduser' ] ) ) {
    $idus = $_SESSION[ 'iduser' ];
    $id = "SELECT MAX(id_venta) AS max_id FROM venta;";
    $dat = mysqli_fetch_array( mysqli_query( $conex, $id ) );
    $idven = 0;
    if ( $dat[ 'max_id' ] == null ) {
        $id_ven = 1;
    } else {
        $id_ven = $dat[ 'max_id' ]+1;
    }
    if ( $plat1 != "Ninguno" && $plat2 != "Ninguno" ) {
        $sql = "iNSERT INTO det_venta(platillo, precio, id_venta) values('$plat1', $pre1, $id_ven), ('$plat2', $pre2, $id_ven);";
    } else if ( $plat1 != "Ninguno" ) {
        $sql = "iNSERT INTO det_venta(platillo, precio, id_venta) values('$plat1', $pre1, $id_ven);";
    } else if ( $plat2 != "Ninguno" ) {
        $sql = "iNSERT INTO det_venta(platillo, precio, id_venta) values('$plat2', $pre2, $id_ven);";
    } else {
        echo "<script>alert('No se puede realizar la venta1'); window.location='inicio.php';</script>";
    }
    $sql2 = "insert into venta values($id_ven, $to, $idus, '$fecha_actual');";
    if ( mysqli_query( $conex, $sql2 ) ) {
        if ( mysqli_query( $conex, $sql ) ) {
            echo "<script>alert('Pedido realizado correctamente'); window.location='index-venta.html';</script>";
        }
    } else {
        echo "<script>alert('No se puede realizar la venta2'); window.location='inicio.php';</script>";
    }
}else{
	echo "<script>alert('Debes iniciar sesion para realizar un pedido'); window.location='index.php';</script>";
}
?>
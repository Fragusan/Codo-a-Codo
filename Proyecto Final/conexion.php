<?php
//credenciales
include "env.php";

//conexion
$conexion = mysqli_connect($urlDB, $user, $password, $nameDB);
//consultas de tablas
$conUser = mysqli_query($conexion, "SELECT * FROM registro");
$conVentas = mysqli_query($conexion, "SELECT * FROM venta");
$conOrador = mysqli_query($conexion, "SELECT * FROM orador");

?>
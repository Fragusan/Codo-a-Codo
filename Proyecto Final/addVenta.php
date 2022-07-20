<?php

include "conexion.php";

if(isset($_POST["nombre"])){
$nombre= $_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$cantidad=$_POST["cantidad"];
$lvl=$_POST["level"];
$compr= (random_int(640000, 999999));


$sqlinsert="INSERT INTO venta (id, Nombre, Apellido, Email, Cantidad, Categoria, Precio, Estado, Ban, Comprobante, Time) VALUES (NULL, '$nombre', '$apellido', '$email', '$cantidad', '$lvl', '300', '1', '0', '$compr',  current_timestamp() ) ";


$insert = mysqli_query($conexion,$sqlinsert);
}

include "navClient.php";


if ($insert) {
    include "header.php";
    include "resolve.php";
    include "script.php";
}else{
    include "header.php";
    include "reject.php";
    include "script.php";
}
include "footer.php";

header('Refresh: 3; url=conferencia.php');

?> 
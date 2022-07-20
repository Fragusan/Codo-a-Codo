<?php

include "conexion.php";


if(isset($_POST["nombre"])){
$nombre= $_POST["nombre"];
$apellido=$_POST["apellido"];
$tema=$_POST["tema"];



$sqlinsert="INSERT INTO orador (id, Nombre, Apellido, Tema, Time, Oculto) VALUES (NULL, '$nombre', '$apellido', '$tema', current_timestamp(), '0' ) ";


$insert = mysqli_query($conexion,$sqlinsert);
}

include "navPublic.php";


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

header('Refresh: 3; url=/conferencia.php');

?> 
<?php

include "conexion.php";
if(isset($_POST["nombre"])){
$nombre= $_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$dni=$_POST["dni"];
$pin=$_POST["pin"];
$lvl=$_POST["lvl"];


$sqlinsert="INSERT INTO registro (id, Nombre, Apellido, Mail, DNI, Password, DevLevel, Oculto, Time) VALUES (NULL, '$nombre', '$apellido', '$email', '$dni', '$pin', '$lvl', '0', current_timestamp() ) ";


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
include "redPanelClient.php";
?> 
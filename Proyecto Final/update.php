<?php

include "conexion.php";
if(isset($_POST["nombre"])){
$nombre= $_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$dni=$_POST["dni"];
$pin=$_POST["pin"];
$lvl=$_POST["lvl"];
$privilegio=$_POST["priv"];
$id=$_POST["id"];

$sqlupdate="UPDATE registro SET Nombre='$nombre', Apellido='$apellido', Mail='$email', DNI='$dni', Password='$pin', DevLevel='$lvl', Oculto='0', Time=current_timestamp() WHERE id ='$id' ";


$insert = mysqli_query($conexion,$sqlupdate);
}

if($privilegio == "client"){
    include "navClient.php";
}else{
    include "navAdmin.php";
}




if ($insert) {
    include "header.php";
    include "resolve.php";
    include "script.php";
}else{
    include "header.php";
    include "reject.php";
    include "script.php";
}

if($privilegio == "client"){
    include "footer.php";
}else{
    include "subfooter.php";
}

if($privilegio == "client"){
    include "panelClient.php";
}else{
    include "redPanelAdminUser.php";
}

?> 
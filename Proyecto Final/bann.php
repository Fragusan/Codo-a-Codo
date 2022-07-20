<?php
    include "conexion.php";
if(isset($_GET['userid'])){

    $id=$_GET['userid'];
    $querry="SELECT * FROM registro WHERE id = $id";
    $userData=mysqli_query($conexion,$querry);
    $sqlupdate="UPDATE registro SET Oculto='1', Time=current_timestamp() WHERE id ='$id' ";
    $insert = mysqli_query($conexion,$sqlupdate);
}

    include "navAdmin.php";

if ($insert) {
    include "header.php";
    include "resolve.php";
    include "script.php";
}else{
    include "header.php";
    include "reject.php";
    include "script.php";
}
    include "subfooter.php";

    header('refresh: 3; url=panelAdminUser.php');

?> 
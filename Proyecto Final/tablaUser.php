<?php
include "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <!-- aqui -->

    

    <!-- hasta aqui -->
    <table class="table table-striped">
      <thead>
    <tr class="table-info">
      <th scope="col">ID</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">DevLevel</th>
      <th scope="col">DNI</th>
      <th scope="col">Creada/Actualizada</th>
      <th scope="col">Editar</th>
      <th scope="col">Bannear</th>
    </tr>
  </thead>
  <hr>
  <tbody>
    <?php
    while($filaTD = $listado2022 = mysqli_fetch_array($conUser)){?>

    <tr <?php if($filaTD["Oculto"]){ echo 'class="table-danger"';} ?>
    <?php if($filaTD["DevLevel"] === "Admin"){ echo 'class="table-warning"';} ?> >
      <th scope="row"><?php echo $filaTD['id'] ?></th>
      <th scope="row"><?php echo $filaTD['Apellido'] ?></th>
      <th scope="row"><?php echo $filaTD['Nombre'] ?></th>
      <th scope="row"><?php echo $filaTD['Mail'] ?></th>
      <th scope="row" <?php 
      
      if($filaTD["DevLevel"] === "Estudiante"){ echo 'class="text-white bg-primary"';}
      if($filaTD["DevLevel"] === "Trainee"){ echo 'class="text-white bg-success"';}
      if($filaTD["DevLevel"] === "Junior"){ echo 'class="text-dark bg-warning"';}
      if($filaTD["DevLevel"] === "Public"){ echo 'class="text-dark bg-info"';}
      if($filaTD["DevLevel"] === "Senior"){ echo 'class="text-white bg-dark"';}
      if($filaTD["DevLevel"] === "Admin"){ echo 'class="text-white bg-danger"';}
      
      ?> ><?php if($filaTD["DevLevel"] === "Admin"){ echo "⭐";} echo $filaTD['DevLevel'] ?></th>
      <th scope="row"><?php echo $filaTD['DNI'] ?></th>
      <th scope="row"><?php echo $filaTD['Time'] ?></th>
      <th scope="row"><a class="btn btn-outline-warning" href="userUpdateAdmin.php?userid=<?php echo $filaTD['id']  ?>">✏</a></th>

      <th scope="row"> <?php if( $filaTD["DevLevel"] !== "Admin"){ echo '<a class="btn btn-outline-danger" href="bann.php?userid=';
        echo $filaTD['id'] . '"'. ">⚠</a>";} ?></th>
      
      

      <!-- <a class="btn btn-outline-danger href=" bann.php?userid="9&quot;">⚠</a> -->


    </tr>

    <?php } ?>
    
  </tbody>

  </table>

    </div>

    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="../Inscripcion/script.js"></script>
</body>
</html>
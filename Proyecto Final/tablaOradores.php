<?php
include "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oradores</title>
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
    <tr class="table-success">
      <th scope="col">ID</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tema</th>
      <th scope="col">Creada/Actualizada</th>
      <th scope="col">Estado</th>
      <th scope="col">Considerar</th>
      <th scope="col">Descartar</th>
    </tr>
  </thead>
  <hr>
  <tbody>
    <?php
    while($filaTD = $listado2022 = mysqli_fetch_array($conOrador)){?>

    <tr>
      <th scope="row"><?php echo $filaTD['id'] ?></th>
      <th scope="row"><?php echo $filaTD['Apellido'] ?></th>
      <th scope="row"><?php echo $filaTD['Nombre'] ?></th>
      <th scope="row"><?php echo $filaTD['Tema'] ?></th>
      <th scope="row"><?php echo $filaTD['Time'] ?></th>
      <th scope="row"<?php if(! $filaTD['Oculto']) { echo 'class="text-success"';}else{ echo 'class="text-danger"';} ?>><?php if(! $filaTD['Oculto']){ echo "Considerado"; }else{ echo "Desestimado"; }; ?></th>
      <th scope="row"><a class="btn btn-outline-success">✅</th>
      <th scope="row"><a class="btn btn-outline-danger">❌</a></th>
      
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
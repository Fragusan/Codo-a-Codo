<!DOCTYPE html>
<html lang="sp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Comprar Tickets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        :root {
    --footer1: #1e5170;
    --footer2: #1b3846;
    --enviar:#95d03e;
    --lima: #8BE73A;
}

#footer {
    background-image: linear-gradient(to right,var(--footer2), var(--footer1)) !important;
}

form button#enviar {
    background-color: var(--enviar) !important;
    border: none;
    border-radius: .25rem;
    color: aliceblue;
    height: 45px; 
}
form button#enviar:hover{
    background-color: var(--footer1) !important;
    color: var(--lima) !important;
}

#supertxt {
   position: absolute;
   left: 0;
   right: 0;
   top: 10%;
   margin: auto;
   z-index: 9999999;
}

#orador :hover{
    color: black !important;
}

.navbar-nav :hover{
    color: rgb(0, 0, 0) !important;
}
    </style>

</head>

<body>

<div class="container position-relative">



    <section id="descuentos" class="row d-flex justify-content-center mt-4">

      <div class="col-3 text-center border border-3 border-primary me-2">
        <h5 class="card-title mt-2">Estudiante</h5>
        <p class="card-text ">Tienen un descuento </p>
        <p class="card-text fw-bold">80%</p>
        <p class="card-text fw-lighter text-secondary mb-0"><small>*sujeto a presentación de documentación</small></p>
      </div>

      <div class="col-3 text-center border border-3 border-success">
        <h5 class="card-title mt-2">Trainee</h5>
        <p class="card-text ">Tienen un descuento </p>
        <p class="card-text fw-bold">50%</p>
        <p class="card-text fw-lighter text-secondary mb-0"><small>*sujeto a presentación de documentación</small></p>
      </div>

      <div class="col-3 text-center border border-3 border-warning ms-2">
        <h5 class="card-title mt-2">Junior</h5>
        <p class="card-text ">Tienen un descuento </p>
        <p class="card-text fw-bold">15%</p>
        <p class="card-text fw-lighter text-secondary mb-0"><small>*sujeto a presentación de documentación</small></p>

      </div>

    </section>


    <section id="form" class="mt-4">
      <h4 class="text-secondary text-center fs-6">VENTA</h4>
      <h2 class="text-center">VALOR DE TICKET $<span id="valorTicket">100</span> </h2>



      <form action="addVenta.php" method="POST">


        <div class="row d-flex justify-content-center">
          <div class=" col-12 me-0 col-lg-4">
            <label for="Name" class="form-label"></label>
            <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" required>
          </div>

          <div class="col-12 col-lg-4">
            <label for="Lastname" class="form-label"></label>
            <input type="text" class="form-control" placeholder="Apellido" id="Lastname" name="apellido" required>
          </div>

          <div class=" col-lg-8">
            <label for="Mail" class="form-label"></label>
            <input type="text" class="form-control" id="floatingInput" required placeholder="Correo" name="email">
          </div>


          <div class="row justify-content-center mt-3 ">
            <h6 class="col-lg-4">Cantidad</h6>
            <h6 class="col-lg-4">Categoria</h6>
          </div>

          <div class="col-lg-4">
            <input type="number" class="form-control" min="1" max="20" id="cantidad" name="cantidad" onchange="cantidades(value), provisorio(), total()" placeholder="¿Cuantos?" required>
          </div>

          <div class="col-lg-4">
            
              <select class="form-select" name="level" onchange="categorias(value), total(value)" id="tipo" required >
                
                <option class="text-danger"selected value="" disabled>Seleccione una Categoria</option >
                <option class="text-primary fw-bold" value="Estudiante">Estudiante</option>
                <option class="text-success fw-bold" value="Trainee">Trainee</option>
                <option class="text-warning fw-bold" value="Junior">Junior</option>
                <option class="text-info fw-bold" value="Public">Publico General</option>
              </select>
              <!-- <label for="floatingSelect">Seleccione una Categoria</label> -->
          </div>

          <div style="display: none">
              <input type="text"  id="plata" name="plata" value="">
        </div>



        </div>

       

        <div class="row justify-content-center mt-5">
          <p class=" alert alert-primary col-8" role="alert"> Total a Pagar: <span class="fw-light text-decoration-line-through text-danger " id="precio"></span><br><span class="fw-bold  text-success" id="descuento">$0</span><br><span class="text-info fw-bold" id="ahorro"></span></p>
        </div>

        <div class="row d-flex justify-content-center">

          <button id="enviar" type="reset" class="btn col-lg-4 mt-3 border border-white" onclick="cleaner()">Borrar</button>
          <button id="enviar" type="submit" value="submit" class="btn col-lg-4 mt-3 border border-white" onclick="setPay()">Comprar</button>
        
        </div>

      </form>


    </section>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script>
        const variables = {
    precioUnitario: 0,
    total:0,
    categoria:"",
    cantidad : 0,
    ahorro: 0,
    cDescuento: ""
}

const setPay= ()=>{
  document.getElementById("plata");
  plata.value= variables.cDescuento
}

const provisorio=()=>{
    variables.total= variables.precioUnitario * variables.cantidad;
    document.getElementById("descuento").innerHTML="$" + variables.total
}

const valorTicket= (n=100)=>{
    variables.precioUnitario=(n)
    document.getElementById("valorTicket").innerHTML=n
    console.log("Cosa de la inflación")
}

const cantidades=(value)=> { variables.cantidad=Number(value) }

const categorias=(v)=> {variables.categoria=v }

const total=(v=0)=>{ 
    let descuento=0;
    //let total=variables.precioUnitario * variables.cantidad;
    if(v == "Estudiante") {
        descuento= variables.total  * 0.8;
        document.getElementById("ahorro").innerHTML=`Ténes un ahorro de $${descuento}`
    }
    if(v == "Trainee") {
        descuento= Number(variables.total)/2
        document.getElementById("ahorro").innerHTML=`Ténes un ahorro de $${descuento}`
    }
    if(v == "Junior") {
        descuento= variables.total * 0.15;
        document.getElementById("ahorro").innerHTML=`Ténes un ahorro de $${descuento}`
    }
    if(v == "Public") {document.getElementById("ahorro").innerHTML=``}

    variables.ahorro=descuento
    variables.cDescuento=variables.total - descuento
    
    document.getElementById("precio").innerHTML="$" + variables.total
    document.getElementById("descuento").innerHTML="$" + (variables.total - descuento)

    if(v == "Public"){ document.getElementById("precio").innerHTML=""}
}

const cleaner=()=>{
    document.getElementById("ahorro").innerHTML="";
    document.getElementById("precio").innerHTML="";
    document.getElementById("descuento").innerHTML="";
}


valorTicket()
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="sp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>TP-BAConferencia - Franco Sanchez</title>

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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8a9befb6bc.js" crossorigin="anonymous"></script>
</head>

<body>


  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active bg-dark">
        <img src="https://i.ibb.co/cLFRwj1/ba1.jpg" class="d-block w-100 opacity-50"
          alt="Imagen ciudad de Buenos Aires">
      </div>
      <div class="carousel-item bg-dark">
        <img src="https://i.ibb.co/Mc2G6zm/ba2.jpg" class="d-block w-100 opacity-50"
          alt="Imagen ciudad de Buenos Aires">
      </div>
      <div class="carousel-item bg-dark">
        <img src="https://i.ibb.co/k95s4hz/ba3.jpg" class="d-block w-100 opacity-50"
          alt="Imagen ciudad de Buenos Aires">
      </div>



    </div>

    <div id="supertxt" class="carousel-text position-absolute end-0 text-white text-end mt-5 p-5">

      <h2 class="fs-1">Conf Bs As</h2>
      <div class="row">
        <p class="col-7"> </p>
      <p class="flex-end col-5 fs-5">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
      </div>
      <button id="orador" type="button" class="btn btn-outline-light text-withe"><a href="#form" class="text-white text-decoration-none">Quiero ser orador</a></button>
      <button type="button" class="btn btn-success text-withe" onclick="ticket()" href="tickets.php" >Comprar tickets</button>
    </div>

  </div>



  <section id="oradores">
    <h4 class="text-secondary text-center fs-6 mt-4">CONOCE A LOS</h4>
    <h2 class="text-center">ORADORES</h2>

    <div class="row d-flex justify-content-around  d-flex ms-5 me-5 ">
      <div class="card col-md-auto" style="width: 18rem;">
        <img src="https://i.ibb.co/3CNXSKZ/steve.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <span class="badge bg-warning text-dark">JavaScript</span>
          <span class="badge bg-info text-white">React</span>
          <h5 class="card-title">Steve Jobs</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus molestias harum
            dignissimos, repudiandae, minus dolor quo aspernatur ratione odio modi sequi alias error iure officia? Animi
            perspiciatis illum iure fuga.</p>
        </div>
      </div>

      <div class="card col-md-auto" style="width: 18rem;">
        <img src="https://i.ibb.co/DrkgwmD/bill.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <span class="badge bg-warning text-dark">JavaScript</span>
          <span class="badge bg-info text-white">React</span>
          <h5 class="card-title">Bill Gates</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat suscipit illum
            necessitatibus, hic eveniet, ducimus aperiam, blanditiis neque molestias nesciunt eius voluptatum quam
            doloribus debitis animi facilis aut repellendus mollitia?</p>
        </div>
      </div>

      <div class="card col-md-auto" style="width: 18rem;">
        <img src="https://i.ibb.co/2PVqgrp/ada.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <span class="badge bg-secondary text-white">Negocios</span>
          <span class="badge bg-danger text-white">Startups</span>
          <h5 class="card-title">Ada Lovelace</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum atque cumque quod aliquid
            veniam officiis impedit laboriosam voluptas reiciendis sit. Tenetur rerum eaque maxime optio illum, minus
            voluptas fuga fugiat.</p>
        </div>
      </div>
    </div>

  </section>

  <section id="honolulu" class="mt-5">

    <div class="card mt-6 bg-dark bg-opacity-95 ">
      <div class="row g-0">
        <div class="col-md-6 border border-white">
          <img src="https://i.ibb.co/YXck4mZ/honolulu.jpg" class="img-fluid rounded-start"
            alt="imagen de playas de blancas arenas">
        </div>
        <div class="col-md-6 border border-white">
          <div class="card-body ">
            <h5 class="card-title fs-4 text-white">Bs As - Octubre</h5>
            <p class="card-text text-white-50">Buenos Aires es la provincia y localidad más grande del estado de
              Argentina, en los Estados Unidos, Honolulu es la más sureña de entre las principales ciudades
              estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de
              Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la
              ciudad (aproximadamente 600 km de superficie).</p>
            <button type="button" class="btn btn-outline-light text-secondary" onclick="window.open('https://turismo.buenosaires.gob.ar/es#informacion'); ;" href="https://turismo.buenosaires.gob.ar/es#informacion" >Conocé más</button>
            
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="form" class="mt-5">
    <h4 class="text-secondary text-center fs-6">CONVIÉRTETE EN UN</h4>
    <h2 class="text-center">ORADOR</h2>
    <p class=" text-center fs-6">Anótate como orador para dar una <span class="border-top-0 border-end-0 border-start-0"
        style="border-style: dotted;">charla ignite.</span> Cuéntanos de qué quieres hablar!</p>


    <form action="addOrador.php"  method="POST">
    

      <div class="d-flex justify-content-center">
        <div class=" col-12 me-2 col-lg-4">
          <label for="Name" class="form-label"></label>
          <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre">
        </div>

        <div class="col-12 col-lg-4">
          <label for="Lastname" class="form-label"></label>
          <input type="text" class="form-control" placeholder="Apellido" id="Lastname" name="apellido">
        </div>

      </div>

      <div class="d-flex justify-content-center">
        <div class=" col-sm-8">

          <textarea style="height: 180px" class="form-control mt-3" placeholder="¿Sobre qué quieres hablar?"
            id="exampleInputPassword1" name="tema"></textarea>
        </div>

      </div>

      <div class="d-flex justify-content-center">
        
        <button id="enviar" type="submit"  class="btn col-sm-8 mt-3">Enviar</button>
      </div>

    </form>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script>
      let ticket = ()=>{
            window.open("https://fragusan.000webhostapp.com/tickets.php", "_self");
        }
    </script>
    
</body>

</html>
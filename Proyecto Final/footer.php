<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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


<footer id="footer" class=" mt-4">

    <ul class="nav justify-content-center pt-2 pb-2  text-decoration-none ">

      <li class="nav-item">
        <a class="nav-link text-white text-wrap" style="width: 6rem;" href="#footer">Preguntas frecuentes</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white text-wrap" href="#footer">Contactános</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-wrap" href="#footer">Prensa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-wrap" href="#">Conferencia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-wrap text-center" href="#footer" style="width: 6rem;">Términos y
          condiciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-wrap" href="#footer">Privacidad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-wrap" href="#footer">Estudiantes</a>
      </li>
    </ul>


    <ul class="nav justify-content-center pt-2 pb-2 text-decoration-none border border-secondary">
      <li class="nav-item">
        <a class="nav-link text-secondary" href="https://www.linkedin.com/in/fragusan/" target="_blank"
          rel="noopener noreferrer">Construida con 💛 by Fragusan <svg xmlns="http://www.w3.org/2000/svg" width="16"
            height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path
              d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
          </svg> </a>
      </li>
    </ul>

  </footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>
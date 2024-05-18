<?php 
  $pg = "index";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <header class="container">
      <?php
        include_once("menu.php");
      ?>
          
    </header>

    <main class="container pb-5">
      <div class="row">
          <div class="col-12 mt-4 text-center div-cohete">
              <a href="proyectos.html"><img src="imagenes/cohete.svg"></a>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
              <p class="py-1">Bienvenid@ a mi sitio web sobre desarrollo de sistemas.</p>
          </div>
      </div>
      <div class="row">
          <div class="col-12 text-center">
              <a href="proyectos.php" class="btn btn-blanco">Conoce mis proyectos</a>
          </div>
      </div>
  </main>

  <footer class="container mt-auto pb-4">
    <div class="btn-whatsapp">
      <a href="https://api.whatsapp.com/send?phone=+573103064152" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
    </div>
    <div class="row">
        <div class="col-sm-3 col-12">
            <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="col-sm-3 col-12">
            Sponsor <a href="https://depcsuite.com">DePC Suite</a>
        </div>
        <div class="col-sm-3 col-12">
           <a href="mailto:info@nelsontarche.com.ar">Davidliduena13@gmail.com</a>
        </div>
    </div>
</footer>
</body>
</html>
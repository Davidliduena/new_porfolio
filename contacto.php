<?php 
  $pg = "contacto";
?>



<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
    <?php
        include_once("menu.php");
      ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTel" id="txtTel" placeholder="Telefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea type="text" name="txtMensaje" id="txtMensaje" placeholder="Mensaje" class="form-control"></textarea >
                    </div>
                    <div class="pb-3">
                      <button class="btn btn-blanco px-3">ENVIAR</button>
                  </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-5">
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
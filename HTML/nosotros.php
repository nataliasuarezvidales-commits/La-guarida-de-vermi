<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nosotros</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS -->
 <link rel="stylesheet" href="../CSS/stylesheet.css">

</head>

<body>

  <!-- Menu -->
  <nav class="navbar navbar-expand-xl navbar-dark navbar-custom mi-menu">
    <div class="container">

      <!-- Logo -->
      <a class="navbar-brand logo" href="../HTML/index.html">
        <img src="../IMG/Logoweb.png" alt="logo la guarida de vermi" width="100%" height="70">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">

        <!-- Menu -->
        <ul class="navbar-nav mx-auto gap-3">
          <li class="nav-item dropdown">
             <a class="nav-link nav-pill" data-bs-toggle="" href="../HTML/tienda.html" aria-label="tienda">Tienda</a>
            <ul class="dropdown-menu custom-dropdown">
              <li><a class="downdrop-item" href="../HTML/TCG.html" aria-label="tcg">TCG</a></li>
              <li><a class="downdrop-item" href="../HTML/Juegosmesa.html" aria-label="juegos de mesa">Juegos de mesa</a></li>
              <li><a class="downdrop-item" href="../HTML/accesorios.html" aria-label="accesorios">Accesorios</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-pill" href="../HTML/eventos.html" aria-label="eventos">Eventos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-pill" href="../HTML/reservas.php" aria-label="reservas">Reservas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-pill active" href="../HTML/nosotros.php" aria-label="nosotros">Nosotros</a>
          </li>
        </ul>

        <!-- Search -->
        <div class="d-flex align-items-center gap-3">
          <div class="input-group">
            <input type="text" class="form-control search-box" placeholder="Buscar" aria-label="buscar">
            <span class="input-group-text bg-white border-0 rounded-end-pill">
              <i class="bi bi-search"></i>
            </span>
          </div>

          <a href="../HTML/cart.html" class="position-relative text-white" aria-label="carrito de compras">
            <i class="bi bi-cart3 fs-2"></i>
             <!-- CONTADOR -->
                <span id="cartCount"
                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                    0

                </span>
          </a>
        </div>

      </div>
    </div>
  </nav>

<!-- Hero -->
    <section class="hero-info">
        <img src="../IMG/mitos3.jpg" alt="jugador de mitos y leyendas">
    </section>

    <!-- Info -->
    <section class="info-section">
        <div class="">

            <div class="row align-items-center">

                <div class="col-md-8 col-lg-4 mb-4 mb-lg-0 visit-box">
                    <h1 class="fw-bold">La Guarida de Vermi</h1>

                    <h2>
                      Hobby center
                    </h2>

                    <p class="py-2 mb-3">
                        En La Guarida de Vermi encontrarás un espacio creado para los amantes de los juegos de mesa, cartas coleccionables y experiencias geek. Disfruta de eventos, torneos, zonas de juego y una tienda especializada donde la diversión y la comunidad se unen en un solo lugar.
                    </p>
                </div>

                <!-- Mapa -->
                <div class="col-md-8 col-lg-4 mb-4 mb-lg-0 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4879.393916810989!2d-75.55965069999999!3d6.3323488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f7691a950ad%3A0xfd850f97b4a96ce9!2sSolsticio%20Caf%C3%A9%20Bistr%C3%B3!5e1!3m2!1ses-419!2sco!4v1779830751425!5m2!1ses-419!2sco" width="100%" height="400" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-label="mapa de google"></iframe>
                </div>

                
                <div class="col-md-8 col-lg-4">
                    <div class="visit-box">
                        <h2>Visítanos</h2>
                        <p class="text-center">Cra. 52 #47-14, Central, Bello, Antioquia</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Contacto -->
    <section class="contact-section">
        <div class="container">

            <h2 class="contact-title">Contáctanos</h2>

            <?php
            if(isset($_GET['enviado'])){
                echo '<div class="alert alert-success text-center">
                        ¡Tu mensaje fue enviado correctamente!
                      </div>';
            }

            if(isset($_GET['error'])){
                echo '<div class="alert alert-danger text-center">
                        Ocurrió un error al enviar el mensaje.
                      </div>';
            }
            ?>

            <form class="contact-form" action="contacto.php" method="post">

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" name="name" aria-label="nombre">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" placeholder="Correo" name="email" aria-label="correo">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Celular" name="phone" aria-label="celular">
                    </div>
                </div>

                <div class="mb-4">
                    <textarea class="form-control" rows="5" placeholder="Mensaje" name="text" aria-label="mensaje"></textarea>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn-send" name="register" value="Enviar" aria-label="enviar">
                </div>

            </form>

            <?php
              include("conex.php");
            ?>

        </div>
    </section>

    <!-- FOOTER -->
  <footer>
    <div class="container">

      <div class="row align-items-center text-center text-md-start">

        <div class="col-md-4 mb-3 mb-md-0">
          © 2025 La Guarida de Vermi Hobby Center.
        </div>

        <div class="col-md-8">

          <div class="d-flex flex-column flex-md-row justify-content-md-end gap-3">

            <a href="../HTML/politica.html" aria-label="Política de privacidad">Política de privacidad</a>

            <a href="../HTML/terminos.html" aria-label="Términos y condiciones">Términos y condiciones</a>

          </div>

        </div>

      </div>

    </div>
  </footer>

<!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <?php if (isset($_GET['enviado'])): ?>
  <script>
  Swal.fire({
      icon: 'success',
      title: '¡Mensaje enviado!',
      text: 'Te contactaremos pronto',
      confirmButtonColor: '#4f654d'
  });
  </script>
  <?php endif; ?>

  <?php if (isset($_GET['error'])): ?>
  <script>
  Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'No se pudo enviar el mensaje'
  });
  </script>
  <?php endif; ?>

  <?php if (isset($_GET['vacio'])): ?>
  <script>
  Swal.fire({
      icon: 'warning',
      title: 'Campos vacíos',
      text: 'Completa todos los campos'
  });
  </script>
  <?php endif; ?>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_GET['msg'])): ?>

  <script>
  <?php if ($_GET['msg'] == "ok"): ?>
  Swal.fire({
      icon: 'success',
      title: '¡Enviado!',
      text: 'Tu mensaje fue enviado correctamente'
  });
  <?php endif; ?>

  <?php if ($_GET['msg'] == "error_db"): ?>
  Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'No se pudo enviar el mensaje'
  });
  <?php endif; ?>

  <?php if ($_GET['msg'] == "vacio"): ?>
  Swal.fire({
      icon: 'warning',
      title: 'Campos vacíos',
      text: 'Por favor completa todos los campos'
  });
  <?php endif; ?>
  </script>

  <?php endif; ?>

</body>
</html>
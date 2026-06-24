<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reservas</title>

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
            <a class="nav-link nav-pill active" href="../HTML/reservas.php" aria-label="reservas">Reservas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-pill" href="../HTML/nosotros.php" aria-label="nosotros">Nosotros</a>
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

  <div class="reservas">
    <img src="../IMG/imgreservas.jpg" class="img-fluid w-100">
  </div>

  <section class="reservation-section py-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Título -->
                <h2 class="text-center fw-bold mb-5">
                    Haz tu reserva
                </h2>

                <!-- Formulario -->
                <form id="formReserva" method="POST" action="reserva.php">

                    <!-- Nombre -->
                    <div class="mb-3">
                       <input type="text" 
                              class="form-control custom-input" 
                              name="name"
                              placeholder="Nombre" aria-label="nombre" required>
                    </div>

                    <!-- Correo y Celular -->
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <input type="email"
                                   class="form-control custom-input"
                                   placeholder="Correo" 
                                   name="email" aria-label="email"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="tel"
                                   class="form-control custom-input"
                                   placeholder="Celular" name="phone" aria-label="celular"
                                   required>
                        </div>

                    </div>

                    <!-- Actividad y Personas -->
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <input type="text"
                                   class="form-control custom-input" name="activity" aria-label="tipo de actividad"
                                   placeholder="Tipo de actividad">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="number"
                                   class="form-control custom-input" name="quantity" aria-label="cuantas personas"
                                   placeholder="Cuantas personas">
                        </div>

                    </div>

                    <!-- Fecha y Hora -->
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <input type="date" name="date" aria-label="fecha"
                                   class="form-control custom-input">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="time" name="hour" aria-label="hora"
                                   class="form-control custom-input">
                        </div>

                    </div>

                    <!-- Tiempo -->
                    <div class="mb-4">
                        <input type="text" name="time"
                               class="form-control custom-input" aria-label="Tiempo aproximado"
                               placeholder="Tiempo aproximado"> 
                    </div>

                    <!-- Botón -->
                    <div class="text-center">
                        <input type="submit" name="register"
                                class="btn reservation-btn px-5" value="Enviar" aria-label="enviar">
                    </div>

                </form>

              <?php
              include("reserva.php");
              ?>

            </div>

        </div>

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
      title: '¡Reserva enviada!',
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
      text: 'No se pudo enviar la reserva',
      confirmButtonColor: '#4f654d'
  });
  </script>
  <?php endif; ?>

  <?php if (isset($_GET['vacio'])): ?>
  <script>
  Swal.fire({
      icon: 'warning',
      title: 'Campos vacíos',
      text: 'Completa todos los campos',
      confirmButtonColor: '#4f654d'
  });
  </script>
  <?php endif; ?>
 
</body>
</html>
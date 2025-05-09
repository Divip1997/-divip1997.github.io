<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DECIL - Fotografía Profesional</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap.css">
  <!-- AOS Animation CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Navegación -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/LogoBlack.png" alt="DECIL">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          <li class="nav-item d-lg-none">
            <a href="login.html" class="nav-link btn btn-outline-primary login-btn">Login</a>
          </li>
        </ul>
      </div>
      <a href="login.html" class="btn btn-outline-primary ms-auto d-none d-lg-block login-btn">Login</a>
    </div>
  </nav>

  <!-- Hero / Banner Principal con Video de Fondo -->
  <header id="inicio" class="hero">
    <video autoplay muted loop playsinline>
      <source src="img/video.mp4" type="video/mp4">
      Tu navegador no soporta videos HTML5.
    </video>
    <div class="container text-center" data-aos="fade-up">
      <img src="img/LogoWhite.png" alt="Decil Logo" class="img-fluid" />
      <p>Capturando momentos inolvidables</p>
      <a href="#servicios" class="btn btn-primary mt-4">Descubre nuestros servicios</a>
    </div>
  </header>

  <!-- Sección Servicios -->
  <section id="servicios" class="section">
    <div class="container">
      <div class="row justify-content-center text-center" data-aos="fade-up">
        <div class="col-md-8">
          <h2>Nuestros Servicios</h2>
          <p>Ofrecemos fotografía profesional, edición y producción audiovisual para eventos, retratos y más.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="service-box">
            <i class="fas fa-camera-retro fa-3x"></i>
            <h3>Fotografía Profesional</h3>
            <p>Capturamos la esencia de cada momento con una visión artística y profesional.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box">
            <i class="fas fa-video fa-3x"></i>
            <h3>Producción de Video</h3>
            <p>Producción de videos que cuentan historias y transmiten emociones.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box">
            <i class="fas fa-edit fa-3x"></i>
            <h3>Edición y Postproducción</h3>
            <p>Realzamos cada imagen con técnicas avanzadas de edición y retoque.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección Sobre Nosotros -->
  <section id="nosotros" class="section bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
          <img src="img/nosotros.jpg" class="img-fluid" alt="Sobre Nosotros">
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h2>Sobre Nosotros</h2>
          <p>En DECIL, somos apasionados por capturar la belleza y la emoción en cada imagen. Con años de experiencia y un enfoque artístico, transformamos momentos en recuerdos inolvidables.</p>
          <p>Nuestro compromiso es ofrecer un servicio personalizado y de alta calidad, adaptándonos a las necesidades de cada cliente.</p>
          <div class="mt-3 d-flex justify-content-center">
            <a href="#contacto" class="btn btn-outline-primary">Contáctanos</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Galería -->
  <section id="galeria" class="section bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-left">
          <h2 class="section-title">Galería</h2>
          <p class="gallery-description">
            Descubre nuestra colección de fotografías profesionales que capturan momentos inolvidables.
          </p>
          <a href="galeria.php" class="btn btn-primary mt-3">Ver Galería Completa</a>
        </div>
        <div class="col-md-6 text-center">
          <video class="video-galeria" autoplay loop muted playsinline width="100%">
            <source src="IMG/galeriavid.mp4" type="video/mp4">
            Tu navegador no soporta videos.
          </video> 
        </div>
      </div>
    </div>
  </section>

  <!-- Sección Contacto -->
<section id="contacto" class="section">
  <div class="container">
    <div class="row justify-content-center text-center" data-aos="fade-up">
      <div class="col-md-8">
        <h2>Contacto</h2>
        <p>¿Tienes un proyecto en mente? ¡Estamos aquí para ayudarte a capturar la esencia de tus momentos!</p>
      </div>
    </div>
    <div class="row mt-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="col-md-6">
        <form id="contact-form" action="insertardatos.php" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" placeholder="correo electrónico" required>
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" name="numero_telefono" id="numero_telefono" placeholder="numero teléfono" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="mensaje" id="mensaje" rows="4" placeholder="mensaje" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
        </form>
        <div id="response-message" style="display:none; margin-top: 20px;" class="alert alert-success"></div>
      </div>
    </div>
  </div>
</section>

<!-- Incluimos jQuery y el script de AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#contact-form').on('submit', function(event) {
      event.preventDefault(); // Evita que se recargue la página

      var formData = $(this).serialize(); // Serializa los datos del formulario

      $.ajax({
        url: 'InsertarDatos.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          // Muestra el mensaje de éxito sin recargar la página
          $('#response-message').text("¡Gracias por comunicarte con nosotros! Nos contactaremos contigo en cualquier momento.").show();
          // Opcional: limpiar el formulario
          $('#contact-form')[0].reset();
        },
        error: function() {
          $('#response-message').text("Hubo un error al enviar el mensaje, por favor intentalo de nuevo.").show();
        }
      });
    });
  });
</script>


  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p>© 2025 DECIL. Todos los derechos reservados.</p>
      <div class="social-icons">
        <a href="https://www.facebook.com/tu_pagina" target="_blank" class="me-3"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/tu_perfil" target="_blank" class="me-3"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/tu_usuario" target="_blank" class="me-3"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/tu_canal" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Animation JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <!-- Custom JS -->
  <script src="script.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
</html>

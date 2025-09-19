<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GS Shop - Acerca de</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Staatliches&display=swap" rel="stylesheet">
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="estilos/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  </head>
  <body>
    <header>
      <?php include 'assets/header.php'; ?>
    </header>

    <!-- Hero Section -->
    <section class="about-hero py-5">
      <div class="container pagina-acerca-de">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 about-title mb-4">Acerca de GS Shop</h1>
            <p class="lead">Tu tienda de confianza en tecnología desde 2020. Especialistas en equipos de cómputo, accesorios y soluciones tecnológicas.</p>
          </div>
          <div class="col-lg-6 text-center">
            <div class="about-hero-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Quiénes Somos -->
    <section class="about-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-title mb-4">
              <i class="fas fa-users me-3"></i>
              ¿Quiénes Somos?
            </h2>
            <p class="section-description">
              Somos una empresa mexicana dedicada a ofrecer las mejores soluciones tecnológicas 
              para empresas y usuarios individuales. Con años de experiencia en el sector, 
              nos hemos convertido en el socio tecnológico de confianza para cientos de clientes 
              en Torreón y la región.
            </p>
            <p class="section-description">
              Nuestro equipo está conformado por expertos apasionados por la tecnología, 
              comprometidos en brindar asesoría personalizada y soluciones innovadoras 
              que impulsen el crecimiento de nuestros clientes.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Historia -->
    <section class="history-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="section-title mb-4">
              <i class="fas fa-history me-3"></i>
              Nuestra Historia
            </h2>
            <div class="timeline">
              <div class="timeline-item">
                <div class="timeline-year">2020</div>
                <div class="timeline-content">
                  <h5>Fundación</h5>
                  <p>Iniciamos como una pequeña tienda local con la visión de democratizar el acceso a la tecnología.</p>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-year">2022</div>
                <div class="timeline-content">
                  <h5>Expansión de Servicios</h5>
                  <p>Ampliamos nuestro catálogo e incluimos servicios de mantenimiento y soporte técnico.</p>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-year">2025</div>
                <div class="timeline-content">
                  <h5>Líder Regional</h5>
                  <p>Nos consolidamos como la principal tienda de tecnología en la región, con presencia online.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <div class="history-visual">
              <i class="fas fa-chart-line"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Servicios -->
    <section class="services-section py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">
            <i class="fas fa-cogs me-3"></i>
            Nuestros Servicios
          </h2>
          <p class="section-subtitle">Soluciones tecnológicas integrales para todas tus necesidades</p>
        </div>
        
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <h4>Venta de Equipos</h4>
              <p>Laptops, desktops, monitores y accesorios de las mejores marcas del mercado.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-tools"></i>
              </div>
              <h4>Mantenimiento</h4>
              <p>Servicio técnico especializado para mantener tus equipos funcionando al 100%.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-user-tie"></i>
              </div>
              <h4>Asesoría Técnica</h4>
              <p>Consultoría personalizada para elegir la mejor solución tecnológica.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-download"></i>
              </div>
              <h4>Instalación de Software</h4>
              <p>Configuración e instalación de programas y sistemas operativos.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h4>Garantía Extendida</h4>
              <p>Protección adicional para tu inversión tecnológica.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-headset"></i>
              </div>
              <h4>Soporte 24/7</h4>
              <p>Asistencia técnica disponible cuando más la necesites.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Por qué elegir GS Shop -->
    <section class="why-choose-section py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">
            <i class="fas fa-star me-3"></i>
            ¿Por qué comprar con nosotros?
          </h2>
          <p class="section-subtitle">Tres razones que nos hacen diferentes</p>
        </div>
        
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="why-card price-card">
              <div class="why-icon">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <h3>El Mejor Precio</h3>
              <p>Garantizamos los precios más competitivos del mercado. Si encuentras un precio menor, lo igualamos.</p>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Precios competitivos
              </div>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Ofertas exclusivas
              </div>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Financiamiento disponible
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="why-card tech-card">
              <div class="why-icon">
                <i class="fas fa-heart"></i>
              </div>
              <h3>Para Amantes de la Tecnología</h3>
              <p>Entendemos tu pasión por la tech. Ofrecemos los últimos modelos y tecnologías más avanzadas.</p>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Últimas tecnologías
              </div>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Asesoría especializada
              </div>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                <strong>Envío GRATIS</strong>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="why-card quality-card">
              <div class="why-icon">
                <i class="fas fa-award"></i>
              </div>
              <h3>La Mejor Calidad</h3>
              <p>Solo trabajamos con marcas reconocidas y productos originales con garantía oficial.</p>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Productos originales
              </div>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Garantía oficial
              </div>
              <div class="why-feature">
                <i class="fas fa-check-circle me-2"></i>
                Soporte post-venta
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="cta-card">
              <h3 class="mb-4">¿Listo para encontrar la tecnología perfecta?</h3>
              <p class="mb-4">Explora nuestro catálogo y descubre las mejores ofertas en equipos de cómputo</p>
              <div class="cta-buttons">
                <a href="categorias.php" class="btn btn-primary btn-lg me-3 cta-btn">
                  <i class="fas fa-shopping-bag me-2"></i>
                  Ver Productos
                </a>
                <a href="contacto.php" class="btn btn-secondary  btn-lg cta-btn">
                  <i class="fas fa-phone me-2"></i>
                  Contáctanos
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <?php include 'assets/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
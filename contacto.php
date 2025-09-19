<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GS Shop - Contacto</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Staatliches&display=swap" rel="stylesheet">
    
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

    <div class="container mt-5" style="min-height: 70vh">
      <!-- Hero Section -->
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h1 class="display-4 mb-3 contact-title">Contáctanos</h1>
          <p class="lead text-muted">Estamos aquí para ayudarte con todas tus necesidades tecnológicas</p>
        </div>
      </div>

      <div class="row g-4">
        <!-- Información de contacto -->
        <div class="col-lg-6">
          <div class="card contact-card h-100">
            <div class="card-body p-4">
              <h3 class="card-title mb-4">
                <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                Nuestra Ubicación
              </h3>
              
              <div class="contact-info">
                <div class="info-item mb-3">
                  <h5 class="mb-2">
                    <i class="fas fa-building me-2 text-secondary"></i>
                    Dirección
                  </h5>
                  <p class="mb-0">Baldomero Ezquerra 39<br>
                  Col. Ampliación Ángeles<br>
                  Torreón, Coahuila, México</p>
                </div>
                
                <div class="info-item mb-3">
                  <h5 class="mb-2">
                    <i class="fas fa-phone me-2 text-secondary"></i>
                    Teléfono
                  </h5>
                  <p class="mb-0">(871) 000-0000</p>
                </div>
                
                <div class="info-item mb-4">
                  <h5 class="mb-2">
                    <i class="fas fa-envelope me-2 text-secondary"></i>
                    Email
                  </h5>
                  <p class="mb-0">example@gsoft.com</p>
                </div>
                
                <div class="text-center">
                  <a href="https://maps.google.com/?q=Baldomero+Ezquerra+39,+Torreón,+Coahuila" 
                     target="_blank" 
                     class="btn btn-primary btn-lg map-btn">
                    <i class="fas fa-map-marked-alt me-2"></i>
                    Ver en Google Maps
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Horarios y servicios -->
        <div class="col-lg-6">
          <div class="card contact-card h-100">
            <div class="card-body p-4">
              <h3 class="card-title mb-4">
                <i class="fas fa-clock me-2 text-primary"></i>
                Horarios de Atención
              </h3>
              
              <div class="schedule-info">
                <div class="schedule-item">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="fw-bold">Lunes - Viernes</span>
                    <span class="badge bg-success">9:00 AM - 7:00 PM</span>
                  </div>
                </div>
                
                <div class="schedule-item">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="fw-bold">Sábados</span>
                    <span class="badge bg-warning">9:00 AM - 5:00 PM</span>
                  </div>
                </div>
                
                <div class="schedule-item">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <span class="fw-bold">Domingos</span>
                    <span class="badge bg-danger">Cerrado</span>
                  </div>
                </div>
              </div>
              
              <hr class="my-4">
              
              <h4 class="mb-3">
                <i class="fas fa-tools me-2 text-primary"></i>
                Nuestros Servicios
              </h4>
              
              <div class="services-list">
                <div class="service-item mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Venta de equipos de cómputo
                </div>
                <div class="service-item mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Mantenimiento y reparación
                </div>
                <div class="service-item mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Asesoría tecnológica
                </div>
                <div class="service-item mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Instalación de software
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Sección de contacto rápido -->
      <div class="row mt-5">
        <div class="col-12">
          <div class="card contact-quick-card">
            <div class="card-body text-center p-5">
              <h3 class="mb-3">¿Necesitas ayuda inmediata?</h3>
              <p class="text-muted mb-4">Nuestro equipo está listo para atenderte</p>
              <div class="row g-3">
                <div class="col-md-4">
                  <a href="tel:8711234567" class="btn btn-outline-primary btn-lg w-100 contact-btn">
                    <i class="fas fa-phone me-2"></i>
                    Llamar Ahora
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="mailto:contacto@gsshop.com" class="btn btn-outline-success btn-lg w-100 contact-btn">
                    <i class="fas fa-envelope me-2"></i>
                    Enviar Email
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="https://wa.me/528711234567" target="_blank" class="btn btn-outline-success btn-lg w-100 contact-btn">
                    <i class="fab fa-whatsapp me-2"></i>
                    WhatsApp
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  <footer>
      <?php include 'assets/footer.php'; ?>
    </footer>
</html>
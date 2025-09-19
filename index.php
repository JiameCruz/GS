<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GS Shop - Tu Tienda de Cómputo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css" />
</head>
  <body>
    <header>
      <?php include 'assets/header.php'; ?>
    </header>

    <div class="container mt-4">
      <div
        id="carouselExampleCaptions"
        class="carousel slide mb-5"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="https://via.placeholder.com/1200x400/3c2866/fff?text=Oferta+en+Laptops"
              class="d-block w-100"
              alt="Oferta Laptops"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Laptops en Oferta</h5>
              <p>Hasta 30% de descuento en equipos seleccionados.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="https://via.placeholder.com/1200x400/3c2866/fff?text=Descuentos+en+Monitores"
              class="d-block w-100"
              alt="Oferta Monitores"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Monitores para Gaming y Oficina</h5>
              <p>La mejor calidad de imagen al mejor precio.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-lg-8">
          <h2 class="mb-3">Productos más vendidos</h2>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card h-100">
                <img
                  src="https://via.placeholder.com/300x200?text=Laptop"
                  class="card-img-top"
                  alt="Laptop Dell"
                />
                <div class="card-body">
                  <h5 class="card-title">Laptop Dell Latitude 7490</h5>
                  <p class="card-text">
                    Core i5, 8GB RAM, 256GB SSD. Ideal para trabajo y estudio.
                  </p>
                  <a href="producto-detalle.html" class="btn btn-primary"
                    >Ver producto</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img
                  src="https://via.placeholder.com/300x200?text=Monitor"
                  class="card-img-top"
                  alt="Monitor Dell"
                />
                <div class="card-body">
                  <h5 class="card-title">Monitor Dell 24 pulgadas</h5>
                  <p class="card-text">
                    Full HD, perfecto para largas jornadas de trabajo.
                  </p>
                  <a href="producto-detalle.html" class="btn btn-primary"
                    >Ver producto</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <h2 class="mb-3">Productos más buscados</h2>
          <div class="list-group">
            <a
              href="productos.html"
              class="list-group-item list-group-item-action"
              >Teclado Dell KB216</a
            >
            <a
              href="productos.html"
              class="list-group-item list-group-item-action"
              >SSD Kingston 480GB</a
            >
            <a
              href="productos.html"
              class="list-group-item list-group-item-action"
              >Mouse Logitech M185</a
            >
            <a
              href="productos.html"
              class="list-group-item list-group-item-action"
              >Memoria RAM 16GB DDR4</a
            >
            <a
              href="productos.html"
              class="list-group-item list-group-item-action"
              >Impresora Epson L3250</a
            >
          </div>
        </div>
      </div>

      <h2 class="mb-3">Nuestros Productos</h2>
      <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
        <div class="col">
          <div class="card h-100">
            <img
              src="https://via.placeholder.com/300x200?text=Producto"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Teclado Dell KB216</h5>
              <p class="card-text">$350.00</p>
              <a href="producto-detalle.html" class="btn btn-primary"
                >Añadir al carrito</a
              >
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://via.placeholder.com/300x200?text=Producto"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Mouse Logitech M185</h5>
              <p class="card-text">$250.00</p>
              <a href="producto-detalle.html" class="btn btn-primary"
                >Añadir al carrito</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <?php include 'assets/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

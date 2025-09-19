<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GS Shop - Productos</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <?php include 'assets/header.php'; ?>
    </header>

    <div class="container mt-4">
      <h1 class="mb-4">Resultados para: [Nombre de la Categoría]</h1>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img
              src="https://via.placeholder.com/300x200?text=Laptop"
              class="card-img-top"
              alt="Laptop"
            />
            <div class="card-body">
              <h5 class="card-title">Laptop Dell Latitude 7490</h5>
              <p class="card-text">Core i5, 8GB RAM, 256GB SSD.</p>
              <p class="fw-bold fs-5">$9,800.00</p>
              <a href="#" class="btn btn-primary">Ver Detalles</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://via.placeholder.com/300x200?text=Laptop"
              class="card-img-top"
              alt="Laptop"
            />
            <div class="card-body">
              <h5 class="card-title">Laptop HP 15-ef2510la</h5>
              <p class="card-text">Ryzen 5, 8GB RAM, 256GB SSD.</p>
              <p class="fw-bold fs-5">$8,500.00</p>
              <a href="#" class="btn btn-primary">Ver Detalles</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://via.placeholder.com/300x200?text=Monitor"
              class="card-img-top"
              alt="Monitor"
            />
            <div class="card-body">
              <h5 class="card-title">Monitor Dell 24 pulgadas</h5>
              <p class="card-text">Full HD, 75Hz, ideal para oficina.</p>
              <p class="fw-bold fs-5">$3,200.00</p>
              <a href="#" class="btn btn-primary">Ver Detalles</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://via.placeholder.com/300x200?text=Teclado"
              class="card-img-top"
              alt="Teclado"
            />
            <div class="card-body">
              <h5 class="card-title">Teclado Dell KB216</h5>
              <p class="card-text">Teclado alámbrico USB, en español.</p>
              <p class="fw-bold fs-5">$350.00</p>
              <a href="#" class="btn btn-primary">Ver Detalles</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://via.placeholder.com/300x200?text=SSD"
              class="card-img-top"
              alt="SSD"
            />
            <div class="card-body">
              <h5 class="card-title">SSD Kingston 480GB</h5>
              <p class="card-text">Unidad de estado sólido SATA III 2.5''.</p>
              <p class="fw-bold fs-5">$780.00</p>
              <a href="#" class="btn btn-primary">Ver Detalles</a>
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

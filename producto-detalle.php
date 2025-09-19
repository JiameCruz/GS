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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
  </head>
  <body>
    <header>
      <?php include 'assets/header.php'; ?>
    </header>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <img
            src="https://via.placeholder.com/600x400?text=Imagen+del+Producto"
            class="img-fluid"
            alt="Producto"
          />
        </div>
        <div class="col-md-6">
          <h2>Laptop Dell Latitude 7490</h2>
          <p class="text-muted">Categoría: Cómputo > Laptop</p>
          <h3 class="my-3">$9,800.00 MXN</h3>
          <p>
            <strong>Descripción corta:</strong> Core i5, 8GB RAM, 256GB SSD.
            Ideal para trabajo y estudio. Un equipo reacondicionado de alto
            rendimiento con garantía.
          </p>

          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Marca:</strong> Dell</li>
            <li class="list-group-item">
              <strong>Procesador:</strong> Intel Core i5
            </li>
            <li class="list-group-item"><strong>RAM:</strong> 8GB</li>
            <li class="list-group-item">
              <strong>Almacenamiento:</strong> 256GB SSD
            </li>
          </ul>

          <div class="d-grid gap-2 mt-4">
            <button class="btn btn-primary btn-lg" type="button">
              Añadir al carrito
            </button>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <?php include 'assets/footer.php'; ?>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

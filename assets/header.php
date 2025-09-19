<link rel="stylesheet" href="estilos/style.css" />
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><i class="bi bi-laptop"></i> GS Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php"><i class="bi bi-house-door-fill"></i> Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <i class="bi bi-grid-fill"></i> Categorías
                    </a>
                    <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="row g-3">
                            <div class="col-lg-3 col-6">
                                <h6 class="dropdown-header"><i class="bi bi-headphones"></i> ACCESORIO</h6>
                                <a class="dropdown-item" href="categorias.php">Teclado</a>
                                <a class="dropdown-item" href="categorias.php">Mouse</a>
                                <a class="dropdown-item" href="categorias.php">Monitor</a>
                            </div>
                            <div class="col-lg-3 col-6">
                                <h6 class="dropdown-header"><i class="bi bi-pc-display"></i> CÓMPUTO</h6>
                                <a class="dropdown-item" href="categorias.php">Laptop</a>
                                <a class="dropdown-item" href="categorias.php">Desktop</a>
                            </div>
                            <div class="col-lg-3 col-6">
                                <h6 class="dropdown-header"><i class="bi bi-printer-fill"></i> IMPRESIÓN</h6>
                                <a class="dropdown-item" href="categorias.php">Tinta Continua</a>
                                <a class="dropdown-item" href="categorias.php">Láser</a>
                            </div>
                            <div class="col-lg-3 col-6">
                                 <h6 class="dropdown-header"><i class="bi bi-cpu-fill"></i> COMPONENTES</h6>
                                <a class="dropdown-item" href="categorias.php">RAM</a>
                                <a class="dropdown-item" href="categorias.php">Procesadores</a>
                                <a class="dropdown-item" href="categorias.php">SSD</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de.php"><i class="bi bi-info-circle-fill"></i> Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php"><i class="bi bi-envelope-fill"></i> Contacto</a>
                </li>
            </ul>
            
            <div class="d-flex align-items-center">
                <button class="btn nav-link fs-5 me-2" id="search-icon" type="button">
                    <i class="bi bi-search"></i>
                </button>
                <button class="btn nav-link fs-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                    <i class="bi bi-cart-fill"></i>
                    <span class="badge rounded-pill bg-danger" id="cart-counter" style="vertical-align: top; margin-left: -5px;">0</span>
                </button>
            </div>
        </div>
    </div>
</nav>

<div id="search-overlay" class="search-overlay">
    <button id="close-search" class="close-search-btn">&times;</button>
    <div class="search-overlay-content">
        <form action="categorias.php" method="get">
            <input type="text" name="q" placeholder="Buscar productos..." class="search-input" autofocus>
            <button type="submit" class="search-button"><i class="bi bi-search"></i></button>
        </form>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCartLabel"><i class="bi bi-cart-fill"></i> Tu Carrito de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div id="cart-items-container">
            <p id="cart-empty-message" class="text-center text-muted">Tu carrito está vacío.</p>
        </div>
    </div>
    <div class="offcanvas-footer p-3 border-top">
        <div class="d-flex justify-content-between fs-5">
            <strong>Total:</strong>
            <strong id="cart-total">$0.00 MXN</strong>
        </div>
        <a href="#" class="btn btn-primary w-100 mt-3">Finalizar Compra</a>
    </div>
</div>

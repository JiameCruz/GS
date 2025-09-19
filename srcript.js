document.addEventListener("DOMContentLoaded", function () {
  // --- MEJORA DE MENÚ: Hover en Desktop ---
  // Activa el menú desplegable al pasar el cursor en pantallas grandes
  if (window.innerWidth > 992) {
    document
      .querySelectorAll(".navbar .nav-item.dropdown")
      .forEach(function (item) {
        item.addEventListener("mouseover", function (e) {
          let dropdown = this.querySelector(".dropdown-menu");
          if (dropdown) {
            dropdown.classList.add("show");
          }
        });
        item.addEventListener("mouseout", function (e) {
          let dropdown = this.querySelector(".dropdown-menu");
          if (dropdown) {
            dropdown.classList.remove("show");
          }
        });
      });
  }

  // --- LÓGICA DEL MODAL DE BÚSQUEDA ---
  const searchIcon = document.getElementById("search-icon");
  const searchOverlay = document.getElementById("search-overlay");
  const closeSearchBtn = document.getElementById("close-search");

  if (searchIcon && searchOverlay && closeSearchBtn) {
    searchIcon.addEventListener("click", () => {
      searchOverlay.classList.add("active");
      searchOverlay.querySelector("input").focus();
    });
    closeSearchBtn.addEventListener("click", () => {
      searchOverlay.classList.remove("active");
    });
    // Cerrar con la tecla Escape
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && searchOverlay.classList.contains("active")) {
        searchOverlay.classList.remove("active");
      }
    });
  }

  // --- LÓGICA MEJORADA DEL CARRITO DE COMPRAS ---
  const cartCounter = document.getElementById("cart-counter");
  const cartItemsContainer = document.getElementById("cart-items-container");
  const cartTotalElement = document.getElementById("cart-total");
  const cartEmptyMessage = document.getElementById("cart-empty-message");
  const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

  let cart = []; // El array que guardará los productos

  // Función para renderizar el carrito
  function renderCart() {
    // Limpiar el contenedor
    cartItemsContainer.innerHTML = "";
    if (cart.length === 0) {
      cartItemsContainer.appendChild(cartEmptyMessage);
      cartEmptyMessage.style.display = "block";
    } else {
      cartEmptyMessage.style.display = "none";
    }

    let total = 0;
    cart.forEach((item, index) => {
      // Crear el HTML para cada item
      const itemElement = document.createElement("div");
      itemElement.classList.add("cart-item");
      itemElement.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div class="cart-item-info">
                    <h6>${item.name}</h6>
                    <span class="price">${item.price.toFixed(2)} MXN</span>
                </div>
                <button class="remove-from-cart-btn" data-index="${index}"><i class="bi bi-trash-fill"></i></button>
            `;
      cartItemsContainer.appendChild(itemElement);
      total += item.price;
    });

    // Actualizar el total y el contador
    cartTotalElement.textContent = `$${total.toFixed(2)} MXN`;
    cartCounter.textContent = cart.length;
    cartCounter.style.display = cart.length > 0 ? "inline-block" : "none";
  }

  // Evento para los botones de "Añadir al carrito"
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();

      // Simulación de datos del producto (en un caso real, los tomarías del HTML con data-attributes)
      const product = {
        name: this.closest(".card-body").querySelector(".card-title")
          .textContent,
        price: 1200.5, // Precio de ejemplo
        image: this.closest(".card").querySelector("img").src,
      };

      cart.push(product);
      renderCart();

      // Feedback visual
      cartCounter.classList.add("animate__animated", "animate__bounce");
      setTimeout(
        () =>
          cartCounter.classList.remove("animate__animated", "animate__bounce"),
        1000
      );
    });
  });

  // Evento para eliminar productos del carrito (usando delegación de eventos)
  cartItemsContainer.addEventListener("click", function (event) {
    if (event.target.closest(".remove-from-cart-btn")) {
      const indexToRemove = event.target.closest(".remove-from-cart-btn")
        .dataset.index;
      cart.splice(indexToRemove, 1); // Elimina el item del array
      renderCart(); // Vuelve a renderizar el carrito actualizado
    }
  });

  // Renderizado inicial
  renderCart();
});

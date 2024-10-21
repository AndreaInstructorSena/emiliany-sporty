const productsContainer = document.getElementById("products");

function renderProducts() {
    productos.forEach((producto, index) => {
        // Creamos la estructura HTML para cada producto
        const productHTML = `
            <div class="col-md-3">
                <div class="photo">
                    <img src="${producto.imagen}" alt="${producto.nombre}">
                    <h3>${producto.nombre}</h3>
                    <p>Precio: $${producto.precio.toFixed(2)}</p>
                    <button class="btn btn-primary agregar-carrito" data-id="${producto.id}">Agregar al carrito</button>
                </div>
            </div>
        `;
        // Añadimos el HTML generado al contenedor
        productsContainer.innerHTML += productHTML;
    });

    const botonesAgregar = document.querySelectorAll('.agregar-carrito');
    botonesAgregar.forEach(boton => {
        boton.addEventListener('click', agregarAlCarrito);
    });
}

renderProducts();
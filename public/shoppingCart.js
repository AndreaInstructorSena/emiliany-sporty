const shoppingProducts = document.getElementById("shoppingProducts");
const totalCostElement = document.getElementById("totalCost");

function renderCart() {
    console.log({shoppingCart})
    console.log("skjhasdh")

    // Limpiar el contenedor del carrito antes de renderizar
    shoppingProducts.innerHTML = '';
    
    shoppingCart.forEach((producto) => {
        const cartItemHTML = `
            <div class="producto">
                <div class="detalles">
                    <h3>${producto.nombre}</h3>
                    <p>Precio: $${producto.precio.toFixed(2)}</p>
                    <button class="btn-eliminar" data-id="${producto.id}">Eliminar</button>
                </div>
            </div>
        `;
        shoppingProducts.innerHTML += cartItemHTML;
    });

    // Añadir eventos a los botones de eliminar
    const botonesEliminar = document.querySelectorAll('.btn-eliminar');
    botonesEliminar.forEach(boton => {
        boton.addEventListener('click', eliminarDelCarrito);
    });
}


function agregarAlCarrito(event) {
    // Obtener el ID del producto a partir del atributo data-id del botón
    const idProduct = parseInt(event.target.getAttribute('data-id'));

    const isProductOnShoppingCar = shoppingCart.find(product => product.id === idProduct)

    if (!isProductOnShoppingCar) {
        // Buscar el producto correspondiente por su ID en el array de productos
        const productoSeleccionado = productos.find(product => product.id === idProduct);
        // Agregar el producto al carrito
        shoppingCart.push(productoSeleccionado);
        // Mostrar en consola el carrito actualizado
        console.log('Carrito:', shoppingCart);

        renderCart();
        updateTotalCost();
    }
}




// Función para eliminar productos del carrito
function eliminarDelCarrito(event) {
    const idProducto = parseInt(event.target.getAttribute('data-id'));
    shoppingCart = shoppingCart.filter(producto => producto.id !== idProducto);
    console.log(`Producto con ID ${idProducto} eliminado del carrito.`);
    
    // Renderizar el carrito nuevamente después de eliminar el producto
    renderCart();
    updateTotalCost();
}


function updateTotalCost() {
    const totalSum = shoppingCart.reduce((accumulator, currentValue) => accumulator + currentValue.precio, 0)
    const formattedPrice = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
      }).format(totalSum);
    totalCostElement.innerHTML = formattedPrice;
}


renderCart()
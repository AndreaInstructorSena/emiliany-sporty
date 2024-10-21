<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTY MM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/styles.css" />
    <link rel="stylesheet" href="../public/sideMenu.css" />
    <script src="https://kit.fontawesome.com/0b7f74e059.js" crossorigin="anonymous"></script>
    <script src="../public/state.js" defer></script>
    <script src="../public/shoppingCart.js" defer></script>
    <script src="../public/products.js" defer></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)"
                    style="color: black; font-weight: bold;"><!--Aca va el logo-->SPORTY MM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="public/nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="public/contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <div class="collapse collapse-horizontal" id="searchCollapse">
                                    <form>
                                        <input class="form-control me-2" type="text" placeholder="Search">
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#searchCollapse"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="toggleMenuBtn"><i class="fas fa-cart-plus"></i></button>                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="views/registro.php"><i class="fas fa-user"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
   



    <!-- Carrusel de imágenes -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="border-color: 5px solid red;">
        <!-- Indicadores/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- Slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img 13.png" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/img 8.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/img 3.jpg" alt="">
            </div>
        </div>

        <!-- Controles izquierdo y derecho -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container">
        <div id="accordion conocerMas">
            <div class="mas">
                <a class="btn botonMas" data-bs-toggle="collapse" href="#collapseOne">
                    Conocer Más
                </a>
            </div>
            <div id="collapseOne" class="collapse hidden" data-bs-parent="#accordion">
                <div class="row links">
                    <div class="col-md-3">
                        <a href="public/HOMBRE.html">Hombre</a>
                    </div>
                    <div class="col-md-3">
                        <a href="public/MUJER.html">Mujer</a>
                    </div>
                    <div class="col-md-3">
                        <a href="public/BASICOS.html">Básicos</a>
                    </div>
                    <div class="col-md-3">
                        <a href="public/ACCESORIOS.html">Accesorios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Productos destacados -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px;">
                <h1 style="font-weight: bold; font-size: 23px; color: rgb(80, 80, 82) ;border-color: blue   ;">PRODUCTOS DESTACADOS</h1>
            </div>
        </div>
        <div class="row" id="products"></div>

        <!-- <div class="row"> -->

            <!-- <div class="col-md-3">
                <div class="photo">
                    <img src="images/img 2.jpg" alt="Camiseta Deportiva 1">
                    <h3>Camiseta Deportiva</h3>
                    <p>Precio: $19.99</p>
                    <button  id-data="1" >Agregar al carrito</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo">
                    <img src="images/img 4.jpg" alt="Camiseta Deportiva 2">
                    <h3>Camiseta Deportiva</h3>
                    <p>Precio: $19.99</p>
                    <button  id-data="2" >Agregar al carrito</button>
                    <a class="nav-link" href="detalleproducto.html"> .</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo">
                    <img src="images/img 1.jpg" alt="Camiseta Deportiva 3">
                    <h3>Camiseta Deportiva</h3>
                    <p>Precio: $19.99</p>
                    <button  id-data="3" >Agregar al carrito</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="photo">
                    <img src="images/img 5.jpg" alt="Camiseta Deportiva 4">
                    <h3>Camiseta Deportiva</h3>
                    <p>Precio: $19.99</p>
                    <button  id-data="4" >Agregar al carrito</button>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
 <div class="container">
    <div class="row">
        <div class="col-md-12 separador">
            <p>SPORTY MM - SPORTY MM - SPORTY MM - SPORTY MM - SPORTY MM - SPORTY MM  </p>
        </div>
    </div>
 </div>
<div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
        </div>
</div>










    <!-- Footer -->
    <footer class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-section about">
                    <h2>Sobre Nosotros</h2>
                    <p>Somos una tienda dedicada a ofrecer la mejor ropa deportiva para ti.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-section link">
                    <h2>Enlaces Rápidos</h2>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-section contact">
                    <h2>Contacto</h2>
                    <p><i class="fas fa-phone"></i> 123-456-789</p>
                </div>
            </div>
        </div>
    </footer>


    <footer>
        <div class="footer-content">



        </div>
        <div class="footer-bottom">
            &copy; 2024 Tienda Deportiva | Todos los derechos reservados
        </div>
    </footer>


    <div class="side-menu" id="sideMenu">
        <div class="cart">
            <h2 class="cart-title">Carrito de Compras</h2>

            <div class="shoppingProducts" id="shoppingProducts"></div>

            <div class="total">
                <p>Total: <span id="totalCost"></span></p>
                <button class="btn-pagar">Pagar</button>
            </div>
        </div>
    </div>

    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sideMenu = document.getElementById("sideMenu");
        const toggleMenuBtn = document.getElementById("toggleMenuBtn");

        toggleMenuBtn.addEventListener("click", () => {
            sideMenu.classList.toggle("active");
        });
    </script>
</body>

</html>
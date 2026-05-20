<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ferretería Don Toño</title>

    <!-- Font Awesome -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    >

    <!-- Estilos -->
    <link rel="stylesheet" href="styles/styles.css">

    <!-- Bootstrap -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous"
    >

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                Ferretería Don Toño
            </a>

            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <!-- MENÚ -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sucursales.php">
                            Sucursales
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Precios
                        </a>
                    </li>

                    <!-- DROPDOWN -->
                    <li class="nav-item dropdown">

                        <a 
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Herramientas
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="productos.php">
                                    Herramientas
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Construcción
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Techos
                                </a>
                            </li>

                        </ul>

                    </li>

                </ul>

                <!-- LOGIN / USUARIO -->
                <div class="ms-auto">

                    <?php if (isset($_SESSION['usuario_id'])): ?>

                        <div class="dropdown">

                            <a 
                                class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >

                                <i class="fa-solid fa-circle-user me-2"></i>

                                <?php echo $_SESSION['nombre']; ?>

                            </a>

                            <ul class="dropdown-menu dropdown-menu-end">

                                <li>
                                    <a class="dropdown-item" href="profile.php">

                                        <i class="fa-solid fa-id-card me-2"></i>

                                        Profile
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a 
                                        class="dropdown-item text-danger"
                                        href="php/logout.php"
                                    >

                                        <i class="fa-solid fa-right-from-bracket me-2"></i>

                                        Cerrar sesión

                                    </a>
                                </li>

                            </ul>

                        </div>

                    <?php else: ?>

                        <a class="btn btn-outline-primary me-2" href="login.html">
                            Login
                        </a>

                        <a class="btn btn-primary" href="registro.html">
                            Registrarse
                        </a>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </nav>

    <!-- CAROUSEL -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">

        <!-- INDICADORES -->
        <div class="carousel-indicators">

            <button 
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>

            <button 
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>

            <button 
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>

        </div>

        <!-- IMÁGENES -->
        <div class="carousel-inner">

            <div class="carousel-item active">

                <img src="img/dontono.jpg" class="d-block w-100" alt="Ferretería">

                <div class="carousel-caption d-none d-md-block">

                    <h5>Ferretería Don Toño</h5>

                    <p>Todo lo que necesitas para construcción y hogar.</p>

                </div>

            </div>

            <div class="carousel-item">

                <img src="img/ferre3.jpg" class="d-block w-100" alt="Herramientas">

                <div class="carousel-caption d-none d-md-block">

                    <h5>Herramientas Profesionales</h5>

                    <p>Calidad garantizada para tus proyectos.</p>

                </div>

            </div>

            <div class="carousel-item">

                <img 
                    src="img/coloma-2-ferreteros-en-denia.jpeg"
                    class="d-block w-100"
                    alt="Construcción"
                >

                <div class="carousel-caption d-none d-md-block">

                    <h5>Materiales de Construcción</h5>

                    <p>Encuentra todo en un solo lugar.</p>

                </div>

            </div>

        </div>

        <!-- CONTROLES -->
        <button 
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleFade"
            data-bs-slide="prev"
        >

            <span class="carousel-control-prev-icon"></span>

            <span class="visually-hidden">Previous</span>

        </button>

        <button 
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleFade"
            data-bs-slide="next"
        >

            <span class="carousel-control-next-icon"></span>

            <span class="visually-hidden">Next</span>

        </button>

    </div>

    <!-- HERO -->
    <div class="row flex-lg-row-reverse align-items-center g-5 m-4">

        <div class="col-10 col-sm-8 col-lg-6">

            <img 
                src="img/ferreteria.jpg"
                class="d-block mx-lg-auto img-fluid rounded-5"
                alt="Ferretería"
                width="700"
                height="500"
                loading="lazy"
            >

        </div>

        <div class="col-lg-6">

            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">

                Todo para tu hogar y construcción

            </h1>

            <p class="lead">

                Encuentra herramientas, materiales y accesorios de alta calidad
                para todos tus proyectos.

            </p>

            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                    Ver Productos
                </button>

                <button type="button" class="btn btn-outline-secondary btn-lg px-4">
                    Contactar
                </button>

            </div>

        </div>

    </div>

    <!-- FEATURES -->
    <div class="container px-4 py-5" id="featured-3">

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            <!-- FEATURE 1 -->
            <div class="feature col">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2">

                    <i class="fa-solid fa-screwdriver-wrench"></i>

                </div>

                <h3 class="fs-2 text-body-emphasis">

                    Herramientas

                </h3>

                <p>

                    Las mejores herramientas para uso profesional y doméstico.

                </p>

            </div>

            <!-- FEATURE 2 -->
            <div class="feature col">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2">

                    <i class="fa-solid fa-paintbrush"></i>

                </div>

                <h3 class="fs-2 text-body-emphasis">

                    Pinturas

                </h3>

                <p>

                    Gran variedad de colores y acabados para tus espacios.

                </p>

            </div>

            <!-- FEATURE 3 -->
            <div class="feature col">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2">

                    <i class="fa-solid fa-hand-fist"></i>

                </div>

                <h3 class="fs-2 text-body-emphasis">

                    Construcción

                </h3>

                <p>

                    Materiales resistentes y de calidad para cualquier proyecto.

                </p>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

        <div class="col-md-4 d-flex align-items-center">

            <span class="mb-3 mb-md-0 text-body-secondary">

                © 2026, Ferretería Don Toño

            </span>

        </div>

        <!-- REDES -->
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-5">

            <li class="ms-3">

                <a class="text-body-secondary" href="#" aria-label="Instagram">

                    <i class="fa-brands fa-instagram fs-5"></i>

                </a>

            </li>

            <li class="ms-3">

                <a class="text-body-secondary" href="#" aria-label="Facebook">

                    <i class="fa-brands fa-facebook fs-5"></i>

                </a>

            </li>

        </ul>

    </footer>

    <!-- Bootstrap JS -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"
    ></script>

</body>
</html>
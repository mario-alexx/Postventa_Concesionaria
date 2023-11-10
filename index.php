<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida | Servicio Postventa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    
    <!-- cambiar nombre archivo NAVEGACION2 -->
    <?php //include 'templates/nav3.php';?>
    <?php include 'templates/navIndex.php';?>
    
    <!-- Carrusel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="assets/img/banner-chevrolet-seo-image.jpg" class="d-block w-100" height="500" style="filter: brightness(0.5);" alt="...">
                <div class="carousel-caption d-flex flex-column text-end align-items-end">
                    <h4 class="fs-2 fw-bold">Entendemos lo importante!</h4>
                    <p class="fs-5">que es tu automóvil para vos.<p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="assets/img/img2.jpg" class="d-block w-100" height="500" style="filter: brightness(0.5);" alt="...">
                <div class="carousel-caption d-flex flex-column text-end align-items-end">
                    <p class="fs-5">Por eso,<br>te ofrecemos nuestro servicio de</p>
                    <h4 class="fs-2 fw-bold">Mantenimiento Programado.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/imginicio.jpeg" class="d-block w-100" height="500" style="filter: brightness(0.5);" alt="...">
                <div class="carousel-caption d-flex flex-column text-end align-items-end">
                    <p class="fs-5">Diseñado para mantener tu automóvil en</p>
                    <h4 class="fs-2 fw-bold">Perfecto estado y asegurarte un viaje <br> sin preocupaciones.</h4>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
        
    <!-- Seccion objetivos principales -->
    <section>
        <div class="container mt-3">
            <h3 class="text-center">Nuestros Objetivos Principales</h3>
            <div class="row text-center mt-4">
                <div class="col-lg-4 border-end border-success border-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-arms-up rounded-circle bg-primary text-white" role="img" viewBox="0 0 16 16">
                        <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/>
                        <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.492 1.492 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.72.72 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.72.72 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
                    </svg>
                    <p class="text-start mt-3">Mejorar la gestión de clientes y servicios postventa, contribuyendo así a una experiencia del cliente mejorada y más satisfactoria.</p>
                </div>
                <div class="col-lg-4  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-envelope-check rounded-circle bg-danger text-white" role="img" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                    </svg>
                    <p class="text-start mt-3">Facilitar la comunicación: establecer un canal de comunicación eficaz entre clientes, concesionaria y técnicos de servicio para agilizar la resolución de problemas y consultas.</p>
                </div>
                <div class="col-lg-4 border-start border-success border-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-award rounded-circle bg-warning text-white" role="img" viewBox="0 0 16 16">
                        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                    </svg>
                    <p class="text-start mt-3">Facilitar la comunicación: establecer un canal de comunicación eficaz entre clientes, concesionaria y técnicos de servicio para agilizar la resolución de problemas y consultas.</p>
                </div>
            </div>
        </div>
    </section>

    <hr class="text-black my-2">

    <!-- Seccion sobre nosotros -->
    <section>
        <div class="container">
            <h3 class="text-center">Sobre Nosotros</h3>
            <div class="row featurette py-3">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">¿Por qué elegir nuestros servicios?</h2>
                    <p>Expertos: Altamente capacitados, para garantizar el mejor cuidado a tu veículo.
                    Mantenimiento Preventivo: No esperamos a que surja un problema; lo prevenimos.
                    Programa Personalizado: Creamos un plan de mantenimiento específico para tu automóvil, teniendo en cuenta su modelo y kilometraje.
                    Conveniencia: Ofrecemos citas flexibles que se adaptan a tu horario y un ambiente cómodo en nuestras instalaciones.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="assets/img/mecanico.jpg" width="500" height="500" alt="...">
                </div>
            </div>

            <hr class="text-black my-2">

            <div class="row featurette py-3">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Beneficios del Mantenimiento Programado:</h2>
                    <p>Seguridad: Un vehículo bien mantenido es un vehículo más seguro, reduciendo el riesgo de averías inesperadas.
                    Durabilidad: Ayuda a prolongar la vida útil de tu automóvil.
                    Eficiencia de Combustible: Un vehículo en buen estado tiende a ser más eficiente en el consumo de combustible.
                    Valor de Reventa: El mantenimiento adecuado mejora el valor de reventa de tu vehículo.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="assets/img/seguro.jpg" width="500" height="500"  alt="...">
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'templates/footerIndex.php';?>
    
    <script src="assets/js/appLogin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
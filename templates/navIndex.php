<!-- Nevegacion -->
<nav class="navbar navbar-expand-md bg-body-tertiary py-3" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="#">
            <img src="assets/img/logoConcesionaria.png" alt="Logo concesionaria" width="85" height="40" class="d-inline-block align-text-top me-4">
            Servicio Postventa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav justify-content-end text-uppercase fw-semibold">
                <li class="nav-item">
                    <a class="nav-link text-white active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="views/usuario/formReserva.php">Reservar</a>
                </li>
                <?php
                    session_start();
                    if(!isset($_SESSION['usuario'])){
                        ?> 
                        <li class="nav-item">
                            <button class="btn btn-primary nav-link" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" href="/">Inicia Sesión</a>
                        </li>
                        <?php        
                    }else {
                        ?>
                            <div class="nav-item dropdown">
                                <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo strtoupper($_SESSION['usuario']);?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="views/usuario/historial.php">Historial</a></li>
                                    <li><a class="dropdown-item text-danger" href="controllers/auth/cerrarSesion.php"><i class="bi bi-box-arrow-right p-1"></i>Salir</a></li>
                                </ul>
                            </div>
                        
                        <?php
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="views/usuario/contacto.php">Contáctanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Iniciar Sesion -->
<div class="modal fade col-6" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 mx-auto" id="exampleModalToggleLabel">Inicia Sesión <i class="bi bi-person-circle ms-4"></i></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formIniciar">
                    <div class="form-floating mb-3 mx-auto col-8">
                        <input type="email" class="form-control border border-black" id="correo" name="email" placeholder="Ingrese su email">
                        <label for="correo">Email address</label>
                    </div>
                    <div class="form-floating  mb-3 mx-auto col-8 ">
                        <input type="password" class="form-control border border-black" id="password" name="password" placeholder="Ingrese su nombre password">
                        <label for="password">Password</label>
                    </div>
                    <input type="button" class="btn btn-primary d-grid col-6 mx-auto mb-3" value="Iniciar Sesión" onclick="loginUsuario()">
                </form>
                <button class="btn btn btn-outline-primary d-grid col-6 mx-auto" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Crea una cuenta</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Crear Cuenta -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 mx-auto" id="exampleModalToggleLabel2">Crear Cuenta<i class="bi bi-person-circle ms-4"></i></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formRegistrar">     
                    <div class="form-floating mb-3 mx-auto col-8">
                        <input type="text" class="form-control border border-black" id="cnombre" name="nombre" placeholder="Ingrese su nombre">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating mb-3 mx-auto col-8">
                        <input type="text" class="form-control border border-black" id="capellido" name="apellido" placeholder="Ingrese su apellido">
                        <label for="apellido">Apellido</label>
                    </div>
                    <div class="form-floating mb-3 mx-auto col-8">
                        <input type="number" class="form-control border border-black" id="ctelefono" name="telefono" placeholder="Ingrese su numero de telefono">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="form-floating mb-3 mx-auto col-8">
                        <input type="email" class="form-control border border-black" id="ccorreo" name="email" placeholder="Ingrese su email" required>
                        <label for="correo">Email</label>
                    </div>
                    <div class="form-floating mb-3 mx-auto col-8">
                        <input type="password" class="form-control border border-black" id="cpassword" name="password" placeholder="Ingrese su Password">
                        <label for="password">Password</label>
                    </div>
                    <input type="button" class="btn btn-primary d-grid col-6 mx-auto mb-3" value="Crear cuenta" onclick="registrarUsuario();">
                </form>
                <button class="btn btn btn-outline-primary d-grid col-6 mx-auto" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Inicia Sesion</button>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/appLogin.js"></script>
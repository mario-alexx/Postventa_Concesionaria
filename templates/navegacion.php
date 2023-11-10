<!-- Nevegacion -->
<nav class="navbar navbar-expand-md bg-body-tertiary py-3" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="#">
            <img src="../../assets/img/logoConcesionaria.png" alt="Logo concesionaria" width="85" height="40" class="d-inline-block align-text-top me-4">
            Servicio Postventa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav justify-content-end text-uppercase fw-semibold">
                <li class="nav-item">
                    <a class="nav-link text-white active" aria-current="page" href="historico.php">Historico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="consultas.php">Consultas</a>
                </li>
                <li class="nav-item">
                    <button class="nav-item btn btn-outline-success" disabled><?php echo strtoupper($_SESSION['usuario']);?></button> 
                </li>
                <li class="nav-item">
                    <a class="btn nav-link text-danger" href="../../controllers/auth/cerrarSesion.php"><i class="bi bi-box-arrow-right p-1"></i>Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


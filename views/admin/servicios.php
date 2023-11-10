<?php 
    session_start();
    if(!isset($_SESSION['usuario']) ) { 
        header('Location: ../../index.php');
        exit();
    }
    if($_SESSION['admin'] === '0'){
        header('Location: ../../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Servicios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/icons8-servicio-de-coche-48.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body onload="cargarServicios();">
    
    <?php include '../../templates/navegacion.php'; ?>

    <div class="card text-center m-2">
        <div class="card-header">
            <h3>CRUD Servicios</h3>
        </div>
        <div class="card-body">
            <div class="text-end">
                <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarModal"><i class="bi bi-plus-circle p-1"></i>Agregar Servicio</button>
            </div>

            <table class="table">
                <thead class="table table-dark">
                    <tr>
                        <td>Nombre servicio</td>
                        <td>$ Precio</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody id="servicios">
                    
                </tbody>
            </table>
        </div>
    </div>  

<!-- Modal agregar servicio-->
<div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Agregar Servicio</h1>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-white">
        <form action="post" id="formAgregar">
            <div class="mb-3">
                <label for="nombre_servicio" class="form-label">Nombre del Servicio</label>
                <input type="text" class="form-control" id="nombre_servicio" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio del servicio</label>
                <input type="number" class="form-control" id="precio" placeholder="Precio $" min="1">
            </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle p-1"></i>Cancelar</button>
            <button type="button" class="btn btn-success" onclick="agregarServicio();"><i class="bi bi-box-arrow-down p-1"></i>Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal Editar servicio-->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Editar Servicio</h1>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-white">
        <form action="post" id="formEditar">
            <div class="mb-3">
                <label for="nombre_servicio" class="form-label">Nombre del Servicio</label>
                <input type="text" class="form-control" id="enombre_servicio" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio del servicio</label>
                <input type="number" class="form-control" id="eprecio" placeholder="Precio $" min="1">
            </div>
      </div>
        <div class="modal-footer">
            <input type="hidden" id="id">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle p-1"></i>Cancelar</button>
            <button type="button" class="btn btn-success" onclick="editarServicio();"><i class="bi bi-box-arrow-down p-1"></i>Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include '../../templates/footerAdmin.php';?>

    <script src="../../assets/js/appCRUD.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
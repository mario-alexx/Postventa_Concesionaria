<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos | Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        li {
           list-style: none;
        }
    </style>
</head>
<body> 

<?php include '../../templates/nav3.php';?>

    <div class="container">
        <div class="row align-items-center">
            <!-- Sucursales -->
            <div class="col-md mt-3">
                <h3 class="text-center">Sucursales<i class="ms-1 text-danger-emphasis bi bi-pin-map-fill"></i></h3>
                <ul class="text-danger">
                    <li class="mb-1"><i class="bi bi-geo-alt-fill"></i></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52551.29582135186!2d-58.69554817832031!3d-34.5926293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb96e39f8f031%3A0x296ae195097a6119!2sChevrolet%20Hurlingham!5e0!3m2!1ses!2sar!4v1698733126546!5m2!1ses!2sar" target="fcontenido"> Sucursal Hurlingham</a></li>
                    <li class="mb-1"><i class="bi bi-geo-alt-fill"></i></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52585.60624741421!2d-58.78974277832034!3d-34.538351000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbd6b84015991%3A0x69f213675b62e11d!2sMegui%20San%20Miguel%20Concesionario%20Oficial%20Chevrolet!5e0!3m2!1ses!2sar!4v1698732792504!5m2!1ses!2sar"  target="fcontenido"> Sucursal San Miguel</a></li>
                    <li class="mb-1"><i class="bi bi-geo-alt-fill"></i></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52561.4300808847!2d-58.61906337832029!3d-34.57660489999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb77b13bda845%3A0x180b23036a304bbf!2sRoycan%20San%20Mart%C3%ADn%20Concesionario%20Oficial%20Chevrolet!5e0!3m2!1ses!2sar!4v1698732958267!5m2!1ses!2sar" target="fcontenido"> Sucursal San Martin</a></li>
                    <li class="mb-1"><i class="bi bi-geo-alt-fill"></i></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52540.00577104017!2d-58.63431507832033!3d-34.6104736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb818925745b3%3A0xd3bc2208505393e5!2sRoycan%20Caseros%20Concesionario%20Oficial%20Chevrolet!5e0!3m2!1ses!2sar!4v1698733037395!5m2!1ses!2sar" target="fcontenido" > Sucursal Caseros</a></li>
                    <li class="mb-1"><i class="bi bi-geo-alt-fill"></i></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52527.64581025351!2d-58.81721127832028!3d-34.62999969999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc958f73733ccb%3A0xa41c04819d7dba2!2sD&#39;amico%20Moreno%20Concesionario%20Oficial%20Chevrolet!5e0!3m2!1ses!2sar!4v1698733194057!5m2!1ses!2sar" target="fcontenido" > Sucursal Moreno</a></li>
                </ul>
            <iframe class="mt-2" name="fcontenido" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52551.29582135186!2d-58.69554817832031!3d-34.5926293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb96e39f8f031%3A0x296ae195097a6119!2sChevrolet%20Hurlingham!5e0!3m2!1ses!2sar!4v1698733126546!5m2!1ses!2sar"></iframe>
            </div>

            <!-- Formulario -->
            <div class="col-md">
                <h3 class="text-center">Formulario de Contacto<i class="ms-1 text-warning-emphasis bi bi-envelope-plus-fill"></i></h3>
                <form class="form border border-2 border-primary rounded p-2 p-4" >     
                    <?php
                        if(!isset($_SESSION['usuario'])) {  
                    ?>  
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-black" id="nnombre" placeholder="Ingrese su Nombre">
                            <label for="nnombre">Ingrese su Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-black" id="napellido" placeholder="Ingrese su Apellido">
                            <label for="napellido">Ingrese su Apellido</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control border border-black" id="nemail" placeholder="Ingrese su Email">
                            <label for="nemail">Ingrese su Email</label>
                        </div>
                    <?php } else { ?>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-black" disabled value="<?php echo $_SESSION['usuario'];?>">
                                <label>Su Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-black" disabled value="<?php echo $_SESSION['apellido'];?>">
                                <label>Su Apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control border border-black" disabled value="<?php echo $_SESSION['correo'];?>">
                                <label>Su Email</label>
                            </div>   
                    <?php }?>
                        <div class="form-floating">
                            <textarea class="form-control border border-black" placeholder="Leave a comment here" id="descripcion" name="descripcion" style="height: 100px" required></textarea>
                            <label for="descripcion">Ingrese su comentario</label>
                        </div>
                    <?php
                        if(!isset($_SESSION['usuario'])) {                         
                    ?>
                        <div class="d-grid col-6 mx-auto mt-3">
                            <button  type="submit" id="resumenNo" class="btn btn-lg btn-primary"">Enviar</button>
                        </div>

                    <?php }else { ?>
                            <div class="d-grid col-6 mx-auto mt-3">
                                <button onclick="consultar();" type="submit" id="resumen" class="btn btn-lg btn-primary">Enviar</button>
                            </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>

    <?php include '../../templates/footer.php';?>

    <script type="text/javascript">
        var btnNoEnviar = document.getElementById("resumenNo").addEventListener("click", function(e) {
            e.preventDefault();
            Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Inicia sesion para contactarte',
            })
            return;
        });
    </script>

    <script src="../../assets/js/appLogin.js"></script>
    <script src="../../assets/js/appJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
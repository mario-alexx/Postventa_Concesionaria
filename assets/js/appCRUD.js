const agregarServicio = async() => {

    var nombre_servicio = document.querySelector('#nombre_servicio').value;
    var precio = document.querySelector('#precio').value;

    if(nombre_servicio.trim() === '' || precio.trim() === '' ) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Los campos no pueden estar vacios',
        })
        return;
    }

    //Insertar a la BD
    const datos = new FormData();
    datos.append("nombre_servicio", nombre_servicio);
    datos.append("precio", precio);

    var respuesta = await fetch("../../controllers/servicio/agregarServicio.php", {
        method: 'POST',
        body:datos
    });
    
    var resultado = await respuesta.json();

    if(resultado.success == true) {
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: resultado.mensaje
        })
        document.querySelector('#formAgregar').reset();
    }
    else {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: resultado.mensaje
        })
    }
    
    window.location.reload();
    cargarServicios();
}

const cargarServicios = async () => {
    
    var respuesta = await fetch("../../controllers/servicio/cargarServicios.php");
    var registrosHTML = ``;
    var resultado = await respuesta.json();

    resultado.data.forEach(fila => {
        registrosHTML += `
        <tr>
            <td>${fila[1]}</td>
            <td>$${fila[2]}</td>
            <td><button class="btn btn-warning" onclick=cargarServicio(${fila[0]}); data-bs-toggle="modal" data-bs-target="#editarModal"><i class="bi bi-pencil-square p-1"></i>Editar</button></td>
            <td><button class="btn btn-danger" onclick=eliminarServicio(${fila[0]});><i class="bi bi-trash p-1"></i>Eliminar</button></td>
        </tr>
        `; 
    });

    document.querySelector("#servicios").innerHTML = registrosHTML;
}

const eliminarServicio = (servicioID) => {

    Swal.fire({
        title: '¿Está seguro de eliminar el Servicio?',
        showDenyButton: true,
        confirmButtonText: 'SI',
        confirmButtonColor: '#198754',
        denyButtonText: 'NO',
    }).then( async (result) => {
        if (result.isConfirmed) {
            
            const datos = new FormData();
            datos.append("id", servicioID);
            
            var respuesta = await fetch("../../controllers/servicio/eliminarServicio.php", {
                method: 'POST',
                body:datos
            });
            
            var resultado = await respuesta.json();
        
            if(resultado.success == true) {
                Swal.fire({
                    icon: 'success',
                    title: 'Exito',
                    text: resultado.mensaje
                })
            }
            else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: resultado.mensaje
                })
            }
            cargarServicios();
        }
    })
} 

const cargarServicio = async (servicioId) => {

    const datos = new FormData();
    datos.append("id", servicioId);
        
    var respuesta = await fetch("../../controllers/servicio/cargarServicio.php", {
        method: 'POST',
        body:datos
    });
    
    var resultado = await respuesta.json();

    document.querySelector("#id").value = resultado.id;
    document.querySelector("#enombre_servicio").value = resultado.nombre_servicio;
    document.querySelector("#eprecio").value = resultado.precio;
}

const editarServicio = async () => {
    
    var id = document.querySelector("#id").value;
    var nombre_servicio = document.querySelector("#enombre_servicio").value;
    var precio = document.querySelector("#eprecio").value;

    if(nombre_servicio.trim() === '' || precio.trim() === '') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Los campos no pueden estar vacios',
        })
        return;
    }

    //MOdificar a la BD
    const datos = new FormData();
    datos.append("id", id);
    datos.append("nombre_servicio", nombre_servicio);
    datos.append("precio", precio);

    var respuesta = await fetch("../../controllers/servicio/editarServicio.php", {
        method: 'POST',
        body:datos
    });
    
    var resultado = await respuesta.json();

    if(resultado.success == true) {
        
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: resultado.mensaje
        })
        document.querySelector('#formEditar').reset();
    }
    else {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: resultado.mensaje
        })
    }
        window.location.reload();
    cargarServicios();
}


const cargarHistorico = async () => {
    
    let input = document.getElementById("campo").value

    const datos = new FormData()
    datos.append('campo', input);

    var respuesta = await fetch("../../controllers/HistoricoController.php", {
        method: 'POST',
        body:datos
    });

    var historicoHTML = ``;
    var resultado = await respuesta.json();

    resultado.data.forEach(fila => {
        historicoHTML += `
        <tr>
            
            <td>${fila[0]}</td>
            <td>${fila[1]}</td>
            <td>${fila[2]}</td>
            <td>${fila[3]}</td>
            <td>$${fila[4]}</td>
            <td>${fila[5]}</td>
            <td>${fila[6]}</td>
            <td>${fila[7]}</td>
            <td>${fila[8]}</td>
            <td><button class="btn btn-danger" onclick=eliminarReserva(${fila[0]});><i class="bi bi-trash p-1"></i></button></td>
        </tr> `;
    });
    document.querySelector("#content").innerHTML = historicoHTML;
}

const eliminarReserva = (reservaID) => {

    Swal.fire({
        title: '¿Está seguro de eliminar la reserva?',
        showDenyButton: true,
        confirmButtonText: 'SI',
        confirmButtonColor: '#198754',
        denyButtonText: 'NO',
    }).then( async (result) => {
        if (result.isConfirmed) {
            
            const datos = new FormData();
            datos.append("id", reservaID);
            
            var respuesta = await fetch("../../controllers/servicio/EliminarReserva.php", {
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
            cargarHistorico();
        }
    })
} 

const consultar = async () => {
    var descripcion = document.querySelector('#descripcion').value;

    if(descripcion.trim() === '') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'El campo de mensaje no puede estar vacio',
        })
        return;
    }

    //Insertar a la BD
    const datos = new FormData();
    datos.append("descripcion", descripcion);

    var respuesta = await fetch("../../controllers/consulta/AgregarConsultaController.php", {
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
}


const cargarPreguntas = async () => {

    var respuesta = await fetch("../../controllers/consulta/ConsultaController.php");
    var registrosHTML = ``;
    var resultado = await respuesta.json();

    resultado.data.forEach(fila => {
        registrosHTML += `
        <tr>
            <td>${fila[0]}</td>
            <td>${fila[1]}</td>
            <td>${fila[2]}</td>
            <td>${fila[3]}</td>
            <td>${fila[4]}</td>
            <td><button class="btn btn-danger" onclick=eliminarConsulta(${fila[5]});><i class="bi bi-trash p-1"></i></button></td>
        </tr> 
        `; 
    });

    document.querySelector("#contenido").innerHTML = registrosHTML;
}

const eliminarConsulta = (consultaID) => {

    Swal.fire({
        title: '¿Está seguro de eliminar la la consulta?',
        showDenyButton: true,
        confirmButtonText: 'SI',
        confirmButtonColor: '#198754',
        denyButtonText: 'NO',
    }).then( async (result) => {
        if (result.isConfirmed) {
            
            const datos = new FormData();
            datos.append("id", consultaID);
            
            var respuesta = await fetch("../../controllers/consulta/EliminarComentario.php", {
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
            cargarPreguntas();
        }
    })
}

// const patente = document.getElementById("patente");
//     patente.addEventListener("blur", () => {
//         const patenteRegex = /^[A-Z]{3}-[0-9]{3}$/;

//         if (!patenteRegex.test(patente.value)) {
//             alert("Patente no válida. Por favor, ingrese una patente en el formato ABC-123.");
//         }
//     });


const formulario = document.getElementById("formulario");
    formulario.addEventListener("submit", function(event) {
        
        const opciones = document.querySelectorAll('input[type="checkbox"]:checked');
        const patente = document.getElementById("patente");

        if (opciones.length === 0) {
            alert("Selecciona al menos un servicio");
             event.preventDefault(); // Evita que el formulario se envíe
        }
        const patenteRegex = /^[A-Z]{3}-[0-9]{3}$/;
        if (!patenteRegex.test(patente.value)) {
            alert("Patente no válida. Por favor, ingrese una patente en el formato ABC-123.");
            event.preventDefault();
        }
    });
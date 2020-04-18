/*=============================================
BOTON EDITAR VENTA
=============================================*/



$('#nuevaCategoriaModal').appendTo("body");

$('#editarCategoriaModal').appendTo("body");

function nuevaCategoriaFormulario() {

    $('#nuevaCategoriaModal').modal('show');

}

function nuevaCategoriaRegistrar() {

    $('#nuevaCategoriaModal').modal('hide');

    var nombreCategoria = $("#nombreCategoria").val();

    var datos = new FormData();
    datos.append("nombreCategoria", nombreCategoria);

    $.ajax({

        url: "ajax/ajax.categorias.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {

            if (respuesta == "ok") {

                Swal.fire({
                    title: "¡Categoria registrada!",
                    text: "¡Agrege imagenes a la nueva categoria!",
                    icon: "success",
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                }).then((result) => {
                    if (result.value) {
                        window.location = "categorias";
                    }
                });

            }

        }

    });

}

function eliminarCategoria(id) {

    Swal.fire({
        title: '¿Está seguro de borrar el usuario?',
        text: "¡Si no lo está puede cancelar la acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar usuario!'
    }).then((result) => {
        if (result.value) {

            var idCategoria = id;

            var datos = new FormData();
            datos.append("idCategoria", idCategoria);

            $.ajax({

                url: "ajax/ajax.categorias.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function(respuesta) {

                    if (respuesta == "ok") {

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );

                    }

                    window.location = "categorias";

                }

            });

        }

    });

}

function editarCategoriaFormulario(idCategoria) {

    window.location = "index.php?ruta=imagenes&idCategoria=" + idCategoria;
}

function mostrarModalCategoria() {

    $('#categoriaModal').show();
}

$(".btnEditarNosotros").click(function() {

    var idNosotros = $(this).attr("idNosotros");

    window.location = "index.php?ruta=nosotros-editar&idNosotros=" + idNosotros;


})
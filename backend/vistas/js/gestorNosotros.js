/*=============================================
BOTON EDITAR VENTA
=============================================*/



$(".btnEditarNosotros").click(function() {

    var idNosotros = $(this).attr("idNosotros");

    window.location = "index.php?ruta=nosotros-editar&idNosotros=" + idNosotros;


})
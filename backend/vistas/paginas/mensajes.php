<div class="app-main__outer">

    <div class="app-main__inner p-0">

        <div class="app-inner-layout">

            <div class="app-inner-layout__header bg-heavy-rain">
                <div class="app-page-title">

                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-power icon-gradient bg-mixed-hopes"></i>
                            </div>
                            <div>Mailbox
                                <div class="page-title-subheading">Create stunning UIs for your pages with these layout components.</div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                        </div>
                    </div>

                </div>
            </div>

            <div class="app-inner-layout__wrapper">
                <div class="app-inner-layout__content card">
                    <div>
                        <div class="app-inner-layout__top-pane">
                            <div class="pane-left">
                                <div class="mobile-app-menu-btn">
                                    <button type="button" class="hamburger hamburger--elastic">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>

                            </div>

                        </div>

                        <div>
                            
                            <hr>                          
                        </div>

                        <div>
                            &nbsp;
                            <button id="enviarCorreoMasivo" class="btn btn-success">Enviar mensaje a todos los usuarios</button>
                        </div>                        

                        <div class="bg-white">

                        <div id="lecturaMensajes">

                            <div>
                                
                            </div>

                            <div id="visorMensajes">

                                <?php

                                    $responderMensajes = new ControladorMensajes();
                                    $responderMensajes -> ctrResponderMensajes();
                                    $responderMensajes -> ctrMensajesMasivos();

                                ?>

                            </div>

                        </div>


                        </div>
                    </div>
                </div>

                <div class="app-inner-layout__sidebar card" style="flex: 0 0 420px;">

                    <!--=====================================
                        MENSAJES        
                    ======================================-->

                    <div id="bandejaMensajes">

                        <div>
                            <h4 class="mb-0">Bandeja de Entrada</h4>
                            <hr>
                        </div>

                        <?php

                            $mostrarMensajes = new ControladorMensajes();
                            $mostrarMensajes -> ctrMostrarMensajes();
                            $mostrarMensajes -> ctrBorrarMensajes();

                        ?>

                    </div>

                    <!--=====================================
                        MENSAJES        
                    ======================================-->

                </div>

            </div>

        </div>

    </div>

</div>


<script>

$(window).on("load",function(){

	var datos = new FormData();

	datos.append("revisionMensajes", 1);

	$.ajax({
			url:"ajax/ajax.revision.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){}

		});


})

</script>

<!--====  Fin de MENSAJES  ====-->
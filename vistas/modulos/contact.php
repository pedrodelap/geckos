<section class="site-section bg-light" id="contact-section" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Contacta con nosotros</h2>
            </div>
        </div>
        <div class="row mb-5">



            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-room d-block h4 text-primary"></span>
                    <span>Villón Bajo Mz 28 Lote 02, Huaráz, Perú</span>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-whatsapp d-block h4 text-primary"></span>
                    <a href="#">+051 943 166 723</a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-0">
                    <span class="icon-mail_outline d-block h4 text-primary"></span>
                    <a href="#">geckosreisenperu@outlook.com</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">

                <form method="post" onsubmit="return validarMensaje()" class="p-5 bg-white">
                    <h2 class="h4 text-black mb-5">Formulario de contacto</h2>
                    <div class="row form-group">
                        
                        <div class="col-md-8 mb-3 mb-md-0">
                            <label class="text-black" for="nombres">Nombres y Apellidos</label>
                            <input type="text" name="nombres" id="nombres" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label class="text-black" for="telefono">Celular</label>
                            <input type="number" name="telefono" id="telefono" class="form-control">
                        </div>                        
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="asunto">Asunto</label>
                            <input type="text" name="asunto" id="asunto" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="7" class="form-control" placeholder="Escriba sus notas o preguntas aquí ..."></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Enviar mensaje" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>                   
                </form>
                    <?php

                    $mensajes = new MensajesController();
                    $mensajes -> registroMensajesController();

                    ?>

            </div>
        </div>
    </div>
</section>
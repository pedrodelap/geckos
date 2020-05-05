<div class="site-section cta-big-image" id="about-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Sobre GECKOS</h2>
            </div>
        </div>
        <div class="row">

        <?php

            $respuesta = Nosotros::mostrarNosotrosController();

        ?>

            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                <figure class="">
                    <img src="backend/vistas/assets/images/nosotros/<?php echo $respuesta["v_ruta"]; ?>" alt="Geckos Travel Group Company" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-4">
                    <h3 class="h3 mb-4 text-black">Geckos Travel Group Company</h3>
                    <p><?php echo $respuesta["v_contenido"]; ?></p>
                </div>
            </div>

        </div>
    </div>
</div>
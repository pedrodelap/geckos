<section class="site-section" id="portfolio-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Galeria</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
                <?php
                    $respuesta = Imagenes::mostrarCategoriasController();
                ?>
            </div>
        </div>
        <div id="posts" class="row no-gutter">
            <?php
                $respuesta = Imagenes::mostrarImagenesController();
            ?>
        </div>
    </div>
</section>
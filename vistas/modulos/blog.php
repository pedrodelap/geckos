
<section class="site-section bg-light" id="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Nuestro blog</h2>
            </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">
           <?php
                $respuesta = Articulos::seleccionarArticulosController();
            ?>
        </div>
    </div>
</section>

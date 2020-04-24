<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-power icon-gradient bg-mixed-hopes"></i>
                    </div>
                    <div>Slide
                        <div class="page-title-subheading">Create stunning UIs for your pages with these layout components.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                </div>
            </div>
        </div>

        <div class="app-inner-layout__wrapper">

            <div class="tabs-animation">




                <div class="card mb-3">

                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                            <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i> Portfolio Performance
                        </div>
                    </div>

                    <div class="card-body">

                        <!--=====================================
                        SLIDE ADMINISTRABLE
                        ======================================-->

                        <div id="imgSlide">

                            <p><span class="fa fa-arrow-down"></span> Arrastra aquí tu imagen, tamaño recomendado: 1600px * 600px</p>

                            <ul id="columnasSlide">

                                <?php
    
                                $slide = new ControladorSlide();
                                $slide -> ctrMostrarImagenVista();
    
                            ?>

                            </ul>

                            <button id="ordenarSlide" class="btn btn-warning pull-right" style="margin:10px 30px">Ordenar Slides</button>

                            <button id="guardarSlide" class="btn btn-primary pull-right" style="display:none; margin:10px 30px">Guardar Orden Slides</button>

                        </div>

                        <!--===============================================-->
                        
                        

                    </div>

<hr>

                    <div class="card-body">

                        <!--===============================================-->

                        <div id="textoSlide" class="">

                            

                            <ul id="ordenarTextSlide">

                                <?php
    
                                $slide = new ControladorSlide();
                                $slide -> ctrEditorSlide();
    
                                ?>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </div>
</div>
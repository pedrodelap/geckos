<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Articulos
                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
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
                                Listado de Articulos
                            </div>
                        </div>

                        

                        <div class="card-body">

                        <button id="btnAgregarArticulo" class="btn mr-2 mb-2 btn-primary" >Nuevo Artículo</button>

                            <!--=====================================
                                ARTÍCULOS ADMINISTRABLE          
                                ======================================-->

                            <div id="seccionArticulos">

                                

                                <!--==== AGREGAR ARTÍCULO  ====-->

                                <div id="agregarArticulo" style="display:none">

                                    <form method="post" enctype="multipart/form-data">

                                        <input name="tituloArticulo" type="text" placeholder="Título del Artículo" class="form-control" required>

                                        <input type="file" name="imagen" class="btn btn-default" id="subirFoto" required>

                                        <p>Tamaño recomendado: 800px * 400px, peso máximo 2MB</p>

                                        <div id="arrastreImagenArticulo">

                                        </div>

                                        <textarea name="contenidoArticulo" id="" cols="30" rows="10" placeholder="Contenido del Articulo" class="form-control" required></textarea>

                                        <input type="submit" id="guardarArticulo" value="Guardar Artículo" class="btn btn-primary">

                                    </form>

                                </div>

                                <?php

                                    $crearArticulo = new ControladorArticulos();
                                    $crearArticulo -> ctrGuardarArticulo();

                                ?>

                                    

                                    <!--==== EDITAR ARTÍCULO  ====-->

                                    <ul id="editarArticulo" style="padding-left: 0px;">

                                        <?php

                                            $mostrarArticulo = new ControladorArticulos();
                                            $mostrarArticulo -> ctrMostrarArticulos();
                                            $mostrarArticulo -> ctrBorrarArticulo();
                                            $mostrarArticulo -> ctrEditarArticulo();

                                        ?>

                                    </ul>

                                    <button id="ordenarArticulos" class="btn btn-warning pull-right" style="margin:10px 30px">Ordenar Artículos</button>

                                    <button id="guardarOrdenArticulos" class="btn btn-primary pull-right" style="display:none; margin:10px 30px">Guardar Orden Artículos</button>

                            </div>

                            <!--====  Fin de ARTÍCULOS ADMINISTRABLE  ====-->

                        </div>

                    </div>

                </div>

            </div>
        
    </div>
</div>
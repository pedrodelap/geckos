<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>Imagenes
                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    Listado de Categorias de Imagenes
                                </div>
                            </div>

                            <?php

                                $item  =  "id_categoria";

                                $valor = $_GET["idCategoria"];

                                $nombreCategoria = ControladorCategorias::ctrSeleccionarCategorias($item , $valor);

                                if(!print_r($nombreCategoria, true)) {

                                    echo'<script>window.location = "index.php?ruta=categorias";</script>';

                                }

                             ?>

                                <div class="p-0 card-body">
                                    <div class="dropdown-menu-header mt-0 mb-0">
                                        <div class="dropdown-menu-header-inner bg-heavy-rain">
                                            <div class="menu-header-image opacity-1" style="background-image: url('vistas/assets/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">

                                                    <?php echo $nombreCategoria["v_nombre"]; ?>

                                                </h5>
                                                <h6 class="menu-header-subtitle">
                                                    You have
                                                    <b class="text-danger">21 </b> unread messages
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <form method="post" class="form-inline">

                                        <input type="hidden" value="<?php echo $nombreCategoria["id_categoria"]; ?>" name="idCategoria">

                                        <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                                            <label for="exampleEmail22" class="mr-sm-2">Nombre Categoria</label>

                                            <input type="text" id="actualizarCategoria" name="actualizarCategoria" placeholder="Nombre Categoria" value="<?php echo $nombreCategoria["v_nombre"]; ?>" class="form-control mr-sm-2">

                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2 mr-sm-2 mb-sm-0 position-relative form-group">Actualizar Categoria</button>
                                        <a href="#" onclick="nuevaImagen()" class="btn btn-primary mb-2 mb-sm-0 position-relative form-group">Nueva Imagen</a>
                                    </form>

                                </div>

                                <?php

                                    $editarCategoria =  new ControladorCategorias();

                                    $editarCategoria -> ctrEditarCategoria();
                                ?>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card-columns">

                                <?php

                                    $mostrarImagenes = ControladorImagenes::ctrMostrarImagenes($item , $valor);

                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="nuevaImagenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" method="post" enctype="multipart/form-data"  id="formUsuario">

                <div class="modal-body">
                    <div class="position-relative form-group">
                        <label for="exampleFile" class="">File</label>
                        <input type="file" class="nuevaFoto" name="nuevaFoto" class="form-control-file">
                        <small class="form-text text-muted">Peso máximo de la foto 2MB.</small>
                    </div>
                    <div style="text-align: center;">
                        <img src="" class="img-thumbnail previsualizar" width="100px">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar imagen</button>
                </div>

                <?php

                    $nuevaImagen =  new ControladorImagenes();

                    $nuevaImagen -> ctrGuardarImagen();

                ?>

            </form>

        </div>
    </div>
</div>
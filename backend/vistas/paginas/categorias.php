<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>Categorias Imagenes
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

                            <div class="card-body">
                            <button onclick='nuevaCategoriaFormulario()' class="btn mr-2 mb-2 btn-primary" >Nueva Categoria</button>

                                <h5 class="card-title">&nbsp;</h5>
                                <table class="mb-0 table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre de la Categoria</th>
                                            <th>Fecha de Creacion </th>
                                            <th>Estado </th>
                                            <th>Actualizar </th>
                                            <th>Eliminar </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $item  = null ;
                                        $valor = null ;

                                        $listarCategorias = new ControladorCategorias();
                                        $listarCategorias -> ctrListarCategorias($item, $valor);

                                    ?>
                                        



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="nuevaCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="nuevaCategoriaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevaCategoriaModalLabel">Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                    <input placeholder="Nombre Categoria" id="nombreCategoria" type="text" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick='nuevaCategoriaRegistrar()'>Guardar Cateogira</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="editarCategoriaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarCategoriaModalLabel">Editar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cateogira</button>
            </div>
        </div>
    </div>
</div>
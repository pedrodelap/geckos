<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>Sobre Nosotros
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
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Editar Nosotros</h5>

                                <?php

                                    $item = "id_nosotro";
                                    $valor = $_GET["idNosotros"];

                                    $row = ControladorNosotros::ctrMostrarNosotros($item, $valor);

                                ?>
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <input type="hidden" value="<?php echo $row["id_nosotro"]; ?>" name="idNosotros">
                                        <div class="position-relative form-group">
                                            <label for="textoNosotros" class=""></label>
                                            <textarea name="textoNosotros" rows="5" class="form-control" placeholder="Ingrese una breve descripción del Negocio" value=""><?php echo $row["v_contenido"]; ?></textarea>
                                        </div>
                                        <br />
                                        <div class="position-relative form-group center">
                                            <img src="vistas/assets/images/nosotros/<?php echo $row["v_ruta"]; ?>" alt="Geckos Travel Group Company" width="30%" class="rounded mx-auto d-block">
                                            <input type="hidden" value="<?php echo $row["v_ruta"]; ?>" name="rutaImagenNostros">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleFile" class="">Actualizar Imagen Nosotros</label>
                                            <input name="imagenNosotros" id="imagenNosotros" type="file" class="form-control-file">
                                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                        </div>
                                        <div style="text-align: right;">						
                                            <button class="btn mr-2 mb-2 btn-primary btnEditarNosotros" name="nosotrosEditar" >Actualizar descripción </button>
                                        </div>

                                    </form>


                                    <?php

                                        $editarNosotros =  new ControladorNosotros();
                                        $editarNosotros -> ctrEditarNosotros();

                                    ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-main__outer">

    <div class="app-main__inner p-0">

        <div class="app-inner-layout">

            <div class="app-inner-layout__header bg-heavy-rain">
                <div class="app-page-title">

                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                            </div>
                            <div>Suscriptores
                                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
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

                        <!--=====================================
                        SUSCRIPTORES         
                        ======================================-->

                        <div id="suscriptores">
                        
                        <div>

                            <table id="tablaSuscriptores" class="table table-striped dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                <?php

                                $suscriptores = new ControladorSuscriptores();
                                $suscriptores -> ctrMostrarSuscriptores();
                                $suscriptores -> ctrBorrarSuscriptores();

                                ?>

                                </tbody>
                            </table>

                        <a href="tcpdf/pdf/suscriptores.php" target="blank">
                        <button class="btn btn-warning pull-right" style="margin:20px;">Imprimir Suscriptores</button>
                        </a>
                        </div>

                        </div>

                        <script>
                        
                        $(window).on("load",function(){

                        var datos = new FormData();

                        datos.append("revisionSuscriptores", 1);

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

                        <!--====  Fin de SUSCRIPTORES  ====-->

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
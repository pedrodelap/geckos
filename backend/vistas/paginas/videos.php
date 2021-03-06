<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>Videos 
                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabs-animation">

            <div class="card mb-3">

                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Videos </div>
                    <div class="btn-actions-pane-right actions-icon-btn">
                        <div class="btn-group dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <div class="p-3 text-right">
                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <!--===============================================-->


                    <form method="post" enctype="multipart/form-data">

                        <input type="file" id="subirVideo" name="video" class="btn btn-default" required>

                    </form>

                    <p>Subir sólo videos en formato MP4 y que no exceda el peso de 50 MB</p>

                    <ul id="galeriaVideo">

                        <?php

                            $video = new ControladorVideos();
                            $video -> ctrMostrarVistaVideos();

                        ?>

                    </ul>

                    <button id="ordenarVideo" class="btn btn-warning" style="margin:10px 30px;">Ordenar Videos</button>

                    <button id="guardarVideo" class="btn btn-primary" style="margin:10px 30px; display:none">Guardar Orden Videos</button>

                    <!--===============================================-->

                </div>

            </div>

        </div>

    </div>

</div>
<!--Header START-->

<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src" style="height: 23px; width: 160px;"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
        </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
        </div>

        <div class="app-header-right">
            <div class="header-dots">

            <?php

                if($_SESSION["perfil"] == 'Administrador'){

            ?>

                    <ul class="header-megamenu nav">

                    <?php

                        $revisarMensajes = new ControladorMensajes();
                        $revisarMensajes -> ctrMensajesSinRevisar();

                    ?>         

                        <li class="btn-group nav-item ">
                            <a href="suscriptores" class="p-1 mr-0 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-primary"></span>
                                        <i class="fa text-primary fa-users"></i>
                                        <span class="badge badge-dot badge-dot-sm badge-primary"></span>
                                </span>
                            </a>
                        </li>

                    </ul>

            <?php

                }

            ?>

            </div>

            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="<?php echo $_SESSION["foto"];?>" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2" style="background-image: url('vistas/assets/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="<?php echo $_SESSION["foto"];?>" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading"><?php echo $_SESSION["nombre"];?>
                                                            </div>
                                                            <div class="widget-subheading opacity-8"><?php echo $_SESSION["perfil"];?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs" style="height: 150px;">
                                        <div class="scrollbar-container ps">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Mensajes
                                                        <div class="ml-auto badge badge-pill badge-info">4
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="perfil" class="nav-link">Editar Perfil 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="perfil" class="nav-link">Términos y Condiciones
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="salir" class="nav-link">Salir
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                            <?php echo $_SESSION["nombre"];?>
                            </div>
                            <div class="widget-subheading">
                            <?php echo $_SESSION["perfil"];?>
                            </div>
                        </div>
   
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Header END-->
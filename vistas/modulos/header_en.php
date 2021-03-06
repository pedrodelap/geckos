<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="index" class="mb-0">GECKOS</a></h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="#home-section" class="nav-link">Inicio</a></li>
                        <li><a href="#about-section" class="nav-link">Sobre nosotros</a></li>
                        <!--
                        <li class="has-children">
                            <a href="#about-section" class="nav-link">Sobre nosotros</a>
                            <ul class="dropdown">
                                <li><a href="#team-section" class="nav-link">Team</a></li>
                                <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                <li class="has-children">
                                    <a href="#">More Links</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        -->
                        <li class="has-children">
                            <a href="#blog-section" class="nav-link">Actividades</a>
                            <ul class="dropdown">
                                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                                <li><a href="#portfolio-section" class="nav-link">Galeria</a></li>
                                <li><a href="#pricing-section" class="nav-link">Videos</a></li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="#services-section" class="nav-link">Servicios</a>
                            <ul class="dropdown">
                                <li><a href="#services-section" class="nav-link">Servicios</a></li>
                                <li><a href="#testimonials-section" class="nav-link">Testimonios</a></li>
                                <li><a href="#pricing-section" class="nav-link">Precios</a></li>
                                <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                            </ul>
                        </li>

                        <!--
                        <li><a href="#portfolio-section" class="nav-link">Galeria</a></li>
                        <li><a href="#" class="nav-link">Videos</a></li>
                        <li><a href="#blog-section" class="nav-link">Blog</a></li>
                        -->
                        <li><a href="#contact-section" class="nav-link">Contacto</a></li>

                        <li class="has-children">
                            <a href="#" class="nav-link">Idioma</a>
                            <ul class="dropdown">
                                <li>
                                    <form method="post" action="<?php echo $ruta; ?>">
                                        <input type="hidden" name="idioma" value="es">
                                        <input type="submit" class="nav-link" value="Español" style="border: 0; background: transparent; cursor: pointer;">
                                    </form>
                                </li>
                                <li>
                                    <form method="post" action="<?php echo $ruta; ?>">
                                        <input type="hidden" name="idioma" value="en">
                                        <input type="submit" class="nav-link" value="English" style="border: 0; background: transparent; cursor: pointer;">
                                    </form>
                                </li>
                            </ul>                            
                        </li>
                        <li><a href="backend/" class="nav-link">Login</a></li>

                    </ul>
                </nav>
            </div>
            <div id="ytWidget" style="display:none"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=es&widgetTheme=light&autoMode=true" type="text/javascript"></script>

            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>
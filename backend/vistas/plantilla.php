<?php 

session_start();

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Geckos - Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link rel="icon" type="image/png" href="../vistas/assets/images/logo_geckos.png" sizes="64x64">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="vistas/assets/css/base.min.css">
    <link rel="stylesheet" href="vistas/assets/css/style.css">
	<link rel="stylesheet" href="vistas/assets/css/cssFancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="vistas/assets/css/jquery-ui.min.css">
    

    <link rel="stylesheet" href="vistas/assets/css/cssFancybox/jquery.fancybox.css">

    <!--SCRIPTS INCLUDES-->

	<!--CORE-->
	
    <script src="vistas/assets/js/jquery-3.4.0.min.js"></script>
	<script src="vistas/assets/js/jquery-3.3.1.min.js"></script>    
	<script src="vistas/assets/js/bootstrap.bundle.min.js.map"></script>
	<script src="vistas/assets/js/metisMenu.js"></script>
	<script src="vistas/assets/js/jquery-ui.min.js"></script>

    <script src="vistas/assets/js/scripts-init/app.js"></script>
    <script src="vistas/assets/js/scripts-init/demo.js"></script>

    <!--CHARTS-->

    <!--Apex Charts
    <script src="vistas/assets/js/vendors/charts/apex-charts.js"></script>

    <script src="vistas/assets/js/scripts-init/charts/apex-charts.js"></script>
    <script src="vistas/assets/js/scripts-init/charts/apex-series.js"></script>-->

    <!--Sparklines-->
    <script src="vistas/assets/js/vendors/charts/charts-sparklines.js"></script>
    <script src="vistas/assets/js/scripts-init/charts/charts-sparklines.js"></script>

    <!--Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="vistas/assets/js/scripts-init/charts/chartsjs-utils.js"></script>
    <script src="vistas/assets/js/scripts-init/charts/chartjs.js"></script>

    <!--FORMS-->

    <!--Clipboard-->
    <script src="vistas/assets/js/vendors/form-components/clipboard.js"></script>
    <script src="vistas/assets/js/scripts-init/form-components/clipboard.js"></script>

    <!--Datepickers-->
    <script src="vistas/assets/js/vendors/form-components/datepicker.js"></script>
    <script src="vistas/assets/js/vendors/form-components/daterangepicker.js"></script>
    <script src="vistas/assets/js/vendors/form-components/moment.js"></script>
    <script src="vistas/assets/js/scripts-init/form-components/datepicker.js"></script>

    <!--Input Mask
    <script src="vistas/assets/js/vendors/form-components/input-mask.js"></script>
    <script src="vistas/assets/js/scripts-init/form-components/input-mask.js"></script>-->

    <!--RangeSlider-->
    <script src="vistas/assets/js/vendors/form-components/wnumb.js"></script>
    <script src="vistas/assets/js/vendors/form-components/range-slider.js"></script>
    <script src="vistas/assets/js/scripts-init/form-components/range-slider.js"></script>

    <!--Textarea Autosize-->
    <script src="vistas/assets/js/vendors/form-components/textarea-autosize.js"></script>
    <script src="vistas/assets/js/scripts-init/form-components/textarea-autosize.js"></script>

    <!--Toggle Switch -->
    <script src="vistas/assets/js/vendors/form-components/toggle-switch.js"></script>


    <!--COMPONENTS-->

    <!--BlockUI -->
    <script src="vistas/assets/js/vendors/blockui.js"></script>
    <script src="vistas/assets/js/scripts-init/blockui.js"></script>


    <!--CountUp -->
    <script src="vistas/assets/js/vendors/count-up.js"></script>
    <script src="vistas/assets/js/scripts-init/count-up.js"></script>

     <!--Maps
    <script src="vistas/assets/js/vendors/gmaps.js"></script>
    <script src="vistas/assets/js/vendors/jvectormap.js"></script>
    <script src="vistas/assets/js/scripts-init/maps-word-map.js"></script>
    <script src="vistas/assets/js/scripts-init/maps.js"></script> -->

    <!--Guided Tours -->
    <script src="vistas/assets/js/vendors/guided-tours.js"></script>
    <script src="vistas/assets/js/scripts-init/guided-tours.js"></script>


    <!--Rating -->
    <script src="vistas/assets/js/vendors/rating.js"></script>
    <script src="vistas/assets/js/scripts-init/rating.js"></script>

    <!--Perfect Scrollbar
    <script src="vistas/assets/js/vendors/scrollbar.js"></script>
    <script src="vistas/assets/js/scripts-init/scrollbar.js"></script> -->


    <!--TABLES -->
    <!--DataTables-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.19/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous"></script>

    <!--Bootstrap Tables-->
    <script src="vistas/assets/js/vendors/tables.js"></script>

    <!--Tables Init-->
    <script src="vistas/assets/js/scripts-init/tables.js"></script>

    <script src="vistas/assets/js/sweetalert.min.js"></script>
	<script src="vistas/assets/js/jquery.fancybox.js"></script>
</head>

<!--=====================================
	CUERPO DOCUMENTO
	======================================-->

<body>

    <?php

	if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

	?>

        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

            <!--Header START-->
            <?php include "vistas/paginas/modulos/header.php"; ?>
            <!--Header END-->

            <!--Header Menu-->
            <div class="app-main">

                <!--Header sidebar-->
                <?php include "vistas/paginas/modulos/sidebar.php"; ?>
                <!--Header sidebar-->

                <!--=====================================
				CONTENIDO
				======================================-->

                <?php

				if(isset($_GET["ruta"])){

                    if($_GET["ruta"] == "inicio" ||
                        $_GET["ruta"] == "slide" ||
                        $_GET["ruta"] == "nosotros" ||
                        $_GET["ruta"] == "nosotros-editar" ||
						$_GET["ruta"] == "articulos" ||
                        $_GET["ruta"] == "imagenes" ||
                        $_GET["ruta"] == "categorias" ||
                        $_GET["ruta"] == "imagenes" ||
                        $_GET["ruta"] == "videos" ||
						$_GET["ruta"] == "mensajes" ||
                        $_GET["ruta"] == "suscriptores" ||
                        $_GET["ruta"] == "perfil" ||
						$_GET["ruta"] == "salir"){

					include "vistas/paginas/".$_GET["ruta"].".php";

				}else{

					include "vistas/paginas/inicio.php";

				}

				}else{
                
                    include "vistas/paginas/inicio.php";

                }
                
                if(!isset($_GET["ruta"])){

                }

				?>


            </div>
            <!--Header Menu-->

        </div>

        <?php

	}else{

		include "vistas/paginas/login.php"; 

	}

	?>
    <!--Scripts Init-->
    <script src="vistas/js/script.js"></script>
    <script src="vistas/js/gestorSlide.js"></script>
    <script src="vistas/js/gestorNosotros.js"></script>
    <script src="vistas/js/gestorArticulos.js"></script>
    <script src="vistas/js/gestorGaleria.js"></script>
    <script src="vistas/js/gestorVideos.js"></script>    
    <script src="vistas/js/gestorMensajes.js"></script>
    <script src="vistas/js/gestorCategorias.js"></script>
    <script src="vistas/js/gestorImagen.js"></script>
    
</body>
</html>
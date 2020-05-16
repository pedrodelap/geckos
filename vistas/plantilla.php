<?php

    session_start();
    $ruta = ControladorRuta::ctrRuta(); 

 ?>


<!doctype html>
<html lang="en">

<head>
    <title>Geckos - Travel Group Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="vistas/assets/images/logo_geckos.png" sizes="64x64">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/591df142b5.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="vistas/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="vistas/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vistas/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="vistas/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vistas/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="vistas/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="vistas/assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="vistas/assets/css/aos.css">
    <link rel="stylesheet" href="vistas/assets/css/style.css">

    <script src="backend/vistas/assets/js/sweetalert.min.js"></script>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <!--=====================================
		Header
        ======================================-->
        
        <?php

            if(isset($_POST["idioma"])){

                if($_POST["idioma"] == "es"){

                    include "modulos/header.php";

                }else{		

                    include "modulos/header_en.php";

                }

            }else{

                include "modulos/header.php";
            }

        ?>
		
        <!--====  Fin de Header  ====-->

       <!--=====================================
		About
		======================================-->

        <?php include "modulos/carousel.php"; ?>

        <!--====  Fin de About  ====-->        


       <!--=====================================
		About
		======================================-->

        <?php include "modulos/about.php"; ?>

        <!--====  Fin de About  ====-->


       <!--=====================================
		Team
		======================================

         include "modulos/team.php"; 

        -====  Fin de Team  ====-->


       <!--=====================================
		Portfolio
		======================================-->

		<?php include "modulos/blog.php"; ?>

        <!--====  Fin de Portfolio  ====-->		

       <!--=====================================
		Portfolio
		======================================-->

		<?php include "modulos/portfolio.php"; ?>

        <!--====  Fin de Portfolio  ====-->		


    

       <!--=====================================
		Services
		======================================-->

		<?php include "modulos/services.php"; ?>

        <!--====  Fin de Services  ====-->



		<!--=====================================
		Testimonials
		======================================-->

		<!-- php include "modulos/testimonials.php"; ?>

        <!--====  Fin de Testimonials  ====-->



		<!--=====================================
		Pricing
		======================================-->
        
		<!--php include "modulos/pricing.php"; ?>

		<!--====  Fin de Pricing  ====-->


		<!--=====================================
		Pricing
		======================================-->

		<?php include "modulos/faq.php"; ?>

        <!--====  Fin de Pricing  ====-->
        


        
		<?php include "modulos/contact.php"; ?>

		<!--====  Fin de Blog  ====-->


		<!--=====================================
		Blog
		======================================-->

		<?php include "modulos/site-footer.php"; ?>

		<!--====  Fin de Blog  ====-->


    </div>

    <script src="vistas/assets/js/jquery-3.3.1.min.js"></script>
    <script src="vistas/assets/js/jquery-ui.js"></script>
    <script src="vistas/assets/js/popper.min.js"></script>
    <script src="vistas/assets/js/bootstrap.min.js"></script>
    <script src="vistas/assets/js/owl.carousel.min.js"></script>
    <script src="vistas/assets/js/jquery.countdown.min.js"></script>
    <script src="vistas/assets/js/jquery.easing.1.3.js"></script>
    <script src="vistas/assets/js/aos.js"></script>
    <script src="vistas/assets/js/jquery.fancybox.min.js"></script>
    <script src="vistas/assets/js/jquery.sticky.js"></script>
    <script src="vistas/assets/js/isotope.pkgd.min.js"></script>
    <script src="vistas/assets/js/main.js"></script>
    <script src="vistas/js/script.js"></script>

    <input type="hidden" value="<?php echo $ruta; ?>" id="ruta">
</body>

</html>
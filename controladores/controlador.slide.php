<?php

class Slide{

	public static function seleccionarSlideController(){

		$respuesta = SlideModels::seleccionarSlideModel("tb_slide");

		$slideTotal = '';

		$indicators = 0;

		$inner = 0;

		$slideTotal .= '<ol class="carousel-indicators">';

		foreach ($respuesta as $row => $item){

			if($indicators == 0){

				$slideTotal .= '<li data-target="#carouselExampleIndicators" data-slide-to="'.$indicators.'" class="active"></li>';
				
				$indicators++;

			} else {

				$slideTotal .= '<li data-target="#carouselExampleIndicators" data-slide-to="'.$indicators.'"></li>';

				$indicators++;

			}

		}

		$slideTotal .= '</ol><div class="carousel-inner">';

		foreach ($respuesta as $row => $item){

			if($inner == 0){

				$slideTotal .= '<div class="carousel-item active">
									<div class="site-blocks-cover overlay" style="background-image: url(backend/'.$item["v_ruta_front"].');" data-aos="fade" id="home-section">
										<div class="container">
											<div class="row align-items-center justify-content-center">
												<div class="col-md-8 mt-lg-5 text-center">
													<h1 class="text-uppercase mb-5" data-aos="fade-up">'.$item["v_titulo"].'</h1>
													<div data-aos="fade-up" data-aos-delay="100">';
													if($item["v_descripcion"] != null )
													{
										$slideTotal .= '<a href="#" class="btn smoothscroll btn-primary mr-2 mb-2">'.$item["v_descripcion"].'</a>';
													}
										$slideTotal .= '</div>
												</div>
											</div>
										</div>
										<a href="#about-section" class="mouse smoothscroll">
											<span class="mouse-icon">
												<span class="mouse-wheel"></span>
											</span>
										</a>
									</div>
								</div>';
				
				$inner++;

			} else {

				$slideTotal .= '<div class="carousel-item">
									<div class="site-blocks-cover overlay" style="background-image: url(backend/'.$item["v_ruta_front"].');" data-aos="fade" id="home-section">
										<div class="container">
											<div class="row align-items-center justify-content-center">
												<div class="col-md-8 mt-lg-5 text-center">
													<h1 class="text-uppercase mb-5" data-aos="fade-up">'.$item["v_titulo"].'</h1>
													<div data-aos="fade-up" data-aos-delay="100">';
													if($item["v_descripcion"] != null )
													{
										$slideTotal .= '<a href="#" class="btn smoothscroll btn-primary mr-2 mb-2">'.$item["v_descripcion"].'</a>';
													}
										$slideTotal .= '</div>
												</div>
											</div>
										</div>
										<a href="#about-section" class="mouse smoothscroll">
											<span class="mouse-icon">
												<span class="mouse-wheel"></span>
											</span>
										</a>
									</div>
								</div>';

				$inner++;

			}

		}

		$slideTotal .= '</div>';

		echo $slideTotal;
	}

}
<?php

class Imagenes{

	public static function mostrarCategoriasController(){

		$respuesta = ImagenesModels::mostrarCategoriasDeImagenesModel();

		$mostar = '';

		$mostar = '<button class="btn btn-primary active" data-filter="*">Todos</button>';

		foreach ($respuesta as $row => $item){

			$mostar .= '<button class="btn btn-primary" data-filter=".'.$item['v_nombre'].'">'.$item['v_nombre'].'</button>';

		}

		echo $mostar;

	}

	public static function mostrarImagenesController(){

		$respuesta = ImagenesModels::mostrarImagenesModel();

		$mostar2 = '';

		foreach ($respuesta as $row => $item){
		
			$src = 'backend/'.$item['v_nombre'];

			$mostar2 .= '<div class="item '.$item['categoria'].' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
							<a href="'.$src.'" class="item-wrap fancybox" data-fancybox="gallery2">
								<span class="icon-search2"></span>
								<img class="img-fluid" src="'.$src.'">
							</a>
						</div>';
		}

		echo $mostar2;
	}	

}
<?php

class ControladorArticulos{

	#MOSTRAR IMAGEN ARTÍCULO
	#------------------------------------------------------------
	public static function ctrMostrarImagen($datos){

		list($ancho, $alto) = getimagesize($datos);

		$nuevoAncho = $ancho;

		$nuevoAlto = $alto;

		/*
		if($ancho < 800 || $alto < 400){

			echo 0;

		

		else{
		}*/
			$aleatorio = mt_rand(100, 999);
			$ruta = "../vistas/assets/images/articulos/temp/articulo".$aleatorio.".jpg";
			$ruta2 = "vistas/assets/images/articulos/temp/articulo".$aleatorio.".jpg";
			$origen = imagecreatefromjpeg($datos);
			//$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>800, "height"=>400]);
			$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>$nuevoAncho, "height"=>$nuevoAlto]);


			imagejpeg($destino, $ruta);

			echo $ruta2;
		//}

	}

	#GUARDAR ARTICULO
	#-----------------------------------------------------------

	public static function ctrGuardarArticulo(){

		if(isset($_POST["tituloArticulo"])){

			$imagen = $_FILES["imagen"]["tmp_name"];

			$borrar = glob("vistas/assets/images/articulos/temp/*");

			foreach($borrar as $file){

				unlink($file);

			}

			$aleatorio = mt_rand(100, 999);

			$ruta = "vistas/assets/images/articulos/articulo".$aleatorio.".jpg";

			$origen = imagecreatefromjpeg($imagen);

			$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>800, "height"=>400]);

			//imagejpeg($destino, $ruta);

			imagejpeg($origen, $ruta);

			$datosController = array("titulo"=>$_POST["tituloArticulo"],				                     
			 	                      "ruta"=>$ruta,
			 	                      "contenido"=>$_POST["contenidoArticulo"]);

			$respuesta = ModeloArticulos::mdlGuardarArticulo($datosController, "tb_articulos");

			if($respuesta == "ok"){

				echo'<script>

					Swal.fire({
						  title: "¡OK!",
						  text: "¡El artículo ha sido creado correctamente!",
						  icon: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					}).then((result) => {
                            if (result.value) {	   
							    window.location = "articulos";
							} 
					});


				</script>';

			}

			else{

				echo $respuesta;

			}

		}

	}

	#MOSTRAR ARTICULOS
	#-----------------------------------------------------------

	public static function ctrMostrarArticulos(){

		$respuesta = ModeloArticulos::mdlMostrarArticulos("tb_articulos");		

		foreach($respuesta as $row => $item) {

			echo ' <li id="'.$item["id_articulo"].'" class="bloqueArticulo">
					<span class="handleArticle">
					<a href="index.php?ruta=articulos&idBorrar='.$item["id_articulo"].'&rutaImagen='.$item["v_ruta"].'">
						<i class="fa fa-times btn btn-danger"></i>
					</a>
					<i class="lnr-pencil btn btn-primary editarArticulo"></i>	
					</span>
					<img src="'.$item["v_ruta"].'" class="img-thumbnail">
					<h1>'.$item["v_titulo"].'</h1>					
					<input type="hidden" value="'.$item["v_contenido"].'">
					<a href="#articulo'.$item["id_articulo"].'" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

				<div class="modal fade modalArticulo" id="articulo'.$item["id_articulo"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">'.$item["v_titulo"].'</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="'.$item["v_ruta"].'" width="100%" style="margin-bottom:20px">
								<p class="parrafoContenido">'.$item["v_contenido"].'</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>';

		}

	}

	#BORRAR ARTICULO
	#------------------------------------

	public static function ctrBorrarArticulo(){

		if(isset($_GET["idBorrar"])){

			unlink($_GET["rutaImagen"]);

			$datosController = $_GET["idBorrar"];

			$respuesta = ModeloArticulos::mdlBorrarArticulo($datosController, "tb_articulos");

			if($respuesta == "ok"){

					echo'<script>

					Swal.fire({
						  title: "¡OK!",
						  text: "¡El artículo se ha borrado correctamente!",
						  icon: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					}).then((result) => {
                            if (result.value) {   
							    window.location = "articulos";
							} 
					});


				</script>';

			}
		}

	}

	#ACTUALIZAR ARTICULO
	#-----------------------------------------------------------

	public static function ctrEditarArticulo(){

		$ruta = "";

		if(isset($_POST["editarTitulo"])){

			if(isset($_FILES["editarImagen"]["tmp_name"])){	

				$imagen = $_FILES["editarImagen"]["tmp_name"];

				$aleatorio = mt_rand(100, 999);

				$ruta = "vistas/assets/images/articulos/articulo".$aleatorio.".jpg";

				$origen = imagecreatefromjpeg($imagen);

				$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>800, "height"=>400]);

				imagejpeg($destino, $ruta);

				$borrar = glob("vistas/assets/images/articulos/temp/*");

				foreach($borrar as $file){
				
					unlink($file);
				
				}

			}

			if($ruta == ""){

				$ruta = $_POST["fotoAntigua"];

			}

			else{

				unlink($_POST["fotoAntigua"]);

			}

			$datosController = array("id"=>$_POST["id"],
			                         "titulo"=>$_POST["editarTitulo"],
								     "introduccion"=>$_POST["editarIntroduccion"],
								     "ruta"=>$ruta,
									 "contenido"=>$_POST["editarContenido"]);
									 
			$respuesta = ModeloArticulos::mdlEditarArticulo($datosController, "tb_articulos");

			echo $respuesta;

			if($respuesta == "ok"){

				echo'<script>

					Swal.fire({
						  title: "¡OK!",
						  text: "¡El artículo ha sido actualizado correctamente!",
						  icon: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					}).then((result) => {
                            if (result.value) {	   
							    window.location = "articulos";
							} 
					});


				</script>';

			}

			else{

				echo $respuesta;

			}

		}

	}

	#ACTUALIZAR ORDEN 
	#---------------------------------------------------
	public static function ctrActualizarOrden($datos){

		ModeloArticulos::mdlActualizarOrden($datos, "tb_articulos");

		$respuesta = ModeloArticulos::mdlSeleccionarOrden("tb_articulos");

		foreach($respuesta as $row => $item){

			echo ' <li id="'.$item["id_articulo"].'" class="bloqueArticulo">
					<span class="handleArticle">
					<a href="index.php?action=articulos&idBorrar='.$item["id_articulo"].'&rutaImagen='.$item["v_ruta"].'">
						<i class="fa fa-times btn btn-danger"></i>
					</a>
					<i class="fa fa-pencil btn btn-primary editarArticulo"></i>	
					</span>
					<img src="'.$item["v_ruta"].'" class="img-thumbnail">
					<h1>'.$item["v_titulo"].'</h1>
					<p>'.$item["v_introduccion"].'</p>
					<input type="hidden" value="'.$item["v_contenido"].'">
					<a href="#articulo'.$item["id_articulo"].'" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

				<div id="articulo'.$item["id_articulo"].'" class="modal fade">

					<div class="modal-dialog modal-content">

						<div class="modal-header" style="border:1px solid #eee">
				        
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						 <h3 class="modal-title">'.$item["v_titulo"].'</h3>
			        
						</div>

						<div class="modal-body" style="border:1px solid #eee">
			        
							<img src="'.$item["v_ruta"].'" width="100%" style="margin-bottom:20px">
							<p class="parrafoContenido">'.$item["v_contenido"].'</p>
			        
						</div>

						<div class="modal-footer" style="border:1px solid #eee">
			        
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        
						</div>

					</div>

				</div>';

		}


	}
	
}
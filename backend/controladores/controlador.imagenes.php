<?php

class ControladorImagenes{

	#MOSTRAR DATOS IMAGENES
	#------------------------------------------------------------
	public static function ctrMostrarImagenes($item, $valor){

		$tabla = "tb_imagen";

		$respuesta = ModeloImagenes::mdlMostrarImagenes($tabla, $item, $valor);	


		foreach($respuesta as $row => $item) {

		echo '<div class="main-card mb-3 card"><img width="100%" src="'.$item["v_nombre"].'" alt="Card image cap" class="card-img-top">
				<div class="card-footer text-dark text-white bg-light">'.$item["v_fecha"].'</div>
				<div class="d-block text-right card-footer">
					<button class="mr-2 btn btn-link btn-sm">Cancel</button>
					<button class="btn btn-success btn-lg">Save</button>
				</div>
				
			</div>';

		}
	
	}

	#GUARDAR IMAGEN
	#-----------------------------------------------------------

	public static function ctrGuardarImagen(){

		if(isset($_FILES["nuevaFoto"]["tmp_name"])){

			list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);



			$nuevoAncho = $ancho;

			$nuevoAlto = $alto;

			$ruta = "";

			$idCategoria = $_GET['idCategoria'];

			/*=============================================
			CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
			=============================================*/

			$directorio = "vistas/assets/images/imagenes/".$idCategoria;

			mkdir($directorio, 0755);

			// echo '<script> alert("'.$directorio.'"); </script>';

			/*=============================================
			DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
			=============================================*/

			if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/


				$aleatorio = mt_rand(100,999);



				// $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";

				$ruta = "vistas/assets/images/imagenes/".$idCategoria."/".$idCategoria."_".$aleatorio.".jpg";

				// echo '<script> alert("jpeg"); </script>';

				$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);						

				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagejpeg($destino, $ruta);

			}

			if($_FILES["nuevaFoto"]["type"] == "image/png"){

				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/
				$aleatorio = mt_rand(100,999);

				$idCategoria = $_GET['idCategoria'];

				$ruta = "vistas/assets/images/imagenes/".$idCategoria."/".$idCategoria."_".$aleatorio.".jpg";

				// echo '<script> alert("png"); </script>';

				$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);						

				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagepng($destino, $ruta);

			}

			$tabla = "tb_imagen";

			$datos = array("nombre" => $ruta,
							"idCategoria" => $idCategoria);

			$respuesta = ModeloImagenes::mdlGuardarImagen($tabla, $datos);

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
							window.location = "index.php?ruta=imagenes&idCategoria='.$idCategoria.'";
						} 
				});


			</script>';


			}
					
		}

	}
	
}
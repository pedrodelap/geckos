<?php

class ControladorVideos{

	#MOSTRAR VIDEO AJAX
	#------------------------------------------------------------

	public static function ctrMostrarVideo($datos){

		$aleatorio = mt_rand(100, 999);

		//$ruta = "../../views/videos/video".$aleatorio.".mp4";

		$ruta2 = "../vistas/assets/images/videos/video".$aleatorio.".mp4";

		$ruta = "vistas/assets/images/videos/video".$aleatorio.".mp4";

		move_uploaded_file($datos, $ruta2);

		ModeloVideos::mdlSubirVideo($ruta, "tb_videos");

		$respuesta = ModeloVideos::mdlMostrarVideo($ruta, "tb_videos");

		$enviarDatos = $respuesta["v_ruta"];

		echo $enviarDatos;

	}

	#MOSTRAR VIDEOS EN LA VISTA
	#------------------------------------------------------------
	public static function ctrMostrarVistaVideos(){

		$respuesta = ModeloVideos::mdlMostrarVideoVista("tb_videos");

		foreach($respuesta as $row => $item){

			echo '<li id="'.$item["id_video"].'" class="bloqueVideo">
					<span class="fa fa-times eliminarVideo" ruta="'.$item["v_ruta"].'"></span>
					<video controls class="handleVideo">
						<source src="'.$item["v_ruta"].'" type="video/mp4">
					</video>	
				</li>';

		}

	}

	#ELIMINAR VIDEO
	#-----------------------------------------------------------
	public static function ctrEliminarVideo($datos){

		$respuesta = ModeloVideos::mdlEliminarVideo($datos, "tb_videos");

		unlink($datos["rutaVideo"]);

		echo $respuesta;

	}

	#ACTUALIZAR ORDEN 
	#---------------------------------------------------
	public static function ctrActualizarOrdenController($datos){

		ModeloVideos::mdlActualizarOrdenVideoModel($datos, "tb_videos");

		$respuesta = ModeloVideos::mdlSeleccionarOrdenVideoModel("tb_videos");

		foreach($respuesta as $row => $item){

			echo '<li id="'.$item["id_video"].'" class="bloqueVideo">
					<span class="fa fa-times eliminarVideo" ruta="../'.$item["v_ruta"].'"></span>
					<video controls class="handleVideo">
						<source src="'.substr($item["v_ruta"],6).'" type="video/mp4">
					</video>	
				</li>';

		}

	}

}
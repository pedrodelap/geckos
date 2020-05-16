<?php

require_once "conexion.php";

class ModeloVideos{

	#SUBIR LA RUTA DEL VIDEO
	#------------------------------------------------------------	
	public static function mdlSubirVideo($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (v_ruta) VALUES (:v_ruta)");

		$stmt -> bindParam(":v_ruta", $datos, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();

	}

	#SELECCIONAR LA RUTA DEL VIDEO
	#------------------------------------------------------------
	public static function mdlMostrarVideo($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT v_ruta FROM $tabla WHERE v_ruta = :v_ruta");

		$stmt -> bindParam(":v_ruta", $datos, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

	}

	#MOSTRAR EL VIDEO EN LA VISTA
	#---------------------------------------------------------
	public static function mdlMostrarVideoVista($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id_video, v_ruta FROM $tabla ORDER BY i_orden ASC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();
			
	}

	#ELIMINAR VIDEO
	#-----------------------------------------------------------
	public static function mdlEliminarVideo($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_video = :id_video");

		$stmt -> bindParam(":id_video", $datos["idVideo"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();

	}

	#ACTUALIZAR ORDEN 
	#---------------------------------------------------

	public static function mdlActualizarOrdenVideoModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET i_orden = :i_orden WHERE id_video = :id_video");

		$stmt -> bindParam(":i_orden", $datos["ordenItem"], PDO::PARAM_INT);
		$stmt -> bindParam(":id_video", $datos["ordenVideo"], PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		}

		else{
			return "error";
		}

		$stmt -> close();

	}

	#SELECCIONAR ORDEN 
	#---------------------------------------------------

	public static function mdlSeleccionarOrdenVideoModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id_video, v_ruta FROM $tabla ORDER BY i_orden ASC");

		$stmt -> execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

}
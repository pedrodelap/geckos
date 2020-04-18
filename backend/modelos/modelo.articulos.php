<?php

require_once "conexion.php";

class ModeloArticulos{

	#GUARDAR ARTICULO
	#------------------------------------------------------------

	public static function mdlGuardarArticulo($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (v_titulo, v_introduccion, v_ruta, v_contenido) VALUES (:titulo, :introduccion, :ruta, :contenido)");

		$stmt -> bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
		$stmt -> bindParam(":introduccion", $datosModel["introduccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);
		$stmt -> bindParam(":contenido", $datosModel["contenido"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();

	}

	#MOSTRAR ARTÍCULOS
	#------------------------------------------------------
	public static function mdlMostrarArticulos($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id_articulo, v_titulo, v_introduccion, v_ruta, v_contenido FROM $tabla ORDER BY i_orden ASC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	#BORRAR ARTICULOS
	#-----------------------------------------------------
	public static function mdlBorrarArticulo($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_articulo = :id");

		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

	#ACTUALIZAR ARTICULOS
	#---------------------------------------------------
	public static function mdlEditarArticulo($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET v_titulo = :titulo, v_introduccion = :introduccion, v_ruta = :ruta, v_contenido = :contenido WHERE id_articulo = :id");

		$stmt -> bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
		$stmt -> bindParam(":introduccion", $datosModel["introduccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);
		$stmt -> bindParam(":contenido", $datosModel["contenido"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

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
	public static function mdlActualizarOrden($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET i_orden = :orden WHERE id_articulo = :id");

		$stmt -> bindParam(":orden", $datos["ordenItem"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["ordenArticulos"], PDO::PARAM_INT);

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
	public static function mdlSeleccionarOrden($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id_articulo, v_titulo, v_introduccion, v_ruta, v_contenido FROM $tabla ORDER BY i_orden ASC");

		$stmt -> execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

}
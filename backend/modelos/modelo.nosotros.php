<?php

require_once "conexion.php";

class ModeloNosotros{

	#MOSTRAR ARTÍCULOS
	#------------------------------------------------------
	public static function mdlMostrarNosotros($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT id_nosotro, v_ruta, v_contenido FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		
		$stmt -> close();

		$stmt = null;
		

	}


	#ACTUALIZAR ARTICULOS
	#---------------------------------------------------
	public static function mdlEditarNosotros($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET v_contenido = :contenido, v_ruta = :ruta WHERE id_nosotro = :id");

		$stmt -> bindParam(":contenido", $datosModel["contenido"], PDO::PARAM_STR);
		$stmt -> bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();

	}

}
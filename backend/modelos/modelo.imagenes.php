<?php

require_once "conexion.php";

class ModeloImagenes{

	#GUARDAR IMAGEN
	#------------------------------------------------------
	public static function mdlGuardarImagen($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_categoria, v_nombre ) VALUES (:id_categoria, :nombre )");

		$stmt->bindParam(":id_categoria", $datos["idCategoria"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	#MOSTRAR ARTÍCULOS
	#------------------------------------------------------
	public static function mdlMostrarImagenes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetchAll();


		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

			


		}

		$stmt -> close();

		$stmt = null;

	}

}
<?php

require_once "conexion.php";

class ModeloCategorias{

	#MOSTRAR CATEGORIAS
	#------------------------------------------------------
	public static function mdlMostrarCategorias($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT id_categoria, v_nombre, v_fecha_crecion, i_estado FROM $tabla WHERE $item = :$item ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT id_categoria, v_nombre, v_fecha_crecion, i_estado FROM $tabla ORDER BY id_categoria" );

			$stmt -> execute();

			return $stmt -> fetchAll();

	}

	$stmt -> close();

	$stmt = null;

	}

	#GUARDAR CATEGORIA
	#------------------------------------------------------------

	public static function mdlGuardarCategoria($tabla, $valor){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (v_nombre, i_estado ) VALUES (:v_nombre, 1)");

		$stmt -> bindParam(":v_nombre", $valor, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();

	}

	#ACTUALIZAR CATEGORIA
	#---------------------------------------------------
	public static function mdlEditarCategoria($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET v_nombre = :nombre WHERE id_categoria = :id");

		$stmt -> bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();

	}	

	#ELIMINAR CATEGORIAS
	#------------------------------------------------------------

	public static function mdlEliminarCategoria($tabla, $valor){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_categoria = :id");

		$stmt -> bindParam(":id", $valor, PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();

	}





}
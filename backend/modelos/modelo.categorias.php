<?php

require_once "conexion.php";

class ModeloCategorias{

	#MOSTRAR ARTÍCULOS
	#------------------------------------------------------
	public static function mdlMostrarCategorias($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id_categoria, v_nombre, v_fecha_crecion, i_estado FROM $tabla ORDER BY id_categoria" );

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	#GUARDAR ARTICULO
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

	#GUARDAR ARTICULO
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
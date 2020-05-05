<?php

require_once "backend/modelos/conexion.php";

class ImagenesModels{

	public static function mostrarCategoriasDeImagenesModel(){

		$stmt = Conexion::conectar()->prepare("	SELECT distinct (categoria.v_nombre), categoria.id_categoria, categoria.v_fecha_crecion FROM tb_imagen imagen INNER JOIN tb_categoria categoria ON (imagen.id_categoria = categoria.id_categoria)");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}


	public static function mostrarImagenesModel(){

		$stmt = Conexion::conectar()->prepare("	SELECT categoria.v_nombre categoria, imagen.v_nombre, imagen.v_fecha FROM tb_imagen imagen INNER JOIN tb_categoria categoria ON (imagen.id_categoria = categoria.id_categoria) ORDER BY imagen.v_fecha ASC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}	

}
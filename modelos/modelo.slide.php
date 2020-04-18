<?php

require_once "backend/modelos/conexion.php";

class SlideModels{

	public static function seleccionarSlideModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT v_ruta_front, v_titulo, v_descripcion FROM $tabla ORDER BY i_orden ASC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

}
<?php

require_once "backend/models/conexion.php";

class VideosModels{

	public static function seleccionarVideosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta FROM $tabla ORDER BY orden ASC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();
	}

}
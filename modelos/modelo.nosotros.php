<?php

require_once "backend/modelos/conexion.php";

class NosotrosModels{

	public static function mostrarNosotrosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

}
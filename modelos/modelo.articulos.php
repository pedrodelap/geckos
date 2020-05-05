<?php

require_once "backend/modelos/conexion.php";

class ArticulosModels{

	public static function mostrarArticulosModel(){

		$stmt = Conexion::conectar()->prepare("SELECT id_articulo, v_titulo , v_introduccion , v_ruta , v_contenido , i_orden , i_estado , v_fecha_registro  FROM  tb_articulos  ORDER BY  v_fecha_registro  ASC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

}
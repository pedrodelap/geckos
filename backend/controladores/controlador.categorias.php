<?php

class ControladorCategorias{

	#LISTAR CATEGORIAS
	#------------------------------------------------------------
	public static function ctrlistarCategorias($item, $valor){

		$tabla = "tb_categoria";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla);

		$i = 1;

		foreach($respuesta as $row => $item) {
			
			$estado = ($item["i_estado"] == 1) ? '<span class="badge badge-pill badge-success ml-2">Activado</span>' : '<span class="badge badge-pill badge-danger ml-2">Desactivado</span>';

			echo '<tr>
					<th scope="row">'.$i.'</th>
					<td>'.$item["v_nombre"].'</td>
					<td>'.$item["v_fecha_crecion"].'</td>
					<td>'.$estado.'</td>
					<td><button onclick="editarCategoriaFormulario('. $item['id_categoria'] .')" class="btn btn-warning btn-sm">Actualizar</button></td>
					<td><button onclick="eliminarCategoria('. $item['id_categoria'] .')" class="btn btn-danger btn-sm">Eliminar</button></td>
				  </tr>';
			
			$i ++;

		}

	}

	public static function ctrRegistrarCategoria($valor){

		$tabla = "tb_categoria";

		$respuesta = ModeloCategorias::mdlGuardarCategoria($tabla, $valor);

		return $respuesta;

	}

	public static function ctrEliminarCategoria($valor){

		$tabla = "tb_categoria";

		$respuesta = ModeloCategorias::mdlEliminarCategoria($tabla, $valor);

		return $respuesta;

	}	
	
	
}
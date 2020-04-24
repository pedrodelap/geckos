<?php

class ControladorCategorias{

	#LISTAR CATEGORIAS
	#------------------------------------------------------------
	public static function ctrListarCategorias($item, $valor){

		$tabla = "tb_categoria";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

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

	public static function ctrSeleccionarCategorias( $item, $valor){

		$tabla = "tb_categoria";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;

	}

	public static function ctrRegistrarCategoria($valor){

		$tabla = "tb_categoria";

		$respuesta = ModeloCategorias::mdlGuardarCategoria($tabla, $valor);

		return $respuesta;

	}

	public static function ctrEditarCategoria(){

		if(isset($_POST["actualizarCategoria"])){

			if(trim($_POST["actualizarCategoria"]) != "" ) {

				$idCategoria = $_GET['idCategoria'];

				$actualizarCategoria = $_POST['actualizarCategoria'];
			
				echo'<script>console.log("idCategoria : ",'.$idCategoria.');</script>';

				echo'<script>console.log("actualizarCategoria : ","'.$actualizarCategoria.'");</script>';

				$tabla = "tb_categoria";

				$datosController = array("id"=>$idCategoria,
										"nombre"=>$actualizarCategoria);


				$respuesta = ModeloCategorias::mdlEditarCategoria($datosController, $tabla);

				if($respuesta == "ok"){

					echo'<script>

						Swal.fire({
							title: "¡OK!",
							text: "¡El artículo ha sido actualizado correctamente!",
							icon: "success",
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						}).then((result) => {
								if (result.value) {	   
									window.location = "index.php?ruta=imagenes&idCategoria='.$idCategoria.'";
								} 
						});


					</script>';

			}
			
		} else {

				echo'<script>

				Swal.fire({
						title: "Ocurrio un problema",
						text: "¡No Actualizar el nombre de la Categoria",
						icon: "error",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
				}).then((result) => {
						if (result.value) {


						}
				});

				</script>';

			}

		}

	}

	public static function ctrEliminarCategoria($valor){

		$tabla = "tb_categoria";

		$respuesta = ModeloCategorias::mdlEliminarCategoria($tabla, $valor);

		return $respuesta;

	}	
	
	
}
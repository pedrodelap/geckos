<?php

require_once "../modelos/modelo.categorias.php";
require_once "../controladores/controlador.categorias.php";


#CLASE Y MÉTODOS
#-------------------------------------------------------------
class Ajax{

	#REGISTRAR CATEGORIA
	#----------------------------------------------------------
	
	public $nombreCategoria;

	public function AjaxRegistrarCategoria(){

		$datos = $this->nombreCategoria;

		$respuesta = ControladorCategorias::ctrRegistrarCategoria($datos);

		echo $respuesta;

	}

	#REGISTRAR CATEGORIA
	#----------------------------------------------------------
	
	public $idCategoria;

	public function AjaxEliminarCategoria(){

		$datos = $this->idCategoria;

		$respuesta = ControladorCategorias::ctrEliminarCategoria($datos);

		echo $respuesta;

	}	

}

#OBJETOS
#-----------------------------------------------------------

if(isset($_POST["nombreCategoria"])){

	$registrarCategoria = new Ajax();
	$registrarCategoria -> nombreCategoria = $_POST["nombreCategoria"];
	$registrarCategoria -> AjaxRegistrarCategoria();

}


if(isset($_POST["idCategoria"])){

	$eliminarCategoria = new Ajax();
	$eliminarCategoria -> idCategoria = $_POST["idCategoria"];
	$eliminarCategoria -> AjaxEliminarCategoria();

}

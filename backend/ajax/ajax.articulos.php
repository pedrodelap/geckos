<?php

require_once "../modelos/modelo.articulos.php";
require_once "../controladores/controlador.articulos.php";


#CLASE Y MÉTODOS
#-------------------------------------------------------------
class Ajax{

	#SUBIR LA IMAGEN DEL ARTICULO
	#----------------------------------------------------------
	
	public $imagenTemporal;

	public function AjaxGestorArticulos(){

		$datos = $this->imagenTemporal;

		$respuesta = ControladorArticulos::ctrMostrarImagen($datos);

		echo $respuesta;

	}

	#ACTUALIZAR ORDEN
	#---------------------------------------------
	public $actualizarOrdenArticulos;
	public $actualizarOrdenItem;

	public function AjaxActualizarOrden(){	

		$datos = array("ordenArticulos" => $this->actualizarOrdenArticulos,
			           "ordenItem" => $this->actualizarOrdenItem);

		$respuesta = ControladorArticulos::ctrActualizarOrden($datos);

		echo $respuesta;

	}

}

#OBJETOS
#-----------------------------------------------------------

if(isset($_FILES["imagen"]["tmp_name"])){

	$a = new Ajax();
	$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
	$a -> AjaxGestorArticulos();

}

if(isset($_POST["actualizarOrdenArticulos"])){

	$b = new Ajax();
	$b -> actualizarOrdenArticulos = $_POST["actualizarOrdenArticulos"];
	$b -> actualizarOrdenItem = $_POST["actualizarOrdenItem"];
	$b -> AjaxActualizarOrden();

}
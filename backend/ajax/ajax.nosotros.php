<?php

require_once "../modelos/modelo.nostros.php";
require_once "../controladores/controlador.nostros.php";


#CLASE Y MÉTODOS
#-------------------------------------------------------------
class Ajax{

	#SUBIR LA IMAGEN DEL NOSTROS
	#----------------------------------------------------------
	
	public $imagenTemporal;

	public function AjaxGestorNosotros(){

		$datos = $this->imagenTemporal;

		$respuesta = ControladorNosotros::ctrMostrarImagen($datos);

		echo $respuesta;

	}

	#ACTUALIZAR ORDEN
	#---------------------------------------------
	public $actualizarOrdenNosotros;
	public $actualizarOrdenItem;

	public function AjaxActualizarOrden(){	

		$datos = array("ordenNosotros" => $this->actualizarOrdenNosotros,
			           "ordenItem" => $this->actualizarOrdenItem);

		$respuesta = ControladorNosotros::ctrActualizarOrden($datos);

		echo $respuesta;

	}

}

#OBJETOS
#-----------------------------------------------------------

if(isset($_FILES["imagen"]["tmp_name"])){

	$a = new Ajax();
	$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
	$a -> AjaxGestorNosotros();

}

if(isset($_POST["actualizarOrdenNosotros"])){

	$b = new Ajax();
	$b -> actualizarOrdenNosotros = $_POST["actualizarOrdenNosotros"];
	$b -> actualizarOrdenItem = $_POST["actualizarOrdenItem"];
	$b -> AjaxActualizarOrden();

}
<?php

class ControladorMensajes{

	#MOSTRAR MENSAJES EN LA VISTA
	#------------------------------------------------------------
	public static function ctrMostrarMensajes(){

		$respuesta = ModeloMensajes::mdlMostrarMensajes("tb_mensajes");

		foreach ($respuesta as $row => $item){

			echo '<div class="well well-sm" id="'.$item["id_mensajes"].'">
		
					<a href="index.php?action=mensajes&idBorrar='.$item["id_mensajes"].'"><span class="fa fa-times pull-right"></span></a>
					<p>'.$item["v_fecha_registro"].'</p>
					<h5>De: '.$item["v_nombre"].'</h5>
					<h6>Email: '.$item["v_email"].'</h6>
					<h6><input type="text" class="form-control" value="'.$item["v_mensaje"].'" readonly></h6>
				  	<button class="btn btn-info leerMensaje">Leer</button>
				  </div>
				  <li class="nav-item-divider nav-item"></li>';

		}

	}

	#BORRAR MENSAJES
	#------------------------------------------------------------

	public static function ctrBorrarMensajes(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];

			$respuesta = ModeloMensajes::mdlBorrarMensajes($datosController, "tb_mensajes");

			if($respuesta == "ok"){

					echo'<script>

					Swal.fire({
						  title: "¡OK!",
						  text: "¡El mesaje se ha borrado correctamente!",
						  icon: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					}).then((result) => {
                            if (result.value) {	   
							    window.location = "mensajes";
							} 
					});


				</script>';

			}

		}

	}

	#RESPONDER MENSAJES
	#------------------------------------------------------------
	public static function ctrResponderMensajes(){

		if(isset($_POST['enviarEmail'])){

			$email = $_POST['enviarEmail'];
			$nombre = $_POST['enviarNombre'];
			$titulo = $_POST['enviarTitulo'];
			$mensaje =$_POST['enviarMensaje'];

			$para = $email . ', ';
			$para .= 'cursos@tutorialesatualcance.com';

			$título = 'Respuesta a su mensaje';

			$mensaje ='<html>
							<head>
								<title>Respuesta a su Mensaje</title>
							</head>

							<body>
								<h1>Hola '.$nombre.'</h1>
								<p>'.$mensaje.'</p>
								<hr>
								<p><b>Juan Fernando Urrego A.</b><br>
								Instructor Tutoriales a tu Alcance<br> 
								Medellín - Antioquia</br> 
								WhatsApp: +57 301 391 74 61</br> 
								cursos@tutorialesatualcance.com</p>

								<h3><a href="http://www.tutorialesatualcance.com" target="blank">www.tutorialesatualcance.com</a></h3>

								<a href="http://www.facebook.com" target="blank"><img src="https://s23.postimg.org/cb2i89a23/facebook.jpg"></a> 
								<a href="http://www.youtube.com" target="blank"><img src="https://s23.postimg.org/mcbxvbciz/youtube.jpg"></a> 
								<a href="http://www.twitter.com" target="blank"><img src="https://s23.postimg.org/tcvcacox7/twitter.jpg"></a> 
								<br>

								<img src="https://s23.postimg.org/dsnyjtesr/unnamed.jpg">
							</body>

					   </html>';

		   $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		   $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		   $cabeceras .= 'From: <cursos@tutorialesatualcance.com>' . "\r\n";

		   $envio = mail($para, $título, $mensaje, $cabeceras);

		   if($envio){

		   		echo'<script>

				   		Swal.fire({
							  title: "¡OK!",
							  text: "¡El mensaje ha sido enviado correctamente!",
							  icon: "success",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
						}).then((result) => {
								if (result.value) {	   
								    window.location = "mensajes";
								} 
						});


				</script>';

		   }

		}

	}

	#ENVIAR MENSAJES MASIVOS
	#------------------------------------------------------------
	public static function ctrMensajesMasivos(){

		if(isset($_POST["tituloMasivo"])){

			$respuesta = ModeloMensajes::seleccionarEmailSuscriptores("tb_suscriptores");

			foreach ($respuesta as $row => $item) {

				$titulo = $_POST['tituloMasivo'];
				$mensaje =$_POST['mensajeMasivo'];

				$título = 'Mensaje para todos';

				$para = $item["v_email"]; 

				$mensaje ='<html>
								<head>
									<title>Respuesta a su Mensaje</title>
								</head>

								<body>
									<h1>Hola '.$item["v_nombre"].'</h1>
									<p>'.$mensaje.'</p>
									<hr>
									<p><b>Juan Fernando Urrego A.</b><br>
									Instructor Tutoriales a tu Alcance<br> 
									Medellín - Antioquia</br> 
									WhatsApp: +57 301 391 74 61</br> 
									cursos@tutorialesatualcance.com</p>

									<h3><a href="http://www.tutorialesatualcance.com" target="blank">www.tutorialesatualcance.com</a></h3>

									<a href="http://www.facebook.com" target="blank"><img src="https://s23.postimg.org/cb2i89a23/facebook.jpg"></a> 
									<a href="http://www.youtube.com" target="blank"><img src="https://s23.postimg.org/mcbxvbciz/youtube.jpg"></a> 
									<a href="http://www.twitter.com" target="blank"><img src="https://s23.postimg.org/tcvcacox7/twitter.jpg"></a> 
									<br>

									<img src="https://s23.postimg.org/dsnyjtesr/unnamed.jpg">
								</body>

						   </html>';

			   $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			   $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			   $cabeceras .= 'From: <cursos@tutorialesatualcance.com>' . "\r\n";

			   $envio = mail($para, $título, $mensaje, $cabeceras);

			   if($envio){

			   		echo'<script>

					   		Swal.fire({
								  title: "¡OK!",
								  text: "¡El mensaje ha sido enviado correctamente!",
								  icon: "success",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
							}).then((result) => {
									if (result.value) {	   
									    window.location = "mensajes";
									} 
							});


					</script>';

			   }

			}

		}

	}

	#MENSAJES SIN REVISAR
	#------------------------------------------------------------
	public static function ctrMensajesSinRevisar(){

		$respuesta = ModeloMensajes::mdlMensajesSinRevisar("tb_mensajes");

		$sumaRevision = 0;

		foreach ($respuesta as $row => $item) {

			if($item["i_revision"] == 0){

				++$sumaRevision;	
			}

		}

		
		if($sumaRevision != 0) {

			echo '<span class="badge badge-pill badge-danger ml-0 mr-2">'.$sumaRevision.'</span>';
		}

	}

	#MENSAJES REVISADOS
	#------------------------------------------------------------
	public static function mensajesRevisadosController($datos){

		$datosController = $datos;

		$respuesta = ModeloMensajes::mdlMensajesRevisados($datosController, "tb_mensajes");

		echo $respuesta;

	}


}
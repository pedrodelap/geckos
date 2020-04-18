<?php

class ControladorNosotros{

	#MOSTRAR ARTICULOS
	#-----------------------------------------------------------

	public static function ctrMostrarNosotros($item, $valor){

		$tabla = "tb_nosotros";

		if($item == null ){

			$respuesta = ModeloNosotros::mdlMostrarNosotros($tabla, $item, $valor);		

			foreach($respuesta as $row => $item) {

			echo '<input type="hidden" value="'.$item["id_nosotro"].'" name="idNosotros">
					<div class="position-relative form-group">
						<label for="textoNosotros" class=""></label>
						<textarea name="textoNosotros" readonly rows="5" id="textoNosotros" class="form-control" placeholder="Ingrese una breve descripción del Negocio">'.$item["v_contenido"].'</textarea>
					</div>
					<br />
					<div class="position-relative form-group center">
						<img src="vistas/assets/images/nosotros/'.$item["v_ruta"].'" alt="Geckos Travel Group Company" width="30%" class="rounded mx-auto d-block">
					</div>
					<div style="text-align: right;">						
						<button class="btn mr-2 mb-2 btn-primary btnEditarNosotros" idNosotros="'.$item["id_nosotro"].'">Actualizar descripción </button>
					</div>';

			}
		}

		else {

			$respuesta = ModeloNosotros::mdlMostrarNosotros($tabla, $item, $valor);
	
			return $respuesta;

		}

	}

	#ACTUALIZAR ARTICULO
	#-----------------------------------------------------------

	public static function ctrEditarNosotros(){

		if(isset($_POST["nosotrosEditar"])){

			$idNosotros = $_POST['idNosotros'];
			$textoNosotros = $_POST['textoNosotros'];
			$rutaImagenNostros = $_POST['rutaImagenNostros'];
			
			$imgFile = $_FILES['imagenNosotros']['name'];
			$tmp_dir = $_FILES['imagenNosotros']['tmp_name'];
			$imgSize = $_FILES['imagenNosotros']['size'];


			if($imgFile)
			{
				$upload_dir = 'vistas/assets/images/nosotros/'; 

				$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
				
				$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
				
				$userpic = rand(1000,1000000).".".$imgExt;

				if(in_array($imgExt, $valid_extensions))
				{			
					if($imgSize < 5000000)
					{
						//unlink($rutaImagenNostros);

						move_uploaded_file($tmp_dir,$upload_dir.$userpic);
					}
					else
					{
						$errMSG = "Sorry, your file is too large it should be less then 5MB";
					}
				}
				else
				{
					$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
				}	
			}
			else
			{
				// if no image selected the old image remain as it is.
				$userpic = $rutaImagenNostros; // old image from database
			}

			if(!isset($errMSG))
			{
				 
				$datosController = array("id"=>$idNosotros,
										 "ruta"=>$userpic,
								       	 "contenido"=>$textoNosotros);
								
				$respuesta = ModeloNosotros::mdlEditarNosotros($datosController, "tb_nosotros");

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
									window.location = "nosotros";
								} 
						});
	
	
					</script>';
	
				}
	
				else{
	
					echo'<script>

					Swal.fire({
						  icon: "error",
						  title: "'.$errMSG.'",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					}).then((result) => {
							if (result.value) {

								window.location = "nosotros";

							}
					});

			  	</script>';
				}

			}

		}

	}

}
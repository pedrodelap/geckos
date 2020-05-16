<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
    =============================================*/
    
    public static function ctrIngresoUsuario(){

        if(isset($_POST["usuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])){

			   	$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = " tb_usuarios";
				$item = "v_usuario";
				$valor = $_POST["usuario"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["v_usuario"] == $_POST["usuario"] && $respuesta["v_password"] == $encriptar){

					if($respuesta["i_estado"] == 1){

						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["id"] = $respuesta["id_usuario"];
						$_SESSION["nombre"] = $respuesta["v_nombre"];
						$_SESSION["usuario"] = $respuesta["v_usuario"];
						$_SESSION["foto"] = $respuesta["v_foto"];
						$_SESSION["perfil"] = $respuesta["v_perfil"];
						$_SESSION["email"] = $respuesta["v_email"];

						/*=============================================
						REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN
						=============================================*/

						date_default_timezone_set('America/Lima');

						$fecha = date('Y-m-d');
						$hora = date('H:i:s');

						$fechaActual = $fecha.' '.$hora;

						$item1 = "d_ultimo_login";
						$valor1 = $fechaActual;

						$item2 = "id_usuario";
						$valor2 = $respuesta["id_usuario"];

						$ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

						if($ultimoLogin == "ok"){

                            echo '<script>

                                    window.location = "inicio";

                                </script>';	

						}				
						
					}else{

						echo '<br>
							<div class="alert alert-danger">El usuario aún no está activado</div>';

					}		

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

			}	

		}

    }
}
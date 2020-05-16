<?php

class Articulos{

	public static function seleccionarArticulosController(){

        $respuesta = ArticulosModels::mostrarArticulosModel();
        
        $medio = "";
        $i = 1;
        $flag = false;
        $cantidad = 0;

        $medioInicio = '<div><div class="testimonial"><div class="row">';
        $medioFin    = '</div></div></div>';

		foreach ($respuesta as $row => $item){

            $cantidad ++;

        }        

		foreach ($respuesta as $row => $item){

            $src = 'backend/'.$item['v_ruta'];

            $date = $item['v_fecha_registro'];

            $fechaConvertida = Articulos::fechaCastellano($date);
            
            $medio .= '<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                            <div class="h-entry">
                                <a href="#" data-toggle="modal" data-target="#Articulo'.$item['id_articulo'].'">
                                    <img src="'.$src.'" alt="'.$item['v_titulo'].'" class="img-fluid">
                                </a>
                                <h2 class="font-size-regular"><a href="#" data-toggle="modal" data-target="#Articulo'.$item['id_articulo'].'">'.$item['v_titulo'].'</a></h2>
                                <div class="meta mb-4"><span class="mx-2"></span> '.$fechaConvertida.'<span class="mx-2"></span> <a href="#"></a></div>
                                <a href="#" data-toggle="modal" data-target="#Articulo'.$item['id_articulo'].'">Continuar Leyendo...</a>

                            </div>
                        </div>
                        
                        
                        <!-- Modal -->
                        <div class="modal fade modalArticuloFront" id="Articulo'.$item['id_articulo'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title text-center" id="exampleModalLongTitle">'.$item['v_titulo'].'</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" style="border:1px solid #eee">

                                <img src="'.$src.'" width="100%" style="margin-bottom:20px">
                                <p class="parrafoContenido text-justify"><h6>'.$item['v_contenido'].'</h6></p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>';

            if($i % 3 == 0){

                if($i != $cantidad){

                $medio .= '</div></div></div><div><div class="testimonial"><div class="row">';

                }

            }              

            $i ++;

        }

        echo $medioInicio.$medio.$medioFin;

    }

    public static function fechaCastellano ($fecha) {
        $fecha = substr($fecha, 0, 10);
        $numeroDia = date('d', strtotime($fecha));
        $dia = date('l', strtotime($fecha));
        $mes = date('F', strtotime($fecha));
        $anio = date('Y', strtotime($fecha));
        $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $nombredia = str_replace($dias_EN, $dias_ES, $dia);
        $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $nombreMes = str_replace($meses_EN, $meses_ES, $mes);

        // return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;

        return $numeroDia." de ".$nombreMes.", ".$anio;
    }
          
}
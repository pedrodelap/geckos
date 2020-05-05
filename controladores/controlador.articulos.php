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
                                <a href="single.html">
                                    <img src="'.$src.'" alt="'.$item['v_titulo'].'" class="img-fluid">
                                </a>
                                <h2 class="font-size-regular"><a href="#">'.$item['v_titulo'].'</a></h2>
                                <div class="meta mb-4"><span class="mx-2"></span> '.$fechaConvertida.'<span class="mx-2"></span> <a href="#"></a></div>
                                <p>'.$item['v_introduccion'].'</p>
                                <p><a href="#">Continuar Leyendo...</a></p>
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
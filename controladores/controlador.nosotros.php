<?php

class Nosotros{

#MOSTRAR ARTICULOS
#-----------------------------------------------------------

    public static function mostrarNosotrosController(){

        $respuesta = NosotrosModels::mostrarNosotrosModel("tb_nosotros");

        return $respuesta;        

    }
}
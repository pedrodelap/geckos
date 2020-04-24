<?php

require_once "controladores/controlador.plantilla.php";
require_once "controladores/controlador.slide.php";
require_once "controladores/controlador.nostros.php";


require_once "modelos/modelo.slide.php";
require_once "modelos/modelo.nosotros.php";

$template = new ControladorPlantilla();
$template -> ctrPlantilla();
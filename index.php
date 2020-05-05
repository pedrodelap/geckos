<?php

require_once "controladores/controlador.plantilla.php";
require_once "controladores/controlador.ruta.php";

require_once "controladores/controlador.slide.php";
require_once "controladores/controlador.nosotros.php";
require_once "controladores/controlador.imagenes.php";
require_once "controladores/controlador.articulos.php";
require_once "controladores/controlador.mensajes.php";

require_once "modelos/modelo.slide.php";
require_once "modelos/modelo.nosotros.php";
require_once "modelos/modelo.imagenes.php";
require_once "modelos/modelo.articulos.php";
require_once "modelos/modelo.mensajes.php";

$template = new Plantilla();
$template -> PlantillaController();
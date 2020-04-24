<?php
require_once "controladores/controlador.plantilla.php";
require_once "controladores/controlador.usuarios.php";
require_once "controladores/controlador.slide.php";
require_once "controladores/controlador.articulos.php";
require_once "controladores/controlador.galeria.php";
require_once "controladores/controlador.suscriptores.php";
require_once "controladores/controlador.mensajes.php";
require_once "controladores/controlador.nosotros.php";
require_once "controladores/controlador.categorias.php";
require_once "controladores/controlador.imagenes.php";

require_once "modelos/conexion.php";
require_once "modelos/modelo.usuarios.php";
require_once "modelos/modelo.slide.php";
require_once "modelos/modelo.articulos.php";
require_once "modelos/modelo.galeria.php";
require_once "modelos/modelo.suscriptores.php";
require_once "modelos/modelo.mensajes.php";
require_once "modelos/modelo.nosotros.php";
require_once "modelos/modelo.categorias.php";
require_once "modelos/modelo.imagenes.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
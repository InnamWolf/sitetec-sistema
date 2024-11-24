<?php
//* ===============================================
//* Control de errores
//* ===============================================
ini_set('display_errors', 1); 
ini_set("log_errors", 1); 
ini_set("error_log",  "C:/xampp/htdocs/sitetec-sistema");

//* ===============================================
//* Mandamos a llamar el controlador de para el template
//* ===============================================
require_once "controller/plantilla.controlador.php";

//* ===============================================
//* Mandamos a llamar el controlador del template
//* ===============================================
$template = new ControladorPlantilla();
$template -> ctrPlantilla();

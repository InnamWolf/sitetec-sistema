<?php
    //* ===============================================
    //* Control de errores
    //* ===============================================
    ini_set('display_errors', 1); 
    ini_set("log_errors", 1); 
    ini_set("error_log",  "C:\xampp\htdocs\sitetec-sistema");

    //* ===============================================
    //* Mandamos a llamar los controladores 
    //* ===============================================
    require_once "controller/plantilla.controlador.php";
    require_once "controller/usuarios.controlador.php";


    //* ===============================================
    //* Mandamos a llamar los modelos 
    //* ===============================================
    require_once "model/usuarios.modelo.php";


    //* ===============================================
    //* Mandamos a llamar el controlador del template
    //* ===============================================
    $template = new ControladorPlantilla();
    $template -> ctrPlantilla();

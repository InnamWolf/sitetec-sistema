<?php
//* ===============================================
//* Se crea clase para controlador para iniciar el index
//* ===============================================
class ControladorPlantilla{

    static public function path(){
        return "http://sitetec-sistema.com/";
    }

    public function ctrPlantilla(){
        include "view/plantilla.php";
    }

}
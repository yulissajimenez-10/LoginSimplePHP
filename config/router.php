<?php

include 'config/confi.php';

function cargarControlador($controlador){
    
    $nombreControlador = ucwords($controlador);
    $archivoControlador  = 'controller/'.$nombreControlador.'.php';
    if(!is_file($archivoControlador)){
        $archivoControlador = 'controller/'.CONTROLADOR_PRINCIPAL.'.php';
    }
    
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
    
}
function cargarAccion($controller , $accion){
    if(isset($accion) && method_exists($controller, $accion)){
        $controller->$accion();
    }else{
      $controller->ACCION_PRINCIPAL();
    }
    
}
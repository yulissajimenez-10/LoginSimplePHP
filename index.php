<?php
 require_once'config/Conectar.php';
 require_once 'config/router.php';
 require_once 'controller/UsuarioController.php';
 require_once 'config/confi.php';


if(isset($_GET['c'])){
    $controller = cargarControlador($_GET['c']);    

    if(isset($_GET['a'])){
         cargarAccion($controller,$_GET['a']);
    }else{
         cargarAccion($controller, ACCION_PRINCIPAL);        
    }
        
        
}else{
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        $accionTmp = ACCION_PRINCIPAL;
        $controlador->$accionTmp();
}
    
    
    
    


/*
$control = new UsuarioController();
$control->login();
*/

 
?>


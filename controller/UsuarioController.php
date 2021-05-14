<?php
require_once 'dao/DaoUsuario.php';
require_once 'model/Usuario.php';
require_once 'model/LoginDto.php';
 
class UsuarioController {  
   
   public function  login(){       
       require_once "vista/loginUsuario.php";
   }
   
   public function  nuevo(){       
       require_once "vista/nuevoUsuario.php";
   }
   
    public function  guardar(){  
        $usu = new Usuario();
        $usu->setName($_POST['nombre']);
        $usu->setEmail($_POST['correo']);
        $usu->setPassword($_POST['contraseña']);      
        
        $dao = new DaoUsuario();
        $dao->insertar($usu);
        echo 'Registro exitoso,<br>';
        require_once "vista/loginUsuario.php";
   }
   
    public function  welcome(){ 
      $usuario = new Usuario();        
      $login = new  LoginDto();
      $login->setCorreo($_POST['correo']);
      $login->setContraseña($_POST['contraseña']);
      
        $dao = new DaoUsuario();       
        $usuario = $dao->Login($login);
        
        if($usuario != null){
            // $data["nombre"] = $usuario->getName();        
            require_once "vista/welcomeUsuario.php";
        }
           echo 'El email o password es incorrecto, <br>';
           require_once "vista/loginUsuario.php"; 
           
   }
   
   
}
?>
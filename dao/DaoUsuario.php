<?php
  require_once 'model/Usuario.php';
  require_once 'model/LoginDto.php';
 require_once 'config/Conectar.php';
 
Class DaoUsuario{   
    private $db;       
   
    function __construct() {  
        $this->db = Conectar::conexion();
    }   
    
    public function  insertar(Usuario $usuario){       
     $sql = "insert into usuario values(null,'".$usuario->getName()."','".$usuario->getEmail()."','".$usuario->getPassword()."')";
     $this->db->query($sql);        
       
    } 
    
    public function  Login(LoginDto $login){ 
       $usuario = new Usuario();
       $sql = "select * from usuario where correo ='".$login->getCorreo()."' and contraseña ='".$login->getContraseña()."'";
       $respuesta = $this->db->query($sql);
       return  $usuario =  $respuesta ;
           
    }
   
 }  
    
?>

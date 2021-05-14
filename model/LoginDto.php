<?php

class LoginDto {
   private $correo;
   private $contraseña;
   
   
   
   function __construct() {
       
   }

   function getCorreo() {
       return $this->correo;
   }

   function getContraseña() {
       return $this->contraseña;
   }

   function setCorreo($correo) {
       $this->correo = $correo;
   }

   function setContraseña($contraseña) {
       $this->contraseña = $contraseña;
   }


}

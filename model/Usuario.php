<?php
class Usuario {
   private  $id;
   private  $name;
   private  $email;
   private  $password;
   
   function __construct() {       
   }
   
   function getId() {
       return $this->id;
   }

   function getName() {
       return $this->name;
   }

   function getEmail() {
       return $this->email;
   }

   function getPassword() {
       return $this->password;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setName($name) {
       $this->name = $name;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setPassword($password) {
       $this->password = $password;
   }
  
}
?>

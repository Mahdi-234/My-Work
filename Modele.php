<?php

 class User
 {

private $Login ;
private $Password;
 
public function __construct($Login,$Password) {
    $this->Login = $Login;
   $this->Password = $Password; }

   public function getLogin($Login) {
    return $this->Login;}
     public function getPassword($Password) {
    return $this->Password;}

    public function setLogin($Login)
     { $this->Login= $Login;}
    public function
    setPrenom($Password) 
    {$this->Password;}


    public function __get($attr) { if (!isset($this->$attr));
        else return ($this->$attr);}
         public function __set($attr,$value) {$this->$attr = $value; }
         
         
         public function __toString() {
            $s = "Votre Login :  $this->Login <br> Password: $this->Password <br>" ;
            return $s;
            }

            public function Connect() {
                if ($this->getLogin =="admin" && $this->getPassword)=="admin";
                return true;
                else
                return false ; 
            } 


        }

     

?>
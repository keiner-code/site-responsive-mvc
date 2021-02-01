<?php
class Users{
     private $img_users;
     private $Name_users;
     private $Identification_Card;
     private $Type_Users;

  /*public function __construct($img_user,$Name,$Identification,$Type_user)
  {
      $this->img_users = $img_user;
      $this->Name_users = $Name;
      $this->Identification_Card = $Identification;
      $this->Type_Users = $Type_user;
  }*/
  
  public function __construct()
  {
      
  }

  public function getImg_Users(){
      return $this->img_users;
  }
  public function setImg_Users($img_users){
     $this->img_users = $img_users;
}
  public function getName_Users(){
      return $this->Name_users;
  }
  public function setName_Users($Name_users){
     $this->Name_users = $Name_users;
}
  public function getIdentification_Card(){
      return $this->Identification_Card;
  }
  public function setIdentification_Card($Identification_Card){
    $this->Identification_Card = $Identification_Card;
}
  public function getType_Users(){
      return $this->Type_Users;
  }
  public function setType_Users($Type_users){
    $this->Type_Users = $Type_users;
}
}
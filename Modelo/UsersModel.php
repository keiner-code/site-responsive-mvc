<?php
class UsersModel{
     private $db;
    public function __construct()
    {
        require_once("Conexion.php");
        $this->db = Conectar::conexion();
    }

    public function CargarUsers($dato_users){
        $consulta = $this->db->query("SELECT * FROM users WHERE identificationcard = $dato_users");

        if($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
           require_once("Users.php");
           $usu = new Users();
           $usu->setImg_Users($fila["imgusers"]);
           $usu->setName_Users($fila["name"]);
           $usu->setIdentification_Card($fila["identificationcard"]);
           $usu->setType_Users($fila["typeusers"]);
       }else{
           echo "No entro";
       }
       $this->usua[] = $usu;
       return $this->usua;
    }
}
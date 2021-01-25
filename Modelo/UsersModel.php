<?php
class UsersModel{
     private $db;
    public function __construct()
    {
        require_once("Conexion.php");
        $this->db = Conectar::conexion();
    }

    public function CargarUsers($dato_users){
        $consulta = $this->db->query("SELECT * FROM users WHERE identification-card = $dato_users");

        if($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
           require_once("Users.php");
           $usu = new Users();
           $usu->setImg_Users($fila["img-users"]);
           $usu->setName_Users($fila["name"]);
           $usu->setIdentification_Card($fila["identification-card"]);
           $usu->setType_Users($fila["type-users"]);
       }else{
           echo "No entro";
       }
       $this->usua[] = $usu;
       return $this->usua;
    }
}
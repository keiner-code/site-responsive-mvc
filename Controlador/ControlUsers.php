<?php
class ControlUsers{

    public function __construct()
    {
        
    }

    public function ShowUsers($date){
        require_once("Modelo/UsersModel.php");
        $UsuModel = new UsersModel();
        $result = $UsuModel->CargarUsers($date);
        //var_dump($result);
        $arr = array();
        /*foreach($result as $objeto){
            $arr[] = array($objeto->get)
        }*/
        return $result;
    }
}
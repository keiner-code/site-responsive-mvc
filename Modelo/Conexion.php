<?php
class Conectar
{
    public static function conexion(){
        try{
            $conexion = new PDO('mysql:host=localhost; dbname=root;','siteresponsive','33062411');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");

        }catch(Exception $e){
          die("Error".$e->getMessage());
          echo "Linea Del Error".$e->getLine();
        }
        return $conexion;
    }
}
<?php

class Conectar{

    public static function conexion(){
        try{
            $conexion = new PDO('mysql:host=127.0.0.1; dbname=fct_proyecto_v3; charset=UTF8', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
            echo 'Line: ' . $e->getLine();
        }
        return $conexion;
    }

}//End Class
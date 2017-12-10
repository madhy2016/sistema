<?php

//Extrae la informacion de la tabla de productos
class ProductosModel{
    
    private $db; //Conexion
    private $productos; //Productos

    public function __construct(){
        //Especificamos la conexion
        require_once "modelo/Conectar.php";        
        $this->db = Conectar::conexion();

        //Los productos son un array
        $this->productos = array();
    }

    //Devolver los articulos de la tabla produtos
    public function getProductos(){
        //
        $sql ="SELECT section_name_es as 'name', code as 'code' FROM product
        left join section on section.section_id = product.section_id";

        $consulta = $this->db->query($sql);
        
        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            $this->productos[] = $filas;
        }
        return $this->productos;        
    }  


}//End Class
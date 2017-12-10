<?php

    require_once "modelo/ProductosModel.php";
    
    //productosModel a getProductos
    $producto = new ProductosModel();

    $matrizProductos = $producto->getProductos();


    require_once "vista/ProductosView.php";
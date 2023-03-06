<?php

if (!empty($_POST["guardar_productos"])){
    if (empty($_POST["nombre"]) and empty($_POST["imagen"]) and empty($_POST["precio"]) and empty($_POST["descipcion"])){
        echo '<section class="alert alert-warning">Rellena todos los campos</section>';
    }else{
        $nombre= $_POST['nombre'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        $sql = $conexion->query("INSERT INTO productos(nombre, imagen, precio, descripcion) VALUES ('$nombre','$imagen', '$precio' ,'$descripcion')");

        if ($sql==1){
            echo '<section class="alert alert-success">Datos Guardados</section>';
            header ("Location:/web/vista/productos/productos.php");
        }else{
            echo '<section class="alert alert-danger">Algo salio mal</section>';
        }
    }
}
?>
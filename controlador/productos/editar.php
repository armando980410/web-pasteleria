<?php

if (!empty($_POST["editar_producto"])){
    if (empty($_POST["nombre"]) and empty($_POST["imagen"]) and empty($_POST["precio"]) and empty($_POST["descipcion"])){
        echo '<section class="alert alert-warning">Rellena todos los campos</section>';
    }else{
        $id = $_POST['id'];
        $nombre= $_POST['nombre'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        $sql = $conexion->query("UPDATE productos SET nombre='$nombre', imagen='$imagen', precio='$precio', descripcion='$descripcion' WHERE id=$id");

        if ($sql==1){
            header ("Location:/web/vista/productos/productos.php");
        }else{
            echo '<section class="alert alert-danger">Algo salio mal</section>';
        }
    }
}
?>
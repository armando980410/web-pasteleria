<?php

if (!empty($_POST["guardar_imagen"])){
    if (empty($_POST["imagen"]) and empty($_POST["descripcion"])){
        echo '<section class="alert alert-warning">Rellena todos los campos</section>';
    }else{
        $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];

        $sql = $conexion->query("INSERT INTO catalogo(imagen, descripcion) VALUES ('$imagen', '$descripcion')");

        if ($sql==1){
            echo '<section class="alert alert-success">Imagen Guardada</section>';
            header ("Location:/web/vista/catalogo/imagenes.php");
        }else{
            echo '<section class="alert alert-danger">Algo salio mal</section>';
        }
    }
}
?>
<?php

if (!empty($_POST["editar_imagen"])){
    if (empty($_POST["imagen"]) and empty($_POST["descripcion"])){
        echo '<section class="alert alert-warning">Rellena todos los campos</section>';
    }else{
        $id = $_POST['id'];
        $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];

        $sql = $conexion->query("UPDATE catalogo SET imagen='$imagen', descripcion='$descripcion' WHERE id=$id");

        if ($sql==1){
            header ("Location:/web/vista/catalogo/imagenes.php");
        }else{
            echo '<section class="alert alert-danger">Algo salio mal</section>';
        }
    }
}
?>
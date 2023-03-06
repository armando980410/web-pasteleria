<?php

if (!empty($_POST["guardar_datos"])){
    if (empty($_POST["nombre"]) and empty($_POST["cel"])){
        echo '<section class="alert alert-warning">Rellena todos los campos</section>';
    }else{
        $nombre= $_POST['nombre'];
        $logo = $_POST['logo'];
        $cel = $_POST['cel'];
        $fb = $_POST['fb'];
        $ubicacion = $_POST['ubicacion'];
        $formulario = $_POST['formulario'];
        $slogan = $_POST['slogan'];
        $descripcion = $_POST['descripcion'];

        $sql = $conexion->query("INSERT INTO datos(nombre, logo, cel, fb, ubicacion, formulario, slogan, descripcion) VALUES ('$nombre','$logo', '$cel' ,'$fb', '$ubicacion', '$formulario', '$slogan', '$descripcion')");

        if ($sql==1){
            echo '<section class="alert alert-success">Datos Guardados</section>';
            header ("Location:/web/vista/datos/datos.php");
        }else{
            echo '<section class="alert alert-danger">Algo salio mal</section>';
        }
    }
}
?>
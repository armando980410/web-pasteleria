<?php

if (!empty($_POST["editar_datos"])){
    if (empty($_POST["nombre"]) and empty($_POST["cel"])){
        echo '<section class="alert alert-warning">Rellena todos los campos</section>';
    }else{
        $id = $_POST['id'];
        $nombre= $_POST['nombre'];
        $logo = $_POST['logo'];
        $cel = $_POST['cel'];
        $fb = $_POST['fb'];
        $ubicacion = $_POST['ubicacion'];
        $formulario = $_POST['formulario'];
        $slogan = $_POST['slogan'];
        $descripcion = $_POST['descripcion'];

        $sql = $conexion->query("UPDATE datos SET nombre='$nombre', logo='$logo', cel=
        '$cel', fb='$fb', ubicacion='$ubicacion',formulario='$formulario', slogan='$slogan', descripcion='$descripcion' WHERE id=$id");

        if ($sql==1){
            header ("Location:/web/vista/datos/datos.php");
        }else{
            echo '<section class="alert alert-danger">Algo salio mal</section>';
        }
    }
}
?>
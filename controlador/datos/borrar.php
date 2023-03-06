<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM datos WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado){
        echo '<section class="alert alert-danger">Datos eliminados</section>';
        header ("Location:/web/vista/datos/datos.php");
    }
}
?>
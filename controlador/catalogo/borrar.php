<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM catalogo WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado){
        echo '<section class="alert alert-danger">Producto eliminado</section>';
        header ("Location:/web/vista/catalogo/imagenes.php");
    }
}
?>
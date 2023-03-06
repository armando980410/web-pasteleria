<?php
session_start();
if (!empty($_POST['btnlogin'])){
    $usuario = $_POST['nombre'];
    $clave = $_POST['contraseña'];

    $sql= $conexion->query("SELECT * FROM usuario WHERE nombre='$usuario' AND clave='$clave'");

    if ($datos=$sql->fetch_object()){
        $_SESSION["id"]=$datos->id;
        $_SESSION["nombre"]=$datos->nombre;
        $_SESSION["correo"]=$datos->correo;
        header('location: /web/vista/admin.php');
    }else{
        echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
    }
}

?>
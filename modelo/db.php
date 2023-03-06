<?php
$db_host= $_ENV['db_host'];
$db_user= $_ENV['db_user'];
$db_pasword= $_ENV['db_pasword'];
$db_dbname= $_ENV['db_dbname'];
$db_port= $_ENV['db_port'];

$conexion = new mysqli(
    $db_host,
    $db_user,
    $db_pasword,
    $db_dbname,
    $db_port
);
$conexion->set_charset("utf8");

#if (isset($conexion)){
#    echo 'La base de datos esta conectada';
#}
?>

<?php
$host= $_ENV['db_host'];
$user= $_ENV['db_user'];
$pasword= $_ENV['db_pasword'];
$dbname= $_ENV['db_dbname'];
$port= $_ENV['db_host'];

$conexion = new mysqli(
    $host,
    $user,
    $pasword,
    $dbname,
    $port
);
$conexion->set_charset("utf8");

#if (isset($conexion)){
#    echo 'La base de datos esta conectada';
#}
?>
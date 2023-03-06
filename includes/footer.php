<?php 
$sql = $conexion->query("SELECT * FROM datos"); 
?>
<?php while($datos = $sql->fetch_object()) { ?>
    <footer class="footer p-5" style="background-color: #fdcae1;">
<h6 class="text-center">© Todos los derechos reservados para <?= $datos->nombre ?></h6>
</footer>
<?php } ?>
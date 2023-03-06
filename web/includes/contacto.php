<?php 
$sql = $conexion->query("SELECT * FROM datos"); 
?>
<?php while($datos = $sql->fetch_object()) { ?>
<section class="col-md p-3" id="contacto">
    <section class="card">
        <section class="card-title p-3" style="background-color: #fdcae1;">
            <h1 class="text-center">Contacto</h1>
        </section>
        <section class="card-body">
            <h2 class="text-center"><?= $datos->slogan ?></h2>
        </section>
        <section class="card-footer text-center" style="background-color: #fdcae1;">
            <p>Links:</p>
            <a class="btn btn-lg btn-danger" href="<?= $datos->ubicacion ?>">
                <li class="fa fa-map-marker"></li>
            </a>
            <a class="btn btn-lg btn-primary" href="<?= $datos->fb ?>">
                <li class="fa fa-facebook"></li>
            </a>
            <a class="btn btn-lg btn-success" href="https://api.whatsapp.com/send/?phone=<?= $datos->cel ?>&text=Hola%20vengo%20de%20tu%20pagina%20web,%20me%20gustaria%20pedir%20informes">
                <li class="fa fa-whatsapp"></li>
            </a>
        </section>
    </section>
    <br>
</section>
<?php } ?>
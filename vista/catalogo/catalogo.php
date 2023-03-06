<?php
require_once("../../modelo/db.php");
$sql = $conexion->query("SELECT * FROM catalogo");  
?>

<html>
    <?php require_once("../../includes/header.php"); ?>
    <body>
    <?php require_once("../../includes/navbar.php"); ?>
        <section class="carrusel col-xxl m-auto">
            <h1 class="text-center">Catalogo de Personalizados</h1>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <section class="container-xl">
                    <section class="row">
                    <?php while($datos = $sql->fetch_object()) { ?>
                        <section class="col-md-4">
                            <section class="card p-0">
                                <section class="card-body">
                                    <a href=""><img style="width:100%;" src="<?= $datos->imagen ?>" alt=""></a>
                                </section>
                            </section>
                        </section>
                    <?php } ?>
                    </section>
                </section>
            </div>
        </section>
        <?php require_once("../../includes/footer.php") ?>
    </body>
</html>